<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Question extends Controller
{ 

    


    public function all()    {
        $configs =  \App\Config::all();
        $questionLists = \App\QuestionList::all();

        $questionLists -> load('questions', 'explains');
        


        $r = [
            'configs' => $configs,
            'questionLists' => $questionLists,
        ];

        return $r;
    }

    public function showNew($question_list_id, $user_identity, $verify)    {
        $serverVerify = md5($question_list_id . "pine" . $user_identity);
        
        if (strtolower($verify) != strtolower($serverVerify)){
            return "Error";
        }

        $questionList =  \App\QuestionList::find($question_list_id);
        if ($question_list_id > 506){
            if ($questionList -> is_vip_only == 1){
                $existedUser =  \App\User::where('user_identity', $user_identity) -> first();
        
                if ($existedUser == null){
                    return "User not Exist";
                }
                if ($existedUser -> enable_private_question == 0){
                    return "User not OK";
                }

            }
        }

        $questionList -> load([
            'questions', 
            'explains' => function ($query) {
                $query->orderBy('like', 'desc');
            }
        ]);

        foreach($questionList -> explains as $explain){
            $explain -> load('user');
        }

        return $questionList;
    }

    public function search(Request $request)    {
        $search_word = $request -> search_word;
        $user_identity = $request -> user_identity;
        $verify = $request -> verify;
        $language = $request -> language;

        $serverVerify = md5($search_word . "pine" . $user_identity);
        
        if (strtolower($verify) != strtolower($serverVerify)){
            return "Error";
        }
        
        $languageId = DB::table('languages') -> where ('flag', $language) -> first() -> id;

        $questions = DB::table('questions');
        $questions = $questions
            -> where('language_id', $languageId)
            -> where(function ($query) use ($search_word)  {
                $query -> where('topic', 'like', "%" . $search_word . "%")
                    -> orWhere('a', 'like', "%" . $search_word . "%")
                    -> orWhere('b', 'like', "%" . $search_word . "%")
                    -> orWhere('c', 'like', "%" . $search_word . "%")
                    -> orWhere('d', 'like', "%" . $search_word . "%")
                    -> orWhere('e', 'like', "%" . $search_word . "%");
            });
        

        $existedUser =  \App\User::where('user_identity', $user_identity) -> first();
        if (($existedUser == null) || ($existedUser -> enable_private_question == 0)){
            $ids = \App\QuestionList::where ('is_vip_only', 1) -> pluck('id') -> toArray();
            $questions = $questions -> whereNotIn('question_list_id', $ids);
        }


        $questions = $questions -> get();
        $r = [
            'questions' => $questions,
        ];                       

        return $r;


    }

    


    public function saveMyAnswer($question_list_id, $is_correct){

        $questionList =  \App\QuestionList::find($question_list_id);
        if ($questionList == null){
            return;
        }
        $questionList -> accuracy_total += 1;
        if (!$is_correct){
            $questionList -> accuracy_err += 1;
        }
        

        $questionList -> accuracy_err_rate = $questionList -> accuracy_err * 100 / $questionList -> accuracy_total;
        $questionList -> save();


        return $questionList;
    }












    //1.0.5（不含）以前弃用
    public function configNew($user_identity, $version_code, $language_code){
            
        $existedUser =  \App\User::where('user_identity', $user_identity) -> first();

        $allowErrorProne = 0;
        $allowPrivateQuestions = 0;
        if ($existedUser != null){
            $existedUser = $existedUser -> makeVisible('user_identity');
            $allowErrorProne = $existedUser -> enable_prone;
            $allowPrivateQuestions = $existedUser -> enable_private_question;
        }

        //顺序练习数组
        if ($allowPrivateQuestions){
            $orders = \App\QuestionList::get(['id']);
        }
        else{
            $orders = \App\QuestionList::where("is_vip_only", 0) -> get(['id']);
        }
        
        $ordersArray = array();
        foreach($orders as $order){
            array_push($ordersArray, $order -> id);
        }

        //常错题数组
        if ($allowPrivateQuestions){
            $mostError = \App\QuestionList::orderBy("accuracy_err_rate", 'desc');
        }
        else{
            $mostError = \App\QuestionList::where("is_vip_only", 0) -> orderBy("accuracy_err_rate", 'desc');
        }
        if ($allowErrorProne){
            $mostError = $mostError -> limit(50);
        }
        else{
            $mostError = $mostError -> limit(5);
        }
        $mostError = $mostError -> get(['id']);
        $mostErrorArray = array();
        foreach($mostError as $error){
            array_push($mostErrorArray, $error -> id);
        }
        
        //易错题描述
        
        if ($language_code == 'zh'){
            $proneDescription = [
                'prone_enable'  => false,
                'prone_description1' => '本功能精选50道大家在考试中经常答错的题目，其他题目都太简单了，并不需要看了，节约您的宝贵时间，只需15分钟，从容应对考试',
                'prone_description2' => '试用本功能，您能看到Top 5的易错题，尝试一下，看看你的正确率有多少',
                'prone_description3' => '超级低价，仅需$9.99', //ps 本功能不定期打折，欢迎关注！',
                'prone_description4' => "今日特价仅需 $2.99",
                'prone_buy_people' => "* 已经有 3 人想要购买此服务",
            ];
        }
        else{
            $proneDescription = [
                'prone_enable'  => false,
                'prone_description1' => 'This function contains 50 questions which others normally made mistake during the test, Save your precious time and pass the test by learn 15 minutes',
                'prone_description2' => 'Try it, you will get Top 5 Error-Prone questions, How easy are they :)',
                'prone_description3' => 'Super low price, only $9.99',
                'prone_description4' => "Today Offer: Only $2.99 (70% off)",
                'prone_buy_people' => "* There are 3 user want to purchase this services",
            ];
        }
        
        //系统通知
        if ($language_code == 'zh'){
            $systemNotice = "";
        }
        else{
            $systemNotice = "";
        }

        //最新版本
        if ($language_code == 'zh'){
            $lastestVersion = [
                'version_number' => 103,
                'whatsnew' => '您必须更新才能使用',
                'download_url' => '',
            ];
        }
        else{
            $lastestVersion = [
                'version_number' => 103,
                'whatsnew' => 'You must update app before use it!',
                'download_url' => '',
            ];
        }

    
    

        $r = [
            'orderExercise' => $ordersArray,
            'languageList' => \App\Language::all(),
            'mostError' => $mostErrorArray,
            'userInfo' => $existedUser,
            'proneDescription' => $proneDescription,
            'systemNotice' => $systemNotice,
            'lastestVersion' => $lastestVersion,
        ];
        return $r;
    }








}
