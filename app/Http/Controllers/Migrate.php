<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Migrate extends Controller
{
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
                'explain' => '{$exp}', <br>
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
