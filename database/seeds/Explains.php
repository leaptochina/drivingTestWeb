<?php

use Illuminate\Database\Seeder;

class Explains extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('explains')->truncate();


        DB::table('explains')->insert([ 
            'id' => '1', 
            'user_id' => '1', 
            'question_list_id' => '1', 
            'explain' => '50公里时速通常为居民区的限速，在居民区晚上11点到第二天早上7点，不要鸣笛。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '2', 
            'user_id' => '1', 
            'question_list_id' => '2', 
            'explain' => '如果道路足够宽，车辆在等待右转的时候通常会让出左侧的空间方便直行车辆通过，此时从左侧超车符合法规，也比较安全。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '3', 
            'user_id' => '1', 
            'question_list_id' => '3', 
            'explain' => '以上所有的情况下都应该使用近光灯，不要妨碍他人的工作或驾驶。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '4', 
            'user_id' => '1', 
            'question_list_id' => '4', 
            'explain' => '新西兰开车转向灯使用很频繁，无论是转向还是并线，一定要提前至少三秒钟打相应方向的转向灯。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '5', 
            'user_id' => '1', 
            'question_list_id' => '5', 
            'explain' => '除非对面和前面都没有车辆，且道路视线不好，才可以使用远光灯，否则一律使用近光灯。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '6', 
            'user_id' => '1', 
            'question_list_id' => '6', 
            'explain' => '夜间必须使用头灯以增加车辆的可视度。在倒车的时候如果头灯产生炫光，则可以关闭头灯用以安全的倒车。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '7', 
            'user_id' => '1', 
            'question_list_id' => '7', 
            'explain' => '摩托车在道路上也有与汽车相同的路权，不可以从它们的左侧超车。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '8', 
            'user_id' => '1', 
            'question_list_id' => '8', 
            'explain' => 'A不正确是因为需要超车后还能看清至少100米以内的路况，而不是在超车之前看清100米。C不正确是因为无论何时都不可以超速。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '9', 
            'user_id' => '1', 
            'question_list_id' => '9', 
            'explain' => '天气和路况良好的情况下，跟车适用两秒规则；天气潮湿道路湿滑，则使用四秒规则。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '10', 
            'user_id' => '1', 
            'question_list_id' => '10', 
            'explain' => '黄灯闪烁代表信号灯出现了故障无法正常工作，这时候路口适用让路规则，你需要给所有右侧的车辆让行；如果你要在路口转弯，则需要给直行的车辆让行。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '11', 
            'user_id' => '1', 
            'question_list_id' => '11', 
            'explain' => '在需要减速让行的路口，标线是白色的', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '12', 
            'user_id' => '1', 
            'question_list_id' => '12', 
            'explain' => '这是消防栓的标识，如果车中有随时可以移动车辆的人，则可以在其上方停车；但禁止在车中无人的情况下停在它的上方。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '13', 
            'user_id' => '1', 
            'question_list_id' => '13', 
            'explain' => '即便你从两边都看不到火车，也要等待信号灯熄灭才能前进。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '14', 
            'user_id' => '1', 
            'question_list_id' => '14', 
            'explain' => 'B不正确的原因是，你希望右转弯，不必考虑为行驶在你左侧的车辆让路；只需要为它们腾出足够的空间即可', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '15', 
            'user_id' => '1', 
            'question_list_id' => '15', 
            'explain' => '即便你从两边都看不到火车，也要等待信号灯熄灭才能前进。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '16', 
            'user_id' => '1', 
            'question_list_id' => '16', 
            'explain' => '新西兰警察发现违章车辆将会跟随其后并亮灯、拉警笛，此时必须打左转向灯，并在路边停车接受警察的检查。不要下车，手扶方向盘等待警察过来即可，记得把驾驶侧的车窗降下来。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '17', 
            'user_id' => '1', 
            'question_list_id' => '17', 
            'explain' => '警官在怀疑司机酒后驾车的时候，有权利要求对司机的血液进行酒精浓度检测。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '18', 
            'user_id' => '1', 
            'question_list_id' => '18', 
            'explain' => '以上所有答案都正确，请牢记。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '19', 
            'user_id' => '1', 
            'question_list_id' => '19', 
            'explain' => '新西兰司机极少使用汽车喇叭，只有在视线不好的情况下、为了提醒其它司机你的位置时，才应该使用鸣笛的方式提醒他人。打招呼、斗气车、或是前方有动物，均不可鸣笛', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '20', 
            'user_id' => '1', 
            'question_list_id' => '20', 
            'explain' => '新西兰政府对于20岁以下的年轻人饮酒驾车采取零容忍的态度', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '21', 
            'user_id' => '1', 
            'question_list_id' => '21', 
            'explain' => '如果你准备左转弯且在你的这一侧路口没有减速让行的标记，那么对面右转的车辆应该给你让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '22', 
            'user_id' => '1', 
            'question_list_id' => '22', 
            'explain' => '没有需要解释的地方，请牢记环岛直行的打灯方式', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '23', 
            'user_id' => '1', 
            'question_list_id' => '23', 
            'explain' => '前方车辆左转，你还要从它的左侧超车，一定是脑子坏了', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '24', 
            'user_id' => '1', 
            'question_list_id' => '24', 
            'explain' => '新西兰的限速牌与全球大部分国家和地区都一样，红色圈中的黑色数字标明这一段道路可以行驶的最高时速', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '25', 
            'user_id' => '1', 
            'question_list_id' => '25', 
            'explain' => '只要开车，无论你是什么驾照，都要随身携带', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '26', 
            'user_id' => '1', 
            'question_list_id' => '26', 
            'explain' => '见到这个标识，请以最高20公里时速前进，经过事故现场的时候不要停留不要好奇不要拍照', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '27', 
            'user_id' => '1', 
            'question_list_id' => '27', 
            'explain' => '驶入环岛的时候只需要给右侧的车辆让行，左侧的车辆应该让你才对', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '28', 
            'user_id' => '1', 
            'question_list_id' => '28', 
            'explain' => '如果对面没有直行或左转的车辆，你可以从路口右转弯；如果对面有直行或左转的车辆，即便你这边是绿灯，也要给他们让路，除非你能够确定对面是红灯', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '29', 
            'user_id' => '1', 
            'question_list_id' => '29', 
            'explain' => '信号灯出现故障，路口默认执行让路规则，为你右侧驶来的车辆让路，转弯为直行的车辆让路', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '30', 
            'user_id' => '1', 
            'question_list_id' => '30', 
            'explain' => '保护少年儿童的生命安全很重要，校车在上下车学生的时候一定要以20公里的时速经过校车，防止突然出现的儿童', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '31', 
            'user_id' => '1', 
            'question_list_id' => '31', 
            'explain' => '如果路口交通信号灯带有相位指示箭头，如果你的行驶方向与箭头方向相同，则需要按照信号灯的红与绿决定停车还是前进。如果路口只有直行绿灯而没有相位信号灯或是相位信号灯未亮起，那么需要让行对面过来的直行车辆后，再右转弯。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '32', 
            'user_id' => '1', 
            'question_list_id' => '32', 
            'explain' => '路口出现警官的时候代表前方有交通管制或是事故，请听从他们的指挥', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '33', 
            'user_id' => '1', 
            'question_list_id' => '33', 
            'explain' => '无照驾驶在新西兰是很严重的错误，警官可以直接扣留你的车辆', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '34', 
            'user_id' => '1', 
            'question_list_id' => '34', 
            'explain' => '没有标线或是未铺设柏油路面的地方，只要有公众或是其它车辆活动，就被认定为道路', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '35', 
            'user_id' => '1', 
            'question_list_id' => '35', 
            'explain' => '三秒钟，硬性规定', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '36', 
            'user_id' => '1', 
            'question_list_id' => '36', 
            'explain' => '要看清让行标记，如果你这一边是红色的小箭头意味着对面的车辆有优先通过权，先停车让行，等待它们通过桥梁后确认对面不再有车，你再前进', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '37', 
            'user_id' => '1', 
            'question_list_id' => '37', 
            'explain' => '天气不好道路湿滑，或者你正在牵引拖挂车辆，则使用四秒规则跟随前车，因为这些情况下刹车距离会变长', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '38', 
            'user_id' => '1', 
            'question_list_id' => '38', 
            'explain' => '在你能看到的距离内停下即可', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '39', 
            'user_id' => '1', 
            'question_list_id' => '39', 
            'explain' => '无需解释，所有的说法都', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '40', 
            'user_id' => '1', 
            'question_list_id' => '40', 
            'explain' => '礼让行人路口不规定汽车必须要给行人让路，但是希望能够“礼让”在先，尽可能让行人先通过', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '41', 
            'user_id' => '1', 
            'question_list_id' => '41', 
            'explain' => '有安全岛的人行横道往往距离比较长，所以才会在路中间设置安全岛，如果行人不在你这一侧过马路，则不需要停车等待他们通过；如果在你这一侧通行，则必须停车让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '42', 
            'user_id' => '1', 
            'question_list_id' => '42', 
            'explain' => '如果人行横道中间没有安全岛，那么无论从什么方向穿行马路的行人，只要他们的脚步踏上了人行道，你就必须停车让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '43', 
            'user_id' => '1', 
            'question_list_id' => '43', 
            'explain' => '四秒规则，可以增加与前车的距离，确保在湿滑的天气下能够安全停车', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '44', 
            'user_id' => '1', 
            'question_list_id' => '44', 
            'explain' => '公共停车场车辆进出频繁，可以被视为一个交通路口', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '45', 
            'user_id' => '1', 
            'question_list_id' => '45', 
            'explain' => '继续等待直到红灯熄灭后，才能前进', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '46', 
            'user_id' => '1', 
            'question_list_id' => '46', 
            'explain' => '紧急车辆在拉响警报和亮起警灯的时候，社会车辆要无条件让行，但是在让行的时候要确保自己和其它社会车辆的安全，不要直接急刹车或是开上路牙，没有必要这么做，降低车速尽量靠边行驶给它们让出位置即可', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '47', 
            'user_id' => '1', 
            'question_list_id' => '47', 
            'explain' => '这种说法很正确，也很重要，如果对面没有足够的空间容纳你的车身，你越过道口后堵在了那里，车尾部还在铁道上，这样很危险', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '48', 
            'user_id' => '1', 
            'question_list_id' => '48', 
            'explain' => '路口适用的让行规则是转弯的让直行，右转的让左转，不分车辆大小也不按照先来后到', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '49', 
            'user_id' => '1', 
            'question_list_id' => '49', 
            'explain' => '如果对方不变换为近光灯，则不要跟他们斗气，把视线从对面转移到道路的左边即可，必要的时候降低车速', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '50', 
            'user_id' => '1', 
            'question_list_id' => '50', 
            'explain' => '有人受伤，则24小时内必须通知警方，这是硬性规定', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '51', 
            'user_id' => '1', 
            'question_list_id' => '51', 
            'explain' => '100米，这个数字需要死记硬背，没有需要特别解释的地方', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '52', 
            'user_id' => '1', 
            'question_list_id' => '52', 
            'explain' => '尽可能多打开灯光让别人能够看到你，增加安全性，但不要使用远光灯。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '53', 
            'user_id' => '1', 
            'question_list_id' => '53', 
            'explain' => '这个数字需要死记硬背，没有需要解释的地方', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '54', 
            'user_id' => '1', 
            'question_list_id' => '54', 
            'explain' => '这个数字需要死记硬背，没有需要解释的地方', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '55', 
            'user_id' => '1', 
            'question_list_id' => '55', 
            'explain' => '只有警官才可以要求你提供血样用以检测酒精含量，其他的人都不行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '56', 
            'user_id' => '1', 
            'question_list_id' => '56', 
            'explain' => '别人希望超越你的时候，尽可能给他们让出足够的空间，阻挡他人超车也是违章行为', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '57', 
            'user_id' => '1', 
            'question_list_id' => '57', 
            'explain' => '菱形的钻石花纹标识前方有人行横道', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '58', 
            'user_id' => '1', 
            'question_list_id' => '58', 
            'explain' => '不需要解释，请记下1.25米这个数字和上面这张图片', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '59', 
            'user_id' => '1', 
            'question_list_id' => '59', 
            'explain' => '超速20公里以内，扣分20分，请牢记', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '60', 
            'user_id' => '1', 
            'question_list_id' => '60', 
            'explain' => '这些情况都允许不系安全带，无需解释，请牢记', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '61', 
            'user_id' => '1', 
            'question_list_id' => '61', 
            'explain' => '开启近光灯是车队中的常见要求，非紧急情况下双闪、鸣笛都是不被允许的，葬礼车队不符合紧急情况这个条件', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '62', 
            'user_id' => '1', 
            'question_list_id' => '62', 
            'explain' => '无需解释，请牢记；再犯则加重惩罚', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '63', 
            'user_id' => '1', 
            'question_list_id' => '63', 
            'explain' => '不需要解释，以上所有答案都是购买二手车的时候应该检查的要点', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '64', 
            'user_id' => '1', 
            'question_list_id' => '64', 
            'explain' => '超过20岁，则呼气酒精检测的上限为250微克/L', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '65', 
            'user_id' => '1', 
            'question_list_id' => '65', 
            'explain' => '这种标识往往告知过往的司机此处弯道的最舒适通过时速是多少，可以不遵守，只是推荐数值；数字越小表明弯道越急', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '66', 
            'user_id' => '1', 
            'question_list_id' => '66', 
            'explain' => '100公里每小时是新西兰境内开放公路或是高速公路的最高限速值，没有更高的了', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '67', 
            'user_id' => '1', 
            'question_list_id' => '67', 
            'explain' => '不需要解释，作为母语非英语人士，将这个缩写硬性记下来即可', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '68', 
            'user_id' => '1', 
            'question_list_id' => '68', 
            'explain' => '白色猫眼只会出现在道路的中间，请牢记', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '69', 
            'user_id' => '1', 
            'question_list_id' => '69', 
            'explain' => '不需要解释，实在不能理解请百度或谷歌“转向过度”', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '70', 
            'user_id' => '1', 
            'question_list_id' => '70', 
            'explain' => '白色黑色斜纹表示桥梁的左侧，死记硬背的题目', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '71', 
            'user_id' => '1', 
            'question_list_id' => '71', 
            'explain' => '橙色黑色斜纹表示桥梁的右侧，死记硬背的题目', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '72', 
            'user_id' => '1', 
            'question_list_id' => '72', 
            'explain' => '该标志总会出现在道路转弯的外侧路面，向左转的弯角则会出现在道路的右手边', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '73', 
            'user_id' => '1', 
            'question_list_id' => '73', 
            'explain' => 'C是直行，且它的前方车辆后面留出了足够的该空间让其通过这个路口，所以C可以通过', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '74', 
            'user_id' => '1', 
            'question_list_id' => '74', 
            'explain' => '不需要解释，牢记图形和答案即可', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '75', 
            'user_id' => '1', 
            'question_list_id' => '75', 
            'explain' => '这个标识意味着只有公交车可以停在这里，其它车辆一概不许', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '76', 
            'user_id' => '1', 
            'question_list_id' => '76', 
            'explain' => '环岛标识，注意让行右侧车辆，请牢记', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '77', 
            'user_id' => '1', 
            'question_list_id' => '77', 
            'explain' => '这是一种只有新西兰大城市才有的通行标识，亮起的时候自行车、公交车、轨道车辆可以继续前进，不需要遵守其他灯光标识', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '78', 
            'user_id' => '1', 
            'question_list_id' => '78', 
            'explain' => '如果只有直行绿灯亮起，那么可以右转弯，只要确定让行对面的直行车辆即可', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '79', 
            'user_id' => '1', 
            'question_list_id' => '79', 
            'explain' => '直行是红灯，如果路口没有其它特殊标明红灯的时候左转不限制的标记，那么直行红灯亮起的时候左转弯的车辆也必须停车等待', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '80', 
            'user_id' => '1', 
            'question_list_id' => '80', 
            'explain' => '小型车辆需要新西兰CLASS 1类型的驾照即可驾驶，新西兰驾照CLASS后面的数字越大表明能够驾驶的车型越大、载重越高', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '81', 
            'user_id' => '1', 
            'question_list_id' => '81', 
            'explain' => '只要不越过黄线，且前方的车辆愿意为你留出足够的右侧空间进行超车，你的超车行为就是合乎法规的', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '82', 
            'user_id' => '1', 
            'question_list_id' => '82', 
            'explain' => '四秒规则，不需要解释，请牢记四秒规则适用于湿滑天气或是拖车，即可', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '83', 
            'user_id' => '1', 
            'question_list_id' => '83', 
            'explain' => '可以从其他车辆的左侧超车，确保安全即可', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '84', 
            'user_id' => '1', 
            'question_list_id' => '84', 
            'explain' => '你的一侧有白色虚线，代表着你可以借用对向车道超越你这一边的慢车，但是超车完毕后要马上回到自己的车道上来。如果你这边是黄色实线则严谨借道超越', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '85', 
            'user_id' => '1', 
            'question_list_id' => '85', 
            'explain' => '不可以，必须使用拖车，货物的任何部分不得与地面接触', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '86', 
            'user_id' => '1', 
            'question_list_id' => '86', 
            'explain' => 'D不正确其余都正确，你无需关注对面是什么限速，只需要关注如何安全通过道口即可', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '87', 
            'user_id' => '1', 
            'question_list_id' => '87', 
            'explain' => '如果能够安全的停下来，后面的车也不会追你的尾部，那么就停车吧', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '88', 
            'user_id' => '1', 
            'question_list_id' => '88', 
            'explain' => '只要是与湿滑天气相关的问题，回答四秒没有错', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '89', 
            'user_id' => '1', 
            'question_list_id' => '89', 
            'explain' => '不要鸣笛，会惊吓到动物产生危险；晃大灯对动物完全不管用；你的乘客不可以下车驱赶动物，因为动物可能对乘客的人身安全产生危害', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '90', 
            'user_id' => '1', 
            'question_list_id' => '90', 
            'explain' => '不需要解释，所有的都', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '91', 
            'user_id' => '1', 
            'question_list_id' => '91', 
            'explain' => '小孩子的行为具有不确定性，所以必须要优先关注、额外关注', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '92', 
            'user_id' => '1', 
            'question_list_id' => '92', 
            'explain' => 'B在倒车，而你的车子可能正好在它的盲点中，所以要减速，必要的时候随时刹车，避免碰撞。当然，如果碰撞，责任在于B', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '93', 
            'user_id' => '1', 
            'question_list_id' => '93', 
            'explain' => '蓝色的车辆正在直行，D准备右转弯，与你的行车路线有交叉点，所以D最危险', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '94', 
            'user_id' => '1', 
            'question_list_id' => '94', 
            'explain' => '自行车A正在准备超越停放在路边的B，这个时候道路的宽度已经不太够了，所以作为蓝色车辆的驾驶员要额外关注自行车A', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '95', 
            'user_id' => '1', 
            'question_list_id' => '95', 
            'explain' => '无需解释，全部', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '96', 
            'user_id' => '1', 
            'question_list_id' => '96', 
            'explain' => '新西兰骑车人的速度往往很快，开车门的时候一定要注意他们，否则会造成严重伤害', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '97', 
            'user_id' => '1', 
            'question_list_id' => '97', 
            'explain' => '自行车距离路口已经很近了，如果你强行加速超过他然后左转弯，会给直行的自行车带来极大的危险，慢慢的跟着他，等他过了路口你再转弯不迟', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '98', 
            'user_id' => '1', 
            'question_list_id' => '98', 
            'explain' => '再少的酒精也会减缓你的反应速度，影响你驾驶时候的分辨能力', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '99', 
            'user_id' => '1', 
            'question_list_id' => '99', 
            'explain' => '不可以对行人按喇叭，也不可以与他抢道，因为行人手中的物体可能与你的车子剐蹭，造成行人的人身伤害', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '100', 
            'user_id' => '1', 
            'question_list_id' => '100', 
            'explain' => '阳光强烈的时候贴道路左边只会增加危险而不会降低危险，因为你可能看不清路边的障碍物；开启灯光不会对你有任何帮助', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '101', 
            'user_id' => '1', 
            'question_list_id' => '101', 
            'explain' => '所有的答案都是正确的，汇入已有交通的时候要留意盲点、并记得打转向灯表明自己的意图', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '102', 
            'user_id' => '1', 
            'question_list_id' => '102', 
            'explain' => '不要考虑后车是否违章，如果他非要超过你，你就让他超吧，自己的安全第一', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '103', 
            'user_id' => '1', 
            'question_list_id' => '103', 
            'explain' => '酒精只会让你的驾驶变得更差，绝不会有改善，司机一滴酒，亲人两行泪', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '104', 
            'user_id' => '1', 
            'question_list_id' => '104', 
            'explain' => '打转向灯方面的问题，都是至少三秒，记住“三秒”这个数值没错的', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '105', 
            'user_id' => '1', 
            'question_list_id' => '105', 
            'explain' => '并线的时候，要根据实际情况加速或是减速，踩刹车提醒他人则肯定是不正确的，所以只有检查盲点这一项是正确的', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '106', 
            'user_id' => '1', 
            'question_list_id' => '106', 
            'explain' => '方便他人也是安全自己的行为，尽量让出空间给心急的人吧！', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '107', 
            'user_id' => '1', 
            'question_list_id' => '107', 
            'explain' => '无需解释，答案是B和C，记住在新西兰开车打手机会被罚款甚至被判“危险驾驶”的罪名', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '108', 
            'user_id' => '1', 
            'question_list_id' => '108', 
            'explain' => '发短信比打电话还危险，任何时候都不行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '109', 
            'user_id' => '1', 
            'question_list_id' => '109', 
            'explain' => '不需要解释，从下一个出口出去再慢慢的想办法转回来好了，高速路上倒车极其危险', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '110', 
            'user_id' => '1', 
            'question_list_id' => '110', 
            'explain' => '只有A的描述是正确的，记得开车门之前一定看一下后视镜，有没有物体在快速接近你，如果有，等它/他过去了再开门不迟', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '111', 
            'user_id' => '1', 
            'question_list_id' => '111', 
            'explain' => '新西兰很多地方车流汇聚处都有Merge like a Zip的标识，指的就是左边一辆、右边一辆大家交替行驶融合到一条车道中，公平又有序', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '112', 
            'user_id' => '1', 
            'question_list_id' => '112', 
            'explain' => '后备箱是最安全的，放在自己身上是最不安全的', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '113', 
            'user_id' => '1', 
            'question_list_id' => '113', 
            'explain' => '如果医生告诉你这个药物没有影响，那么就可以正常开车；如果医生说这个药物会影响驾驶，那么就不要开车', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '114', 
            'user_id' => '1', 
            'question_list_id' => '114', 
            'explain' => '下山车辆要默认给上山车辆让行，因为如果上山车辆停车让行的话，再启动车辆相对困难（爬坡起步）', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '115', 
            'user_id' => '1', 
            'question_list_id' => '115', 
            'explain' => '不能开启远光灯，因为雾气中的远光灯会产生炫光，影响对面的司机，双闪灯只允许在紧急情况中使用，雾中不要使用', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '116', 
            'user_id' => '1', 
            'question_list_id' => '116', 
            'explain' => '土路上超过前车是极其危险的行为，除非前车示意你这么做。开远光灯只会让对面的司机诅咒你，而不会帮助你什么；在路的中央行驶是不对的，土路上都没有标识标线，那么默认的应该靠左侧行驶', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '117', 
            'user_id' => '1', 
            'question_list_id' => '117', 
            'explain' => '给骑车人至少1.5米的距离，才不会影响他们的安全', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '118', 
            'user_id' => '1', 
            'question_list_id' => '118', 
            'explain' => '按喇叭只会惊吓到羊群；打开双闪灯？你觉得羊知道双闪灯是什么意思嘛？', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '119', 
            'user_id' => '1', 
            'question_list_id' => '119', 
            'explain' => '必要的时候允许从左侧超车，这种行为被允许。剩下的行为都不被允许，十分的危险', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '120', 
            'user_id' => '1', 
            'question_list_id' => '120', 
            'explain' => '如果你开着拖拉机在路上行驶，那么应该尽可能的靠左，把路的大部分留给车速较快的交通参与者；堵在路中间慢慢行驶的行为是不道德的', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '121', 
            'user_id' => '1', 
            'question_list_id' => '121', 
            'explain' => '见到动物，减速甚至停车才是正确的选择。闪灯、鸣笛、加速，都是无用功甚至是危险的', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '122', 
            'user_id' => '1', 
            'question_list_id' => '122', 
            'explain' => 'A不正确的原因：如果路上没有其它车辆，那么在有路灯的时候也是可以使用远光灯的', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '123', 
            'user_id' => '1', 
            'question_list_id' => '123', 
            'explain' => '红灯停、绿灯行，不解释', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '124', 
            'user_id' => '1', 
            'question_list_id' => '124', 
            'explain' => '你的一方是红色的小箭头，意味着对面的车辆具有优先通行权，你需要看清侨的那一边，是否有车辆准备过桥，如果没有，你可以前进，如果有，你必须停在桥的这一头，让他们先过；没有先来后到之说，也没有按照车型大小相让的规则，更不可以抢行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '125', 
            'user_id' => '1', 
            'question_list_id' => '125', 
            'explain' => 'T2表明车中有两个或两个以上的乘客，才可以使用这个车道', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '126', 
            'user_id' => '1', 
            'question_list_id' => '126', 
            'explain' => 'A不对的原因，是因为你在过铁道的时候没有观察两侧就通过，道口没有栏杆并不意味着这里是安全的，可能是栏杆损坏了，所以一定要左看右看再通过；记住你的车子跟火车相撞，绝对没有赢的可能', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '127', 
            'user_id' => '1', 
            'question_list_id' => '127', 
            'explain' => '黄灯亮起，如果安全的话就刹车停下等待下一个绿灯吧', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '128', 
            'user_id' => '1', 
            'question_list_id' => '128', 
            'explain' => '学生过马路的标识出现，双方向的车辆都需要停车等待，没有减速一说，必须停车等待旗子收回去再前进', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '129', 
            'user_id' => '1', 
            'question_list_id' => '129', 
            'explain' => '校车正在上下儿童，那么社会车辆必须要以不超过20公里/小时的速度行驶，防止随时出现在路上的儿童', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '130', 
            'user_id' => '1', 
            'question_list_id' => '130', 
            'explain' => '黄色虚线就一个意思：禁止停车', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '131', 
            'user_id' => '1', 
            'question_list_id' => '131', 
            'explain' => '不解释，图片和答案说明了一切', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '132', 
            'user_id' => '1', 
            'question_list_id' => '132', 
            'explain' => '这种标识通常出现在繁忙的道路两侧，在其中标明的时段内，路边禁止停车，其余的时间停车OK', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '133', 
            'user_id' => '1', 
            'question_list_id' => '133', 
            'explain' => '这个停车区域专为装卸货物或上下乘客而设计，如果没有写Commercial的字样，那么什么车都可以在这里停留；车中可以无人，但是不能超过5分钟', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '134', 
            'user_id' => '1', 
            'question_list_id' => '134', 
            'explain' => '只有单行线可以在右侧停车，如果在双向道路上右侧停车，则会被罚款', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '135', 
            'user_id' => '1', 
            'question_list_id' => '135', 
            'explain' => 'P指的是停车，蓝底白字意思是“可以停车”，40代表着分钟数，下面没有任何附加条件表示各种车辆都可以停在这里不超过40分钟', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '136', 
            'user_id' => '1', 
            'question_list_id' => '136', 
            'explain' => '请牢记，消防栓上可以停车，但是车中一定要有可以移动车辆的人', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '137', 
            'user_id' => '1', 
            'question_list_id' => '137', 
            'explain' => '陡坡停车，手刹车是最重要的；手动档车辆挂在倒档上，自动档车辆挂在P档上，利用波箱进行附加制动；把车轮转向停车边的路牙也是非常好的办法，万一车辆移动的话也会被路牙挡住', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '138', 
            'user_id' => '1', 
            'question_list_id' => '138', 
            'explain' => '蓝底红叉表示不能停车，下面的FOR 4KM表示这个“禁止停车”的距离为4公里', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '139', 
            'user_id' => '1', 
            'question_list_id' => '139', 
            'explain' => 'ENDS表示“禁止停车”的规则过了这个标识就失效了，这时候路边可以停车了', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '140', 
            'user_id' => '1', 
            'question_list_id' => '140', 
            'explain' => '无论何时，私车都不能停在公车站上', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '141', 
            'user_id' => '1', 
            'question_list_id' => '141', 
            'explain' => '这是残疾人停车位专用标识，只有风挡玻璃上放置了“残疾人停车证明”的车辆才可以使用，其它车辆放在上面将处以很重的罚款', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '142', 
            'user_id' => '1', 
            'question_list_id' => '142', 
            'explain' => '硬性规定，请牢记6米这个数字', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '143', 
            'user_id' => '1', 
            'question_list_id' => '143', 
            'explain' => '硬性规定，请牢记6米这个数字', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '144', 
            'user_id' => '1', 
            'question_list_id' => '144', 
            'explain' => '可以停放在消防栓上，只要车中随时有人能够挪动这辆车即可', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '145', 
            'user_id' => '1', 
            'question_list_id' => '145', 
            'explain' => 'B不正确是因为，转向相反方向，路牙起不到阻挡车辆的作用；开双闪灯对于陡坡停车没有任何帮助', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '146', 
            'user_id' => '1', 
            'question_list_id' => '146', 
            'explain' => '无需解释，请牢记答案C的说法', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '147', 
            'user_id' => '1', 
            'question_list_id' => '147', 
            'explain' => '请死记硬背这个数字，关于最近的停车距离只有两种数字，1米和6米，1米指的是到停车场或是Driveway的最小距离，6米指的是停车距离无黄线的路口或是人行横道的最小值', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '148', 
            'user_id' => '1', 
            'question_list_id' => '148', 
            'explain' => '减速、让行，必要的时候靠边停车让它先过', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '149', 
            'user_id' => '1', 
            'question_list_id' => '149', 
            'explain' => 'A不正确的原因，你在路边招手会对自己的人身安全产生危害，万一过路的车辆撞到你怎么办？', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '150', 
            'user_id' => '1', 
            'question_list_id' => '150', 
            'explain' => 'A不正确是因为急刹车会让后车追你的尾；D不正确的原因是把头伸出车外开车很危险', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '151', 
            'user_id' => '1', 
            'question_list_id' => '151', 
            'explain' => '小汽车后胎爆胎，车子的尾部会不断摇晃，这时候不要紧张，慢慢的将车速降下来，停在道路的左边即可；千万不要猛踩刹车，这样车辆会失控或是翻滚。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '152', 
            'user_id' => '1', 
            'question_list_id' => '152', 
            'explain' => '前胎爆胎比较危险，爆胎的时候车子会向爆胎的一侧甩过去，这时候要用双手控制住方向盘，慢慢将车停到路边；高速爆胎猛踩刹车会让车辆侧翻，千万小心不要在爆胎的时候猛踩刹车。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '153', 
            'user_id' => '1', 
            'question_list_id' => '153', 
            'explain' => '消防站门口的双红灯交替亮起代表消防车马上要从里面出来，所有车辆必须马上刹车，等待红灯熄灭再继续前进', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '154', 
            'user_id' => '1', 
            'question_list_id' => '154', 
            'explain' => '玻璃落在路面上通常都会破碎成小颗粒，如果能够保证人身安全的情况下，尽量清理路面；如果路上车辆很多，那么打电话通知警察寻求帮助。A的说法不正确，请牢记。', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '155', 
            'user_id' => '1', 
            'question_list_id' => '155', 
            'explain' => '前方有事故的时候，警察会在距离事故现场几百米的后方放置这种蓝底白字的事故警告牌，看到这个标记，要减低车速到20公里/小时', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '156', 
            'user_id' => '1', 
            'question_list_id' => '156', 
            'explain' => '突然出现的皮球，往往意味着路边有小朋友正在玩耍，小孩子的行为不可预料，而且身材很小会被路边的车辆挡住；所以看到皮球的时候，第一个想法就是马上停车，而不是绕过皮球之类的办法', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '157', 
            'user_id' => '1', 
            'question_list_id' => '157', 
            'explain' => '红色的反光三角标识代表着车辆损坏停在前方或是有事故发生，请降低车速', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '158', 
            'user_id' => '1', 
            'question_list_id' => '158', 
            'explain' => '如果救护车或救火车没有亮灯、鸣笛，代表他们目前没有事故需要紧急前往，这时他们就是普通的社会车辆，不需要给他们让行；但是警报拉响，你必须让路', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '159', 
            'user_id' => '1', 
            'question_list_id' => '159', 
            'explain' => '无论是事故的哪一方，只要有人在事故中受伤，且你是某方的驾驶员，则必须在24小时内通知警方', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '160', 
            'user_id' => '1', 
            'question_list_id' => '160', 
            'explain' => '车子坏了的时候，请使用双闪灯。双闪灯不能用来斗气，而路边的黄色虚线上，无论你是否打双闪都是不允许停车的，哪怕是临时停车也不行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '161', 
            'user_id' => '1', 
            'question_list_id' => '161', 
            'explain' => '在新西兰，没什么事情比人的健康和生命更重要，第一件事不是通知警方、也不是通知朋友或家人，更不是看自己的车子有多大问题；而是迅速询问是否有人受伤或感觉不舒服', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '162', 
            'user_id' => '1', 
            'question_list_id' => '162', 
            'explain' => '头灯失效的情况下，不仅你看不到路面，对面的车辆也可能看不到你；所以要打开双闪、尽快找到安全的地方停车等待修理或救援', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '163', 
            'user_id' => '1', 
            'question_list_id' => '163', 
            'explain' => 'C不正确的原因是，新西兰交规中涉及到打转向灯的，肯定都是三秒钟以上，打转向灯是正确的但是两秒钟的时间长度是不对的', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '164', 
            'user_id' => '1', 
            'question_list_id' => '164', 
            'explain' => '如果你停在路中间等待右转，可能由于对面的直行车辆很多造成你一时间不能右转，堵塞住你身后直行的车辆，如果发生这种情况，则最好按照C的办法去做', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '165', 
            'user_id' => '1', 
            'question_list_id' => '165', 
            'explain' => 'B不正确的原因是，离开环岛的时候要打左转向灯。D不正确的原因是，进入环岛后，由于你是右转弯，所以应该在右边行驶，左边留给将要驶离环岛的车辆', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '166', 
            'user_id' => '1', 
            'question_list_id' => '166', 
            'explain' => '路上没有划线，那么你应该尽可能的贴着道路的左边行驶', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '167', 
            'user_id' => '1', 
            'question_list_id' => '167', 
            'explain' => '右转弯进入多车道单行线，请直接进入最右侧的车道', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '168', 
            'user_id' => '1', 
            'question_list_id' => '168', 
            'explain' => '无需解释，全部', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '169', 
            'user_id' => '1', 
            'question_list_id' => '169', 
            'explain' => '黄色反光标识（猫眼）等于黄色实线，代表着禁止超车', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '170', 
            'user_id' => '1', 
            'question_list_id' => '170', 
            'explain' => '白色反光标识（猫眼）出现在道路的中央，表示道路的中间', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '171', 
            'user_id' => '1', 
            'question_list_id' => '171', 
            'explain' => '在这里可以任意时间右转，不过要记得让行对面的直行车辆', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '172', 
            'user_id' => '1', 
            'question_list_id' => '172', 
            'explain' => '缓冲区禁止用于超车，也不可以用于任何目的的停车', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '173', 
            'user_id' => '1', 
            'question_list_id' => '173', 
            'explain' => '缓冲区只能用于缓冲等待、右转弯等待，禁止用于超车', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '174', 
            'user_id' => '1', 
            'question_list_id' => '174', 
            'explain' => '全新西兰都使用这个规则，划有黄色虚线的地方，禁止停车，临时停车也不可以', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '175', 
            'user_id' => '1', 
            'question_list_id' => '175', 
            'explain' => '蓝色反光标识（猫眼）代表附近有消防栓', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '176', 
            'user_id' => '1', 
            'question_list_id' => '176', 
            'explain' => '右转弯让左转弯，也就是常说的大弯让小弯', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '177', 
            'user_id' => '1', 
            'question_list_id' => '177', 
            'explain' => '右转弯让左转弯，不分车辆的大小', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '178', 
            'user_id' => '1', 
            'question_list_id' => '178', 
            'explain' => '在双方都是绿灯的情况下，右转弯要让行左转弯', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '179', 
            'user_id' => '1', 
            'question_list_id' => '179', 
            'explain' => '蓝车行驶在主路上，而红车在岔路上，岔路车辆必须让行主路车辆', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '180', 
            'user_id' => '1', 
            'question_list_id' => '180', 
            'explain' => '红色摩托车是右转弯，蓝色小轿车是左转弯，右转让行左转，不区分车型', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '181', 
            'user_id' => '1', 
            'question_list_id' => '181', 
            'explain' => '红蓝双方都是停车让行标识，在对等的情况下，红车由于是右转弯必须让行左转弯的蓝车', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '182', 
            'user_id' => '1', 
            'question_list_id' => '182', 
            'explain' => '蓝车行驶在主路上而红车在岔路上等待，岔路上的车辆必须让行主路上各个方向的车辆', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '183', 
            'user_id' => '1', 
            'question_list_id' => '183', 
            'explain' => '摩托车正在主路上直行，蓝车准备从岔路上转弯进入主路，所以蓝车必须让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '184', 
            'user_id' => '1', 
            'question_list_id' => '184', 
            'explain' => '蓝车一方有让行标识，而摩托车一方没有，在这个路口摩托车方向的车辆有优先行驶权，所以蓝车需要让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '185', 
            'user_id' => '1', 
            'question_list_id' => '185', 
            'explain' => '不需要，因为红车已经打灯表明左转意图，二车不会有交叉点，所以即使红车在蓝车的右边，蓝车也不需要让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '186', 
            'user_id' => '1', 
            'question_list_id' => '186', 
            'explain' => '红车和蓝车的行驶路线没有交点，所以蓝车不需要让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '187', 
            'user_id' => '1', 
            'question_list_id' => '187', 
            'explain' => '蓝车等同于右转弯，所以必须让行对面的直行车辆，即便看起来蓝车的行车路线是直的，但是要根据路上的白色虚线来判断哪个方向才是主路', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '188', 
            'user_id' => '1', 
            'question_list_id' => '188', 
            'explain' => '蓝车在红车的右侧进入环岛，自然不用让行；红色车辆要让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '189', 
            'user_id' => '1', 
            'question_list_id' => '189', 
            'explain' => '红车在右侧，所以蓝车必须让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '190', 
            'user_id' => '1', 
            'question_list_id' => '190', 
            'explain' => '双方都是绿灯，双方都是右转，行车路线没有交点，所以蓝车无需让行红车', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '191', 
            'user_id' => '1', 
            'question_list_id' => '191', 
            'explain' => '双方都是绿灯的情况下，大弯让小弯，也就是右转弯的车辆让行左转弯的车辆，所以蓝车需要让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '192', 
            'user_id' => '1', 
            'question_list_id' => '192', 
            'explain' => '蓝车方向是绿灯，且蓝车准备直行，所以不需要让行等待转弯的红车', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '193', 
            'user_id' => '1', 
            'question_list_id' => '193', 
            'explain' => '蓝车是左转弯，红车右转弯，右转让行左转，所以蓝车不需要让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '194', 
            'user_id' => '1', 
            'question_list_id' => '194', 
            'explain' => '对面的红车直行，蓝车右转弯，所以蓝车必须让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '195', 
            'user_id' => '1', 
            'question_list_id' => '195', 
            'explain' => '蓝车行驶在主路上，而红车在岔路上，岔路必须让行主路因而蓝车无需让路', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '196', 
            'user_id' => '1', 
            'question_list_id' => '196', 
            'explain' => '蓝车的方向有停车等待标识，必须让行主路上的红车', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '197', 
            'user_id' => '1', 
            'question_list_id' => '197', 
            'explain' => '蓝车的方向有减速让行标识，必须让行主路上的红车', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '198', 
            'user_id' => '1', 
            'question_list_id' => '198', 
            'explain' => '蓝车正在主路上直行，所以不需要给红车让路', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '199', 
            'user_id' => '1', 
            'question_list_id' => '199', 
            'explain' => '蓝车行驶在主路上，不需要给红车让路', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '200', 
            'user_id' => '1', 
            'question_list_id' => '200', 
            'explain' => '蓝车有“停车等待”标识，所以它要给所有方向的来车让行（这道题基本停留在理论上，因为新西兰境内几乎没有这种两边设立不对称的交通标识情况出现）', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '201', 
            'user_id' => '1', 
            'question_list_id' => '201', 
            'explain' => '尽管红车在蓝车的右边，但是请注意图中蓝车方向没有减速让行标识，说明蓝车是主路，不需要给岔路上的红车让路', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '202', 
            'user_id' => '1', 
            'question_list_id' => '202', 
            'explain' => '蓝车从岔路上等待转上主路，必须要给主路上的红车让路', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '203', 
            'user_id' => '1', 
            'question_list_id' => '203', 
            'explain' => '蓝车在主路上直行，不需要给岔路上的车辆让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '204', 
            'user_id' => '1', 
            'question_list_id' => '204', 
            'explain' => '红车方向有停车让行标识，蓝车方向没有说明蓝车行驶在主路上，主路上的车辆无需给岔路上的车辆让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '205', 
            'user_id' => '1', 
            'question_list_id' => '205', 
            'explain' => '图中路口的四个方向都没有让行标识，所以所有方向的车辆都要让行右侧的车辆，蓝车在红车的右侧所以蓝车不需要给红车让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '206', 
            'user_id' => '1', 
            'question_list_id' => '206', 
            'explain' => '蓝车方向有停车让行标识，而红车方向没有这个标识，所以蓝车必须给主路上的红车让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '207', 
            'user_id' => '1', 
            'question_list_id' => '207', 
            'explain' => '蓝车行驶在主路上，红车方向有停车让行标识，所以蓝车不需要让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '208', 
            'user_id' => '1', 
            'question_list_id' => '208', 
            'explain' => '红车行驶在主路上，蓝车在岔路上等待转弯上主路，所以蓝车需要让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '209', 
            'user_id' => '1', 
            'question_list_id' => '209', 
            'explain' => '蓝车行驶在主路上，红车在岔路上，所以蓝车不需要给红车让路', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '210', 
            'user_id' => '1', 
            'question_list_id' => '210', 
            'explain' => '红蓝二车都行驶在主路上，二者都需要转向岔路的时候，右转弯让行左转弯，所以蓝车不需要让路', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '211', 
            'user_id' => '1', 
            'question_list_id' => '211', 
            'explain' => '蓝车行驶在主路上，红车方向有减速让行标识，所以蓝车不需要让路', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '212', 
            'user_id' => '1', 
            'question_list_id' => '212', 
            'explain' => '红车是直行，所以蓝车必须要让路', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '213', 
            'user_id' => '1', 
            'question_list_id' => '213', 
            'explain' => '红车在主路上直行，蓝车在岔路上等待右转弯，所以蓝车必须让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '214', 
            'user_id' => '1', 
            'question_list_id' => '214', 
            'explain' => '蓝车在主路上直行，不需要给辅路上准备转弯的车辆让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '215', 
            'user_id' => '1', 
            'question_list_id' => '215', 
            'explain' => '蓝车在岔路上等待右转，而红车在主路上直行，所以蓝车必须让路', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '216', 
            'user_id' => '1', 
            'question_list_id' => '216', 
            'explain' => '蓝车行驶在主路上，不需要给岔路上的车辆让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '217', 
            'user_id' => '1', 
            'question_list_id' => '217', 
            'explain' => '不需要解释，请看答案即可', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '218', 
            'user_id' => '1', 
            'question_list_id' => '218', 
            'explain' => '如果地面上只有左转的箭头，那么必须跟随箭头左转', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '219', 
            'user_id' => '1', 
            'question_list_id' => '219', 
            'explain' => '八角形的红色停车让行标识，意味着无论路口是否有车，都需要先停车下来，左右双方向观察安全后再前进', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '220', 
            'user_id' => '1', 
            'question_list_id' => '220', 
            'explain' => 'A不正确是因为你停在线的后面可能看不到双方向的车辆；C不正确是因为见到停车标识，无论是否有其他车辆都需要先停下；D不正确是因为压在停止线上可能你的车头就探出去了，可能会被主路上的车辆撞击', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '221', 
            'user_id' => '1', 
            'question_list_id' => '221', 
            'explain' => '绿色的左转相位信号灯明确的告知你可以左转', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '222', 
            'user_id' => '1', 
            'question_list_id' => '222', 
            'explain' => '夜间使用拖车，拖车后面必须加上红色的灯光', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '223', 
            'user_id' => '1', 
            'question_list_id' => '223', 
            'explain' => '即便贴在车窗上的WOF标识，也有可能是过期的车检证明，这时车辆不能上路，所以A的说法不', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '224', 
            'user_id' => '1', 
            'question_list_id' => '224', 
            'explain' => '超过十五岁，自己负责；小于十五岁，司机负责', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '225', 
            'user_id' => '1', 
            'question_list_id' => '225', 
            'explain' => '只要开车，必须携带驾照', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '226', 
            'user_id' => '1', 
            'question_list_id' => '226', 
            'explain' => '不到十五岁的乘客安全带，由司机负责，超过十五岁，乘客自己负责', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '227', 
            'user_id' => '1', 
            'question_list_id' => '227', 
            'explain' => '不需要解释，答案B说的很清楚了', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '228', 
            'user_id' => '1', 
            'question_list_id' => '228', 
            'explain' => '初学者驾照搭载乘客，必须经过Supervisor的同意', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '229', 
            'user_id' => '1', 
            'question_list_id' => '229', 
            'explain' => '如果有Supervisor在车中，限制性驾照可以搭载非亲属的乘客；如果没有Supervisor，那么限制性驾照只允许搭载自己的孩子、配偶或是事实上的伴侣', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '230', 
            'user_id' => '1', 
            'question_list_id' => '230', 
            'explain' => '小备胎不是全尺寸的轮胎，抓地力与其它的轮胎不相同，所以不能以高速行进，否则车辆急刹车的时候会跑偏；80公里/小时是必须死记硬背的数值', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '231', 
            'user_id' => '1', 
            'question_list_id' => '231', 
            'explain' => '小备胎不是全尺寸的轮胎，抓地力与其它的轮胎不相同，所以不能以高速行进，否则车辆急刹车的时候会跑偏；80公里/小时是必须死记硬背的数值；小备胎不安全也不方便，应该尽快找到补胎的地方修理或是更换原始尺寸的轮胎', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '232', 
            'user_id' => '1', 
            'question_list_id' => '232', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '233', 
            'user_id' => '1', 
            'question_list_id' => '233', 
            'explain' => '开放道路最高时速限制在100公里/小时，如果牵引拖车前进，则降低到90公里/小时', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '234', 
            'user_id' => '1', 
            'question_list_id' => '234', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '235', 
            'user_id' => '1', 
            'question_list_id' => '235', 
            'explain' => '新西兰Class 1驾照，可以驾驶排量不超过50CC的轻便摩托车(机器脚踏车)，也就是俗称的“小绵羊”，不需要使用摩托车驾照', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '236', 
            'user_id' => '1', 
            'question_list_id' => '236', 
            'explain' => '改装车辆后，必须重新通过车辆安全性能指标检测', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '237', 
            'user_id' => '1', 
            'question_list_id' => '237', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '238', 
            'user_id' => '1', 
            'question_list_id' => '238', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '239', 
            'user_id' => '1', 
            'question_list_id' => '239', 
            'explain' => '没有通过WOF的车辆上路，自然会被罚款，至少200一次；并且如果这辆车出现交通事故，保险公司也会拒赔', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '240', 
            'user_id' => '1', 
            'question_list_id' => '240', 
            'explain' => '使用拖车，必须给拖车安装红色尾灯', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '241', 
            'user_id' => '1', 
            'question_list_id' => '241', 
            'explain' => '消声器防止产生大的噪音，工作良好的排气管会把废气排放到车辆的尾部，远离乘客舱', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '242', 
            'user_id' => '1', 
            'question_list_id' => '242', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '243', 
            'user_id' => '1', 
            'question_list_id' => '243', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '244', 
            'user_id' => '1', 
            'question_list_id' => '244', 
            'explain' => '全新车头三年不需要检测，随后一年一检验；2000年后注册的车辆也是一年一检；2000年之前的车辆半年检验一次', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '245', 
            'user_id' => '1', 
            'question_list_id' => '245', 
            'explain' => '只有警官有资格拦截你，其他人都不行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '246', 
            'user_id' => '1', 
            'question_list_id' => '246', 
            'explain' => '全新车头三年不需要检测，随后一年一检验；2000年后注册的车辆也是一年一检；2000年之前的车辆半年检验一次', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '247', 
            'user_id' => '1', 
            'question_list_id' => '247', 
            'explain' => '刹车灯不工作，别人有可能会追尾，所以赶紧去修理', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '248', 
            'user_id' => '1', 
            'question_list_id' => '248', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '249', 
            'user_id' => '1', 
            'question_list_id' => '249', 
            'explain' => '全部都正确，请看答案的描述并牢记', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '250', 
            'user_id' => '1', 
            'question_list_id' => '250', 
            'explain' => '不平整的道路，会有这个提示', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '251', 
            'user_id' => '1', 
            'question_list_id' => '251', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '252', 
            'user_id' => '1', 
            'question_list_id' => '252', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '253', 
            'user_id' => '1', 
            'question_list_id' => '253', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '254', 
            'user_id' => '1', 
            'question_list_id' => '254', 
            'explain' => '死记硬背题，这个标识标明双方向的车辆拥有相同的道路优先权，分左右行驶', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '255', 
            'user_id' => '1', 
            'question_list_id' => '255', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '256', 
            'user_id' => '1', 
            'question_list_id' => '256', 
            'explain' => '这个标识只会出现在环岛之前，提醒司机要注意让行环岛右侧的车辆', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '257', 
            'user_id' => '1', 
            'question_list_id' => '257', 
            'explain' => '小心农场上的牛', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '258', 
            'user_id' => '1', 
            'question_list_id' => '258', 
            'explain' => '蓝底白字的P表示可以停车，30表示可以停留的最长时间', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '259', 
            'user_id' => '1', 
            'question_list_id' => '259', 
            'explain' => '出现这个标识说明道路上有小砂石，别的车辆行驶的时候会溅起来打在你的挡风玻璃上造成裂纹', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '260', 
            'user_id' => '1', 
            'question_list_id' => '260', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '261', 
            'user_id' => '1', 
            'question_list_id' => '261', 
            'explain' => '白底红字表示只允许规定的车辆停靠，左右双方向箭头表示这块标志牌的左右两边都是公车站', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '262', 
            'user_id' => '1', 
            'question_list_id' => '262', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '263', 
            'user_id' => '1', 
            'question_list_id' => '263', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '264', 
            'user_id' => '1', 
            'question_list_id' => '264', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '265', 
            'user_id' => '1', 
            'question_list_id' => '265', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '266', 
            'user_id' => '1', 
            'question_list_id' => '266', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '267', 
            'user_id' => '1', 
            'question_list_id' => '267', 
            'explain' => '无论是超高、超宽、超长、还是超重，只要是车，就必须注意限高是多少', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '268', 
            'user_id' => '1', 
            'question_list_id' => '268', 
            'explain' => '大号的白色箭头表示你这个方向拥有道路的优先权，对面的车辆要给你让路', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '269', 
            'user_id' => '1', 
            'question_list_id' => '269', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '270', 
            'user_id' => '1', 
            'question_list_id' => '270', 
            'explain' => '不做特殊标注的情况下，公交车道允许公交车、自行车、摩托车、轻便摩托车使用', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '271', 
            'user_id' => '1', 
            'question_list_id' => '271', 
            'explain' => '死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '272', 
            'user_id' => '1', 
            'question_list_id' => '272', 
            'explain' => '红色是救护车或救火车、红蓝双色是警车、纯黄色是道路施工和维护车辆、开道车通常都是黄紫双色的', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '273', 
            'user_id' => '1', 
            'question_list_id' => '273', 
            'explain' => '红色是救护车或救火车、红蓝双色是警车、纯黄色是道路施工和维护车辆、开道车通常都是黄紫双色的', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '274', 
            'user_id' => '1', 
            'question_list_id' => '274', 
            'explain' => '无需解释，禁止掉头的标记', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '275', 
            'user_id' => '1', 
            'question_list_id' => '275', 
            'explain' => '这是i-site的标记，也就是信息中心的指路牌', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '276', 
            'user_id' => '1', 
            'question_list_id' => '276', 
            'explain' => '靠左行驶标记，主要出现在道路的中央，提醒车辆在正确的方向前进', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '277', 
            'user_id' => '1', 
            'question_list_id' => '277', 
            'explain' => '无需解释', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '278', 
            'user_id' => '1', 
            'question_list_id' => '278', 
            'explain' => '路上有施工的情况下，需要单侧放行的时候，道路上的施工人员将人工指挥交通，请服从他们的停车请求', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '279', 
            'user_id' => '1', 
            'question_list_id' => '279', 
            'explain' => '这个标识出现在学校、幼儿园附近，注意儿童过马路', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '280', 
            'user_id' => '1', 
            'question_list_id' => '280', 
            'explain' => '人行横道的标记，死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '281', 
            'user_id' => '1', 
            'question_list_id' => '281', 
            'explain' => '铁道交叉口标记，死记硬背题', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '282', 
            'user_id' => '1', 
            'question_list_id' => '282', 
            'explain' => '砂石路面，溅起来的石子会把风挡玻璃打出裂纹，所以要慢速前进', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '283', 
            'user_id' => '1', 
            'question_list_id' => '283', 
            'explain' => '开放道路标记，表示从这个标记后所有之前的限速要求全部取消，但是最高速度不能超过100公里/小时', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '284', 
            'user_id' => '1', 
            'question_list_id' => '284', 
            'explain' => '限速标志，新西兰境内以公里/小时计算，所以是70公里/小时', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '285', 
            'user_id' => '1', 
            'question_list_id' => '285', 
            'explain' => '左侧车道可能有临时施工因而关闭，需要左边的车流与右侧的汇集在一起，注意让行', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '286', 
            'user_id' => '1', 
            'question_list_id' => '286', 
            'explain' => '居民区最常见的限速，意思是最高前进速度不能超过50公里/小时', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '287', 
            'user_id' => '1', 
            'question_list_id' => '287', 
            'explain' => '不管是蓝底白字还是黄底黑字，只要有ACCIDENT的字样就应该把车速降到20公里/小时', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '288', 
            'user_id' => '1', 
            'question_list_id' => '288', 
            'explain' => 'C代表窄桥梁标识，同时你的方向需要让行对面的车辆；因而这个标识不会出现在火车道口', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '289', 
            'user_id' => '1', 
            'question_list_id' => '289', 
            'explain' => '你这边是白色较大的箭头，代表着你有道路的优先通过权', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '290', 
            'user_id' => '1', 
            'question_list_id' => '290', 
            'explain' => '这个标记标明弯道比较急，下面的数字是推荐的时速，你可以超过这个速度，不犯法，但是可能过弯过得不舒服', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '291', 
            'user_id' => '1', 
            'question_list_id' => '291', 
            'explain' => '见到事故标记，必须以20公里/小时的速度前进', 
            'like' => '1',
            ]);
            
            DB::table('explains')->insert([ 
            'id' => '292', 
            'user_id' => '1', 
            'question_list_id' => '292', 
            'explain' => '天气良好的情况下，小型车辆在道路最高限速为100公里；如果你驾驶的是卡车或者牵引着拖车，那么最高时速为90公里/小时', 
            'like' => '1',
            ]);
            
    }
}
