<?php

use Illuminate\Database\Seeder;

class QuestionList extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question_lists')->truncate();

        DB::table('question_lists')->insert([ 
            'id' => '1', 
            'accuracy_total' => '374', 
            'accuracy_err' => '57', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '15.240642' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '2', 
            'accuracy_total' => '381', 
            'accuracy_err' => '49', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '12.860892' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '3', 
            'accuracy_total' => '404', 
            'accuracy_err' => '104', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '25.742574' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '4', 
            'accuracy_total' => '296', 
            'accuracy_err' => '14', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '4.729730' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '5', 
            'accuracy_total' => '290', 
            'accuracy_err' => '15', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '5.172414' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '6', 
            'accuracy_total' => '388', 
            'accuracy_err' => '108', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '27.835052' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '7', 
            'accuracy_total' => '390', 
            'accuracy_err' => '102', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '26.153846' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '8', 
            'accuracy_total' => '367', 
            'accuracy_err' => '97', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '26.430518' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '9', 
            'accuracy_total' => '286', 
            'accuracy_err' => '35', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '12.237762' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '10', 
            'accuracy_total' => '304', 
            'accuracy_err' => '25', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '8.223684' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '11', 
            'accuracy_total' => '356', 
            'accuracy_err' => '70', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '19.662921' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '12', 
            'accuracy_total' => '292', 
            'accuracy_err' => '21', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '7.191781' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '13', 
            'accuracy_total' => '262', 
            'accuracy_err' => '9', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.435115' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '14', 
            'accuracy_total' => '372', 
            'accuracy_err' => '101', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '27.150538' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '15', 
            'accuracy_total' => '241', 
            'accuracy_err' => '3', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '1.244813' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '16', 
            'accuracy_total' => '269', 
            'accuracy_err' => '6', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.230483' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '17', 
            'accuracy_total' => '313', 
            'accuracy_err' => '22', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '7.028754' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '18', 
            'accuracy_total' => '265', 
            'accuracy_err' => '15', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '5.660377' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '19', 
            'accuracy_total' => '282', 
            'accuracy_err' => '20', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '7.092199' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '20', 
            'accuracy_total' => '254', 
            'accuracy_err' => '15', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '5.905512' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '21', 
            'accuracy_total' => '338', 
            'accuracy_err' => '70', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '20.710059' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '22', 
            'accuracy_total' => '269', 
            'accuracy_err' => '26', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '9.665428' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '23', 
            'accuracy_total' => '267', 
            'accuracy_err' => '31', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '11.610487' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '24', 
            'accuracy_total' => '260', 
            'accuracy_err' => '26', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '25', 
            'accuracy_total' => '242', 
            'accuracy_err' => '7', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.892562' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '26', 
            'accuracy_total' => '238', 
            'accuracy_err' => '27', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '11.344538' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '27', 
            'accuracy_total' => '247', 
            'accuracy_err' => '20', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '8.097166' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '28', 
            'accuracy_total' => '310', 
            'accuracy_err' => '50', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '16.129032' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '29', 
            'accuracy_total' => '249', 
            'accuracy_err' => '13', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '5.220884' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '30', 
            'accuracy_total' => '236', 
            'accuracy_err' => '6', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.542373' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '31', 
            'accuracy_total' => '353', 
            'accuracy_err' => '130', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '36.827195' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '32', 
            'accuracy_total' => '327', 
            'accuracy_err' => '83', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '25.382263' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '33', 
            'accuracy_total' => '245', 
            'accuracy_err' => '7', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.857143' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '34', 
            'accuracy_total' => '269', 
            'accuracy_err' => '32', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '11.895911' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '35', 
            'accuracy_total' => '230', 
            'accuracy_err' => '0', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '36', 
            'accuracy_total' => '279', 
            'accuracy_err' => '33', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '11.827957' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '37', 
            'accuracy_total' => '270', 
            'accuracy_err' => '7', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.592593' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '38', 
            'accuracy_total' => '317', 
            'accuracy_err' => '80', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '25.236593' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '39', 
            'accuracy_total' => '309', 
            'accuracy_err' => '99', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '32.038835' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '40', 
            'accuracy_total' => '264', 
            'accuracy_err' => '25', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '9.469697' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '41', 
            'accuracy_total' => '286', 
            'accuracy_err' => '49', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '17.132867' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '42', 
            'accuracy_total' => '242', 
            'accuracy_err' => '17', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '7.024793' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '43', 
            'accuracy_total' => '269', 
            'accuracy_err' => '18', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '6.691450' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '44', 
            'accuracy_total' => '250', 
            'accuracy_err' => '29', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '11.600000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '45', 
            'accuracy_total' => '225', 
            'accuracy_err' => '8', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.555556' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '46', 
            'accuracy_total' => '221', 
            'accuracy_err' => '5', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.262443' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '47', 
            'accuracy_total' => '301', 
            'accuracy_err' => '29', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '9.634551' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '48', 
            'accuracy_total' => '247', 
            'accuracy_err' => '31', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '12.550607' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '49', 
            'accuracy_total' => '236', 
            'accuracy_err' => '15', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '6.355932' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '50', 
            'accuracy_total' => '225', 
            'accuracy_err' => '4', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '1.777778' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '51', 
            'accuracy_total' => '225', 
            'accuracy_err' => '24', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '10.666667' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '52', 
            'accuracy_total' => '335', 
            'accuracy_err' => '101', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '30.149254' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '53', 
            'accuracy_total' => '303', 
            'accuracy_err' => '52', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '17.161716' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '54', 
            'accuracy_total' => '252', 
            'accuracy_err' => '16', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '6.349206' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '55', 
            'accuracy_total' => '249', 
            'accuracy_err' => '4', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '1.606426' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '56', 
            'accuracy_total' => '328', 
            'accuracy_err' => '109', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '33.231707' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '57', 
            'accuracy_total' => '240', 
            'accuracy_err' => '27', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '11.250000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '58', 
            'accuracy_total' => '328', 
            'accuracy_err' => '88', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '26.829268' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '59', 
            'accuracy_total' => '260', 
            'accuracy_err' => '39', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '15.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '60', 
            'accuracy_total' => '283', 
            'accuracy_err' => '64', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '22.614841' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '61', 
            'accuracy_total' => '258', 
            'accuracy_err' => '33', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '12.790698' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '62', 
            'accuracy_total' => '262', 
            'accuracy_err' => '24', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '9.160305' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '63', 
            'accuracy_total' => '244', 
            'accuracy_err' => '15', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '6.147541' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '64', 
            'accuracy_total' => '321', 
            'accuracy_err' => '81', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '25.233645' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '65', 
            'accuracy_total' => '225', 
            'accuracy_err' => '10', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '4.444444' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '66', 
            'accuracy_total' => '260', 
            'accuracy_err' => '29', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '11.153846' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '67', 
            'accuracy_total' => '270', 
            'accuracy_err' => '32', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '11.851852' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '68', 
            'accuracy_total' => '264', 
            'accuracy_err' => '27', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '10.227273' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '69', 
            'accuracy_total' => '240', 
            'accuracy_err' => '21', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '8.750000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '70', 
            'accuracy_total' => '316', 
            'accuracy_err' => '68', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '21.518987' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '71', 
            'accuracy_total' => '313', 
            'accuracy_err' => '69', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '22.044728' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '72', 
            'accuracy_total' => '281', 
            'accuracy_err' => '75', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '26.690391' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '73', 
            'accuracy_total' => '257', 
            'accuracy_err' => '29', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '11.284047' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '74', 
            'accuracy_total' => '342', 
            'accuracy_err' => '117', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '34.210526' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '75', 
            'accuracy_total' => '270', 
            'accuracy_err' => '28', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '10.370370' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '76', 
            'accuracy_total' => '219', 
            'accuracy_err' => '9', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '4.109589' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '77', 
            'accuracy_total' => '244', 
            'accuracy_err' => '52', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '21.311475' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '78', 
            'accuracy_total' => '238', 
            'accuracy_err' => '15', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '6.302521' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '79', 
            'accuracy_total' => '248', 
            'accuracy_err' => '21', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '8.467742' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '80', 
            'accuracy_total' => '233', 
            'accuracy_err' => '16', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '6.866953' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '81', 
            'accuracy_total' => '289', 
            'accuracy_err' => '58', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '20.069204' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '82', 
            'accuracy_total' => '254', 
            'accuracy_err' => '12', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '4.724409' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '83', 
            'accuracy_total' => '221', 
            'accuracy_err' => '6', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.714932' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '84', 
            'accuracy_total' => '244', 
            'accuracy_err' => '26', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '10.655738' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '85', 
            'accuracy_total' => '231', 
            'accuracy_err' => '22', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '9.523810' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '86', 
            'accuracy_total' => '308', 
            'accuracy_err' => '69', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '22.402597' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '87', 
            'accuracy_total' => '226', 
            'accuracy_err' => '10', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '4.424779' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '88', 
            'accuracy_total' => '228', 
            'accuracy_err' => '8', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.508772' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '89', 
            'accuracy_total' => '237', 
            'accuracy_err' => '4', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '1.687764' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '90', 
            'accuracy_total' => '287', 
            'accuracy_err' => '60', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '20.905923' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '91', 
            'accuracy_total' => '235', 
            'accuracy_err' => '6', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.553191' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '92', 
            'accuracy_total' => '243', 
            'accuracy_err' => '2', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.823045' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '93', 
            'accuracy_total' => '236', 
            'accuracy_err' => '8', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.389831' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '94', 
            'accuracy_total' => '217', 
            'accuracy_err' => '4', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '1.843318' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '95', 
            'accuracy_total' => '237', 
            'accuracy_err' => '29', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '12.236287' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '96', 
            'accuracy_total' => '237', 
            'accuracy_err' => '15', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '6.329114' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '97', 
            'accuracy_total' => '225', 
            'accuracy_err' => '3', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '1.333333' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '98', 
            'accuracy_total' => '219', 
            'accuracy_err' => '2', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.913242' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '99', 
            'accuracy_total' => '195', 
            'accuracy_err' => '0', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '100', 
            'accuracy_total' => '304', 
            'accuracy_err' => '105', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '34.539474' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '101', 
            'accuracy_total' => '228', 
            'accuracy_err' => '14', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '6.140351' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '102', 
            'accuracy_total' => '238', 
            'accuracy_err' => '10', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '4.201681' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '103', 
            'accuracy_total' => '237', 
            'accuracy_err' => '5', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.109705' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '104', 
            'accuracy_total' => '233', 
            'accuracy_err' => '2', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.858369' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '105', 
            'accuracy_total' => '222', 
            'accuracy_err' => '6', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.702703' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '106', 
            'accuracy_total' => '226', 
            'accuracy_err' => '10', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '4.424779' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '107', 
            'accuracy_total' => '275', 
            'accuracy_err' => '54', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '19.636364' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '108', 
            'accuracy_total' => '254', 
            'accuracy_err' => '33', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '12.992126' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '109', 
            'accuracy_total' => '215', 
            'accuracy_err' => '2', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.930233' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '110', 
            'accuracy_total' => '247', 
            'accuracy_err' => '21', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '8.502024' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '111', 
            'accuracy_total' => '219', 
            'accuracy_err' => '5', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.283105' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '112', 
            'accuracy_total' => '229', 
            'accuracy_err' => '2', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.873362' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '113', 
            'accuracy_total' => '226', 
            'accuracy_err' => '15', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '6.637168' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '114', 
            'accuracy_total' => '254', 
            'accuracy_err' => '30', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '11.811024' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '115', 
            'accuracy_total' => '293', 
            'accuracy_err' => '81', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '27.645051' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '116', 
            'accuracy_total' => '280', 
            'accuracy_err' => '54', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '19.285714' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '117', 
            'accuracy_total' => '290', 
            'accuracy_err' => '35', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '12.068966' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '118', 
            'accuracy_total' => '211', 
            'accuracy_err' => '24', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '11.374408' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '119', 
            'accuracy_total' => '266', 
            'accuracy_err' => '48', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '18.045113' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '120', 
            'accuracy_total' => '212', 
            'accuracy_err' => '9', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '4.245283' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '121', 
            'accuracy_total' => '227', 
            'accuracy_err' => '7', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.083700' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '122', 
            'accuracy_total' => '296', 
            'accuracy_err' => '98', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '33.108108' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '123', 
            'accuracy_total' => '215', 
            'accuracy_err' => '6', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.790698' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '124', 
            'accuracy_total' => '310', 
            'accuracy_err' => '47', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '15.161290' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '125', 
            'accuracy_total' => '246', 
            'accuracy_err' => '40', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '16.260163' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '126', 
            'accuracy_total' => '259', 
            'accuracy_err' => '60', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '23.166023' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '127', 
            'accuracy_total' => '227', 
            'accuracy_err' => '0', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '128', 
            'accuracy_total' => '236', 
            'accuracy_err' => '12', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '5.084746' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '129', 
            'accuracy_total' => '230', 
            'accuracy_err' => '4', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '1.739130' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '130', 
            'accuracy_total' => '220', 
            'accuracy_err' => '9', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '4.090909' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '131', 
            'accuracy_total' => '229', 
            'accuracy_err' => '19', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '8.296943' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '132', 
            'accuracy_total' => '233', 
            'accuracy_err' => '14', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '6.008584' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '133', 
            'accuracy_total' => '285', 
            'accuracy_err' => '77', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '27.017544' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '134', 
            'accuracy_total' => '275', 
            'accuracy_err' => '50', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '18.181818' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '135', 
            'accuracy_total' => '248', 
            'accuracy_err' => '10', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '4.032258' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '136', 
            'accuracy_total' => '230', 
            'accuracy_err' => '21', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '9.130435' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '137', 
            'accuracy_total' => '284', 
            'accuracy_err' => '52', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '18.309859' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '138', 
            'accuracy_total' => '229', 
            'accuracy_err' => '20', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '8.733624' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '139', 
            'accuracy_total' => '284', 
            'accuracy_err' => '57', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '20.070423' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '140', 
            'accuracy_total' => '258', 
            'accuracy_err' => '26', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '10.077519' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '141', 
            'accuracy_total' => '212', 
            'accuracy_err' => '5', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.358491' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '142', 
            'accuracy_total' => '293', 
            'accuracy_err' => '64', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '21.843003' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '143', 
            'accuracy_total' => '261', 
            'accuracy_err' => '34', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '13.026820' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '144', 
            'accuracy_total' => '223', 
            'accuracy_err' => '15', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '6.726457' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '145', 
            'accuracy_total' => '285', 
            'accuracy_err' => '42', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '14.736842' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '146', 
            'accuracy_total' => '211', 
            'accuracy_err' => '12', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '5.687204' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '147', 
            'accuracy_total' => '277', 
            'accuracy_err' => '60', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '21.660650' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '148', 
            'accuracy_total' => '235', 
            'accuracy_err' => '7', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.978723' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '149', 
            'accuracy_total' => '265', 
            'accuracy_err' => '62', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '23.396226' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '150', 
            'accuracy_total' => '263', 
            'accuracy_err' => '40', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '15.209125' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '151', 
            'accuracy_total' => '269', 
            'accuracy_err' => '68', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '25.278810' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '152', 
            'accuracy_total' => '253', 
            'accuracy_err' => '55', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '21.739130' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '153', 
            'accuracy_total' => '264', 
            'accuracy_err' => '53', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '20.075758' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '154', 
            'accuracy_total' => '215', 
            'accuracy_err' => '9', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '4.186047' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '155', 
            'accuracy_total' => '235', 
            'accuracy_err' => '13', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '5.531915' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '156', 
            'accuracy_total' => '186', 
            'accuracy_err' => '7', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.763441' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '157', 
            'accuracy_total' => '234', 
            'accuracy_err' => '19', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '8.119658' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '158', 
            'accuracy_total' => '207', 
            'accuracy_err' => '19', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '9.178744' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '159', 
            'accuracy_total' => '230', 
            'accuracy_err' => '17', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '7.391304' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '160', 
            'accuracy_total' => '259', 
            'accuracy_err' => '32', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '12.355212' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '161', 
            'accuracy_total' => '266', 
            'accuracy_err' => '35', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '13.157895' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '162', 
            'accuracy_total' => '203', 
            'accuracy_err' => '27', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '13.300493' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '163', 
            'accuracy_total' => '277', 
            'accuracy_err' => '88', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '31.768953' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '164', 
            'accuracy_total' => '252', 
            'accuracy_err' => '43', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '17.063492' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '165', 
            'accuracy_total' => '291', 
            'accuracy_err' => '72', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '24.742268' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '166', 
            'accuracy_total' => '228', 
            'accuracy_err' => '15', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '6.578947' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '167', 
            'accuracy_total' => '257', 
            'accuracy_err' => '38', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '14.785992' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '168', 
            'accuracy_total' => '220', 
            'accuracy_err' => '17', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '7.727273' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '169', 
            'accuracy_total' => '291', 
            'accuracy_err' => '77', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '26.460481' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '170', 
            'accuracy_total' => '263', 
            'accuracy_err' => '36', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '13.688213' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '171', 
            'accuracy_total' => '230', 
            'accuracy_err' => '23', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '172', 
            'accuracy_total' => '279', 
            'accuracy_err' => '58', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '20.788530' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '173', 
            'accuracy_total' => '247', 
            'accuracy_err' => '29', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '11.740891' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '174', 
            'accuracy_total' => '224', 
            'accuracy_err' => '27', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '12.053571' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '175', 
            'accuracy_total' => '287', 
            'accuracy_err' => '62', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '21.602787' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '176', 
            'accuracy_total' => '242', 
            'accuracy_err' => '13', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '5.371901' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '177', 
            'accuracy_total' => '205', 
            'accuracy_err' => '14', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '6.829268' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '178', 
            'accuracy_total' => '220', 
            'accuracy_err' => '8', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.636364' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '179', 
            'accuracy_total' => '224', 
            'accuracy_err' => '19', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '8.482143' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '180', 
            'accuracy_total' => '231', 
            'accuracy_err' => '17', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '7.359307' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '181', 
            'accuracy_total' => '216', 
            'accuracy_err' => '7', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.240741' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '182', 
            'accuracy_total' => '244', 
            'accuracy_err' => '23', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '9.426230' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '183', 
            'accuracy_total' => '237', 
            'accuracy_err' => '9', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.797468' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '184', 
            'accuracy_total' => '222', 
            'accuracy_err' => '3', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '1.351351' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '185', 
            'accuracy_total' => '274', 
            'accuracy_err' => '34', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '12.408759' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '186', 
            'accuracy_total' => '209', 
            'accuracy_err' => '4', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '1.913876' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '187', 
            'accuracy_total' => '229', 
            'accuracy_err' => '12', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '5.240175' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '188', 
            'accuracy_total' => '251', 
            'accuracy_err' => '31', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '12.350598' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '189', 
            'accuracy_total' => '236', 
            'accuracy_err' => '23', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '9.745763' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '190', 
            'accuracy_total' => '224', 
            'accuracy_err' => '7', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.125000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '191', 
            'accuracy_total' => '226', 
            'accuracy_err' => '16', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '7.079646' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '192', 
            'accuracy_total' => '236', 
            'accuracy_err' => '14', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '5.932203' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '193', 
            'accuracy_total' => '215', 
            'accuracy_err' => '10', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '4.651163' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '194', 
            'accuracy_total' => '198', 
            'accuracy_err' => '16', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '8.080808' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '195', 
            'accuracy_total' => '220', 
            'accuracy_err' => '13', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '5.909091' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '196', 
            'accuracy_total' => '222', 
            'accuracy_err' => '4', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '1.801802' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '197', 
            'accuracy_total' => '225', 
            'accuracy_err' => '5', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.222222' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '198', 
            'accuracy_total' => '228', 
            'accuracy_err' => '2', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.877193' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '199', 
            'accuracy_total' => '225', 
            'accuracy_err' => '6', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.666667' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '200', 
            'accuracy_total' => '272', 
            'accuracy_err' => '67', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '24.632353' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '201', 
            'accuracy_total' => '223', 
            'accuracy_err' => '9', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '4.035874' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '202', 
            'accuracy_total' => '240', 
            'accuracy_err' => '5', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.083333' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '203', 
            'accuracy_total' => '197', 
            'accuracy_err' => '3', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '1.522843' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '204', 
            'accuracy_total' => '208', 
            'accuracy_err' => '5', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.403846' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '205', 
            'accuracy_total' => '278', 
            'accuracy_err' => '52', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '18.705036' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '206', 
            'accuracy_total' => '216', 
            'accuracy_err' => '3', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '1.388889' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '207', 
            'accuracy_total' => '228', 
            'accuracy_err' => '4', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '1.754386' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '208', 
            'accuracy_total' => '217', 
            'accuracy_err' => '7', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.225806' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '209', 
            'accuracy_total' => '237', 
            'accuracy_err' => '28', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '11.814346' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '210', 
            'accuracy_total' => '236', 
            'accuracy_err' => '19', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '8.050847' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '211', 
            'accuracy_total' => '225', 
            'accuracy_err' => '7', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.111111' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '212', 
            'accuracy_total' => '228', 
            'accuracy_err' => '15', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '6.578947' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '213', 
            'accuracy_total' => '241', 
            'accuracy_err' => '13', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '5.394191' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '214', 
            'accuracy_total' => '219', 
            'accuracy_err' => '1', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.456621' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '215', 
            'accuracy_total' => '223', 
            'accuracy_err' => '7', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.139013' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '216', 
            'accuracy_total' => '220', 
            'accuracy_err' => '1', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.454545' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '217', 
            'accuracy_total' => '232', 
            'accuracy_err' => '7', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.017241' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '218', 
            'accuracy_total' => '220', 
            'accuracy_err' => '16', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '7.272727' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '219', 
            'accuracy_total' => '234', 
            'accuracy_err' => '15', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '6.410256' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '220', 
            'accuracy_total' => '273', 
            'accuracy_err' => '64', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '23.443223' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '221', 
            'accuracy_total' => '203', 
            'accuracy_err' => '10', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '4.926108' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '222', 
            'accuracy_total' => '265', 
            'accuracy_err' => '40', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '15.094340' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '223', 
            'accuracy_total' => '267', 
            'accuracy_err' => '54', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '20.224719' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '224', 
            'accuracy_total' => '243', 
            'accuracy_err' => '38', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '15.637860' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '225', 
            'accuracy_total' => '224', 
            'accuracy_err' => '1', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.446429' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '226', 
            'accuracy_total' => '224', 
            'accuracy_err' => '20', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '8.928571' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '227', 
            'accuracy_total' => '225', 
            'accuracy_err' => '25', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '11.111111' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '228', 
            'accuracy_total' => '213', 
            'accuracy_err' => '19', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '8.920188' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '229', 
            'accuracy_total' => '242', 
            'accuracy_err' => '35', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '14.462810' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '230', 
            'accuracy_total' => '251', 
            'accuracy_err' => '51', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '20.318725' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '231', 
            'accuracy_total' => '258', 
            'accuracy_err' => '48', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '18.604651' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '232', 
            'accuracy_total' => '253', 
            'accuracy_err' => '36', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '14.229249' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '233', 
            'accuracy_total' => '263', 
            'accuracy_err' => '70', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '26.615970' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '234', 
            'accuracy_total' => '278', 
            'accuracy_err' => '52', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '18.705036' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '235', 
            'accuracy_total' => '226', 
            'accuracy_err' => '24', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '10.619469' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '236', 
            'accuracy_total' => '210', 
            'accuracy_err' => '20', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '9.523810' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '237', 
            'accuracy_total' => '258', 
            'accuracy_err' => '51', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '19.767442' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '238', 
            'accuracy_total' => '298', 
            'accuracy_err' => '82', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '27.516779' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '239', 
            'accuracy_total' => '218', 
            'accuracy_err' => '0', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '240', 
            'accuracy_total' => '207', 
            'accuracy_err' => '19', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '9.178744' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '241', 
            'accuracy_total' => '249', 
            'accuracy_err' => '47', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '18.875502' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '242', 
            'accuracy_total' => '257', 
            'accuracy_err' => '48', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '18.677043' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '243', 
            'accuracy_total' => '234', 
            'accuracy_err' => '32', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '13.675214' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '244', 
            'accuracy_total' => '275', 
            'accuracy_err' => '57', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '20.727273' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '245', 
            'accuracy_total' => '215', 
            'accuracy_err' => '1', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.465116' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '246', 
            'accuracy_total' => '249', 
            'accuracy_err' => '43', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '17.269076' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '247', 
            'accuracy_total' => '227', 
            'accuracy_err' => '2', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.881057' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '248', 
            'accuracy_total' => '299', 
            'accuracy_err' => '93', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '31.103679' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '249', 
            'accuracy_total' => '278', 
            'accuracy_err' => '85', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '30.575540' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '250', 
            'accuracy_total' => '248', 
            'accuracy_err' => '25', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '10.080645' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '251', 
            'accuracy_total' => '221', 
            'accuracy_err' => '1', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.452489' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '252', 
            'accuracy_total' => '214', 
            'accuracy_err' => '12', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '5.607477' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '253', 
            'accuracy_total' => '239', 
            'accuracy_err' => '31', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '12.970711' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '254', 
            'accuracy_total' => '230', 
            'accuracy_err' => '21', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '9.130435' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '255', 
            'accuracy_total' => '218', 
            'accuracy_err' => '4', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '1.834862' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '256', 
            'accuracy_total' => '219', 
            'accuracy_err' => '21', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '9.589041' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '257', 
            'accuracy_total' => '217', 
            'accuracy_err' => '8', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.686636' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '258', 
            'accuracy_total' => '220', 
            'accuracy_err' => '11', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '5.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '259', 
            'accuracy_total' => '230', 
            'accuracy_err' => '35', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '15.217391' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '260', 
            'accuracy_total' => '248', 
            'accuracy_err' => '45', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '18.145161' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '261', 
            'accuracy_total' => '268', 
            'accuracy_err' => '44', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '16.417910' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '262', 
            'accuracy_total' => '217', 
            'accuracy_err' => '26', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '11.981567' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '263', 
            'accuracy_total' => '223', 
            'accuracy_err' => '4', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '1.793722' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '264', 
            'accuracy_total' => '227', 
            'accuracy_err' => '3', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '1.321586' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '265', 
            'accuracy_total' => '215', 
            'accuracy_err' => '5', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '2.325581' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '266', 
            'accuracy_total' => '204', 
            'accuracy_err' => '0', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '267', 
            'accuracy_total' => '261', 
            'accuracy_err' => '59', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '22.605364' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '268', 
            'accuracy_total' => '238', 
            'accuracy_err' => '16', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '6.722689' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '269', 
            'accuracy_total' => '257', 
            'accuracy_err' => '47', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '18.287938' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '270', 
            'accuracy_total' => '279', 
            'accuracy_err' => '77', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '27.598566' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '271', 
            'accuracy_total' => '288', 
            'accuracy_err' => '62', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '21.527778' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '272', 
            'accuracy_total' => '280', 
            'accuracy_err' => '85', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '30.357143' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '273', 
            'accuracy_total' => '298', 
            'accuracy_err' => '76', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '25.503356' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '274', 
            'accuracy_total' => '248', 
            'accuracy_err' => '27', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '10.887097' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '275', 
            'accuracy_total' => '217', 
            'accuracy_err' => '13', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '5.990783' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '276', 
            'accuracy_total' => '240', 
            'accuracy_err' => '24', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '277', 
            'accuracy_total' => '217', 
            'accuracy_err' => '2', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.921659' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '278', 
            'accuracy_total' => '227', 
            'accuracy_err' => '13', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '5.726872' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '279', 
            'accuracy_total' => '226', 
            'accuracy_err' => '8', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.539823' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '280', 
            'accuracy_total' => '216', 
            'accuracy_err' => '1', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '0.462963' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '281', 
            'accuracy_total' => '255', 
            'accuracy_err' => '34', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '13.333333' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '282', 
            'accuracy_total' => '226', 
            'accuracy_err' => '22', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '9.734513' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '283', 
            'accuracy_total' => '262', 
            'accuracy_err' => '52', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '19.847328' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '284', 
            'accuracy_total' => '222', 
            'accuracy_err' => '16', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '7.207207' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '285', 
            'accuracy_total' => '294', 
            'accuracy_err' => '58', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '19.727891' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '286', 
            'accuracy_total' => '229', 
            'accuracy_err' => '7', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.056769' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '287', 
            'accuracy_total' => '240', 
            'accuracy_err' => '12', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '5.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '288', 
            'accuracy_total' => '237', 
            'accuracy_err' => '19', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '8.016878' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '289', 
            'accuracy_total' => '228', 
            'accuracy_err' => '8', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '3.508772' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '290', 
            'accuracy_total' => '236', 
            'accuracy_err' => '19', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '8.050847' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '291', 
            'accuracy_total' => '236', 
            'accuracy_err' => '15', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '6.355932' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '292', 
            'accuracy_total' => '323', 
            'accuracy_err' => '55', 
            'is_vip_only' => '0', 
            'accuracy_err_rate' => '17.027864' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '502', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '503', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '504', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '505', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '506', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '507', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '508', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '509', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '510', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '511', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '512', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '513', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '514', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '515', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '516', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '517', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '518', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '519', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '520', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '521', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '522', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '523', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '524', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '525', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '526', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '527', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '528', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '529', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '530', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '531', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '532', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '533', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '534', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '535', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '536', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '537', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '538', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '539', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '540', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '541', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '542', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '543', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '544', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '545', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '546', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '547', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '548', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '549', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '550', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '551', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '552', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '553', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '554', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '555', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '556', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '557', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '558', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '559', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '560', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '561', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '562', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '563', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '564', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '565', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '566', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '567', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '568', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '569', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '570', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '571', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '572', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '573', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '574', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '575', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '576', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '577', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '578', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '579', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '580', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '581', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '582', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '583', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '584', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '585', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '586', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '587', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '588', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '589', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '590', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '591', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '592', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '593', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '594', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '595', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '596', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '597', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '598', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '599', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '600', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '601', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '602', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '603', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '604', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '605', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '606', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '607', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '608', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '609', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '610', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '611', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '612', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '613', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '614', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '615', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '616', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '617', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '618', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '619', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '620', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '621', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '622', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '623', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '624', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '625', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '626', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '627', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '628', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '629', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '630', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '631', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '632', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '633', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '634', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '635', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '636', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '637', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '638', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '639', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '640', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '641', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '642', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '643', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '644', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '645', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '646', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '647', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '648', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '649', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '650', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '651', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '652', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '653', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '654', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '655', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '656', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '657', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '658', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '659', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '660', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '661', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '662', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '663', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '664', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '665', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '666', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '667', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '668', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '669', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '670', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '671', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '672', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '673', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '674', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '675', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '676', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '677', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '678', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '679', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '680', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '681', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '682', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '683', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '684', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '685', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '686', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '687', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '688', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '689', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '690', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '691', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '692', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '693', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '694', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '695', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '696', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '697', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '698', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '699', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '700', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '701', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '702', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '703', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '704', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '705', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '706', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '707', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '708', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '709', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '710', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
            DB::table('question_lists')->insert([ 
            'id' => '711', 
            'accuracy_total' => '10', 
            'accuracy_err' => '1', 
            'is_vip_only' => '1', 
            'accuracy_err_rate' => '10.000000' 
            ]);
            
    }
}
