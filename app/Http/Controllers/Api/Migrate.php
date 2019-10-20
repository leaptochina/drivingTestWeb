<?php

namespace App\Http\Controllers\Api;


use Google\Cloud\Translate\TranslateClient;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//数据库迁移 从老数据库迁出数据
class Migrate extends Controller
{
    public function translate(){
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . config('app.APP_ENV_TRANSLATE'));
       
        $translate = new TranslateClient();


        $explains = \App\Explain::all();

        foreach ($explains as $explain) {
            if ($explain->explain_en == null){
                $result = $translate->translate($explain->explain_zh, [
                    'target' => 'en',
                ]);
                $explain->explain_en = $result['text'];
                $explain->save();

                //print("Source language: $result[text]\n");
                //return;
            }else{

            }
            $explain->explain_en = str_replace("&#39;","`", $explain->explain_en);

            echo "DB::table('explains')->insert([ <br>
                'id' => '{$explain->id}', <br>
                'user_id' => '{$explain->user_id}', <br>
                'question_list_id' => '{$explain->question_list_id}', <br>
                'explain_zh' => '{$explain->explain_zh}', <br>
                'explain_en' => '{$explain->explain_en}', <br>
                'like' => '{$explain->like}',<br>
            ]);<br><br>"; 
            
        }

       
        


    }

    public function show()
    {
        $topics = \App\Topic::all();

        foreach ($topics as $topic) {

            
        //Explain ------------------------------------------------
        // DB::table('explains')->insert([
        //     'id' => '1',
        //     'user_id' => '1',
        //     'question_list_id' => '1',
        //     'explain' => '1',
        //     'like' => '1',
        // ]);


        
            $exp = str_replace("讲解：", "", $topic->explainChinese);

            echo "DB::table('explains')->insert([ <br>
                'id' => '{$topic->id}', <br>
                'user_id' => '1', <br>
                'question_list_id' => '{$topic->id}', <br>
                'explain_zh' => '{$exp}', <br>
                'like' => '1',<br>
            ]);<br><br>"; 





            //QuestionList ---------------------------------------------------------------------

            // DB::table('question_lists')->insert([
            //     'id' => '{$topic->id}',
            //     'accuracy_total' => '1',
            //     'accuracy_err' => '0',
            //     'accuracy_err_rate' => '0',
    
            // ]);

            // $rate = ($topic->errNumber / $topic->allNumber) * 100;
            // echo "DB::table('question_lists')->insert([<br>
            //     'id' => '{$topic->id}', <br>
            //     'accuracy_total' => '{$topic->allNumber}', <br>
            //     'accuracy_err' => '{$topic->errNumber}', <br>
            //     'accuracy_err_rate' => '{$rate}', <br>
            // ]);<br><br>"; 

    


            //Question ---------------------------------------------------------------------------------

            // DB::table('questions')->insert([
            //     'id' => '1',
            //     'language_id' => '1',
            //     'question_list_id' => '1',
            //     'topic' => 'Except in an emergency when must you not use the horn on your vehicle in a 50kph zone?',
            //     'a' => 'Between midnight and 8am',
            //     'b' => 'Between 4pm and 6pm',
            //     'c' => 'Any time you are in a school zone or near a hospita',
            //     'd' => 'Between 2pm and 4pm',
            //     'e' => 'Between 11pm and 7am',
            //     'ans' => 'E',
            //     'img' => '0.jpg',
            // ]);
    

            
           
        //     $id = $topic->id * 2;
        //     $id0 = $id - 1;
        //     $a = str_replace("A. ", "", $topic->A2);
        //     $b = str_replace("B. ", "", $topic->B2);
        //     $c = str_replace("C. ", "", $topic->C2);
        //     $d = str_replace("D. ", "", $topic->D2);
        //     $e = str_replace("E. ", "", $topic->E2);

        //     echo "DB::table('questions')->insert([<br>
        //         'id' => '{$id0}',<br>
        //         'language_id' => '1',<br>
        //         'question_list_id' => '{$topic->id}',<br>
        //         'topic' => '{$topic->topicEnglish}',<br>
        //         'a' => '{$a}',<br>
        //         'b' => '{$b}',<br>
        //         'c' => '{$c}',<br>
        //         'd' => '{$d}',<br>
        //         'e' => '{$e}',<br>
        //         'ans' => '{$topic->ans}',<br>
        //         'img' => '{$topic->img}',<br>
        //     ]);<br><br>"; 

        //     $a = str_replace("A. ", "", $topic->A1);
        //     $b = str_replace("B. ", "", $topic->B1);
        //     $c = str_replace("C. ", "", $topic->C1);
        //     $d = str_replace("D. ", "", $topic->D1);
        //     $e = str_replace("E. ", "", $topic->E1);

        //     echo "DB::table('questions')->insert([<br>
        //         'id' => '{$id}',<br>
        //         'language_id' => '2',<br>
        //         'question_list_id' => '{$topic->id}',<br>
        //         'topic' => '{$topic->topicChinese}',<br>
        //         'a' => '{$a}',<br>
        //         'b' => '{$b}',<br>
        //         'c' => '{$c}',<br>
        //         'd' => '{$d}',<br>
        //         'e' => '{$e}',<br>
        //         'ans' => '{$topic->ans}',<br>
        //         'img' => '{$topic->img}',<br>
        //     ]);<br><br>"; 


        }





    }
}
