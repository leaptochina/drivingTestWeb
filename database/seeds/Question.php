<?php

use Illuminate\Database\Seeder;

class Question extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->truncate();

        DB::table('questions')->insert([ 
            'id' => '1', 
            'language_id' => '1', 
            'question_list_id' => '1', 
            'topic' => 'Except in an emergency when must you not use the horn on your vehicle in a 50kph zone?', 
            'a' => 'Between midnight and 8am', 
            'b' => 'Between 4pm and 6pm', 
            'c' => 'Any time you are in a school zone or near a hospital', 
            'd' => 'Between 2pm and 4pm', 
            'e' => 'Between 11pm and 7am', 
            'ans' => 'E', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '2', 
            'language_id' => '2', 
            'question_list_id' => '1', 
            'topic' => '如非紧急情况，在50公里/小时限速区域什么时段您不可以鸣笛？', 
            'a' => '午夜到早上八点', 
            'b' => '下午四点到六点', 
            'c' => '任意时间在靠近学校或医院的区域', 
            'd' => '下午两点到四点', 
            'e' => '晚上十一点到早上七点', 
            'ans' => 'E', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '3', 
            'language_id' => '1', 
            'question_list_id' => '2', 
            'topic' => 'If you can do so safely, you may pass on the left at an intersection if:', 
            'a' => 'the vehicle in front is going faster than the speed limit', 
            'b' => 'the vehicle in front is signalling a left turn', 
            'c' => 'you have your headlights on', 
            'd' => 'the vehicle in front is signalling a right turn', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '4', 
            'language_id' => '2', 
            'question_list_id' => '2', 
            'topic' => '何种情况时您可以在确保安全的情况下在路口从左侧超车？', 
            'a' => '前车速度高于道路限速', 
            'b' => '前车正在准备向左转', 
            'c' => '您开启了头灯', 
            'd' => '前车正在准备向右转', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '5', 
            'language_id' => '1', 
            'question_list_id' => '3', 
            'topic' => 'When MUST you dip the headlights on your vehicle? Select all that apply.', 
            'a' => 'when you are following other vehicles', 
            'b' => 'when a police officer is directing traffic', 
            'c' => 'when you park', 
            'd' => 'when other vehicles are coming towards you', 
            'e' => '', 
            'ans' => 'ABCD', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '6', 
            'language_id' => '2', 
            'question_list_id' => '3', 
            'topic' => '什么情况下你必须使用近光灯？选择所有正确的', 
            'a' => '当你跟随其它车辆的时候', 
            'b' => '当交通警察正在指挥交通', 
            'c' => '当你准备停车', 
            'd' => '当对面驶来车辆的时候', 
            'e' => '', 
            'ans' => 'ABCD', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '7', 
            'language_id' => '1', 
            'question_list_id' => '4', 
            'topic' => 'When must you signal that you are turning to the right?', 
            'a' => 'Only if other traffic is approaching or following you', 
            'b' => 'Always, and for at least two seconds before you turn', 
            'c' => 'Always, and for at least three seconds before you turn', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '8', 
            'language_id' => '2', 
            'question_list_id' => '4', 
            'topic' => '如果你想右转弯，什么情况下必须使用右转向灯？', 
            'a' => '仅在对面或后面有车的时候', 
            'b' => '总是使用转向灯，在转弯前至少打灯两秒', 
            'c' => '总是使用转向灯，在转弯前至少打灯三秒', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '9', 
            'language_id' => '1', 
            'question_list_id' => '5', 
            'topic' => 'When driving at night, which vehicle lights should you turn on?', 
            'a' => 'Position lights (park lights) only', 
            'b' => 'Dipped headlights (low beam)', 
            'c' => 'High beam lights', 
            'd' => 'Fog lights', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '10', 
            'language_id' => '2', 
            'question_list_id' => '5', 
            'topic' => '夜间行驶的时候，必须打开什么样的灯光？', 
            'a' => '停车指示灯', 
            'b' => '车辆前灯，并调为近光灯', 
            'c' => '远光灯', 
            'd' => '雾灯', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '11', 
            'language_id' => '1', 
            'question_list_id' => '6', 
            'topic' => 'At night, when MUST you always dip the headlights on your vehicle? Select all that apply.', 
            'a' => 'when other vehicles are coming towards you', 
            'b' => 'when you are following other vehicles', 
            'c' => 'when a police officer is directing traffic', 
            'd' => 'when you park', 
            'e' => 'when you are reversing', 
            'ans' => 'ABCD', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '12', 
            'language_id' => '2', 
            'question_list_id' => '6', 
            'topic' => '夜间什么情况下你必须使用车辆头灯？选择所有正确的', 
            'a' => '对面有车驶来的时候', 
            'b' => '跟随其它车辆前行的时候', 
            'c' => '交通警察正在指挥交通的时候', 
            'd' => '准备停车的时候', 
            'e' => '倒车的时候', 
            'ans' => 'ABCD', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '13', 
            'language_id' => '1', 
            'question_list_id' => '7', 
            'topic' => 'When are you allowed to pass another vehicle to its left? Check all that apply.', 
            'a' => 'A police officer has directed you to', 
            'b' => 'There are two or more lanes on your side of the road and it`s safe to pass', 
            'c' => 'The car you will pass is signalling a right turn and is either slowing down or has stopped', 
            'd' => 'The vehicle is a motorbike or scooter on a single lane road and therefore there`s enough room to pass safely', 
            'e' => '', 
            'ans' => 'ABC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '14', 
            'language_id' => '2', 
            'question_list_id' => '7', 
            'topic' => '什么时候可以从其它车辆的左侧超车？选择所有正确的', 
            'a' => '交通警察引导你这么做', 
            'b' => '道路有两条以上的行车道，并且你可以从左侧安全超车', 
            'c' => '被超越的车辆正在打右转向灯并且速度已经降低或是已经停下来了', 
            'd' => '被超越的是正在单车道路面行驶的摩托车或是轻便摩托车，而且你确保有足够的空间可以安全超越', 
            'e' => '', 
            'ans' => 'ABC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '15', 
            'language_id' => '1', 
            'question_list_id' => '8', 
            'topic' => 'When are you allowed to pass another moving vehicle to its right? Check all that apply', 
            'a' => 'You can see at least 100m ahead of you when you start passing', 
            'b' => 'You`ve signalled right for at least 3 seconds', 
            'c' => 'It`s safe to exceed the speed limit for a short time to get past', 
            'd' => 'You can see at least 100m ahead of you when you`ve finished passing', 
            'e' => '', 
            'ans' => 'BD', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '16', 
            'language_id' => '2', 
            'question_list_id' => '8', 
            'topic' => '什么情况下可以从其他行驶中车辆的右侧超车？选择所有正确的', 
            'a' => '开始超车的时候，你能够看到前方100米以上距离的道路情况', 
            'b' => '你至少已经打右转向灯3秒钟表明超车意图', 
            'c' => '短时间内以超过道路限速的方式超越', 
            'd' => '超车结束的时候，你还可以看到前方100米以上距离的道路情况', 
            'e' => '', 
            'ans' => 'BD', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '17', 
            'language_id' => '1', 
            'question_list_id' => '9', 
            'topic' => 'What is the purpose of the two-second rule?', 
            'a' => 'To allow overtaking vehicles to move back into the line of traffic safely if required.', 
            'b' => 'To give you enough time to stop if the vehicle in front stops.', 
            'c' => 'Two seconds is enough time to stop in any weather conditions, if required.', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '18', 
            'language_id' => '2', 
            'question_list_id' => '9', 
            'topic' => '两秒规则的目的是什么？', 
            'a' => '让超车的车辆能够安全的回到原来的车道', 
            'b' => '如果前车停下，让后车有足够的时间刹车', 
            'c' => '两秒钟可以让车辆在所有天气条件下停稳', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '19', 
            'language_id' => '1', 
            'question_list_id' => '10', 
            'topic' => 'What does it mean if yellow traffic signals are flashing?', 
            'a' => 'The traffic signals are faulty. Apply the give way rules', 
            'b' => 'You can proceed through the intersection if pedestrians have finished crossing', 
            'c' => 'A wide load is coming through the junction - prepare to stop', 
            'd' => 'A crash has just happened', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '20', 
            'language_id' => '2', 
            'question_list_id' => '10', 
            'topic' => '黄色的交通信号灯闪烁是什么意思？', 
            'a' => '交通信号灯有故障，路口所有车辆遵循让路规则', 
            'b' => '如果行人已经过完马路，你可以继续从路口前行', 
            'c' => '准备停车，因为前方有超宽车辆要经过路口', 
            'd' => '前方有事故', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '21', 
            'language_id' => '1', 
            'question_list_id' => '11', 
            'topic' => 'What colour is the line painted on a sealed road at a Give Way sign?', 
            'a' => 'Yellow', 
            'b' => 'Red', 
            'c' => 'White', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '22', 
            'language_id' => '2', 
            'question_list_id' => '11', 
            'topic' => '路面的减速让行标识是什么颜色的？', 
            'a' => '黄色', 
            'b' => '红色', 
            'c' => '白色', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '23', 
            'language_id' => '1', 
            'question_list_id' => '12', 
            'topic' => 'What does this marking mean?', 
            'a' => 'Charging outlet for electric and hybrid vehicles', 
            'b' => 'No parking, except for buses', 
            'c' => 'Bus lane ahead', 
            'd' => 'Fire hydrant', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1012.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '24', 
            'language_id' => '2', 
            'question_list_id' => '12', 
            'topic' => '这个标识是什么意思？', 
            'a' => '电动汽车充电桩', 
            'b' => '除公交车外不许停车', 
            'c' => '前方公交车道', 
            'd' => '消防栓', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1012.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '25', 
            'language_id' => '1', 
            'question_list_id' => '13', 
            'topic' => 'What must you do when red lights are flashing at a railway level crossing?', 
            'a' => 'Check both directions and cross if there are no trains coming', 
            'b' => 'Stop until the lights stop flashing', 
            'c' => 'Go as soon as the train has passed', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '26', 
            'language_id' => '2', 
            'question_list_id' => '13', 
            'topic' => '铁路交叉道口的红色信号灯闪亮的时候，你该怎么做？', 
            'a' => '查看铁路的两边，如果没有火车到来那么通过路口', 
            'b' => '停车，等待指示灯熄灭再前行', 
            'c' => '火车一过去就马上通过道口', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '27', 
            'language_id' => '1', 
            'question_list_id' => '14', 
            'topic' => 'What must you do before you turn to the right on a straight road? Check all that apply.', 
            'a' => 'Signal for at least three seconds', 
            'b' => 'Give way to vehicles from the left', 
            'c' => 'Give way to vehicles coming straight ahead or turning left', 
            'd' => 'Move towards the centre line', 
            'e' => 'Check your mirrors', 
            'ans' => 'ACDE', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '28', 
            'language_id' => '2', 
            'question_list_id' => '14', 
            'topic' => '在直行的道路上，如果你想右转弯，应该怎么做？选择所有正确的', 
            'a' => '打右转向灯至少三秒钟', 
            'b' => '给所有左侧的车辆让路', 
            'c' => '给对面直行或是准备左转的车辆让路', 
            'd' => '向道路的中线靠近', 
            'e' => '检查你的后视镜看看是否有危险', 
            'ans' => 'ACDE', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '29', 
            'language_id' => '1', 
            'question_list_id' => '15', 
            'topic' => 'What must you do when red lights are flashing at a railway level crossing?', 
            'a' => 'Check both directions and cross if there are no trains coming', 
            'b' => 'Stop until the lights stop flashing', 
            'c' => 'Go as soon as the train has passed', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '30', 
            'language_id' => '2', 
            'question_list_id' => '15', 
            'topic' => '如果铁路交叉道口红灯亮起，你该怎么做？', 
            'a' => '左右看看，如果没有火车那么通过道口', 
            'b' => '停车等待红灯熄灭后再前进', 
            'c' => '火车一过道口就前进', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '31', 
            'language_id' => '1', 
            'question_list_id' => '16', 
            'topic' => 'If you see a police car with its red and blue lights flashing behind you, should you pull over and stop?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1016.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '32', 
            'language_id' => '2', 
            'question_list_id' => '16', 
            'topic' => '如果你发现你的车后有警车亮着红蓝双色的闪灯，你是否应该靠边停车？', 
            'a' => '是的', 
            'b' => '不', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1016.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '33', 
            'language_id' => '1', 
            'question_list_id' => '17', 
            'topic' => 'Who may legally require you to give a blood sample?', 
            'a' => 'An ambulance officer', 
            'b' => 'A police officer', 
            'c' => 'A judge or magistrate', 
            'd' => 'None of the above', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '34', 
            'language_id' => '2', 
            'question_list_id' => '17', 
            'topic' => '谁可以要求你给出血液样本？', 
            'a' => '救护车人员', 
            'b' => '警官', 
            'c' => '法官', 
            'd' => '以上都不正确', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '35', 
            'language_id' => '1', 
            'question_list_id' => '18', 
            'topic' => 'When does a police officer have the power to arrest you? Select all that apply.', 
            'a' => 'If you don`t stop when requested', 
            'b' => 'If you refuse to tell the police officer your name and address, or give false information about the ownership of the vehicle you are driving', 
            'c' => 'If you refuse the procedures for blood or breath alcohol testing', 
            'd' => 'If you drive when you are told not to by a police officer', 
            'e' => 'If you don`t give your car keys to an officer when requested', 
            'ans' => 'ABCDE', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '36', 
            'language_id' => '2', 
            'question_list_id' => '18', 
            'topic' => '什么情况下警官可以逮捕你？选择所有正确的', 
            'a' => '如果你拒绝停车', 
            'b' => '如果你拒绝告知你的姓名住址，或者无法正确说出你正在驾驶的车辆的车主信息', 
            'c' => '如果你拒绝血液或是呼吸酒精测试', 
            'd' => '如果警官告诉你不要开车你却继续驾驶', 
            'e' => '如果警官要求你交出车辆钥匙，你却拒绝', 
            'ans' => 'ABCDE', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '37', 
            'language_id' => '1', 
            'question_list_id' => '19', 
            'topic' => 'When can you use your horn? Select all that apply.', 
            'a' => 'To warn another driver of your presence', 
            'b' => 'To warn a horse and rider you are approaching', 
            'c' => 'If someone cuts you off', 
            'd' => 'As you are leaving your friend`s house', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '38', 
            'language_id' => '2', 
            'question_list_id' => '19', 
            'topic' => '什么情况下你可以鸣笛？选择所有正确的', 
            'a' => '警告其它司机你的车辆正在驶近、或告知你的方位', 
            'b' => '警告前面的骑马的人和马匹', 
            'c' => '如果有人从你前面插队了', 
            'd' => '你离开朋友家的时候', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '39', 
            'language_id' => '1', 
            'question_list_id' => '20', 
            'topic' => 'How many standard drinks can you have before driving if you are under 20 years old?', 
            'a' => 'One', 
            'b' => 'Two', 
            'c' => 'Three', 
            'd' => 'None', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '40', 
            'language_id' => '2', 
            'question_list_id' => '20', 
            'topic' => '如果你不足20周岁，你可以喝多少个标准量的酒精饮品并驾驶车辆？', 
            'a' => '1', 
            'b' => '2', 
            'c' => '3', 
            'd' => '0', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '41', 
            'language_id' => '1', 
            'question_list_id' => '21', 
            'topic' => 'If you are turning left at an intersection, you must give way to all vehicles coming towards you that are turning right. True or false?', 
            'a' => 'True', 
            'b' => 'False', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '42', 
            'language_id' => '2', 
            'question_list_id' => '21', 
            'topic' => '如果你在路口准备左转弯，你必须给所有对面驶来向右转的车辆让路，正确吗？', 
            'a' => '对', 
            'b' => '错', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '43', 
            'language_id' => '1', 
            'question_list_id' => '22', 
            'topic' => 'If you are going straight through a roundabout, don`t signal as you come up to the roundabout, only signal left as you pass the exit before the one you wish to take. True or false?', 
            'a' => 'True', 
            'b' => 'False', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '44', 
            'language_id' => '2', 
            'question_list_id' => '22', 
            'topic' => '如果前方环岛你准备直行，进入环岛的时候你不必打转向灯，不过驶离环岛的时候要提前打左转向灯，正确与否？', 
            'a' => '对', 
            'b' => '错', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '45', 
            'language_id' => '1', 
            'question_list_id' => '23', 
            'topic' => 'When must you not pass a vehicle on the left at an intersection?', 
            'a' => 'When the other car has stopped', 
            'b' => 'When the other car is indicating right', 
            'c' => 'When the other car is indicating left', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '46', 
            'language_id' => '2', 
            'question_list_id' => '23', 
            'topic' => '什么情况下你在路口不能从左侧超车？', 
            'a' => '当前车停车的时候', 
            'b' => '当前车准备右转弯的时候', 
            'c' => '当前车准备左转弯的时候', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '47', 
            'language_id' => '1', 
            'question_list_id' => '24', 
            'topic' => 'What does `speed limit` mean?', 
            'a' => 'The recommended speed for that road', 
            'b' => 'The maximum speed for that road in good conditions', 
            'c' => 'The minimum speed for that road in good conditions', 
            'd' => 'The maximum speed except for when you are overtaking another vehicle', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1024.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '48', 
            'language_id' => '2', 
            'question_list_id' => '24', 
            'topic' => '限速标识意味着什么？', 
            'a' => '推荐时速', 
            'b' => '在道路条件良好情况下的最高时速', 
            'c' => '在道路条件良好情况下的最低时速', 
            'd' => '最高时速限制，不过超车的时候可以高过这个限制', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1024.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '49', 
            'language_id' => '1', 
            'question_list_id' => '25', 
            'topic' => 'As the holder of any class of driver licence, are you required to carry your licence at all times when driving?', 
            'a' => 'No', 
            'b' => 'Yes', 
            'c' => 'Only if you`re on a restricted licence', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '50', 
            'language_id' => '2', 
            'question_list_id' => '25', 
            'topic' => '你在开车的时候是否必须随身携带你的驾照？', 
            'a' => '不', 
            'b' => '是的', 
            'c' => '除非你是限制性驾照否则不用带', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '51', 
            'language_id' => '1', 
            'question_list_id' => '26', 
            'topic' => 'What is the speed limit from the time you pass an Accident sign until you have passed the crash site?', 
            'a' => '20kph', 
            'b' => '30kph', 
            'c' => '40kph', 
            'd' => '50kph', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1026.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '52', 
            'language_id' => '2', 
            'question_list_id' => '26', 
            'topic' => '当你看到道路上的事故标识的时候，你应该保持限速多少？', 
            'a' => '20公里/小时', 
            'b' => '30公里/小时', 
            'c' => '40公里/小时', 
            'd' => '50公里/小时', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1026.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '53', 
            'language_id' => '1', 
            'question_list_id' => '27', 
            'topic' => 'When coming up to a roundabout you must give way to all vehicles that will cross your path from your left. Correct or incorrect?', 
            'a' => 'Correct', 
            'b' => 'Incorrect', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '54', 
            'language_id' => '2', 
            'question_list_id' => '27', 
            'topic' => '当你驶入环岛的时候，你必须给所有你左侧的车辆让路，正确还是错误？', 
            'a' => '正确', 
            'b' => '错误', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '55', 
            'language_id' => '1', 
            'question_list_id' => '28', 
            'topic' => 'What must you do if you want to turn right at traffic signals where a green light is showing?', 
            'a' => 'Give way to vehicles coming towards you', 
            'b' => 'Give way to vehicles from the left', 
            'c' => 'Give way to vehicles from the right', 
            'd' => 'Wait until the lights turn to red, then turn', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '56', 
            'language_id' => '2', 
            'question_list_id' => '28', 
            'topic' => '当前方绿灯的时候，如果你希望右转弯，应该怎么做？', 
            'a' => '给对面的向你驶来的车辆让路', 
            'b' => '给所有左侧的车辆让路', 
            'c' => '给所有右侧的车辆让路', 
            'd' => '等待绿灯变红后，右转', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '57', 
            'language_id' => '1', 
            'question_list_id' => '29', 
            'topic' => 'If there are one or more yellow flashing lights at traffic signals, what does it mean?', 
            'a' => 'All cars must stop as emergency vehicles are coming through', 
            'b' => 'The lights are faulty and the Give Way rules apply', 
            'c' => 'There`s a diversion ahead', 
            'd' => 'Move to the left hand side of the road', 
            'e' => 'Drive on at the same speed', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '58', 
            'language_id' => '2', 
            'question_list_id' => '29', 
            'topic' => '如果路口的信号灯有一个或是多个正在闪黄灯，这表明什么意思？', 
            'a' => '所有车辆必须停车，紧急事故处理车辆将要通过路口', 
            'b' => '信号灯出现故障，所有车辆遵循让路规则', 
            'c' => '前方道路分流', 
            'd' => '将你的车辆移至道路的左侧', 
            'e' => '保持速度继续前行通过路口', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '59', 
            'language_id' => '1', 
            'question_list_id' => '30', 
            'topic' => 'What is the speed limit for vehicles passing a school bus that has stopped to let children on or off?', 
            'a' => '20kph', 
            'b' => '30kph', 
            'c' => '40kph', 
            'd' => '50kph', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '60', 
            'language_id' => '2', 
            'question_list_id' => '30', 
            'topic' => '前方的校车儿童正在上下车，你该用什么样的速度通过？', 
            'a' => '20公里/小时', 
            'b' => '30公里/小时', 
            'c' => '40公里/小时', 
            'd' => '50公里/小时', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '61', 
            'language_id' => '1', 
            'question_list_id' => '31', 
            'topic' => 'You are turning right at traffic signals showing a red arrow pointing to the right. What should you do?', 
            'a' => 'Stop until you receive a green arrow, then proceed if it`s safe to go', 
            'b' => 'Stop until the red arrow disappears and you get a green traffic light, then proceed with the Give Way rules', 
            'c' => 'Both a and b are correct', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1031.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '62', 
            'language_id' => '2', 
            'question_list_id' => '31', 
            'topic' => '你在路口准备右转弯，这时候路口的信号灯右转箭头为红色，你该怎么做？', 
            'a' => '停车等待绿色的右转灯亮起，然后安全通过', 
            'b' => '等待红色右转信号灯消失，在确保直行绿灯亮着的情况下，遵循让路规则右转通过路口', 
            'c' => 'A和B都正确', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1031.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '63', 
            'language_id' => '1', 
            'question_list_id' => '32', 
            'topic' => 'At an intersection what do a police officer`s directions overrule?', 
            'a' => 'Traffic lights', 
            'b' => 'Give Way rules', 
            'c' => 'Road signs, such as stop signs', 
            'd' => 'All of the above', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '64', 
            'language_id' => '2', 
            'question_list_id' => '32', 
            'topic' => '如果路口有指挥交通的警官，以下哪些规则将被取代？', 
            'a' => '交通信号灯', 
            'b' => '让路规则', 
            'c' => '路面标识，例如停车让行标识', 
            'd' => '以上都正确', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '65', 
            'language_id' => '1', 
            'question_list_id' => '33', 
            'topic' => 'If you`re caught driving while disqualified, can a police officer impound your car on the spot?', 
            'a' => 'Yes', 
            'b' => 'Only if there is not another eligible driver in the car', 
            'c' => 'No. They must get a impound order', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '66', 
            'language_id' => '2', 
            'question_list_id' => '33', 
            'topic' => '如果你无照驾驶，警官可以扣留你的车辆吗？', 
            'a' => '是的', 
            'b' => '除非同车没有别人可以帮忙驾驶，否则不能扣车', 
            'c' => '不，警官必须先从法官那里拿来扣车许可才能进行扣留', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '67', 
            'language_id' => '1', 
            'question_list_id' => '34', 
            'topic' => 'What is the legal definition of a road?', 
            'a' => 'Any sealed or unsealed street or highway, whether there are lines painted or not', 
            'b' => 'Any area the public is reasonably allowed to drive on at times, including streets, highways, riverbeds, beaches, wharves and car parks', 
            'c' => 'Streets and highways with painted lines to indicate lanes', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1034.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '68', 
            'language_id' => '2', 
            'question_list_id' => '34', 
            'topic' => '法律定义道路的标准是什么？', 
            'a' => '任何有柏油或是无柏油的街道或是高速路，无论上面是否有道路标线', 
            'b' => '任何公众可以在任意时间驾驶车辆行驶的地方，包括街道、高速路、河床、海滩、码头、停车场等等', 
            'c' => '划有标示标线和车道标线的街道和高速路', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1034.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '69', 
            'language_id' => '1', 
            'question_list_id' => '35', 
            'topic' => 'How long should you signal for before passing another vehicle?', 
            'a' => 'One second', 
            'b' => 'Two seconds', 
            'c' => 'Three seconds', 
            'd' => 'Only signal if there`s another vehicle behind you or one coming towards you', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1035.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '70', 
            'language_id' => '2', 
            'question_list_id' => '35', 
            'topic' => '超车前应该提前几秒打转向灯？', 
            'a' => '1秒', 
            'b' => '2秒', 
            'c' => '3秒', 
            'd' => '除非后面或是前面有车，否则不打灯', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1035.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '71', 
            'language_id' => '1', 
            'question_list_id' => '36', 
            'topic' => 'What should you do when you come up to a one-lane bridge?', 
            'a' => 'If you reach the bridge first, you can continue to cross', 
            'b' => 'Slow down and flash your lights to warn oncoming drivers if you don`t have the right of way', 
            'c' => 'Slow down, be prepared to stop and only proceed if the bridge is clear of oncoming traffic', 
            'd' => 'Go only if you have a blue sign with a white arrow in your direction', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1036.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '72', 
            'language_id' => '2', 
            'question_list_id' => '36', 
            'topic' => '当你准备通过仅允许一辆车通过的桥梁时，你该怎么做？', 
            'a' => '先到先过', 
            'b' => '减速，如果你没有优先通过权那么向对面的驾驶员晃大灯示意', 
            'c' => '减速，如果对面没有车辆则通过', 
            'd' => '除非在你的一侧看到了蓝底白箭头的标识才能通过', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1036.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '73', 
            'language_id' => '1', 
            'question_list_id' => '37', 
            'topic' => 'When should you apply the four-second rule?', 
            'a' => 'If the road is wet or frosty, or you are towing a trailer', 
            'b' => 'If your brakes are almost worn out', 
            'c' => 'If you`re travelling at more than 100kph', 
            'd' => 'At night', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '74', 
            'language_id' => '2', 
            'question_list_id' => '37', 
            'topic' => '什么时候适用四秒规则？', 
            'a' => '如果道路湿滑，或者你车后拉着拖挂车辆', 
            'b' => '如果你的刹车皮很薄了', 
            'c' => '如果你的时速超过100公里/小时', 
            'd' => '夜间的时候', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '75', 
            'language_id' => '1', 
            'question_list_id' => '38', 
            'topic' => 'When driving at night on a road with lanes, you must be able to stop in half the length of clear road you can see in front of you. True or false?', 
            'a' => 'True', 
            'b' => 'False', 
            'c' => 'Only when it`s wet', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '76', 
            'language_id' => '2', 
            'question_list_id' => '38', 
            'topic' => '夜间行驶在划有车道的道路上，你必须能够在可视范围的一半距离内安全停下，正确还是错误？', 
            'a' => '正确', 
            'b' => '错误', 
            'c' => '当道路潮湿的时候', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '77', 
            'language_id' => '1', 
            'question_list_id' => '39', 
            'topic' => 'When must you turn your vehicle headlights on?', 
            'a' => '30 minutes after sunset until 30 minutes before sunrise', 
            'b' => 'In fog', 
            'c' => 'When you can`t see 100 metres ahead of you', 
            'd' => 'All of the above', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '78', 
            'language_id' => '2', 
            'question_list_id' => '39', 
            'topic' => '什么时候必须打开汽车的头灯？', 
            'a' => '日落超过三十分钟、或距离日出还有三十分钟以上，必须打开', 
            'b' => '雾天', 
            'c' => '如果不开灯就看不清前面一百米范围', 
            'd' => '以上都正确', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '79', 
            'language_id' => '1', 
            'question_list_id' => '40', 
            'topic' => 'What is a courtesy crossing?', 
            'a' => 'It`s a crossing controlled by orange or yellow flashing lights', 
            'b' => 'It`s a crossing at traffic lights where a green man symbol lets pedestrians know it`s safe to cross', 
            'c' => 'It`s a raised crossing in the road that you aren`t required to stop for, but allows for a safer place to stop if pedestrians do want to cross', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '80', 
            'language_id' => '2', 
            'question_list_id' => '40', 
            'topic' => '什么是礼让通行路口？', 
            'a' => '它是一个由橙色、黄色闪灯控制的路口', 
            'b' => '它是一个有绿色行人符号指示灯的路口，能让行人知道什么时候可以安全通过', 
            'c' => '它是路中间一块凸起的地面，司机可以不停车让行，但是最好在发现行人希望穿越道路的时候能够礼让行人先过', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '81', 
            'language_id' => '1', 
            'question_list_id' => '41', 
            'topic' => 'When coming to a pedestrian crossing with a raised traffic island in the middle, what must you do?', 
            'a' => 'Only stop and give way if a pedestrian is on your half of the crossing', 
            'b' => 'Stop and give way if a pedestrian is on any part of the crossing.', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1041.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '82', 
            'language_id' => '2', 
            'question_list_id' => '41', 
            'topic' => '当行车接近中间有安全岛的人行横道时，你应该怎么做？', 
            'a' => '如果行人在你行驶的道路一侧行走时，你需要停车，否则不需要', 
            'b' => '停车，无论行人在人行道的哪一部分', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1041.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '83', 
            'language_id' => '1', 
            'question_list_id' => '42', 
            'topic' => 'When approaching a pedestrian crossing without a raised traffic island, what must you do?', 
            'a' => 'Only stop and give way if a pedestrian is on your half of the crossing', 
            'b' => 'Stop and give way if a pedestrian is on any part of the crossing', 
            'c' => 'You can carry on driving because if there`s no raised island, the onus is on the pedestrian to make sure that the road is clear', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1042.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '84', 
            'language_id' => '2', 
            'question_list_id' => '42', 
            'topic' => '当行人正在通过中间没有安全岛的人行横道时，你该怎么做？', 
            'a' => '当行人走在你行车的半边时才需要让行，否则不用', 
            'b' => '无论行人在人行横道的哪一部分，都需要停车让行', 
            'c' => '人行道中间没有安全岛，所以行人要对他们自己的安全负责，你作为司机不用管可以继续行驶', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1042.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '85', 
            'language_id' => '1', 
            'question_list_id' => '43', 
            'topic' => 'What rule should you use to judge a safe following distance in wet or frosty conditions if driving a car?', 
            'a' => 'Two-second rule', 
            'b' => 'Four-second rule', 
            'c' => '100 metre rule', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1043.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '86', 
            'language_id' => '2', 
            'question_list_id' => '43', 
            'topic' => '在道路湿滑的情况下，跟随前车驾驶适用什么规则？', 
            'a' => '两秒规则', 
            'b' => '四秒规则', 
            'c' => '100米规则', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1043.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '87', 
            'language_id' => '1', 
            'question_list_id' => '44', 
            'topic' => 'For the purpose of applying the Give Way rule, how should an entrance way into a public car park be treated?', 
            'a' => 'As an intersection', 
            'b' => 'The vehicle that is there first has right of way', 
            'c' => 'As a one-way street', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '88', 
            'language_id' => '2', 
            'question_list_id' => '44', 
            'topic' => '出于适用让行规则的考虑，公共停车场的入口可以被看做？', 
            'a' => '一个路口', 
            'b' => '先到的车辆拥有优先通过权', 
            'c' => '一条单行道路', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '89', 
            'language_id' => '1', 
            'question_list_id' => '45', 
            'topic' => 'If the red lights continue to flash at a railway level crossing after the train has passed, what should you do?', 
            'a' => 'Wait until they stop flashing, check both ways, then cross', 
            'b' => 'Check both ways. If nothing`s coming, then cross', 
            'c' => 'Wait for 15 seconds then drive on', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1045.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '90', 
            'language_id' => '2', 
            'question_list_id' => '45', 
            'topic' => '如果火车已经通过了道口，但是红色的信号灯还亮着，你该怎么做？', 
            'a' => '等待信号灯熄灭，看清铁路两边后再通过', 
            'b' => '看清铁道两边是否还有火车驶来，如果没有那么就通过道口', 
            'c' => '再等15秒，随后可以通过道口', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1045.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '91', 
            'language_id' => '1', 
            'question_list_id' => '46', 
            'topic' => 'What must you do when you hear a siren or see red flashing lights from an ambulance or fire engine?', 
            'a' => 'If they`re behind you speed up so you`re not holding them up', 
            'b' => 'Stop quickly where you are', 
            'c' => 'Slow down and pull over to allow them to pass. Stop if necessary', 
            'd' => 'Drive up onto the footpath', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1046.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '92', 
            'language_id' => '2', 
            'question_list_id' => '46', 
            'topic' => '如果你看到红色的闪灯或是听到了救护车、救火车的警笛声，你该怎么做？', 
            'a' => '如果它们在你的后面，那么你应该加速，别挡着它们', 
            'b' => '迅速停车', 
            'c' => '减速靠边，让它们先通过，必要时候停车让行', 
            'd' => '把车开到路侧的行人便道上', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1046.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '93', 
            'language_id' => '1', 
            'question_list_id' => '47', 
            'topic' => 'When driving across a railway level crossing you must check that there is space for your vehicle on the other side of the line. True or false?', 
            'a' => 'True', 
            'b' => 'False', 
            'c' => 'Only on crossings that don`t have signals and/or barrier arms', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1047.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '94', 
            'language_id' => '2', 
            'question_list_id' => '47', 
            'topic' => '当行车通过铁路道口时，你必须检查道口的另一边是否有足够的距离容纳你所驾驶的车辆，正确还是错误？', 
            'a' => '正确', 
            'b' => '错误', 
            'c' => '仅在道口没有指示灯和栏杆的情况下才这么做', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1047.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '95', 
            'language_id' => '1', 
            'question_list_id' => '48', 
            'topic' => 'If two vehicles are facing Give Way signs which vehicle gives way?', 
            'a' => 'Whichever one gets there last', 
            'b' => 'The vehicle that is not turning', 
            'c' => 'The vehicle that is turning', 
            'd' => 'Whichever is the smallest vehicle', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '96', 
            'language_id' => '2', 
            'question_list_id' => '48', 
            'topic' => '如果两辆车均见到让路标识，以下情况中哪辆车应该让行？', 
            'a' => '后到路口的车辆让行', 
            'b' => '直行的车辆让行', 
            'c' => '转弯的车辆让行', 
            'd' => '体积比较小的车辆让行', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '97', 
            'language_id' => '1', 
            'question_list_id' => '49', 
            'topic' => 'To help you from being blinded by the headlights of an oncoming vehicle, what should you do?', 
            'a' => 'Flash your lights to let the other driver know', 
            'b' => 'Slow down and keep your eyes to the left of the road', 
            'c' => 'Look to the right-hand side of the road', 
            'd' => 'Look to the centre of the road', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '98', 
            'language_id' => '2', 
            'question_list_id' => '49', 
            'topic' => '为了避免被对面的车辆大灯晃到，你应该怎么做？', 
            'a' => '用你的大灯回敬对面的司机', 
            'b' => '减速，尽量看道路的左边而不去直视对面的大灯', 
            'c' => '看道路的右边', 
            'd' => '看道路的中间', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '99', 
            'language_id' => '1', 
            'question_list_id' => '50', 
            'topic' => 'If anybody is hurt in a crash, the driver must tell a police officer as soon as possible but within how many hours?', 
            'a' => 'Within 24 hours', 
            'b' => 'Within 36 hours', 
            'c' => 'Within 48 hours', 
            'd' => 'There`s no need to tell the police - just make sure the injured people are OK', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '100', 
            'language_id' => '2', 
            'question_list_id' => '50', 
            'topic' => '如果道路事故中有人受伤，司机必须在多长时间内通知警方？', 
            'a' => '24小时内', 
            'b' => '36小时内', 
            'c' => '48小时内', 
            'd' => '不需要告知警方，只需要看看受伤的人是否OK就行', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '101', 
            'language_id' => '1', 
            'question_list_id' => '51', 
            'topic' => 'What is the least distance of clear road you MUST have in front of you when you have finished passing another vehicle?', 
            'a' => '50 metres', 
            'b' => '100 metres', 
            'c' => '150 metres', 
            'd' => '200 metres', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1051.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '102', 
            'language_id' => '2', 
            'question_list_id' => '51', 
            'topic' => '前方至少有多少米的距离无车时，你才能超越前车？', 
            'a' => '50米', 
            'b' => '100米', 
            'c' => '150米', 
            'd' => '200米', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1051.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '103', 
            'language_id' => '1', 
            'question_list_id' => '52', 
            'topic' => 'Which of your vehicle`s lights do you have on if you are driving in fog?', 
            'a' => 'Park lights (side lights)', 
            'b' => 'Front and rear fog lights', 
            'c' => 'Dipped headlights', 
            'd' => 'All of the above', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '104', 
            'language_id' => '2', 
            'question_list_id' => '52', 
            'topic' => '雾天行车，你应该开启什么灯光？', 
            'a' => '停车指示灯（包括侧面的灯光）', 
            'b' => '前后雾灯', 
            'c' => '近光灯', 
            'd' => '以上都打开', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '105', 
            'language_id' => '1', 
            'question_list_id' => '53', 
            'topic' => 'A vehicle should not send out visible smoke for more than:', 
            'a' => '12 seconds', 
            'b' => '10 seconds', 
            'c' => '8 seconds', 
            'd' => '5 seconds', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '106', 
            'language_id' => '2', 
            'question_list_id' => '53', 
            'topic' => '一辆汽车排出可见烟雾的时间不能超过：', 
            'a' => '12秒', 
            'b' => '10秒', 
            'c' => '8秒', 
            'd' => '5秒', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '107', 
            'language_id' => '1', 
            'question_list_id' => '54', 
            'topic' => 'You must turn your vehicle headlights on when visibility is less than:', 
            'a' => '50 metres', 
            'b' => '100 metres', 
            'c' => '150 metres', 
            'd' => '200 metres', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '108', 
            'language_id' => '2', 
            'question_list_id' => '54', 
            'topic' => '当可视距离不超过多少米的时候必须打开车辆头灯？', 
            'a' => '50米', 
            'b' => '100米', 
            'c' => '150米', 
            'd' => '200米', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '109', 
            'language_id' => '1', 
            'question_list_id' => '55', 
            'topic' => 'Who can require you to undergo a breath screening test?', 
            'a' => 'A police officer', 
            'b' => 'An ambulance officer', 
            'c' => 'A judge or magistrate', 
            'd' => 'A doctor', 
            'e' => 'None of the above', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '110', 
            'language_id' => '2', 
            'question_list_id' => '55', 
            'topic' => '谁能够要求驾驶员进行酒精呼气测试？', 
            'a' => '警官', 
            'b' => '救护人员', 
            'c' => '法官', 
            'd' => '医生', 
            'e' => '以上都不行', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '111', 
            'language_id' => '1', 
            'question_list_id' => '56', 
            'topic' => 'What should you do if the vehicle behind starts to pass you? Check all that apply', 
            'a' => 'Move as far to the left of the road as possible', 
            'b' => 'Maintain your speed', 
            'c' => 'Stay in the middle of your lane as the left of the lane is more dangerous', 
            'd' => 'Be prepared to slow down to ensure a safe passing manoeuvre', 
            'e' => '', 
            'ans' => 'ABD', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '112', 
            'language_id' => '2', 
            'question_list_id' => '56', 
            'topic' => '如果后面的车辆准备超越你，你该如何做？选择所有正确的', 
            'a' => '尽量把你的车辆贴向道路的左边行驶', 
            'b' => '维持你的速度不变', 
            'c' => '左边太危险啦，还是在路的中间继续行驶', 
            'd' => '做好随时减速的准备，让后车能够安全超越', 
            'e' => '', 
            'ans' => 'ABD', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '113', 
            'language_id' => '1', 
            'question_list_id' => '57', 
            'topic' => 'What does a white diamond painted on the road mean?', 
            'a' => 'There is a crest in the road', 
            'b' => 'You are approaching a school entrance', 
            'c' => 'The speed limit is about to change', 
            'd' => 'You are approaching a pedestrian crossing', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '114', 
            'language_id' => '2', 
            'question_list_id' => '57', 
            'topic' => '道路上的钻石形状的标识代表什么？', 
            'a' => '这里的路面较高', 
            'b' => '你正在靠近学校的入口', 
            'c' => '道路限速将有所变化', 
            'd' => '你正在靠近人行横道，应该准备减速', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '115', 
            'language_id' => '1', 
            'question_list_id' => '58', 
            'topic' => 'How far can your load extend either side of the centre line of your vehicle?', 
            'a' => '1m', 
            'b' => '1.25m', 
            'c' => '1.5m', 
            'd' => '1.75m', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1058.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '116', 
            'language_id' => '2', 
            'question_list_id' => '58', 
            'topic' => '你的汽车可以横向装载超长物品的长度，从汽车的纵向中线算起，最长有多少？', 
            'a' => '1米', 
            'b' => '1.25米', 
            'c' => '1.5米', 
            'd' => '1.75米', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1058.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '117', 
            'language_id' => '1', 
            'question_list_id' => '59', 
            'topic' => 'How many demerit points do you receive for exceeding the speed limit by 11-20kph?', 
            'a' => '10', 
            'b' => '20', 
            'c' => '30', 
            'd' => '40', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '118', 
            'language_id' => '2', 
            'question_list_id' => '59', 
            'topic' => '如果你超速11-20公里/小时以内，你的驾照将被扣多少分？', 
            'a' => '10', 
            'b' => '20', 
            'c' => '30', 
            'd' => '40', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '119', 
            'language_id' => '1', 
            'question_list_id' => '60', 
            'topic' => 'When don`t you need to wear a safety belt? Check all that apply.', 
            'a' => 'If you are reversing and wouldn`t be able to remain in control of the vehicle', 
            'b' => 'If you are a taxi driver plying for hire', 
            'c' => 'If you are a driver or passenger who has to stop frequently to, for example, read meters, and the vehicle you`re in travels at less than 50kph', 
            'd' => 'If you are unable to reach the controls if you wear a safety belt', 
            'e' => 'If you have a medical exemption from wearing a safety belt', 
            'ans' => 'ABCDE', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '120', 
            'language_id' => '2', 
            'question_list_id' => '60', 
            'topic' => '什么情况下你可以不系安全带？', 
            'a' => '如果安全带影响了你倒车时控制车辆的能力', 
            'b' => '如果你是一位正在等待客人的出租车司机', 
            'c' => '如果你的工作性质让你需要经常上下车，例如读表员或是快递员，并且你行驶的时速不超过50公里/小时', 
            'd' => '如果你使用了安全带则无法控制车辆', 
            'e' => '如果你持有医生开具的医疗豁免证明你不适用安全带', 
            'ans' => 'ABCDE', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '121', 
            'language_id' => '1', 
            'question_list_id' => '61', 
            'topic' => 'If you are driving in a funeral procession, what should you do?', 
            'a' => 'Keep your headlights on dip', 
            'b' => 'Keep your hazard lights on', 
            'c' => 'Toot your horn', 
            'd' => 'Drive with your windows down', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '122', 
            'language_id' => '2', 
            'question_list_id' => '61', 
            'topic' => '如果你是葬礼车队中的一辆车，你该怎么做？', 
            'a' => '保持车辆头灯近光灯开启', 
            'b' => '打开你的紧急警报灯（双闪灯）', 
            'c' => '鸣笛', 
            'd' => '把你的车窗降下来', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '123', 
            'language_id' => '1', 
            'question_list_id' => '62', 
            'topic' => 'If you refuse to give blood for the purposes of an evidential blood alcohol test, what is the maximum penalty for a first offence?', 
            'a' => 'Three months in prison, $4500 fine, disqualified for six months or more', 
            'b' => '$500 fine, disqualified for six months', 
            'c' => 'Disqualified for six months', 
            'd' => 'First time offenders are let off without punishment', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '124', 
            'language_id' => '2', 
            'question_list_id' => '62', 
            'topic' => '如果你拒绝提供血液酒精浓度检测使用的样本，初犯最高可被判罚', 
            'a' => '三个月监禁，4500元罚款，吊销驾照至少六个月', 
            'b' => '500元罚款，吊销驾照六个月', 
            'c' => '吊销驾照六个月', 
            'd' => '初犯者可以免除惩罚', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '125', 
            'language_id' => '1', 
            'question_list_id' => '63', 
            'topic' => 'When you purchase a vehicle what should you be aware of? Check all that apply.', 
            'a' => 'Unpaid loans - you`ll be liable to pay them if they are not cleared before the car is transferred into your name', 
            'b' => 'A stolen vehicle', 
            'c' => 'Suspicious odometer', 
            'd' => 'WoF and/or registration has expired', 
            'e' => '', 
            'ans' => 'ABCD', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '126', 
            'language_id' => '2', 
            'question_list_id' => '63', 
            'topic' => '购买二手车应该注意什么？选择所有正确的', 
            'a' => '未付清的贷款，如果有未付贷款在过户前未缴纳，则贷款有可能转移到你的名下！', 
            'b' => '是否为报失车辆', 
            'c' => '里程表读数是否可疑', 
            'd' => '路税、车辆安全检查是否已经过期', 
            'e' => '', 
            'ans' => 'ABCD', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '127', 
            'language_id' => '1', 
            'question_list_id' => '64', 
            'topic' => 'If you are 20 or over, what is the legal alcohol limit in micrograms per litre of breath?', 
            'a' => '400', 
            'b' => '250', 
            'c' => '200', 
            'd' => '150', 
            'e' => 'Zero', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '128', 
            'language_id' => '2', 
            'question_list_id' => '64', 
            'topic' => '如果驾驶员的年龄超过20岁，酒精呼气检测最高限度是多少微克/升？ ', 
            'a' => '400', 
            'b' => '250', 
            'c' => '200', 
            'd' => '150', 
            'e' => '0', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '129', 
            'language_id' => '1', 
            'question_list_id' => '65', 
            'topic' => 'What does this sign mean?', 
            'a' => '35 car parks on the left', 
            'b' => 'A corner in 35 metres', 
            'c' => 'The recommended speed for this corner is 35kph', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1065.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '130', 
            'language_id' => '2', 
            'question_list_id' => '65', 
            'topic' => '这个标识是什么意思？', 
            'a' => '左边有35个停车位', 
            'b' => '这个转弯35米长', 
            'c' => '推荐用35公里/小时的速度通过这个弯道', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1065.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '131', 
            'language_id' => '1', 
            'question_list_id' => '66', 
            'topic' => 'What`s the open road speed limit for a car or motorbike?', 
            'a' => '100kph', 
            'b' => '110kph', 
            'c' => '80kph', 
            'd' => '70kph', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '132', 
            'language_id' => '2', 
            'question_list_id' => '66', 
            'topic' => '开放道路上小轿车或摩托车的最高时速限制是多少？', 
            'a' => '100公里/小时', 
            'b' => '110公里/小时', 
            'c' => '80公里/小时', 
            'd' => '70公里/小时', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '133', 
            'language_id' => '1', 
            'question_list_id' => '67', 
            'topic' => 'What does GVM stand for?', 
            'a' => 'General Vehicle Mechanism', 
            'b' => 'Gross Vehicle Mass', 
            'c' => 'Grass Vehicles Mowing', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '134', 
            'language_id' => '2', 
            'question_list_id' => '67', 
            'topic' => 'GVM代表什么意思？', 
            'a' => '普通车辆技术机制', 
            'b' => '车辆总质量', 
            'c' => '剪草车', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '135', 
            'language_id' => '1', 
            'question_list_id' => '68', 
            'topic' => 'Where would you see this cat`s eye?', 
            'a' => 'Left side of road', 
            'b' => 'Centre line of road', 
            'c' => 'No passing lane', 
            'd' => 'Fire hydrant', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1068.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '136', 
            'language_id' => '2', 
            'question_list_id' => '68', 
            'topic' => '在哪里能够看到这个白色的猫眼反光标识？', 
            'a' => '道路的左侧边缘', 
            'b' => '道路中线', 
            'c' => '禁止超车线', 
            'd' => '消防栓', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1068.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '137', 
            'language_id' => '1', 
            'question_list_id' => '69', 
            'topic' => 'What is oversteer?', 
            'a' => 'When you turn too sharply and hit the verge on the inside of a corner', 
            'b' => 'When you misjudge turning right into an intersection and cross onto the wrong side of the road', 
            'c' => 'When the back wheels of the car start skidding the opposite way to which you are turning', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '138', 
            'language_id' => '2', 
            'question_list_id' => '69', 
            'topic' => '转向过度是什么意思？', 
            'a' => '当你转向过猛，擦撞了道路转角的内侧', 
            'b' => '你在路口转弯的时候驶入了错误方向', 
            'c' => '当车辆后轮开始打滑并甩向相反方向的时候（例如，向右转弯的时候车子尾部开始向左甩）', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '139', 
            'language_id' => '1', 
            'question_list_id' => '70', 
            'topic' => 'What does this sign mean?', 
            'a' => 'The left side of a bridge', 
            'b' => 'The right side of a bridge', 
            'c' => 'The left side of a road', 
            'd' => 'The right side of a road', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1070.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '140', 
            'language_id' => '2', 
            'question_list_id' => '70', 
            'topic' => '这个标识是什么意思？', 
            'a' => '桥梁的左侧', 
            'b' => '桥梁的右侧', 
            'c' => '道路的左侧', 
            'd' => '道路的右侧', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1070.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '141', 
            'language_id' => '1', 
            'question_list_id' => '71', 
            'topic' => 'What does this sign mean?', 
            'a' => 'The left side of a bridge', 
            'b' => 'The right side of a bridge', 
            'c' => 'The left side of a road', 
            'd' => 'The right side of a road', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1071.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '142', 
            'language_id' => '2', 
            'question_list_id' => '71', 
            'topic' => '这个标识是什么意思？', 
            'a' => '桥梁的左侧', 
            'b' => '桥梁的右侧', 
            'c' => '道路的左侧', 
            'd' => '道路的右侧', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1071.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '143', 
            'language_id' => '1', 
            'question_list_id' => '72', 
            'topic' => 'What does this sign mean?', 
            'a' => 'The right side of a road marker post indicating a left-hand bend', 
            'b' => 'The left side of the road', 
            'c' => 'The middle of a motorway', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1072.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '144', 
            'language_id' => '2', 
            'question_list_id' => '72', 
            'topic' => '这个标识是什么意思？', 
            'a' => '如果道路向左弯曲，这个标识将出现在道路的右侧', 
            'b' => '道路的左侧', 
            'c' => '高速路的中间', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1072.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '145', 
            'language_id' => '1', 
            'question_list_id' => '73', 
            'topic' => 'Can vehicle C move through the intersection?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => 'Only if the red bus is parked in a bus stop', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1073.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '146', 
            'language_id' => '2', 
            'question_list_id' => '73', 
            'topic' => '车辆C可以通过路口吗？', 
            'a' => '可以', 
            'b' => '不可以', 
            'c' => '除非红色的公交车正停在公交车站', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1073.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '147', 
            'language_id' => '1', 
            'question_list_id' => '74', 
            'topic' => 'What does this sign mean?', 
            'a' => 'The right hand side of the road', 
            'b' => 'The middle of a motorway', 
            'c' => 'The left hand side of the road', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1074.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '148', 
            'language_id' => '2', 
            'question_list_id' => '74', 
            'topic' => '这个标识是什么意思？', 
            'a' => '道路的右侧', 
            'b' => '高速路的中央', 
            'c' => '道路的左侧', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1074.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '149', 
            'language_id' => '1', 
            'question_list_id' => '75', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Buses aren`t allowed to park here', 
            'b' => 'Buses are allowed to stop here', 
            'c' => 'Buses and taxis are allowed to park here', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1075.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '150', 
            'language_id' => '2', 
            'question_list_id' => '75', 
            'topic' => '这个标识是什么意思？', 
            'a' => '公交车不许停靠在这里', 
            'b' => '只有公交车可以停靠在这里', 
            'c' => '只有公交车和出租车可以停靠在这里', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1075.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '151', 
            'language_id' => '1', 
            'question_list_id' => '76', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Tunnel', 
            'b' => 'Roundabout', 
            'c' => 'Tornado or whirlwind danger', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1076.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '152', 
            'language_id' => '2', 
            'question_list_id' => '76', 
            'topic' => '这个标识是什么意思？', 
            'a' => '隧道', 
            'b' => '环岛', 
            'c' => '小心旋风或是龙卷风', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1076.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '153', 
            'language_id' => '1', 
            'question_list_id' => '77', 
            'topic' => 'What do these mean?', 
            'a' => 'Buses, taxis and bicycles can park here', 
            'b' => 'When lit, buses, trams and bicycles can pass through, ignoring a red traffic signal', 
            'c' => 'This is a special lane on a road or motorway for buses, trams and bicycles', 
            'd' => 'When lit, buses, trams and bicycles must wait for other traffic to pass before proceeding', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1077.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '154', 
            'language_id' => '2', 
            'question_list_id' => '77', 
            'topic' => '这个标识是什么意思？', 
            'a' => '公交车、出租车和自行车可以停在这里', 
            'b' => '当这个信号灯亮起时，公交车、有轨电车和自行车可以忽略红色的信号灯直接行驶', 
            'c' => '这是高速路上的公交、有轨电车和自行车专用道', 
            'd' => '当这个信号灯亮起时，公交车、有轨电车和自行车必须停下来，让其它车辆先行', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1077.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '155', 
            'language_id' => '1', 
            'question_list_id' => '78', 
            'topic' => 'Can you turn right when you have this traffic signal?', 
            'a' => 'No, there`s a red arrow', 
            'b' => 'No, you can only go straight ahead', 
            'c' => 'Yes, but only if there are no vehicles coming', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1078.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '156', 
            'language_id' => '2', 
            'question_list_id' => '78', 
            'topic' => '看到这个信号灯指示，你可以右转弯吗？', 
            'a' => '不行，信号灯上有红色的箭头', 
            'b' => '不行，你只能直行', 
            'c' => '可以，但要确定对面没有直行的车辆驶来', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1078.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '157', 
            'language_id' => '1', 
            'question_list_id' => '79', 
            'topic' => 'Can you turn left when you have this traffic signal?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1079.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '158', 
            'language_id' => '2', 
            'question_list_id' => '79', 
            'topic' => '看到这个信号灯指示，你可以左转弯吗？', 
            'a' => '可以', 
            'b' => '不可以', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1079.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '159', 
            'language_id' => '1', 
            'question_list_id' => '80', 
            'topic' => 'What class of licence do you need to drive a car?', 
            'a' => 'Class 1', 
            'b' => 'Class 2', 
            'c' => 'Class A', 
            'd' => 'Class B', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '160', 
            'language_id' => '2', 
            'question_list_id' => '80', 
            'topic' => '什么类型的驾照可以驾驶小型车辆？', 
            'a' => 'Class 1', 
            'b' => 'Class 2', 
            'c' => 'Class A', 
            'd' => 'Class B', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '161', 
            'language_id' => '1', 
            'question_list_id' => '81', 
            'topic' => 'Are you allowed to pass on a solid yellow line?', 
            'a' => 'No', 
            'b' => 'Yes', 
            'c' => 'Yes, but only if you can make the pass without crossing the yellow line and can see 100m ahead of you for the whole time you are passing', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1081.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '162', 
            'language_id' => '2', 
            'question_list_id' => '81', 
            'topic' => '蓝色车辆刚刚超过了橙色车，它的超车行为正确吗？', 
            'a' => '不正确', 
            'b' => '可以', 
            'c' => '可以，只要没有越过黄线超车，并且在超车的时候能看到前方100米内的路况', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1081.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '163', 
            'language_id' => '1', 
            'question_list_id' => '82', 
            'topic' => 'What rule would you use when towing a trailer?', 
            'a' => 'Two-second rule', 
            'b' => 'Four-second rule', 
            'c' => 'Cadence braking rule', 
            'd' => 'Give way to the left', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '164', 
            'language_id' => '2', 
            'question_list_id' => '82', 
            'topic' => '当你牵引拖挂车辆行驶的时候，适用什么规则？', 
            'a' => '两秒规则', 
            'b' => '四秒规则', 
            'c' => '点刹规则', 
            'd' => '左侧让行规则', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '165', 
            'language_id' => '1', 
            'question_list_id' => '83', 
            'topic' => 'Are you allowed to pass on the left like this?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1083.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '166', 
            'language_id' => '2', 
            'question_list_id' => '83', 
            'topic' => '蓝色车辆可以这么超车吗？', 
            'a' => '可以', 
            'b' => '不可以', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1083.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '167', 
            'language_id' => '1', 
            'question_list_id' => '84', 
            'topic' => 'You are on a three-laned road. There is one lane on your side of the road, and two lanes coming towards you. There`s a dashed white line on your side of the centre line. Are you allowed to overtake?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '168', 
            'language_id' => '2', 
            'question_list_id' => '84', 
            'topic' => '道路上共有三条车道，你行驶的一边只有一条道，对面有两条车道，但是你的一边中线内侧划有白色的虚线。你可以借用对向车道超车吗？', 
            'a' => '可以', 
            'b' => '不可以', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '169', 
            'language_id' => '1', 
            'question_list_id' => '85', 
            'topic' => 'Can a load you are carrying in your vehicle drag on the ground?', 
            'a' => '', 
            'b' => 'Yes', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '170', 
            'language_id' => '2', 
            'question_list_id' => '85', 
            'topic' => '你可以把货物直接拖在地上行驶吗？', 
            'a' => '不可以', 
            'b' => '可以', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '171', 
            'language_id' => '1', 
            'question_list_id' => '86', 
            'topic' => 'Before crossing a railway level crossing, what should you do? Check all that apply.', 
            'a' => 'Look left and right up the tracks', 
            'b' => 'Check there`s room for your vehicle on the other side of the crossing', 
            'c' => 'Make sure there are no barriers or red flashing lights', 
            'd' => 'Check there`s a speed limit sign on the other side of the crossing', 
            'e' => '', 
            'ans' => 'ABC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '172', 
            'language_id' => '2', 
            'question_list_id' => '86', 
            'topic' => '通过铁路道口前，应该做什么？选择所有正确的', 
            'a' => '看清道口的左右两侧', 
            'b' => '查看穿越道口后，对面是否有足够空间容纳你的车辆', 
            'c' => '确定道口红灯未亮起、道口栏杆未放下', 
            'd' => '查看道口对面的道路限速', 
            'e' => '', 
            'ans' => 'ABC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '173', 
            'language_id' => '1', 
            'question_list_id' => '87', 
            'topic' => 'What should you do when you are coming up to traffic signals and the signals change from green to yellow?', 
            'a' => 'Speed up to get through the lights', 
            'b' => 'Stop if it`s safe to do so', 
            'c' => 'Stop if you are more than 20 metres from the intersection', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '174', 
            'language_id' => '2', 
            'question_list_id' => '87', 
            'topic' => '当路口信号灯从绿变黄的时候，你该怎么做？', 
            'a' => '加速，抢在红灯前通过路口', 
            'b' => '如果可以安全停车，则停车等待', 
            'c' => '如果距离路口还有20米以上，则停车', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '175', 
            'language_id' => '1', 
            'question_list_id' => '88', 
            'topic' => 'If you are driving a car, what should you do when following another vehicle in wet conditions?', 
            'a' => 'Observe the two-second rule', 
            'b' => 'Observe the four-second rule', 
            'c' => 'Observe the six-second rule', 
            'd' => 'Try to overtake so that you are not blinded by the spray', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '176', 
            'language_id' => '2', 
            'question_list_id' => '88', 
            'topic' => '雨天跟随前车，你应该怎么做？', 
            'a' => '遵守两秒规则', 
            'b' => '遵守四秒规则', 
            'c' => '遵守六秒规则', 
            'd' => '找机会超车', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '177', 
            'language_id' => '1', 
            'question_list_id' => '89', 
            'topic' => 'What should you do when there are farm animals coming towards you on the road?', 
            'a' => 'Flash your lights - the animals will see this and move out of the way', 
            'b' => 'Slow down or pull over until the animals have moved past you', 
            'c' => 'Sound your horn to help the farmer move the animals', 
            'd' => 'Get a passenger to clear a path through the animals', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '178', 
            'language_id' => '2', 
            'question_list_id' => '89', 
            'topic' => '如果路上有牲畜向你走来或跑来，你该怎么做？', 
            'a' => '晃大灯，动物看到大灯就会给你让路', 
            'b' => '减速，或者靠边停车，直到动物们安全的经过你的车辆', 
            'c' => '鸣笛，让农场主牲畜赶走', 
            'd' => '让你的乘客下车把牲畜赶开', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '179', 
            'language_id' => '1', 
            'question_list_id' => '90', 
            'topic' => 'What is the safest way to drive up to intersections?', 
            'a' => 'Look to the right - you have to give way to the right', 
            'b' => 'Look to the left', 
            'c' => 'Look behind you', 
            'd' => 'Look ahead of you', 
            'e' => 'All the above', 
            'ans' => 'E', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '180', 
            'language_id' => '2', 
            'question_list_id' => '90', 
            'topic' => '最安全的通过路口方式是什么？', 
            'a' => '观察右边，因为你必须要给右边过来的车辆让路', 
            'b' => '观察左边', 
            'c' => '观察后边跟随你的车辆', 
            'd' => '观察前面的路况', 
            'e' => '以上都正确', 
            'ans' => 'E', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '181', 
            'language_id' => '1', 
            'question_list_id' => '91', 
            'topic' => 'You are the driver of the blue car. Of the four hazards marked, which one is most likely to require you to take urgent action?', 
            'a' => 'The person hitching a lift (A)', 
            'b' => 'The child on the side of the road (B)', 
            'c' => 'The parked car (C)', 
            'd' => 'The parked car that is partially obscured from your view (D)', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1091.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '182', 
            'language_id' => '2', 
            'question_list_id' => '91', 
            'topic' => '你是蓝色车辆的驾驶员，你认为四个潜在的危险中哪个最需要关注？', 
            'a' => '路边等车的路人A', 
            'b' => '路边的小孩B', 
            'c' => '路边停着的汽车C', 
            'd' => '路边停着的汽车D', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1091.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '183', 
            'language_id' => '1', 
            'question_list_id' => '92', 
            'topic' => 'You are the driver of the blue car. Of the four hazards marked, which one is most likely to require you to take urgent action?', 
            'a' => 'The parked car', 
            'b' => 'The reversing car', 
            'c' => 'The car coming towards you', 
            'd' => 'The parked car on the opposite side of the road', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1092.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '184', 
            'language_id' => '2', 
            'question_list_id' => '92', 
            'topic' => '你是蓝色汽车的驾驶员，图中的四辆汽车，你认为哪个最危险最需要留意？', 
            'a' => '停放着的A', 
            'b' => '正在倒车的B', 
            'c' => '向你驶来的C', 
            'd' => '路对面停着的D', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1092.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '185', 
            'language_id' => '1', 
            'question_list_id' => '93', 
            'topic' => 'You are the driver of the blue car. Of the four hazards marked, which one is most likely to require you to take urgent action?', 
            'a' => 'The car turning left onto the other side of the road', 
            'b' => 'The car coming towards you', 
            'c' => 'The car you are following', 
            'd' => 'The car on the other side of the road turning right', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1093.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '186', 
            'language_id' => '2', 
            'question_list_id' => '93', 
            'topic' => '你是蓝色车辆驾驶员，图中的四辆汽车，你认为哪个最危险最需要关注？', 
            'a' => '路口等待左转的A', 
            'b' => '向你驶来的B', 
            'c' => '在你前边行驶的C', 
            'd' => '正在准备向右转的D', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1093.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '187', 
            'language_id' => '1', 
            'question_list_id' => '94', 
            'topic' => 'You are the driver of the blue car. Of the four hazards marked, which one is most likely to require you to take urgent action?', 
            'a' => 'The cyclist', 
            'b' => 'The car parked on your side of the road', 
            'c' => 'The car coming towards you', 
            'd' => 'The pedestrian on the opposite footpath', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1094.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '188', 
            'language_id' => '2', 
            'question_list_id' => '94', 
            'topic' => '你是蓝色汽车驾驶员，图中的四个潜在危险，你认为哪个最需要留意？', 
            'a' => '自行车A', 
            'b' => '停放在路边的汽车B', 
            'c' => '对面向你驶来的汽车C', 
            'd' => '对面人行道上的行人D', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1094.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '189', 
            'language_id' => '1', 
            'question_list_id' => '95', 
            'topic' => 'How would you check for hazards before reversing your vehicle? Check all that apply.', 
            'a' => 'Check your wing mirrors and rear-view mirror', 
            'b' => 'Look over your shoulder', 
            'c' => 'Get out and walk around the vehicle', 
            'd' => 'Be sure any reversing sensors or cameras are activated (if your vehicle has them)', 
            'e' => '', 
            'ans' => 'ABCD', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '190', 
            'language_id' => '2', 
            'question_list_id' => '95', 
            'topic' => '倒车前应该注意什么？选择所有正确的', 
            'a' => '查看车辆的倒车镜和后视镜', 
            'b' => '转过头看后面', 
            'c' => '围着你的汽车转一圈看看周围情况', 
            'd' => '如果你的车有倒车雷达和可视倒车系统，开启它们', 
            'e' => '', 
            'ans' => 'ABCD', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '191', 
            'language_id' => '1', 
            'question_list_id' => '96', 
            'topic' => 'You look in the mirror and see a cyclist. What should you do when opening the car door?', 
            'a' => 'Open it slowly - the cyclist will be able to see and adjust his or her path', 
            'b' => 'Open it as per normal - cyclists always leave 1.5m gap between themselves and cars', 
            'c' => 'Wait until the cyclist has passed', 
            'd' => 'Warn the cyclist by sounding the horn before you open the door', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '192', 
            'language_id' => '2', 
            'question_list_id' => '96', 
            'topic' => '你从后视镜看到一辆自行车正在骑过来，你该如何开车门下车？', 
            'a' => '慢慢开门，骑车人会看到然后让开你的车门', 
            'b' => '与平时一样开门，骑车人会给自己和汽车之间留出一米五的距离', 
            'c' => '等骑车人超过你的车后，再开门', 
            'd' => '按喇叭告诉骑车人你要开车门了', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '193', 
            'language_id' => '1', 
            'question_list_id' => '97', 
            'topic' => 'You wish to turn left at the intersection. What should you do?', 
            'a' => 'Slow down and wait for the cyclist to go past the intersection', 
            'b' => 'Speed up so you get around the cyclist before they get there', 
            'c' => 'Toot your horn to let the cyclist know to move over and stop so you can turn', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1097.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '194', 
            'language_id' => '2', 
            'question_list_id' => '97', 
            'topic' => '如图，前方路口你要左转，你该怎么做？', 
            'a' => '减速，等待自行车过了路口再转弯', 
            'b' => '加速，超过骑车人，然后在他前面左转', 
            'c' => '按喇叭，让骑车人减速，这样你就可以超车后左转弯', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1097.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '195', 
            'language_id' => '1', 
            'question_list_id' => '98', 
            'topic' => 'How can small amounts of alcohol affect your driving?', 
            'a' => 'A small amount of alcohol won`t affect your driving', 
            'b' => 'Any amount of alcohol will have some effect on your driving', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '196', 
            'language_id' => '2', 
            'question_list_id' => '98', 
            'topic' => '少量酒精会如何影响驾驶员？', 
            'a' => '没有影响', 
            'b' => '即便少量酒精也会影响你的驾驶', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '197', 
            'language_id' => '1', 
            'question_list_id' => '99', 
            'topic' => 'You see a pedestrian carrying a white cane crossing the road. What should you do?', 
            'a' => 'Toot your horn to let them know you`re there and they should hurry up', 
            'b' => 'Stop and wait for them to cross', 
            'c' => 'Speed up and pass in front of them', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '198', 
            'language_id' => '2', 
            'question_list_id' => '99', 
            'topic' => '前方道路上有一位行人扛着白色的长杆子正在过马路，你该怎么做？', 
            'a' => '按喇叭，让他快点通过', 
            'b' => '停车，让他安全通过道路', 
            'c' => '加速，抢在他过马路之前通过', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '199', 
            'language_id' => '1', 
            'question_list_id' => '100', 
            'topic' => 'When driving into bright sunlight, you should use sunglasses and your vehicle sun visors for safety. What else are you advised to do? Check all that apply.', 
            'a' => 'Keep your windscreen clean', 
            'b' => 'Turn your lights on', 
            'c' => 'Slow down, or pull over until visibility improves', 
            'd' => 'Drive on the far left of the road', 
            'e' => '', 
            'ans' => 'AC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '200', 
            'language_id' => '2', 
            'question_list_id' => '100', 
            'topic' => '阳光强烈的时候，你应该使用太阳镜和遮光板。除此之外还应该注意什么？选择所有正确的', 
            'a' => '保持挡风玻璃清洁', 
            'b' => '开启灯光', 
            'c' => '慢点开，如果光线太强烈不妨暂时靠边停车等待视线转好', 
            'd' => '尽量贴着道路的左边行驶', 
            'e' => '', 
            'ans' => 'AC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '201', 
            'language_id' => '1', 
            'question_list_id' => '101', 
            'topic' => 'You wish to move your vehicle out of a parking space into the traffic flow. What must you do before you move? Check all that apply.', 
            'a' => 'Signal for at least three seconds', 
            'b' => 'Check your blind spots', 
            'c' => 'Wait for a gap in the traffic', 
            'd' => '', 
            'e' => '', 
            'ans' => 'ABC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '202', 
            'language_id' => '2', 
            'question_list_id' => '101', 
            'topic' => '你正准备驾车离开停车位并加入车流，在移动车辆之前应该注意什么？选择所有正确的', 
            'a' => '打转向灯至少三秒钟', 
            'b' => '检查车辆盲点', 
            'c' => '等待出现空隙后加入车流', 
            'd' => '', 
            'e' => '', 
            'ans' => 'ABC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '203', 
            'language_id' => '1', 
            'question_list_id' => '102', 
            'topic' => 'What should you do when another vehicle is following you very closely?', 
            'a' => 'Move to the left and slow down to make it easier for it to pass', 
            'b' => 'Speed up so you`re not holding it up', 
            'c' => 'Pump your brakes to tell them to drop back', 
            'd' => 'Put your hazard lights on', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '204', 
            'language_id' => '2', 
            'question_list_id' => '102', 
            'topic' => '如果后车跟你很近，你该怎么办？', 
            'a' => '靠左行驶，让他们超车过去', 
            'b' => '加速，别挡着他们', 
            'c' => '踩几脚刹车，跟他们说离远点', 
            'd' => '打开你的双闪灯', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '205', 
            'language_id' => '1', 
            'question_list_id' => '103', 
            'topic' => 'How does alcohol affect your driving?', 
            'a' => 'It speeds up your reactions', 
            'b' => 'It makes you a better judge of distance', 
            'c' => 'It slows your reaction time', 
            'd' => 'It makes you more alert', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '206', 
            'language_id' => '2', 
            'question_list_id' => '103', 
            'topic' => '酒精会如何影响你？', 
            'a' => '让你反应更快', 
            'b' => '让你对距离判断更准确', 
            'c' => '减缓你的反应时间', 
            'd' => '让你变得更警醒', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '207', 
            'language_id' => '1', 
            'question_list_id' => '104', 
            'topic' => 'In addition to checking it is safe to move out from the kerb into the traffic flow, how long should you indicate for?', 
            'a' => '1 second', 
            'b' => '2 seconds', 
            'c' => '3 seconds', 
            'd' => '4 seconds', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '208', 
            'language_id' => '2', 
            'question_list_id' => '104', 
            'topic' => '从路边的停车位加入车流中，你应该至少提前几秒钟打转向灯？', 
            'a' => '一秒', 
            'b' => '两秒', 
            'c' => '三秒', 
            'd' => '四秒', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '209', 
            'language_id' => '1', 
            'question_list_id' => '105', 
            'topic' => 'Before making a lane change to your left, you must signal for at least three seconds. What else must you do? Check all that apply.', 
            'a' => 'Check your blind spots', 
            'b' => 'Slow down', 
            'c' => 'Speed up', 
            'd' => 'Use your brake lights to warn other drivers', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '210', 
            'language_id' => '2', 
            'question_list_id' => '105', 
            'topic' => '变更车道之前，你应该至少提前三秒钟打转向灯，除此之外还应该做什么？选择所有正确的', 
            'a' => '检查车辆的盲点', 
            'b' => '减速', 
            'c' => '加速', 
            'd' => '轻踩刹车，点亮刹车灯警告其它车辆', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '211', 
            'language_id' => '1', 
            'question_list_id' => '106', 
            'topic' => 'What should you do if the vehicle behind you wishes to pass?', 
            'a' => 'Speed up so you`re not holding them up', 
            'b' => 'Pull to the left to let them pass', 
            'c' => 'Hold your line - it`s their reponsibility to overtake safely', 
            'd' => 'Slow down and signal right', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '212', 
            'language_id' => '2', 
            'question_list_id' => '106', 
            'topic' => '如果你后面的车辆想超车，你该怎么做？', 
            'a' => '加速，这样不会挡着它们', 
            'b' => '靠左边行驶，留出右边的空间让它们超车', 
            'c' => '守住自己的线，它愿意超车就超吧', 
            'd' => '减速，打右转向灯', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '213', 
            'language_id' => '1', 
            'question_list_id' => '107', 
            'topic' => 'Are you allowed to talk on a cellphone while driving? Check all that apply.', 
            'a' => 'Yes, at any time', 
            'b' => 'Yes, with a hands-free phone kit', 
            'c' => 'Yes, to make an emergency call if it`s unsafe to stop', 
            'd' => 'No', 
            'e' => '', 
            'ans' => 'BC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '214', 
            'language_id' => '2', 
            'question_list_id' => '107', 
            'topic' => '开车的时候可以用手机吗？选择所有正确的', 
            'a' => '可以，任何时间都可以', 
            'b' => '可以，但必须使用免提装置', 
            'c' => '如果停车不安全且情况紧急，那么可以使用', 
            'd' => '不可以使用', 
            'e' => '', 
            'ans' => 'BC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '215', 
            'language_id' => '1', 
            'question_list_id' => '108', 
            'topic' => 'Are you allowed to text (read, write or send an SMS) while driving?', 
            'a' => 'Yes - at any time', 
            'b' => 'Yes, with a hands-free phone kit', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '216', 
            'language_id' => '2', 
            'question_list_id' => '108', 
            'topic' => '开车的时候，可以收发手机短信息吗？', 
            'a' => '可以，任意时间都可以', 
            'b' => '如果使用免提设备就可以', 
            'c' => '不可以', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '217', 
            'language_id' => '1', 
            'question_list_id' => '109', 
            'topic' => 'If you miss your exit on a motorway, what should you do?', 
            'a' => 'Pull into the hard shoulder and reverse back to the exit', 
            'b' => 'Do a u-turn', 
            'c' => 'Exit at the next exit', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '218', 
            'language_id' => '2', 
            'question_list_id' => '109', 
            'topic' => '如果你在高速路上错过了一个出口，你该怎么做？', 
            'a' => '靠边，开上路肩，然后倒车回去', 
            'b' => '高速路上掉头', 
            'c' => '下一个出口再出去', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '219', 
            'language_id' => '1', 
            'question_list_id' => '110', 
            'topic' => 'When must you NOT open the door of your motor vehicle?', 
            'a' => 'If it`s likely to hit someone or something, such as a cyclist', 
            'b' => 'When the car is moving at any speed', 
            'c' => 'When you are asked to get out of the car by a police officer', 
            'd' => 'You are parked within 10 metres of a bus stop', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '220', 
            'language_id' => '2', 
            'question_list_id' => '110', 
            'topic' => '什么情况下，不能够打开车门？', 
            'a' => '如果开门将碰撞其它人或物，例如骑自行车的人', 
            'b' => '当车辆以任何速度移动的时候', 
            'c' => '如果车外的警官要求你下车', 
            'd' => '如果你距离公交车站10米之内', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '221', 
            'language_id' => '1', 
            'question_list_id' => '111', 
            'topic' => 'When traffic is merging, what is a good rule to follow?', 
            'a' => 'The larger vehicle has right of way', 
            'b' => 'Merge like a zip (let one vehicle in then go)', 
            'c' => 'The smaller vehicle has right of way', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '222', 
            'language_id' => '2', 
            'question_list_id' => '111', 
            'topic' => '当车流汇聚（例如两道变一道）的时候，应该遵守什么样的规则？', 
            'a' => '大车具有道路优先权', 
            'b' => '像拉锁一样，按秩序一边一辆汇聚在一起', 
            'c' => '小车具有道路优先权', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '223', 
            'language_id' => '1', 
            'question_list_id' => '112', 
            'topic' => 'What is the safest way to carry goods inside a vehicle?', 
            'a' => 'In the boot', 
            'b' => 'On the back seat', 
            'c' => 'Held by a passenger', 
            'd' => 'On your lap', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '224', 
            'language_id' => '2', 
            'question_list_id' => '112', 
            'topic' => '最安全的携带货物在车中的方式是什么？', 
            'a' => '放在后备箱', 
            'b' => '放在后座上', 
            'c' => '让乘客帮忙抱着', 
            'd' => '放在你的膝盖上', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '225', 
            'language_id' => '1', 
            'question_list_id' => '113', 
            'topic' => 'If you are given medication by your doctor that does not affect your driving, what do you have to do?', 
            'a' => 'Not drive - you shouldn`t be driving on medication', 
            'b' => 'You can drive whenever you want', 
            'c' => 'You must tell the police where you are driving', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '226', 
            'language_id' => '2', 
            'question_list_id' => '113', 
            'topic' => '如果医生给你开具了不会影响驾驶的药物，你该怎么做？', 
            'a' => '吃过药就不能开车了', 
            'b' => '像往常一样驾驶', 
            'c' => '你必须通知警方你需要驾车', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '227', 
            'language_id' => '1', 
            'question_list_id' => '114', 
            'topic' => 'You are driving downhill on a steep, narrow road and a vehicle is coming up the hill. What should you do?', 
            'a' => 'Vehicles moving downhill should give way to vehicles moving uphill', 
            'b' => 'Vehicles moving uphill should give way to vehicles moving downhill', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '228', 
            'language_id' => '2', 
            'question_list_id' => '114', 
            'topic' => '你开车行驶在陡峭的下坡路上，你的对面有一辆车正在开车上坡，你该怎么做？', 
            'a' => '下坡的车辆应该给上坡的车辆让行', 
            'b' => '上坡的车辆应该给下坡的车辆让行', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '229', 
            'language_id' => '1', 
            'question_list_id' => '115', 
            'topic' => 'When driving in foggy weather, what should you do? Check all that apply.', 
            'a' => 'Dip your headlights', 
            'b' => 'Drive with your headlights on full beam so you can see further', 
            'c' => 'Use a rear fog light if your car has one', 
            'd' => 'Use your hazard lights', 
            'e' => '', 
            'ans' => 'AC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '230', 
            'language_id' => '2', 
            'question_list_id' => '115', 
            'topic' => '在雾中行驶，你该注意什么？选择所有正确的', 
            'a' => '开启头灯', 
            'b' => '开启远光灯，这样能看得更远', 
            'c' => '开启后雾灯（如果你的车有的话）', 
            'd' => '开启双闪灯', 
            'e' => '', 
            'ans' => 'AC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '231', 
            'language_id' => '1', 
            'question_list_id' => '116', 
            'topic' => 'When following a vehicle on a dusty metal (gravel) road, what should you do? Check all that apply.', 
            'a' => 'Try to overtake', 
            'b' => 'Drop back so you`re not in the dust cloud', 
            'c' => 'Put your lights on full beam so the other driver pulls over', 
            'd' => 'Put your lights on low beam if visibility is reduced significantly', 
            'e' => 'Drive down the centre of the road', 
            'ans' => 'BD', 
            'img' => '1116.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '232', 
            'language_id' => '2', 
            'question_list_id' => '116', 
            'topic' => '如果在土路上行驶的时候前方有车，你该怎么做？选择所有正确的', 
            'a' => '超过前车', 
            'b' => '远离前车，不要被它扬起的尘土遮挡住视线', 
            'c' => '打开远光灯，这样其他驾驶员就会靠边让你先过', 
            'd' => '如果可视度下降，打开近光灯', 
            'e' => '尽量在路中间行驶', 
            'ans' => 'BD', 
            'img' => '1116.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '233', 
            'language_id' => '1', 
            'question_list_id' => '117', 
            'topic' => 'What is the recommended distance you should allow when driving past a cyclist?', 
            'a' => '1m', 
            'b' => '1.5m', 
            'c' => '2m', 
            'd' => '2.5m', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '234', 
            'language_id' => '2', 
            'question_list_id' => '117', 
            'topic' => '你应该给自己的车辆与骑车人之间至少留出多少安全距离？', 
            'a' => '一米', 
            'b' => '一米五', 
            'c' => '两米', 
            'd' => '两米五', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '235', 
            'language_id' => '1', 
            'question_list_id' => '118', 
            'topic' => 'When a flock of sheep is coming towards you on a country road, what should you do? Check all that apply.', 
            'a' => 'Keep driving steadily and sound your horn - the sheep will part', 
            'b' => 'Slow down and be prepared to stop', 
            'c' => 'Follow the farmer`s instructions', 
            'd' => 'Turn on your hazard lights and continue slowly', 
            'e' => '', 
            'ans' => 'BC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '236', 
            'language_id' => '2', 
            'question_list_id' => '118', 
            'topic' => '一大群羊向你走来，你该怎么办？选择所有正确的', 
            'a' => '按喇叭，继续驾驶，羊群会给你让路的', 
            'b' => '减速，准备停车', 
            'c' => '跟随农场工作人员的指示', 
            'd' => '打开双闪灯，继续慢慢行驶', 
            'e' => '', 
            'ans' => 'BC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '237', 
            'language_id' => '1', 
            'question_list_id' => '119', 
            'topic' => 'What are you NOT allowed to do when driving on a motorway? Check all that apply.', 
            'a' => 'Make a u-turn', 
            'b' => 'Stop (unless in an emergency or waiting in queued traffic)', 
            'c' => 'Pick up or drop off passengers', 
            'd' => 'Pass a car on the left', 
            'e' => '', 
            'ans' => 'ABC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '238', 
            'language_id' => '2', 
            'question_list_id' => '119', 
            'topic' => '高速公路上以下什么驾驶行为不被允许？选择所有可能的', 
            'a' => '掉头', 
            'b' => '任意停车（除非是紧急情况或前方堵车）', 
            'c' => '停车上下乘客', 
            'd' => '从左侧超车', 
            'e' => '', 
            'ans' => 'ABC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '239', 
            'language_id' => '1', 
            'question_list_id' => '120', 
            'topic' => 'If you have to drive at a slow speed that may hold up other vehicles, what should you do?', 
            'a' => 'Drive at night when there`s less traffic', 
            'b' => 'Keep to the left and let others pass where possible', 
            'c' => 'Nothing - drive as normal as it`s other drivers` responsibility to overtake you safely', 
            'd' => 'Keep as close as you can to the centre of the road', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '240', 
            'language_id' => '2', 
            'question_list_id' => '120', 
            'topic' => '如果你必须驾驶一辆设计时速缓慢的车辆，它行驶的时候可能会挡住别的车，你该怎么做？', 
            'a' => '晚上再驾驶，那时候车少', 
            'b' => '驾驶的时候尽量贴道路的左边，让其它车从右边超过去', 
            'c' => '正常驾驶即可，其它车超车是否安全是他们自己的事情', 
            'd' => '尽量在道路中间驾驶', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '241', 
            'language_id' => '1', 
            'question_list_id' => '121', 
            'topic' => 'When passing a horse and rider, what should you do?', 
            'a' => 'Give a quick toot of the horn to warn them you`re coming', 
            'b' => 'Pass as quickly as possible to avoid spooking the horse', 
            'c' => 'Slow down, giving them as much room as you can', 
            'd' => 'Turn on your headlights to warn the rider', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '242', 
            'language_id' => '2', 
            'question_list_id' => '121', 
            'topic' => '开车超过骑马的人的时候，应该怎么做？', 
            'a' => '轻轻按一下喇叭，告诉骑马的人后面有车', 
            'b' => '尽量快的超过马匹，别吓到它们', 
            'c' => '减速，尽量给它们充足的空间', 
            'd' => '打开头灯，警告骑马的人', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '243', 
            'language_id' => '1', 
            'question_list_id' => '122', 
            'topic' => 'If you are driving at night with your vehicle headlights on high beam, when MUST you dip them? Check all that apply.', 
            'a' => 'You`re driving in an area with street lights', 
            'b' => 'When a police officer is directing traffic', 
            'c' => 'When you are following another car', 
            'd' => 'When another car is coming towards you', 
            'e' => 'If you stop on the side of the road', 
            'ans' => 'BCDE', 
            'img' => '1122.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '244', 
            'language_id' => '2', 
            'question_list_id' => '122', 
            'topic' => '夜间行车，你正在使用远光灯，什么情况下你必须改为近光灯？选择所有正确的', 
            'a' => '你行驶的路上有路灯', 
            'b' => '前方有警官正在指挥交通', 
            'c' => '当你跟随其它车辆的时候', 
            'd' => '当对面有车向你驶来', 
            'e' => '当你靠边停车的时候', 
            'ans' => 'BCDE', 
            'img' => '1122.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '245', 
            'language_id' => '1', 
            'question_list_id' => '123', 
            'topic' => 'What must you do when you come up to a red light at traffic signals?', 
            'a' => 'Stop and wait for a green light', 
            'b' => 'Stop, unless you are turning left', 
            'c' => 'Stop, unless you are being pursued by the police', 
            'd' => 'Stop, then proceed if the way is clear', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1123.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '246', 
            'language_id' => '2', 
            'question_list_id' => '123', 
            'topic' => '当你看到路口的红灯，你该怎么做？', 
            'a' => '停车，等待信号灯变绿', 
            'b' => '停车，除非你想向左转', 
            'c' => '停车，除非有警车正在追你', 
            'd' => '停车，如果路口没有其他车辆驶来则继续前进', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1123.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '247', 
            'language_id' => '1', 
            'question_list_id' => '124', 
            'topic' => 'You are coming up to a one-lane bridge and you see this sign. What must you do?', 
            'a' => 'Stop. Then if there is no traffic approaching, cross the bridge', 
            'b' => 'Stop if there is traffic coming towards you across the bridge and wait until it`s clear', 
            'c' => 'Carry on going - you have right of way across the bridge', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1124.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '248', 
            'language_id' => '2', 
            'question_list_id' => '124', 
            'topic' => '当你准备通过只有一条车道的桥梁时发现了这个标识，你该怎么做？', 
            'a' => '先停车，如果对面没有车辆过来，再继续过桥', 
            'b' => '如果对面有车过来则停车让行，如果对面没有车则可以直接通过', 
            'c' => '直接过桥，你有道路优先权', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1124.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '249', 
            'language_id' => '1', 
            'question_list_id' => '125', 
            'topic' => 'On a Transit Lane sign, what does T2 mean?', 
            'a' => 'This lane can be used any time after 2pm', 
            'b' => 'Only vehicles with two seats can use this lane', 
            'c' => 'Only vehicles with less than two people inside can use this lane', 
            'd' => 'Only vehicles carrying two or more people can use this lane', 
            'e' => 'There are two transit lanes ahead', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '250', 
            'language_id' => '2', 
            'question_list_id' => '125', 
            'topic' => 'T2标识代表什么意思？', 
            'a' => '只有下午两点以后才能使用该车道', 
            'b' => '只有拥有两个座位的车辆才可以使用该车道', 
            'c' => '少于两名乘客的车辆才可以使用该车道', 
            'd' => '车中有两名或两名以上的乘员，才可以使用该车道', 
            'e' => '前方有两条车道可以使用', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '251', 
            'language_id' => '1', 
            'question_list_id' => '126', 
            'topic' => 'You`re coming up to a railway level crossing. Which of these should you do? Check all that apply.', 
            'a' => 'If there are no barrier arms, it`s safe to continue at the speed you`re travelling at because that railway line isn`t used', 
            'b' => 'Slow down and get ready to stop', 
            'c' => 'Check each way before proceeding across', 
            'd' => 'Only cross if there`s nothing blocking your path and there are no trains coming', 
            'e' => '', 
            'ans' => 'BCD', 
            'img' => '1126.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '252', 
            'language_id' => '2', 
            'question_list_id' => '126', 
            'topic' => '你正在准备通过铁路道口，你该怎么做？选择所有正确的', 
            'a' => '如果道口没有栏杆，你可保持车辆的行驶速度直接通过道口，因为现在铁轨上没有火车', 
            'b' => '减速行驶，随时准备停车', 
            'c' => '通过道口之前左右查看', 
            'd' => '仅在前方没有阻挡物、两边也没有火车驶来的情况下通过道口', 
            'e' => '', 
            'ans' => 'BCD', 
            'img' => '1126.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '253', 
            'language_id' => '1', 
            'question_list_id' => '127', 
            'topic' => 'What does this traffic signal mean?', 
            'a' => 'Stop if you can do so safely', 
            'b' => 'Speed up to get through the junction', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1127.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '254', 
            'language_id' => '2', 
            'question_list_id' => '127', 
            'topic' => '图中的信号灯亮起，你该怎么做？', 
            'a' => '如果可以安全停车，则停车等待', 
            'b' => '加速，冲过这个路口', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1127.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '255', 
            'language_id' => '1', 
            'question_list_id' => '128', 
            'topic' => 'You are coming up to a school patrol crossing and both signs are held out. What must you do?', 
            'a' => 'Stop until the signs are pulled back in', 
            'b' => 'Carry on if the children are not ready to cross', 
            'c' => 'Stop until the children have crossed', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '256', 
            'language_id' => '2', 
            'question_list_id' => '128', 
            'topic' => '前方出现学校学生过马路的提醒标识，你该怎么做？', 
            'a' => '停车，等待标识收回再继续前进', 
            'b' => '如果没有孩子正在过马路，则继续行驶', 
            'c' => '如果孩子们已经过了马路，则马上前进', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '257', 
            'language_id' => '1', 
            'question_list_id' => '129', 
            'topic' => 'When passing a bus displaying a School sign that has stopped to let children on or off, what should your speed be?', 
            'a' => '20kph', 
            'b' => '50kph', 
            'c' => '70kph', 
            'd' => '100kph', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1129.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '258', 
            'language_id' => '2', 
            'question_list_id' => '129', 
            'topic' => '如果前方的校车上有如下标识，并且学生们正在上下车，你应该限制车速为多少？', 
            'a' => '20公里/小时', 
            'b' => '50公里/小时', 
            'c' => '70公里/小时', 
            'd' => '100公里/小时', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1129.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '259', 
            'language_id' => '1', 
            'question_list_id' => '130', 
            'topic' => 'A broken yellow line painted close to the edge of the road means you may stop or park your vehicle there at any time.', 
            'a' => 'True', 
            'b' => 'False', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '260', 
            'language_id' => '2', 
            'question_list_id' => '130', 
            'topic' => '路边的黄色虚线表示您可以在这里临时停车或长时间停车，正确吗？', 
            'a' => '正确', 
            'b' => '错误', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '261', 
            'language_id' => '1', 
            'question_list_id' => '131', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Motorcycles are allowed to park to the left of this sign, along with any other private vehicles', 
            'b' => 'Only motorcycles are allowed to park to the left of this sign', 
            'c' => 'Motorcycles aren`t allowed to park to the left of this sign, but are to the right', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1131.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '262', 
            'language_id' => '2', 
            'question_list_id' => '131', 
            'topic' => '这个标识是什么意思？', 
            'a' => '摩托车可以在标识左侧停车，私家车也可以', 
            'b' => '只有摩托车可以在标识左侧停车', 
            'c' => '标识左侧不许停放摩托车，但是右侧可以', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1131.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '263', 
            'language_id' => '1', 
            'question_list_id' => '132', 
            'topic' => 'What does this sign mean?', 
            'a' => 'You can only stop to drop people off between 7 and 9am', 
            'b' => 'You can park here, but only between 7 and 9am', 
            'c' => 'You can`t park here between 7 and 9am', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1132.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '264', 
            'language_id' => '2', 
            'question_list_id' => '132', 
            'topic' => '这个标识是什么意思？', 
            'a' => '早上7-9点之间，这里只允许上下乘客', 
            'b' => '早上7-9点之间这里允许停车', 
            'c' => '早上7-9点之间这里禁止停车', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1132.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '265', 
            'language_id' => '1', 
            'question_list_id' => '133', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Only commercial vehicles can park here, and only for five minutes', 
            'b' => 'Any vehicle can park here, but it must not be left unattended for more than five minutes', 
            'c' => 'Any vehicle can park here to unload goods or people, but only for five minutes and then it has to be moved', 
            'd' => 'Any vehicle can park here to unload goods or people, but it must not be left unattended for more than five minutes', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1133.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '266', 
            'language_id' => '2', 
            'question_list_id' => '133', 
            'topic' => '这个标识是什么意思？', 
            'a' => '只有商用车辆可以在这里停放，最长五分钟', 
            'b' => '任何车辆均可以在这里停车，但是车中无人的时间不能超过五分钟', 
            'c' => '任何车辆都可以在这里上下乘客或装卸货物，但是五分钟内必须离开', 
            'd' => '任何车辆都可以在这里上下乘客或装卸货物，但是车中无人的时间不能超过五分钟', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1133.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '267', 
            'language_id' => '1', 
            'question_list_id' => '134', 
            'topic' => 'When can you park on the right hand side of the road?', 
            'a' => 'Only on a one-way street', 
            'b' => 'If there are marked bays', 
            'c' => 'At any time if you leave your park lights on', 
            'd' => 'If you are delivering packages', 
            'e' => 'in the countryside', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '268', 
            'language_id' => '2', 
            'question_list_id' => '134', 
            'topic' => '什么情况下可以在道路的右侧停车？', 
            'a' => '单向行驶的道路上', 
            'b' => '如果右侧标记有停车区', 
            'c' => '任意时间都可以，只需要打开停车指示灯', 
            'd' => '如果你仅仅为了装卸货物', 
            'e' => '在乡村公路上', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '269', 
            'language_id' => '1', 
            'question_list_id' => '135', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Commercial vehicles can park for 40 minutes to the right of the sign', 
            'b' => 'Any vehicle can park for 40 minutes to the right of the sign', 
            'c' => 'There`s no parking for any vehicle to the right of the sign, but to the left you can park for 40 minutes', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1135.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '270', 
            'language_id' => '2', 
            'question_list_id' => '135', 
            'topic' => '这个标识是什么意思？', 
            'a' => '商用车辆在标识右侧可以停车不超过40分钟', 
            'b' => '任何车辆都可以在标识右侧停车不超过40分钟', 
            'c' => '标识右侧不能停车，但是左侧可以停车不超过40分钟', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1135.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '271', 
            'language_id' => '1', 
            'question_list_id' => '136', 
            'topic' => 'Can you stop or park your vehicle over a fire hydrant if someone stays with the vehicle who can move it?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1136.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '272', 
            'language_id' => '2', 
            'question_list_id' => '136', 
            'topic' => '如果车里确定有能够移动车辆的乘客，你可以将车停在消防栓标识之上吗？', 
            'a' => '可以', 
            'b' => '不可以', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1136.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '273', 
            'language_id' => '1', 
            'question_list_id' => '137', 
            'topic' => 'What should you do when parking your vehicle next to the kerb when facing down a steep hill? Select all that apply.', 
            'a' => 'Apply the handbrake', 
            'b' => 'Put the car into reverse gear if it has manual transmission', 
            'c' => 'Turn the wheels towards the kerb', 
            'd' => 'Run the front and back wheels against the kerb', 
            'e' => 'Turn the wheels away from the kerb', 
            'ans' => 'ABC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '274', 
            'language_id' => '2', 
            'question_list_id' => '137', 
            'topic' => '如果在向下的陡坡上停车，你应该如何做？选择所有正确的', 
            'a' => '使用手刹车', 
            'b' => '手动档车辆挂上倒档', 
            'c' => '将前轮转向路牙', 
            'd' => '将一侧的前后轮胎停在路牙之上', 
            'e' => '将前轮转向路牙的相反方向', 
            'ans' => 'ABC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '275', 
            'language_id' => '1', 
            'question_list_id' => '138', 
            'topic' => 'What does this sign mean?', 
            'a' => 'You can stop anywhere in the next 4km', 
            'b' => 'You must not stop anywhere in the next 4km', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1138.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '276', 
            'language_id' => '2', 
            'question_list_id' => '138', 
            'topic' => '这个标识是什么意思？', 
            'a' => '下面的4公里道路上可以随便停车', 
            'b' => '接下来的4公里道路禁止停车', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1138.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '277', 
            'language_id' => '1', 
            'question_list_id' => '139', 
            'topic' => 'What does this sign mean?', 
            'a' => 'You can stop after you pass this sign', 
            'b' => 'You can stop before this sign, but not after', 
            'c' => 'You can only park within 20 metres of this sign', 
            'd' => 'You must not stop at all until parking permission is given', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1139.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '278', 
            'language_id' => '2', 
            'question_list_id' => '139', 
            'topic' => '这个标识是什么意思？', 
            'a' => '过了这个标记就可以在路边停车', 
            'b' => '这个标记之前的路边就可以停车', 
            'c' => '你只能在这个标识前后20米范围内停车', 
            'd' => '未得到授权则不可以停车', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1139.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '279', 
            'language_id' => '1', 
            'question_list_id' => '140', 
            'topic' => 'Can you stop on a bus stop in a private vehicle?', 
            'a' => 'Yes, if that vehicle has seven or more seats', 
            'b' => 'Yes, if it`s outside of normal bus working hours', 
            'c' => 'No, only buses can stop here', 
            'd' => 'Yes, if it`s a commercial vehicle', 
            'e' => 'Yes, when dropping off passengers', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '280', 
            'language_id' => '2', 
            'question_list_id' => '140', 
            'topic' => '私家车辆可以停在公交车站吗？', 
            'a' => '如果车子超过七个座位就可以', 
            'b' => '如果目前不是公交车的运营时间就可以', 
            'c' => '不可以，只有公交车可以在这里停靠', 
            'd' => '如果是商用车辆就可以停靠', 
            'e' => '如果只是上下乘客则可以停靠', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '281', 
            'language_id' => '1', 
            'question_list_id' => '141', 
            'topic' => 'What does this sign mean?', 
            'a' => 'You can stop here at any time for less than five minutes', 
            'b' => 'You can stop here at any time as long as a person remains with the car to move it', 
            'c' => 'You can stop here at any time if you have a broken or fractured leg in a cast', 
            'd' => 'You can stop here only if you have a mobility parking permit', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1141.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '282', 
            'language_id' => '2', 
            'question_list_id' => '141', 
            'topic' => '这个标识是什么意思？', 
            'a' => '这里最多停车五分钟', 
            'b' => '车内只要有人，就可以一直停车在这里', 
            'c' => '如果驾驶员的腿骨折了，就可以停车在这里', 
            'd' => '只有拥有残疾人停车标识的车辆才能够停在这里', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1141.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '283', 
            'language_id' => '1', 
            'question_list_id' => '142', 
            'topic' => 'How close can you park your vehicle to an intersection where no broken yellow lines have been marked?', 
            'a' => '10 metres', 
            'b' => '6 metres', 
            'c' => '3 metres', 
            'd' => '1 metre', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '284', 
            'language_id' => '2', 
            'question_list_id' => '142', 
            'topic' => '在没有施划黄色虚线的路口，可以把车停在距离路口最近多少米的地方？', 
            'a' => '10米', 
            'b' => '6米', 
            'c' => '3米', 
            'd' => '1米', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '285', 
            'language_id' => '1', 
            'question_list_id' => '143', 
            'topic' => 'How close can you park your vehicle to the approach side of a pedestrian crossing where no broken yellow lines have been marked?', 
            'a' => '10 metres', 
            'b' => '6 metres', 
            'c' => '3 metres', 
            'd' => '1 metres', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '286', 
            'language_id' => '2', 
            'question_list_id' => '143', 
            'topic' => '在没有施划黄色虚线的路边，可以把车停在距离人行横道最近多少米的地方？', 
            'a' => '10米', 
            'b' => '6米', 
            'c' => '3米', 
            'd' => '1米', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '287', 
            'language_id' => '1', 
            'question_list_id' => '144', 
            'topic' => 'When may you park your vehicle over a fire hydrant?', 
            'a' => 'Never', 
            'b' => 'At any time', 
            'c' => 'Only if someone who can move the vehicle stays with it', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1144.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '288', 
            'language_id' => '2', 
            'question_list_id' => '144', 
            'topic' => '你可以停车在消防栓标识之上吗？', 
            'a' => '永远不可以', 
            'b' => '任何情况下都可以', 
            'c' => '车中有人，可以随时移动这辆车，那么可以停放', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1144.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '289', 
            'language_id' => '1', 
            'question_list_id' => '145', 
            'topic' => 'When parking downhill on a steep road, what does the Road Code suggest that you should do? Select all that apply.', 
            'a' => 'Turn the wheels towards the kerb', 
            'b' => 'Turn your wheels away from the kerb', 
            'c' => 'Put your car in reverse gear if it has manual transmission, or in park if it has automatic transmission', 
            'd' => 'Leave your hazard lights on', 
            'e' => 'Put your handbrake on', 
            'ans' => 'ACE', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '290', 
            'language_id' => '2', 
            'question_list_id' => '145', 
            'topic' => '新西兰的道路交通规则建议你，在陡坡上停放车辆的时候，应该如何做？选择所有正确的', 
            'a' => '将前轮转向路牙', 
            'b' => '将前轮转向路牙的相反方向', 
            'c' => '手动档车辆挂在倒档，自动档车辆挂在P档', 
            'd' => '打开双闪灯', 
            'e' => '拉紧手刹车', 
            'ans' => 'ACE', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '291', 
            'language_id' => '1', 
            'question_list_id' => '146', 
            'topic' => 'When may you park your vehicle on a loading zone?', 
            'a' => 'Never - they`re only for commercial vehicles', 
            'b' => 'You can park a car there after business hours and on weekends', 
            'c' => 'You can park at any time for the purposes of unloading, but only for the amount of time shown on the sign', 
            'd' => 'It`s between midnight and 6am', 
            'e' => 'At all times during business hours (8am to 6am)', 
            'ans' => 'C', 
            'img' => '1146.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '292', 
            'language_id' => '2', 
            'question_list_id' => '146', 
            'topic' => '什么情况下驾驶员可以在Loading Zone停车？', 
            'a' => '不可以，只有商用车辆才可以在这里停放', 
            'b' => '非工作时间和周末，你可以随意停放', 
            'c' => '你可以在任意时间在这里上下乘客或装卸货物，但是要遵守上面的时间限制', 
            'd' => '午夜到凌晨6点之间可以停车', 
            'e' => '上班时间（8点到下午6点）之间可以停车', 
            'ans' => 'C', 
            'img' => '1146.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '293', 
            'language_id' => '1', 
            'question_list_id' => '147', 
            'topic' => 'What is the closest distance your vehicle may be parked to a vehicle entrance?', 
            'a' => 'One metre', 
            'b' => 'Two metres', 
            'c' => 'Three metres', 
            'd' => 'Four metres', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '294', 
            'language_id' => '2', 
            'question_list_id' => '147', 
            'topic' => '你可以距离车辆入口的最小停车距离是多少？', 
            'a' => '1米', 
            'b' => '2米', 
            'c' => '3米', 
            'd' => '4米', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '295', 
            'language_id' => '1', 
            'question_list_id' => '148', 
            'topic' => 'What should you do if an ambulance comes up behind you flashing red lights or sounding its siren?', 
            'a' => 'Stop quickly', 
            'b' => 'Maintain your speed - the ambulance driver will find a way around you', 
            'c' => 'Speed up so that you don`t hold the ambulance up', 
            'd' => 'Pull over to the left and slow down or stop if necessary', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '296', 
            'language_id' => '2', 
            'question_list_id' => '148', 
            'topic' => '如果你的车后跟随着闪着红灯或是拉响警报的救护车，你该怎么做？', 
            'a' => '迅速停车', 
            'b' => '保持速度，让救护车驾驶员自己找机会超车', 
            'c' => '加速，别挡着救护车', 
            'd' => '减速靠向道路的左边行驶，如果必要的话停车', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '297', 
            'language_id' => '1', 
            'question_list_id' => '149', 
            'topic' => 'What should you do if your vehicle breaks down on a motorway? Check all that apply.', 
            'a' => 'Stand on the motorway and flag down a passing driver to help', 
            'b' => 'Open your boot and bonnet', 
            'c' => 'Put your hazard warning lights on', 
            'd' => 'Call for help using a cellphone or a motorway phone', 
            'e' => 'Park as far to the left as possible', 
            'ans' => 'BCDE', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '298', 
            'language_id' => '2', 
            'question_list_id' => '149', 
            'topic' => '如果你的车在高速公路上抛锚了，你该怎么做？选择所有正确的', 
            'a' => '站在路边，向过往的司机招手示意寻求帮助', 
            'b' => '打开你的后备箱和发动机舱盖', 
            'c' => '打开你的双闪灯', 
            'd' => '使用手机或是路边的紧急电话求助', 
            'e' => '尽可能停在高速路的最左侧', 
            'ans' => 'BCDE', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '299', 
            'language_id' => '1', 
            'question_list_id' => '150', 
            'topic' => 'The bonnet of your vehicle lifts up while you are driving and you cannot see. What should you do? Check all that apply.', 
            'a' => 'Brake suddenly so you don`t leave the road', 
            'b' => 'Look through the gap underneath the bonnet or out of the side window', 
            'c' => 'Pull to the side of the road and refasten the bonnet', 
            'd' => 'Turn on your headlights and look out of the side window', 
            'e' => '', 
            'ans' => 'BC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '300', 
            'language_id' => '2', 
            'question_list_id' => '150', 
            'topic' => '行驶过程中车辆的发动机舱盖突然打开，遮挡了前方的视线，你该怎么办？选择所有正确的', 
            'a' => '急刹车，这样才不会开出路面', 
            'b' => '尽可能从发动机盖和挡风玻璃中的缝隙观察前方路况', 
            'c' => '尽快的在路边停车，重新盖好发动机盖并确认已经锁紧', 
            'd' => '打开车头灯，把脑袋从侧面的车窗伸出去观察前方路况', 
            'e' => '', 
            'ans' => 'BC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '301', 
            'language_id' => '1', 
            'question_list_id' => '151', 
            'topic' => 'What will happen if you have a rear tyre blowout?', 
            'a' => 'The back end will sway towards the side of the blowout', 
            'b' => 'The back end will sway away from the blowout', 
            'c' => 'The front end will pull towards the side of the blowout', 
            'd' => 'The front end will pull to the opposite side of the blowout', 
            'e' => 'The back end will sway from side to side', 
            'ans' => 'E', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '302', 
            'language_id' => '2', 
            'question_list_id' => '151', 
            'topic' => '如果车辆后轮爆胎，将会发生什么？', 
            'a' => '车辆尾部将会转向爆胎的那一侧', 
            'b' => '车辆尾部将会转向爆胎一侧的相反方向', 
            'c' => '车辆前部将会转向爆胎的那一侧', 
            'd' => '车辆前部将会转向爆胎一侧的相反方向', 
            'e' => '车子尾部将会不停的摆动，从一边到另一边', 
            'ans' => 'E', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '303', 
            'language_id' => '1', 
            'question_list_id' => '152', 
            'topic' => 'What will happen if you have a front tyre blowout?', 
            'a' => 'The back end will sway towards the side of the blowout', 
            'b' => 'The back end will sway away from the blowout', 
            'c' => 'The front end will pull towards the side of the blowout', 
            'd' => 'The front end will pull to the opposite side of the blowout', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '304', 
            'language_id' => '2', 
            'question_list_id' => '152', 
            'topic' => '如果车辆前轮爆胎，将会发生什么情况？', 
            'a' => '车辆的尾部将会摆向爆胎的一侧', 
            'b' => '车辆的尾部将会摆向爆胎一侧的相反方向', 
            'c' => '车辆的前部将会摆向爆胎的一侧', 
            'd' => '车辆的前部将会摆向爆胎一侧的相反方向', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '305', 
            'language_id' => '1', 
            'question_list_id' => '153', 
            'topic' => 'What must you do when you see two red lights flashing outside a fire station?', 
            'a' => 'Slow down and prepare to stop in case a vehicle exits the fire station', 
            'b' => 'Stop until the lights stop flashing', 
            'c' => 'Slow down to 20kph, then proceed if it is safe to do so', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1153.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '306', 
            'language_id' => '2', 
            'question_list_id' => '153', 
            'topic' => '当你看到消防站外面有两个红色的灯交替亮起，你该怎么做？', 
            'a' => '减速，准备停车，让行从消防站里出来的车辆', 
            'b' => '马上停车，直到红色的闪灯不在亮起', 
            'c' => '减速到20公里/小时，如果周围情况安全则继续前进', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1153.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '307', 
            'language_id' => '1', 
            'question_list_id' => '154', 
            'topic' => 'What must you do if glass falls on to the road from your vehicle? Check all that apply.', 
            'a' => 'Nothing is required - council road workers will remove it in due course', 
            'b' => 'Stop and remove the glass yourself if it can be done quickly and safely', 
            'c' => 'Tell the police if you can`t remove it because you are physically incapacitated', 
            'd' => '', 
            'e' => '', 
            'ans' => 'BC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '308', 
            'language_id' => '2', 
            'question_list_id' => '154', 
            'topic' => '如果你的汽车在行驶中掉落了一块玻璃在路上，你该怎么做？选择所有正确的', 
            'a' => '什么都不用做，市议会的道路维护人员将会清除它们', 
            'b' => '确保自身安全的情况下，快速的停车及清理路面上的玻璃残渣', 
            'c' => '如果你无法自己清理玻璃的残渣，那么打电话通知警方', 
            'd' => '', 
            'e' => '', 
            'ans' => 'BC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '309', 
            'language_id' => '1', 
            'question_list_id' => '155', 
            'topic' => 'Who can put a blue accident sign up?', 
            'a' => 'An ambulance officer', 
            'b' => 'a police officer', 
            'c' => 'A council officer', 
            'd' => 'A member of the public', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1155.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '310', 
            'language_id' => '2', 
            'question_list_id' => '155', 
            'topic' => '谁能够在道路上设立事故标识？', 
            'a' => '救护车工作人员', 
            'b' => '警官', 
            'c' => '市议会工作人员', 
            'd' => '任意人', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1155.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '311', 
            'language_id' => '1', 
            'question_list_id' => '156', 
            'topic' => 'You are driving past a line of parked cars. You notice a ball bouncing out into the road ahead. What should you do?', 
            'a' => 'Keep on your side of the road and drive through the ball - it won`t matter if it hits your car', 
            'b' => 'Keep on your side of the road and stop safely', 
            'c' => 'Swerve around the ball', 
            'd' => 'Flash your headlights', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '312', 
            'language_id' => '2', 
            'question_list_id' => '156', 
            'topic' => '路边停放着很多车辆，你发现前面路面上突然出现了一个弹跳着的皮球，你该怎么做？', 
            'a' => '继续在道路上你的一侧行驶，球撞上汽车不会有什么损失', 
            'b' => '在道路上你的一侧尽快地安全停车', 
            'c' => '开车绕过皮球', 
            'd' => '闪动汽车的头灯', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '313', 
            'language_id' => '1', 
            'question_list_id' => '157', 
            'topic' => 'What does a reflectorised triangle placed on the side of the road mean?', 
            'a' => 'There`s a breakdown or crash ahead', 
            'b' => 'There are roadworks ahead', 
            'c' => 'There`s a special event ahead', 
            'd' => 'There`s a one-way bridge ahead and you don`t have the right of way', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1157.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '314', 
            'language_id' => '2', 
            'question_list_id' => '157', 
            'topic' => '红色的反光三角标识放在路边，意味着什么？', 
            'a' => '前方有坏车或是事故', 
            'b' => '前方有道路施工', 
            'c' => '前方路面上有庆祝活动', 
            'd' => '前方有单车道桥梁，并且你没有优先通过权', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1157.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '315', 
            'language_id' => '1', 
            'question_list_id' => '158', 
            'topic' => 'When must you pull over and allow an ambulance or fire engine to pass?', 
            'a' => 'If it is travelling faster than you want to', 
            'b' => 'You don`t need to let it past - you can speed up so you`re not holding it up', 
            'c' => 'If its siren and/or red flashing lights are on', 
            'd' => 'At all times', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '316', 
            'language_id' => '2', 
            'question_list_id' => '158', 
            'topic' => '什么情况下你必须为救护车或是救火车让路？', 
            'a' => '如果它们的行驶速度比你快', 
            'b' => '你不用给它们让路，加速确保不会挡着它们就好', 
            'c' => '如果它们的警报灯亮起或是拉响了警笛', 
            'd' => '任何时间都必须让路', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '317', 
            'language_id' => '1', 
            'question_list_id' => '159', 
            'topic' => 'If you are the driver and you hurt somebody in a crash, who must you report it to?', 
            'a' => 'An ambulance officer', 
            'b' => 'A police officer', 
            'c' => 'The next of kin of the person you injured', 
            'd' => 'A lawyer', 
            'e' => 'A clerk of the court', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '318', 
            'language_id' => '2', 
            'question_list_id' => '159', 
            'topic' => '如果作为驾驶员被卷入事故，并且有人在事故中受伤，你必须通知谁？', 
            'a' => '救护车工作人员', 
            'b' => '警官', 
            'c' => '伤者的亲属', 
            'd' => '律师', 
            'e' => '法庭的工作人员', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '319', 
            'language_id' => '1', 
            'question_list_id' => '160', 
            'topic' => 'When should you use your hazard lights? Select all that apply.', 
            'a' => 'You`ve had to stop quickly because you`ve come upon slow moving traffic and there`s a chance another vehicle might not see you and run into the back of you', 
            'b' => 'You`re changing a tyre on the side of the road', 
            'c' => 'Your vehicle has broken down and is being towed', 
            'd' => 'You`ve parked on a broken yellow line to pick something up', 
            'e' => '', 
            'ans' => 'BC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '320', 
            'language_id' => '2', 
            'question_list_id' => '160', 
            'topic' => '什么时候应该使用紧急情况指示灯（双闪灯）？选择所有正确的', 
            'a' => '如果有人在行驶缓慢的车流中，在你车子的前面插队（加塞）了', 
            'b' => '你正在道路边更换轮胎', 
            'c' => '你的车坏了，正在被拖车拖动', 
            'd' => '为了取某件物品，你在黄色虚线上临时停一下车', 
            'e' => '', 
            'ans' => 'BC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '321', 
            'language_id' => '1', 
            'question_list_id' => '161', 
            'topic' => 'If you are a driver involved in a crash, what is the FIRST action you should take?', 
            'a' => 'Call the police', 
            'b' => 'Check there are no injuries', 
            'c' => 'Call for an ambulance', 
            'd' => 'Leave the scene to tell someone', 
            'e' => 'Call a family member or friend', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '322', 
            'language_id' => '2', 
            'question_list_id' => '161', 
            'topic' => '如果作为驾驶员的你被卷入道路交通事故中，第一件事应该做什么？', 
            'a' => '拨打报警电话', 
            'b' => '马上下车检查看看是否有人受伤', 
            'c' => '拨打救护车电话', 
            'd' => '离开现场去通知其他人', 
            'e' => '给亲戚或是朋友打电话寻求帮助', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '323', 
            'language_id' => '1', 
            'question_list_id' => '162', 
            'topic' => 'You are driving on a country road at night when your vehicle headlights suddenly go out. What is the safest thing to do? Select all that apply.', 
            'a' => 'Slow down and prepare to stop somewhere safe', 
            'b' => 'Stop on the right so you can attract the attention of cars coming towards you', 
            'c' => 'Turn your hazard lights on', 
            'd' => 'Carry on driving slowly with your hazard lights on until you reach your destination', 
            'e' => 'Carry on driving with your interior lights on', 
            'ans' => 'AC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '324', 
            'language_id' => '2', 
            'question_list_id' => '162', 
            'topic' => '夜间你正在没有路灯的乡间公路上行驶，突然你的汽车头灯失效了，最安全的解决办法是什么？选择所有正确的', 
            'a' => '减速，寻找可以安全停车的地方', 
            'b' => '停在道路的右边，这样对面驶来的车辆更容易看到你', 
            'c' => '打开双闪灯', 
            'd' => '打开双闪灯，继续行驶到目的地', 
            'e' => '打开汽车乘客舱的照明灯，然后继续行驶', 
            'ans' => 'AC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '325', 
            'language_id' => '1', 
            'question_list_id' => '163', 
            'topic' => 'What must you do when turning left into a driveway. Select all that apply', 
            'a' => 'Stay in the left turn lane, or keep to the left side of the road', 
            'b' => 'check your mirrors and your blind spot', 
            'c' => 'signal for at least two seconds', 
            'd' => 'slow down before you turn', 
            'e' => 'give way to pedestrians already crossing', 
            'ans' => 'ABDE', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '326', 
            'language_id' => '2', 
            'question_list_id' => '163', 
            'topic' => '当车辆准备左转弯驶入行车道(driveway)的时候，应该做什么？选择所有正确的', 
            'a' => '保持车辆在最左边的车道，或者保持车辆在道路的最左边', 
            'b' => '检查后视镜以及车辆的盲点', 
            'c' => '打转向灯至少两秒钟', 
            'd' => '转弯前减速', 
            'e' => '如果路边有行人，给他们让路', 
            'ans' => 'ABDE', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '327', 
            'language_id' => '1', 
            'question_list_id' => '164', 
            'topic' => 'You wish to make a right turn on a narrow country road. There is a vehicle coming towards you and traffic behind you. What is the safest option?', 
            'a' => 'Put your hazard lights on before you turn', 
            'b' => 'Pump the brakes to let the person behind know that you will be slowing down', 
            'c' => 'Move to the left and wait until the vehicles behind have overtaken you before turning right', 
            'd' => 'Indicate right, but stay as far left as you can', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '328', 
            'language_id' => '2', 
            'question_list_id' => '164', 
            'topic' => '在狭窄的乡间公路上你准备右转弯，这时候对面驶来了直行车辆，并且你后面还跟随着其他车辆，最安全的办法是什么？', 
            'a' => '转弯前使用危险警示灯（双闪）', 
            'b' => '踩几脚刹车，通知后车注意减速', 
            'c' => '将你的车辆停在路的左边，等待后面的车辆超过你后再进行右转弯', 
            'd' => '打右转指示灯，同时保持在道路最左边行驶', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '329', 
            'language_id' => '1', 
            'question_list_id' => '165', 
            'topic' => 'What must you do when turning right at a roundabout? Check all that apply.', 
            'a' => 'Indicate right as you approach the roundabout', 
            'b' => 'Keep indicating right as you exit the roundabout', 
            'c' => 'Indicate left as you pass the exit before the one you want to take', 
            'd' => 'Stay left as you enter the roundabout', 
            'e' => '', 
            'ans' => 'AC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '330', 
            'language_id' => '2', 
            'question_list_id' => '165', 
            'topic' => '环岛右转的时候，你必须做什么？选择所有正确的', 
            'a' => '接近环岛的时候开始打右转向灯', 
            'b' => '快要驶离环岛依然开启右转向灯', 
            'c' => '即将驶离环岛的时候，打左转向灯示意', 
            'd' => '进入环岛后依然保持在左边行驶', 
            'e' => '', 
            'ans' => 'AC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '331', 
            'language_id' => '1', 
            'question_list_id' => '166', 
            'topic' => 'When driving on an unlaned road, where should your vehicle be positioned?', 
            'a' => 'In the middle of the road', 
            'b' => 'As far to the left of the road as is safe', 
            'c' => 'One metre from the left of the road', 
            'd' => 'Anywhere you can see what`s coming', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '332', 
            'language_id' => '2', 
            'question_list_id' => '166', 
            'topic' => '如果在没有标识线的道路上行驶，你应该在路面的什么位置行驶？', 
            'a' => '在道路中间行驶', 
            'b' => '保证安全的情况下尽可能在路的最左边行驶', 
            'c' => '保持距离路左边1米的地方行驶', 
            'd' => '只要能看到对面的来车，在路面任何地方行驶都可以', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '333', 
            'language_id' => '1', 
            'question_list_id' => '167', 
            'topic' => 'When turning right from a two-laned road into a one-way street that has two lanes, which lane must you turn into?', 
            'a' => 'The left lane', 
            'b' => 'The right lane', 
            'c' => 'It doesn`t matter - either lane', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '334', 
            'language_id' => '2', 
            'question_list_id' => '167', 
            'topic' => '如果右转弯进入一条具有两条车道的单行线，你必须拐弯进入单行线的哪一条车道？', 
            'a' => '左侧车道', 
            'b' => '右侧车道', 
            'c' => '无所谓，哪条都可以', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '335', 
            'language_id' => '1', 
            'question_list_id' => '168', 
            'topic' => 'What must you do if you intend to move your vehicle from the right-hand lane to the left-hand lane? Check all that apply.', 
            'a' => 'Indicate left for three seconds', 
            'b' => 'Check over your left shoulder for your blind spot', 
            'c' => 'Check your rear view mirror', 
            'd' => '', 
            'e' => '', 
            'ans' => 'ABC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '336', 
            'language_id' => '2', 
            'question_list_id' => '168', 
            'topic' => '如果你想从右侧车道变线到左侧车道，你该怎么做？选择所有正确的', 
            'a' => '打左转向灯三秒钟以上', 
            'b' => '向左侧回头，检查左后视镜的盲点', 
            'c' => '查看车内的后视镜', 
            'd' => '', 
            'e' => '', 
            'ans' => 'ABC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '337', 
            'language_id' => '1', 
            'question_list_id' => '169', 
            'topic' => 'What does a yellow reflector (cat`s eye) placed on the road mean?', 
            'a' => 'No passing', 
            'b' => 'Fire hydrant', 
            'c' => 'Yellow marks the left side of the road', 
            'd' => 'It`s safe to pass here', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1169.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '338', 
            'language_id' => '2', 
            'question_list_id' => '169', 
            'topic' => '道路上的黄色反光标识（猫眼）代表什么意思？', 
            'a' => '禁止超车', 
            'b' => '消防栓', 
            'c' => '道路的左侧边界', 
            'd' => '在这里超车很安全', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1169.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '339', 
            'language_id' => '1', 
            'question_list_id' => '170', 
            'topic' => 'What does a white reflector (cat`s eye) placed on the road mean?', 
            'a' => 'No passing', 
            'b' => 'Fire hydrant', 
            'c' => 'White marks the left side of the road', 
            'd' => 'White marks the centre line', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1170.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '340', 
            'language_id' => '2', 
            'question_list_id' => '170', 
            'topic' => '道路上的白色反光标识（猫眼）代表什么意思？', 
            'a' => '禁止超车', 
            'b' => '消防栓', 
            'c' => '标记道路的左侧边缘', 
            'd' => '标记道路的中线', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1170.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '341', 
            'language_id' => '1', 
            'question_list_id' => '171', 
            'topic' => 'What do these road markings mean?', 
            'a' => 'You can overtake another vehicle here', 
            'b' => 'You can turn right at any time here', 
            'c' => 'You can turn right from the left hand lane into the intersection', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1171.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '342', 
            'language_id' => '2', 
            'question_list_id' => '171', 
            'topic' => '图中所示的道路标线是什么意思？', 
            'a' => '此处可以超车', 
            'b' => '任意时间可以在这里右转弯', 
            'c' => '你可以直接从左边的车道向右转弯', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1171.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '343', 
            'language_id' => '1', 
            'question_list_id' => '172', 
            'topic' => 'When can flush medians be used? Check all that apply.', 
            'a' => 'To overtake a slower vehicle', 
            'b' => 'To park while loading and unloading goods', 
            'c' => 'To slow down and wait before turning right from the road', 
            'd' => 'To wait to move into a gap in the traffic after you`ve turned right', 
            'e' => '', 
            'ans' => 'CD', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '344', 
            'language_id' => '2', 
            'question_list_id' => '172', 
            'topic' => '什么情况下可以使用道路上的缓冲区？选择所有正确的', 
            'a' => '用于超越慢车', 
            'b' => '为了装卸货物而停车', 
            'c' => '减速准备向右转弯', 
            'd' => '从岔路上转弯到缓冲区后，在其上等待直行车流的空隙并选择安全的时机进入', 
            'e' => '', 
            'ans' => 'CD', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '345', 
            'language_id' => '1', 
            'question_list_id' => '173', 
            'topic' => 'Can you use a right turn bay to overtake a vehicle travelling straight ahead?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => 'Only if the road is clear ahead', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '346', 
            'language_id' => '2', 
            'question_list_id' => '173', 
            'topic' => '你可以使用右转弯等待区超越直行车辆吗？', 
            'a' => '可以', 
            'b' => '不可以', 
            'c' => '如果前方道路没有障碍则可以', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '347', 
            'language_id' => '1', 
            'question_list_id' => '174', 
            'topic' => 'What is the meaning of a broken yellow line painted on the road near the kerb?', 
            'a' => 'No overtaking', 
            'b' => 'No parking', 
            'c' => 'Fire hydrant', 
            'd' => 'Bus stop', 
            'e' => 'You may stop here for less than five minutes', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '348', 
            'language_id' => '2', 
            'question_list_id' => '174', 
            'topic' => '马路边缘的黄色虚线代表什么意思？', 
            'a' => '不许超车', 
            'b' => '不许停车', 
            'c' => '消防栓', 
            'd' => '公交车站', 
            'e' => '你可以在这里临时停车不超过5分钟', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '349', 
            'language_id' => '1', 
            'question_list_id' => '175', 
            'topic' => 'What does a blue reflector (cat`s eye) placed on the road mean?', 
            'a' => 'No passing', 
            'b' => 'Fire hydrant', 
            'c' => 'Blue marks the left side of the road', 
            'd' => 'Blue marks the middle line', 
            'e' => 'It`s safe to pass here', 
            'ans' => 'B', 
            'img' => '1175.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '350', 
            'language_id' => '2', 
            'question_list_id' => '175', 
            'topic' => '道路上的蓝色反光标识（猫眼）代表什么意思？', 
            'a' => '禁止超车', 
            'b' => '附近有消防栓', 
            'c' => '标记道路的左侧边界', 
            'd' => '标记道路的中线', 
            'e' => '这里可以安全超越其它车辆', 
            'ans' => 'B', 
            'img' => '1175.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '351', 
            'language_id' => '1', 
            'question_list_id' => '176', 
            'topic' => 'Which vehicle must give way?', 
            'a' => 'Red car', 
            'b' => 'Blue car', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1176.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '352', 
            'language_id' => '2', 
            'question_list_id' => '176', 
            'topic' => '谁应该让路？', 
            'a' => '红车', 
            'b' => '蓝车', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1176.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '353', 
            'language_id' => '1', 
            'question_list_id' => '177', 
            'topic' => 'Which vehicle must give way?', 
            'a' => 'Blue truck', 
            'b' => 'Red car', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1177.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '354', 
            'language_id' => '2', 
            'question_list_id' => '177', 
            'topic' => '谁应该让路？', 
            'a' => '蓝色卡车', 
            'b' => '红色轿车', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1177.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '355', 
            'language_id' => '1', 
            'question_list_id' => '178', 
            'topic' => 'Which vehicle must give way?', 
            'a' => 'Red car', 
            'b' => 'Blue car', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1178.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '356', 
            'language_id' => '2', 
            'question_list_id' => '178', 
            'topic' => '谁应该让路？', 
            'a' => '红车', 
            'b' => '蓝车', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1178.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '357', 
            'language_id' => '1', 
            'question_list_id' => '179', 
            'topic' => 'Which vehicle must give way?', 
            'a' => 'Red car', 
            'b' => 'Blue car', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1179.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '358', 
            'language_id' => '2', 
            'question_list_id' => '179', 
            'topic' => '谁应该让路？', 
            'a' => '红车', 
            'b' => '蓝车', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1179.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '359', 
            'language_id' => '1', 
            'question_list_id' => '180', 
            'topic' => 'Which vehicle must give way?', 
            'a' => 'Red motorcycle', 
            'b' => 'Blue car', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1180.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '360', 
            'language_id' => '2', 
            'question_list_id' => '180', 
            'topic' => '谁应该让路？', 
            'a' => '红色摩托车', 
            'b' => '蓝色轿车', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1180.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '361', 
            'language_id' => '1', 
            'question_list_id' => '181', 
            'topic' => 'Which vehicle must give way?', 
            'a' => 'Red car', 
            'b' => 'Blue car', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1181.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '362', 
            'language_id' => '2', 
            'question_list_id' => '181', 
            'topic' => '谁应该让路？', 
            'a' => '红车', 
            'b' => '蓝车', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1181.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '363', 
            'language_id' => '1', 
            'question_list_id' => '182', 
            'topic' => 'Which vehicle must give way?', 
            'a' => 'Blue car', 
            'b' => 'Red car', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1182.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '364', 
            'language_id' => '2', 
            'question_list_id' => '182', 
            'topic' => '谁应该让路？', 
            'a' => '蓝车', 
            'b' => '红车', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1182.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '365', 
            'language_id' => '1', 
            'question_list_id' => '183', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1183.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '366', 
            'language_id' => '2', 
            'question_list_id' => '183', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1183.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '367', 
            'language_id' => '1', 
            'question_list_id' => '184', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1184.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '368', 
            'language_id' => '2', 
            'question_list_id' => '184', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1184.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '369', 
            'language_id' => '1', 
            'question_list_id' => '185', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1185.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '370', 
            'language_id' => '2', 
            'question_list_id' => '185', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1185.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '371', 
            'language_id' => '1', 
            'question_list_id' => '186', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1186.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '372', 
            'language_id' => '2', 
            'question_list_id' => '186', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1186.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '373', 
            'language_id' => '1', 
            'question_list_id' => '187', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1187.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '374', 
            'language_id' => '2', 
            'question_list_id' => '187', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1187.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '375', 
            'language_id' => '1', 
            'question_list_id' => '188', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1188.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '376', 
            'language_id' => '2', 
            'question_list_id' => '188', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1188.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '377', 
            'language_id' => '1', 
            'question_list_id' => '189', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1189.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '378', 
            'language_id' => '2', 
            'question_list_id' => '189', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1189.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '379', 
            'language_id' => '1', 
            'question_list_id' => '190', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1190.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '380', 
            'language_id' => '2', 
            'question_list_id' => '190', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1190.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '381', 
            'language_id' => '1', 
            'question_list_id' => '191', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1191.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '382', 
            'language_id' => '2', 
            'question_list_id' => '191', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1191.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '383', 
            'language_id' => '1', 
            'question_list_id' => '192', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1192.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '384', 
            'language_id' => '2', 
            'question_list_id' => '192', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1192.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '385', 
            'language_id' => '1', 
            'question_list_id' => '193', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1193.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '386', 
            'language_id' => '2', 
            'question_list_id' => '193', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1193.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '387', 
            'language_id' => '1', 
            'question_list_id' => '194', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1194.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '388', 
            'language_id' => '2', 
            'question_list_id' => '194', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1194.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '389', 
            'language_id' => '1', 
            'question_list_id' => '195', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1195.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '390', 
            'language_id' => '2', 
            'question_list_id' => '195', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1195.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '391', 
            'language_id' => '1', 
            'question_list_id' => '196', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1196.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '392', 
            'language_id' => '2', 
            'question_list_id' => '196', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1196.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '393', 
            'language_id' => '1', 
            'question_list_id' => '197', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1197.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '394', 
            'language_id' => '2', 
            'question_list_id' => '197', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1197.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '395', 
            'language_id' => '1', 
            'question_list_id' => '198', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1198.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '396', 
            'language_id' => '2', 
            'question_list_id' => '198', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1198.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '397', 
            'language_id' => '1', 
            'question_list_id' => '199', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1199.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '398', 
            'language_id' => '2', 
            'question_list_id' => '199', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1199.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '399', 
            'language_id' => '1', 
            'question_list_id' => '200', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1200.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '400', 
            'language_id' => '2', 
            'question_list_id' => '200', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1200.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '401', 
            'language_id' => '1', 
            'question_list_id' => '201', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1201.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '402', 
            'language_id' => '2', 
            'question_list_id' => '201', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1201.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '403', 
            'language_id' => '1', 
            'question_list_id' => '202', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1202.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '404', 
            'language_id' => '2', 
            'question_list_id' => '202', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1202.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '405', 
            'language_id' => '1', 
            'question_list_id' => '203', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1203.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '406', 
            'language_id' => '2', 
            'question_list_id' => '203', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1203.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '407', 
            'language_id' => '1', 
            'question_list_id' => '204', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1204.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '408', 
            'language_id' => '2', 
            'question_list_id' => '204', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1204.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '409', 
            'language_id' => '1', 
            'question_list_id' => '205', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1205.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '410', 
            'language_id' => '2', 
            'question_list_id' => '205', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1205.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '411', 
            'language_id' => '1', 
            'question_list_id' => '206', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1206.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '412', 
            'language_id' => '2', 
            'question_list_id' => '206', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1206.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '413', 
            'language_id' => '1', 
            'question_list_id' => '207', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1207.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '414', 
            'language_id' => '2', 
            'question_list_id' => '207', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1207.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '415', 
            'language_id' => '1', 
            'question_list_id' => '208', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1208.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '416', 
            'language_id' => '2', 
            'question_list_id' => '208', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1208.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '417', 
            'language_id' => '1', 
            'question_list_id' => '209', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1209.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '418', 
            'language_id' => '2', 
            'question_list_id' => '209', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1209.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '419', 
            'language_id' => '1', 
            'question_list_id' => '210', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1210.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '420', 
            'language_id' => '2', 
            'question_list_id' => '210', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1210.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '421', 
            'language_id' => '1', 
            'question_list_id' => '211', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1211.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '422', 
            'language_id' => '2', 
            'question_list_id' => '211', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1211.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '423', 
            'language_id' => '1', 
            'question_list_id' => '212', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1212.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '424', 
            'language_id' => '2', 
            'question_list_id' => '212', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1212.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '425', 
            'language_id' => '1', 
            'question_list_id' => '213', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1213.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '426', 
            'language_id' => '2', 
            'question_list_id' => '213', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1213.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '427', 
            'language_id' => '1', 
            'question_list_id' => '214', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1214.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '428', 
            'language_id' => '2', 
            'question_list_id' => '214', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1214.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '429', 
            'language_id' => '1', 
            'question_list_id' => '215', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1215.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '430', 
            'language_id' => '2', 
            'question_list_id' => '215', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1215.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '431', 
            'language_id' => '1', 
            'question_list_id' => '216', 
            'topic' => 'Does the driver of the blue car have to give way?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1216.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '432', 
            'language_id' => '2', 
            'question_list_id' => '216', 
            'topic' => '蓝色轿车驾驶员是否必须让路？', 
            'a' => '是', 
            'b' => '否', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1216.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '433', 
            'language_id' => '1', 
            'question_list_id' => '217', 
            'topic' => 'When may you turn right on a red light?', 
            'a' => 'If there`s a green arrow to the right or straight ahead with no red arrow', 
            'b' => 'If there is a marked box for turning right', 
            'c' => 'If there is no other traffic around', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '434', 
            'language_id' => '2', 
            'question_list_id' => '217', 
            'topic' => '什么情况下可以在红灯的时候右转？', 
            'a' => '如果信号灯上绿色向右的箭头亮起、或是直行绿灯亮起且没有红色右转箭头', 
            'b' => '如果有右转的标识框', 
            'c' => '如果路上没有其它车辆', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '435', 
            'language_id' => '1', 
            'question_list_id' => '218', 
            'topic' => 'You are driving on a road with marked lanes and you are in the lane with an arrow showing a left turn only. What must you do?', 
            'a' => 'Turn left', 
            'b' => 'Turn left or go straight ahead', 
            'c' => 'Not signal', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '436', 
            'language_id' => '2', 
            'question_list_id' => '218', 
            'topic' => '你在有标线的道路上行驶，且车道前方标明只可以左转的箭头，你该怎么做？', 
            'a' => '左转弯', 
            'b' => '左转弯或直行都可以', 
            'c' => '不使用转向灯就转弯', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '437', 
            'language_id' => '1', 
            'question_list_id' => '219', 
            'topic' => 'If an intersection has a stop sign, when must you stop?', 
            'a' => 'Always', 
            'b' => 'Only if there are other vehicles coming', 
            'c' => 'Only if there are traffic lights as well', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '438', 
            'language_id' => '2', 
            'question_list_id' => '219', 
            'topic' => '如果路口有一个停车让行标识，什么情况下应该停下来？', 
            'a' => '无论什么情况总是停下来', 
            'b' => '如果路口有其他车辆则停下来，否则不停', 
            'c' => '如果路口有信号灯则停下来，否则不停', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '439', 
            'language_id' => '1', 
            'question_list_id' => '220', 
            'topic' => 'When coming up to a stop sign, should you stop, and if so, where should you stop?', 
            'a' => 'Behind the line', 
            'b' => 'Where you can see traffic coming in both directions', 
            'c' => 'You don`t need to stop if you can see nothing`s coming', 
            'd' => 'With the front wheels of your vehicle on the yellow line', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '440', 
            'language_id' => '2', 
            'question_list_id' => '220', 
            'topic' => '如果前方路口有停车标识，你应该停车吗？如果停车，在哪里停？', 
            'a' => '在停止线后面停车', 
            'b' => '在可以看到双方向交通的地方停车', 
            'c' => '如果发现路口没有车，那就不用停车', 
            'd' => '把车子的前轮压在停止线上停车', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '441', 
            'language_id' => '1', 
            'question_list_id' => '221', 
            'topic' => 'You are in the left-hand lane at traffic signals. You are waiting to turn left. Which of these traffic signals may you move on?', 
            'a' => 'A', 
            'b' => 'B', 
            'c' => 'C', 
            'd' => 'D', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1221.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '442', 
            'language_id' => '2', 
            'question_list_id' => '221', 
            'topic' => '你正在路口的最左边车道等待信号灯放行左转弯，下面哪一个信号灯亮起的时候你可以左转？', 
            'a' => 'A', 
            'b' => 'B', 
            'c' => 'C', 
            'd' => 'D', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1221.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '443', 
            'language_id' => '1', 
            'question_list_id' => '222', 
            'topic' => 'What must be displayed on the back of a trailer being towed at night?', 
            'a' => 'A red light', 
            'b' => 'A white light', 
            'c' => 'A yellow light', 
            'd' => 'A flashing red light', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '444', 
            'language_id' => '2', 
            'question_list_id' => '222', 
            'topic' => '当夜间使用拖车的时候，必须在拖车后部安装何种灯光？', 
            'a' => '红灯', 
            'b' => '白灯', 
            'c' => '黄灯', 
            'd' => '闪烁的红灯', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '445', 
            'language_id' => '1', 
            'question_list_id' => '223', 
            'topic' => 'What does a Warrant of Fitness show? Select all that apply', 
            'a' => 'The vehicle is roadworthy', 
            'b' => 'The vehicle has been inspected by an approved WoF inspector', 
            'c' => 'The month the WoF expires', 
            'd' => '', 
            'e' => '', 
            'ans' => 'BC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '446', 
            'language_id' => '2', 
            'question_list_id' => '223', 
            'topic' => '车辆安全检验证明WoF都显示什么内容？选择所有可能选项', 
            'a' => '车辆可以上路', 
            'b' => '车辆被持牌WoF检验员检测过', 
            'c' => '车辆WoF的有效月份', 
            'd' => '', 
            'e' => '', 
            'ans' => 'BC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '447', 
            'language_id' => '1', 
            'question_list_id' => '224', 
            'topic' => 'Who is responsible for making a passenger over 15 years old and over put on their safety belt?', 
            'a' => 'The oldest person in the car', 
            'b' => 'The driver', 
            'c' => 'The passenger', 
            'd' => 'The owner of the car', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '448', 
            'language_id' => '2', 
            'question_list_id' => '224', 
            'topic' => '超过15岁的乘客，谁对他们是否使用安全带负责？', 
            'a' => '车中年纪最大的乘客', 
            'b' => '司机', 
            'c' => '乘客自己', 
            'd' => '车主', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '449', 
            'language_id' => '1', 
            'question_list_id' => '225', 
            'topic' => 'When you have a learner licence do you have to have it with you when you drive?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '450', 
            'language_id' => '2', 
            'question_list_id' => '225', 
            'topic' => '如果你持有初学者驾照，开车上路的时候是否必须随身携带它？', 
            'a' => '是的', 
            'b' => '不是', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '451', 
            'language_id' => '1', 
            'question_list_id' => '226', 
            'topic' => 'Who is responsible for making a child under 15 years old (0-14) use a safety belt or a safety seat in a vehicle?', 
            'a' => 'The oldest person in the car', 
            'b' => 'The driver', 
            'c' => 'The passenger', 
            'd' => 'The owner of the car', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '452', 
            'language_id' => '2', 
            'question_list_id' => '226', 
            'topic' => '乘客不到15岁，谁对他们是否使用安全带负责？', 
            'a' => '车中年纪最大的乘客', 
            'b' => '司机', 
            'c' => '乘客自己', 
            'd' => '车主', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '453', 
            'language_id' => '1', 
            'question_list_id' => '227', 
            'topic' => 'When you have a learner licence you must always drive with a supervisor. What is a supervisor?', 
            'a' => 'A person over the age of 25 with a full New Zealand driver`s licence of the same class that you are driving.', 
            'b' => 'A person who has held a full New Zealand driver`s licence for more than two years in the same class that you are driving', 
            'c' => 'A person of any age who has had a restricted licence for at least six months in any class', 
            'd' => 'A person over the age of 30 who has held any New Zealand driver`s licence for two years or more', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '454', 
            'language_id' => '2', 
            'question_list_id' => '227', 
            'topic' => '当你持有初学者驾照，上路开车的时候必须在副驾驶有一位监督指导人，监督指导人指的是？', 
            'a' => '年龄超过25岁持有与你驾驶车型相符的新西兰全驾照的人', 
            'b' => '持有与你驾驶车型相符的新西兰全驾照，超过两年的人', 
            'c' => '持有限制性驾照超过六个月的人', 
            'd' => '持有新西兰全驾照超过两年、年龄超过30岁的人', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '455', 
            'language_id' => '1', 
            'question_list_id' => '228', 
            'topic' => 'If you have a learner licence can you carry passengers?', 
            'a' => 'No, not at any time', 
            'b' => 'Yes, at any time', 
            'c' => 'Yes, but only if a supervisor agrees to it', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '456', 
            'language_id' => '2', 
            'question_list_id' => '228', 
            'topic' => '如果你持有初学者驾照，你可以搭载乘客吗？', 
            'a' => '不行，任何时间都不行', 
            'b' => '可以，任何时间都可以', 
            'c' => '可以，不过需要得到你的驾驶监督指导人的同意', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '457', 
            'language_id' => '1', 
            'question_list_id' => '229', 
            'topic' => 'If you have a restricted licence when can you carry passengers? Check all that apply.', 
            'a' => 'At any time, as long as a supervisor with a full driver`s licence is sitting in the front passenger seat (the supervisor must have had the licence for at least 2 years)', 
            'b' => 'Between 5am and 10pm, as long as your passengers are your own children or your spouse/de facto partner', 
            'c' => 'Only between 10pm and 5am', 
            'd' => 'Only if your car has six or more seats', 
            'e' => '', 
            'ans' => 'AB', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '458', 
            'language_id' => '2', 
            'question_list_id' => '229', 
            'topic' => '如果你持有限制性驾照，你可以搭载乘客吗？选择所有正确的', 
            'a' => '任何时间，如果副驾驶坐着持有新西兰全驾照超过两年的监督指导人，则可以', 
            'b' => '清晨5点到晚上10点之间，且乘客是你的孩子或是配偶、事实伴侣', 
            'c' => '晚上10点到第二天清晨5点之间', 
            'd' => '如果你驾驶的车辆超过六个座位则可以', 
            'e' => '', 
            'ans' => 'AB', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '459', 
            'language_id' => '1', 
            'question_list_id' => '230', 
            'topic' => 'What is the maximum speed you may drive If you have a space saver wheel fitted?', 
            'a' => '70kph', 
            'b' => '80kph', 
            'c' => '90kph', 
            'd' => '100kph', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '460', 
            'language_id' => '2', 
            'question_list_id' => '230', 
            'topic' => '如果你驾驶的车辆正在使用小备胎，最高时速不能超过多少？', 
            'a' => '70公里/小时', 
            'b' => '80公里/小时', 
            'c' => '90公里/小时', 
            'd' => '100公里/小时', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '461', 
            'language_id' => '1', 
            'question_list_id' => '231', 
            'topic' => 'If you have had a flat tyre and have fitted a space saver wheel what must you do? Check all that apply.', 
            'a' => 'Drive at 80kph (or the speed denoted on the wheel) or less', 
            'b' => 'Drive up to 300km if the weather is fine', 
            'c' => 'Drive to a place you can fix the tyre as soon as possible', 
            'd' => 'Put your hazard warning lights on while you are driving', 
            'e' => 'Lower the pressure in the other tyres', 
            'ans' => 'AC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '462', 
            'language_id' => '2', 
            'question_list_id' => '231', 
            'topic' => '如果你的车子爆胎了，替换上了小备胎（非原始尺寸轮胎），你该如何继续驾驶？选择所有正确的答案', 
            'a' => '以不超过80公里/小时的时速驾驶', 
            'b' => '如果天气不错则可以最多驾驶300公里', 
            'c' => '尽快开到可以补胎的地方，修好原来的轮胎', 
            'd' => '驾驶的时候开启双闪灯（紧急情况指示灯）', 
            'e' => '把其它的轮胎气压降低', 
            'ans' => 'AC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '463', 
            'language_id' => '1', 
            'question_list_id' => '232', 
            'topic' => 'If you have a restricted licence, what hours can you drive on your own?', 
            'a' => '5am-10pm', 
            'b' => 'Dawn to dusk', 
            'c' => '6am-6pm', 
            'd' => '6am-10pm', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '464', 
            'language_id' => '2', 
            'question_list_id' => '232', 
            'topic' => '如果你持有限制性驾照，什么时间段可以独自开车上路？', 
            'a' => '清晨5点到晚上10点', 
            'b' => '黎明到黄昏', 
            'c' => '清晨6点到晚上6点', 
            'd' => '清晨6点到晚上10点', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '465', 
            'language_id' => '1', 
            'question_list_id' => '233', 
            'topic' => 'What is the maximum legal speed limit for a car towing a trailer on the open road?', 
            'a' => '80kph', 
            'b' => '85kph', 
            'c' => '90kph', 
            'd' => '95kph', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '466', 
            'language_id' => '2', 
            'question_list_id' => '233', 
            'topic' => '在开放道路上牵引拖车前行，最高速度不能超过多少？', 
            'a' => '80公里/小时', 
            'b' => '85公里/小时', 
            'c' => '90公里/小时', 
            'd' => '95公里/小时', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '467', 
            'language_id' => '1', 
            'question_list_id' => '234', 
            'topic' => 'To tow a trailer on a learners or restricted car licence the weight of your vehicle plus the weight of the trailer must not exceed what weight?', 
            'a' => '3000kg', 
            'b' => '3500kg', 
            'c' => '4000kg', 
            'd' => '4500kg', 
            'e' => '6000kg', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '468', 
            'language_id' => '2', 
            'question_list_id' => '234', 
            'topic' => '如果你持有初学者驾照或是限制性驾照，并且牵引拖车行驶，你所驾驶的车辆加上拖车的总重量不能超过多少公斤？', 
            'a' => '3000公斤', 
            'b' => '3500公斤', 
            'c' => '4000公斤', 
            'd' => '4500公斤', 
            'e' => '6000公斤', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '469', 
            'language_id' => '1', 
            'question_list_id' => '235', 
            'topic' => 'Can you drive a moped on a car licence?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '470', 
            'language_id' => '2', 
            'question_list_id' => '235', 
            'topic' => '你可以使用汽车驾照驾驶一辆轻便型摩托车(机器脚踏车)吗？', 
            'a' => '可以', 
            'b' => '不可以', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '471', 
            'language_id' => '1', 
            'question_list_id' => '236', 
            'topic' => 'What should you do before any modification is carried out on your vehicle?', 
            'a' => 'Modifying your vehicle is OK as long as you purchase the parts from a reputable dealer', 
            'b' => 'Check with a warrant of fitness inspector', 
            'c' => 'Get a certificate from the police', 
            'd' => 'Record the modification on your vehicle ownership papers', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '472', 
            'language_id' => '2', 
            'question_list_id' => '236', 
            'topic' => '在对你自己的车辆进行了改装或变更前，你应该做什么？', 
            'a' => '如果你从有信誉的经销商那里购买零件那么改装就是OK的', 
            'b' => '让有资质的安全检测人员对车辆进行检验', 
            'c' => '从警方获得改装认证许可', 
            'd' => '在你的汽车所有权证书上对改装进行记录', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '473', 
            'language_id' => '1', 
            'question_list_id' => '237', 
            'topic' => 'If you tow another vehicle, what is the maximum distance allowed between the two vehicles?', 
            'a' => '2m', 
            'b' => '4m', 
            'c' => '6m', 
            'd' => '8m', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '474', 
            'language_id' => '2', 
            'question_list_id' => '237', 
            'topic' => '如果你的车需要拖着其它车辆行驶，两辆车之间最大的距离是多少？', 
            'a' => '2米', 
            'b' => '4米', 
            'c' => '6米', 
            'd' => '8米', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '475', 
            'language_id' => '1', 
            'question_list_id' => '238', 
            'topic' => 'What is the minimum tread depth required for car tyres?', 
            'a' => '1mm', 
            'b' => '1.25mm', 
            'c' => '1.5mm', 
            'd' => '2mm', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '476', 
            'language_id' => '2', 
            'question_list_id' => '238', 
            'topic' => '小轿车轮胎的最小花纹深度被要求为多少？', 
            'a' => '1毫米', 
            'b' => '1.25毫米', 
            'c' => '1.5毫米', 
            'd' => '2毫米', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '477', 
            'language_id' => '1', 
            'question_list_id' => '239', 
            'topic' => 'Can you be fined if your vehicle is on the road and not up to Warrant of Fitness standard?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '478', 
            'language_id' => '2', 
            'question_list_id' => '239', 
            'topic' => '如果你驾驶不符合新西兰道路安全标准的汽车上路行驶，你将会被罚款吗？', 
            'a' => '会', 
            'b' => '不会', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '479', 
            'language_id' => '1', 
            'question_list_id' => '240', 
            'topic' => 'At night, what must a towed vehicle have at the back of it?', 
            'a' => 'A red light', 
            'b' => 'A white light', 
            'c' => 'One or more orange lights', 
            'd' => 'A flashing orange light', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '480', 
            'language_id' => '2', 
            'question_list_id' => '240', 
            'topic' => '夜间牵引拖车前进，拖车后面必须安装什么样的灯光？', 
            'a' => '红色灯', 
            'b' => '白色灯', 
            'c' => '一盏以上的橙色灯', 
            'd' => '闪烁的橙色灯', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '481', 
            'language_id' => '1', 
            'question_list_id' => '241', 
            'topic' => 'Which parts of the car must be in good condition to prevent too much noise and gases entering the car? Check all that apply.', 
            'a' => 'Windows', 
            'b' => 'Exhaust', 
            'c' => 'Silencer', 
            'd' => 'Air conditioning', 
            'e' => '', 
            'ans' => 'BC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '482', 
            'language_id' => '2', 
            'question_list_id' => '241', 
            'topic' => '车上什么部件必须工作状态良好，防止发出太大的噪音以及废气进入乘客舱？选择所有正确的', 
            'a' => '挡风玻璃', 
            'b' => '排气管', 
            'c' => '消声器', 
            'd' => '空调', 
            'e' => '', 
            'ans' => 'BC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '483', 
            'language_id' => '1', 
            'question_list_id' => '242', 
            'topic' => 'What is the maximum distance a load may extend in front of a car?', 
            'a' => '1m in front of the bumper', 
            'b' => '3m in front of the front edge of the front seat', 
            'c' => 'Nowhere in front of the bumper', 
            'd' => '3m in front of the bumper', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1242.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '484', 
            'language_id' => '2', 
            'question_list_id' => '242', 
            'topic' => '车顶承载的货物，最长可以超过车子最前端多少？', 
            'a' => '不能够超过前保险杠1米', 
            'b' => '不能够超过前座的最前端3米', 
            'c' => '不能够超过前保险杠', 
            'd' => '不能够超过前保险杠3米', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1242.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '485', 
            'language_id' => '1', 
            'question_list_id' => '243', 
            'topic' => 'Where should the warrant of fitness label for your car be displayed?', 
            'a' => 'Rear window, driver`s side', 
            'b' => 'Rear window, passenger side', 
            'c' => 'Front window, driver`s side', 
            'd' => 'Front window, passenger side', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '486', 
            'language_id' => '2', 
            'question_list_id' => '243', 
            'topic' => '应该把汽车安全检验标识WoF贴在车辆的什么部位？', 
            'a' => '驾驶员一侧的后玻璃上', 
            'b' => '副驾驶一侧的后玻璃上', 
            'c' => '驾驶员一侧的前风挡玻璃上', 
            'd' => '副驾驶一侧的前风挡玻璃上', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '487', 
            'language_id' => '1', 
            'question_list_id' => '244', 
            'topic' => 'If your vehicle was first registered after 1 January 2000, but it`s at least 3 years old, how often does it require a Warrant of Fitness inspection?', 
            'a' => 'Every three months', 
            'b' => 'Every six months', 
            'c' => 'Every 12 months', 
            'd' => 'Every 24 months', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '488', 
            'language_id' => '2', 
            'question_list_id' => '244', 
            'topic' => '如果你的汽车在新西兰首次注册时间为2000年1月以后，且车龄超过了三年，你应该多长时间对车辆进行安全检验WoF一次？', 
            'a' => '每三个月', 
            'b' => '每六个月', 
            'c' => '每十二个月', 
            'd' => '每二十四个月', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '489', 
            'language_id' => '1', 
            'question_list_id' => '245', 
            'topic' => 'Who can legally stop you and perform a roadside check of your vehicle? Check all that apply.', 
            'a' => 'Fire officer', 
            'b' => 'Ambulance officer', 
            'c' => 'Police officer', 
            'd' => 'Tow truck driver', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '490', 
            'language_id' => '2', 
            'question_list_id' => '245', 
            'topic' => '谁可以在道路上合法拦截你并要求对你的车辆进行路检？选择所有可能的', 
            'a' => '消防官员', 
            'b' => '救护车医护人员', 
            'c' => '警官', 
            'd' => '拖车司机', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '491', 
            'language_id' => '1', 
            'question_list_id' => '246', 
            'topic' => 'If your vehicle was first registered before 1 January 2000, how often must you renew its warrant of fitness?', 
            'a' => 'Three months', 
            'b' => 'Six months', 
            'c' => '12 months', 
            'd' => '24 months', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1246.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '492', 
            'language_id' => '2', 
            'question_list_id' => '246', 
            'topic' => '如果你的汽车首次注册于2000年1月份以前，你需要多久进行一次车辆安全检测WoF？', 
            'a' => '3个月', 
            'b' => '6个月', 
            'c' => '12个月', 
            'd' => '24个月', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1246.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '493', 
            'language_id' => '1', 
            'question_list_id' => '247', 
            'topic' => 'Your vehicle has a current Warrant of Fitness but a rear red stop light is not working. What should you do?', 
            'a' => 'You can drive with it until your next WoF', 
            'b' => 'You must fix it immediately', 
            'c' => 'Only use the vehicle during daylight hours', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '494', 
            'language_id' => '2', 
            'question_list_id' => '247', 
            'topic' => '你的汽车依然在检验有效合格期内，但是后刹车灯不工作了，你该怎么做？', 
            'a' => '当做没事情发生，等到下次做车检的时候再修理', 
            'b' => '马上修理', 
            'c' => '安全起见只在白天使用这辆车', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '495', 
            'language_id' => '1', 
            'question_list_id' => '248', 
            'topic' => 'What is the maximum distance a load may overhang your car behind the rear axle?', 
            'a' => '1m', 
            'b' => '2m', 
            'c' => '3m', 
            'd' => '4m', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '496', 
            'language_id' => '2', 
            'question_list_id' => '248', 
            'topic' => '如果在车顶运输超长物品，被运送物体的末端最多可以超过车辆后轴多少米？', 
            'a' => '1米', 
            'b' => '2米', 
            'c' => '3米', 
            'd' => '4米', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '497', 
            'language_id' => '1', 
            'question_list_id' => '249', 
            'topic' => 'What must you do at an intersection controlled by a give way sign? Select all that apply', 
            'a' => 'Give way to vehicles not turning (if you are turning)', 
            'b' => 'Give way to vehicles coming towards you including those turning left (if you are turning right)', 
            'c' => 'Give way to all traffic on a continuing road (the top of the T) if you are on the terminating road (bottom of the T)', 
            'd' => '', 
            'e' => '', 
            'ans' => 'ABC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '498', 
            'language_id' => '2', 
            'question_list_id' => '249', 
            'topic' => '如果路口有让行标识，你应该怎么做？选择所有正确的', 
            'a' => '如果你准备路口在路口转弯，那么给直行车辆让行', 
            'b' => '如果你准备右转弯，那么给对面所有的直行或是左转的车辆让路', 
            'c' => '如果你在T字形路口的纵向道路上，那么要给在该路口所有横向行驶的车辆让行', 
            'd' => '', 
            'e' => '', 
            'ans' => 'ABC', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '499', 
            'language_id' => '1', 
            'question_list_id' => '250', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Uneven road surface ahead', 
            'b' => 'Road bump ahead', 
            'c' => 'Road dip ahead', 
            'd' => 'Slippery road ahead', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1250.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '500', 
            'language_id' => '2', 
            'question_list_id' => '250', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '前方道路路面不平整', 
            'b' => '前方道路上有减速带', 
            'c' => '前方道路有下陷', 
            'd' => '前方道路湿滑', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1250.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '501', 
            'language_id' => '1', 
            'question_list_id' => '251', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Roundabout ahead', 
            'b' => 'Recycling centre ahead', 
            'c' => 'Two way traffic ahead', 
            'd' => 'Merging traffic ahead', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1251.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '502', 
            'language_id' => '2', 
            'question_list_id' => '251', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '前方环岛', 
            'b' => '前方有资源回收中心', 
            'c' => '前方道路有两个方向', 
            'd' => '前方道路车流汇集', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1251.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '503', 
            'language_id' => '1', 
            'question_list_id' => '252', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Children are prohibited to cross', 
            'b' => 'Watch for children crossing', 
            'c' => 'Watch for aged pedestrians', 
            'd' => 'Pedestrians are not allowed', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1252.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '504', 
            'language_id' => '2', 
            'question_list_id' => '252', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '儿童禁止穿行', 
            'b' => '注意前方道路上可能有儿童穿行', 
            'c' => '注意上年纪的行人', 
            'd' => '行人禁止通过', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1252.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '505', 
            'language_id' => '1', 
            'question_list_id' => '253', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Uneven road surface ahead', 
            'b' => 'Road dip ahead', 
            'c' => 'Road bump ahead', 
            'd' => 'Slippery road ahead', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1253.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '506', 
            'language_id' => '2', 
            'question_list_id' => '253', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '前方路面不平整', 
            'b' => '前方道路有下陷', 
            'c' => '前方有减速带', 
            'd' => '前方道路湿滑', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1253.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '507', 
            'language_id' => '1', 
            'question_list_id' => '254', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Merging traffic ahead', 
            'b' => 'Road diverges ahead', 
            'c' => 'Two-way traffic ahead', 
            'd' => 'The right lane will be slowing down while the left lane speeds up', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1254.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '508', 
            'language_id' => '2', 
            'question_list_id' => '254', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '前方交通汇集处', 
            'b' => '前方道路分开行驶', 
            'c' => '前方道路双向行驶', 
            'd' => '如果左侧车辆加速，那么右侧车辆需要减速', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1254.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '509', 
            'language_id' => '1', 
            'question_list_id' => '255', 
            'topic' => 'What does this sign mean?', 
            'a' => 'One way street', 
            'b' => 'Merging traffic from the left and right', 
            'c' => 'Hazard straight ahead', 
            'd' => 'Road diverges', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1255.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '510', 
            'language_id' => '2', 
            'question_list_id' => '255', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '单行线', 
            'b' => '前方道路左右两边车流汇集', 
            'c' => '正前方道路危险', 
            'd' => '道路分叉', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1255.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '511', 
            'language_id' => '1', 
            'question_list_id' => '256', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Give way on a roundabout to vehicles from the left', 
            'b' => 'Give way on a roundabout to vehicles from the left and right', 
            'c' => 'Give way on a roundabout ahead', 
            'd' => 'Hazard on a roundabout ahead', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1256.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '512', 
            'language_id' => '2', 
            'question_list_id' => '256', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '在环岛给左侧车辆让行', 
            'b' => '在环岛给左右两个方向的车辆让行', 
            'c' => '前方环岛注意遵守让路规则', 
            'd' => '前方环岛危险性高', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1256.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '513', 
            'language_id' => '1', 
            'question_list_id' => '257', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Watch out for cattle', 
            'b' => 'Cattle lane only', 
            'c' => 'Cattle are prohibited', 
            'd' => 'Cattle grid', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1257.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '514', 
            'language_id' => '2', 
            'question_list_id' => '257', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '注意道路上的牛群', 
            'b' => '牛群专用道', 
            'c' => '道路上禁止牛行走', 
            'd' => '前方有为牲畜设置的路障', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1257.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '515', 
            'language_id' => '1', 
            'question_list_id' => '258', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Parking straight ahead', 
            'b' => '30-minute parking on the right of the sign', 
            'c' => 'Turn right to find parking in 30 metres', 
            'd' => '30 available parking slots to the right', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1258.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '516', 
            'language_id' => '2', 
            'question_list_id' => '258', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '前方道路有停车位', 
            'b' => '标识右侧可以停车三十分钟', 
            'c' => '右转前行30米有停车位', 
            'd' => '标识右侧有三十个停车位', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1258.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '517', 
            'language_id' => '1', 
            'question_list_id' => '259', 
            'topic' => 'Why should you slow down when you see this sign?', 
            'a' => 'To avoid splashing others with water', 
            'b' => 'Your tyres may suffer a blow-out', 
            'c' => 'There is a road gritter ahead', 
            'd' => 'To avoid throwing up loose chippings', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1259.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '518', 
            'language_id' => '2', 
            'question_list_id' => '259', 
            'topic' => '看到这个标识后，为什么要减速慢行？', 
            'a' => '避免溅水到其它车辆上', 
            'b' => '轮胎可能会爆胎', 
            'c' => '前方道路上有砂石', 
            'd' => '防止其它车辆溅起的小石子将玻璃打出裂纹', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1259.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '519', 
            'language_id' => '1', 
            'question_list_id' => '260', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Oncoming light rail', 
            'b' => 'Light rail only', 
            'c' => 'Light rail crossing ahead', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1260.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '520', 
            'language_id' => '2', 
            'question_list_id' => '260', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '轻轨车辆从对面驶来', 
            'b' => '仅限轻轨车辆', 
            'c' => '前方道路穿越轻轨轨道', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1260.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '521', 
            'language_id' => '1', 
            'question_list_id' => '261', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Bus parking only', 
            'b' => 'Wide bus restriction', 
            'c' => 'No parking: Bus stop on both sides of sign', 
            'd' => 'Parking allowed: Bus stop on both sides of sign', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1261.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '522', 
            'language_id' => '2', 
            'question_list_id' => '261', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '仅限公交车停靠', 
            'b' => '超宽巴士', 
            'c' => '禁止停车，标识两边都是公交车站', 
            'd' => '允许停车，标识两边都是公交车站', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1261.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '523', 
            'language_id' => '1', 
            'question_list_id' => '262', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Crossroads', 
            'b' => 'Roundabout', 
            'c' => 'No entry', 
            'd' => 'No stopping', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1262.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '524', 
            'language_id' => '2', 
            'question_list_id' => '262', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '道路交叉', 
            'b' => '环岛', 
            'c' => '禁止驶入', 
            'd' => '禁止停车', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1262.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '525', 
            'language_id' => '1', 
            'question_list_id' => '263', 
            'topic' => 'What does this sign mean?', 
            'a' => 'No pedestrians', 
            'b' => 'No parking', 
            'c' => 'Pedestrian lane', 
            'd' => 'Parking lane', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1263.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '526', 
            'language_id' => '2', 
            'question_list_id' => '263', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '禁止行人', 
            'b' => '禁止停车', 
            'c' => '行人专用道', 
            'd' => '停车专用道', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1263.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '527', 
            'language_id' => '1', 
            'question_list_id' => '264', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Reverse into a driveway', 
            'b' => 'Reverse out of the road', 
            'c' => 'Turn round in a side road', 
            'd' => 'This lane must proceed straight ahead', 
            'e' => 'Look up for potential obstacles', 
            'ans' => 'D', 
            'img' => '1264.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '528', 
            'language_id' => '2', 
            'question_list_id' => '264', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '倒车进入车道', 
            'b' => '倒车离开马路', 
            'c' => '路边转弯', 
            'd' => '这条车道仅限直行', 
            'e' => '小心道路上的潜在障碍', 
            'ans' => 'D', 
            'img' => '1264.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '529', 
            'language_id' => '1', 
            'question_list_id' => '265', 
            'topic' => 'What does this sign mean?', 
            'a' => 'A route for pedestrians only', 
            'b' => 'A route for cyclists only', 
            'c' => 'A route for pedestrians and cyclists', 
            'd' => 'No route for pedestrians and cyclists', 
            'e' => 'No bicycle stunts allowed', 
            'ans' => 'C', 
            'img' => '1265.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '530', 
            'language_id' => '2', 
            'question_list_id' => '265', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '行人专用路线', 
            'b' => '自行车专用路线', 
            'c' => '自行车与行人专用路线', 
            'd' => '自行车和行人不得进入该路线', 
            'e' => '不许在自行车上表演特技', 
            'ans' => 'C', 
            'img' => '1265.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '531', 
            'language_id' => '1', 
            'question_list_id' => '266', 
            'topic' => 'What does this sign mean?', 
            'a' => 'A route for pedestrians only', 
            'b' => 'Dance classes ahead', 
            'c' => 'No route for pedestrians', 
            'd' => 'A route for motorists only', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1266.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '532', 
            'language_id' => '2', 
            'question_list_id' => '266', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '行人专用路线', 
            'b' => '前方舞蹈培训班', 
            'c' => '禁止行人使用该线路', 
            'd' => '驾驶员专用线路', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1266.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '533', 
            'language_id' => '1', 
            'question_list_id' => '267', 
            'topic' => 'Which type of vehicle does this sign apply to? Select all that apply', 
            'a' => 'High vehicles', 
            'b' => 'Wide vehicles', 
            'c' => 'Long vehicles', 
            'd' => 'Heavy vehicles', 
            'e' => '', 
            'ans' => 'ABCD', 
            'img' => '1267.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '534', 
            'language_id' => '2', 
            'question_list_id' => '267', 
            'topic' => '什么车辆要注意这个标识？选择所有正确的', 
            'a' => '超高车辆', 
            'b' => '超宽车辆', 
            'c' => '超长车辆', 
            'd' => '超重车辆', 
            'e' => '', 
            'ans' => 'ABCD', 
            'img' => '1267.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '535', 
            'language_id' => '1', 
            'question_list_id' => '268', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Road ahead has a steep uphill section', 
            'b' => 'End of two-way road', 
            'c' => 'You have priority over vehicles coming towards you', 
            'd' => 'Give priority to vehicles coming towards you', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1268.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '536', 
            'language_id' => '2', 
            'question_list_id' => '268', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '前方道路有一个很陡的爬坡段', 
            'b' => '双向行驶道路结束', 
            'c' => '你可以优先对面的车辆通过这里', 
            'd' => '对面车辆可以优先于你通过这里', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1268.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '537', 
            'language_id' => '1', 
            'question_list_id' => '269', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Right turning traffic must obey this sign', 
            'b' => 'Traffic turning left or driving straight through must obey this sign', 
            'c' => 'Vehicles can only turn right here', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1269.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '538', 
            'language_id' => '2', 
            'question_list_id' => '269', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '右转车辆必须遵守本标识', 
            'b' => '左转或者直行的车辆必须遵守本标识', 
            'c' => '车辆到这里必须右转弯', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1269.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '539', 
            'language_id' => '1', 
            'question_list_id' => '270', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Buses, motorbikes and cars with three or more people are allowed in this lane', 
            'b' => 'Bus station', 
            'c' => 'Only buses can use this lane from 7-9am and 4-6pm weekdays; at all other times any vehicle can use it', 
            'd' => 'Only buses are allowed in this lane', 
            'e' => 'Buses, cyclists, motorcyclists and moped riders can use this lane', 
            'ans' => 'E', 
            'img' => '1270.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '540', 
            'language_id' => '2', 
            'question_list_id' => '270', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '公交车、摩托车和乘员超过三人的私家车可以使用本车道', 
            'b' => '公交车站', 
            'c' => '工作日早上7-9点以及下午4-6点仅允许公交车行驶，其它时间任何车辆都可以使用本车道', 
            'd' => '仅允许公交车使用本车道', 
            'e' => '公交车、自行车、摩托车、轻便摩托车可以使用本车道', 
            'ans' => 'E', 
            'img' => '1270.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '541', 
            'language_id' => '1', 
            'question_list_id' => '271', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Temporary parking', 
            'b' => 'Temporary crossing', 
            'c' => 'Temporary speed limit', 
            'd' => 'Temporary traffic light', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1271.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '542', 
            'language_id' => '2', 
            'question_list_id' => '271', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '临时停车', 
            'b' => '临时穿越道路', 
            'c' => '临时道路限速', 
            'd' => '临时交通信号灯', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1271.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '543', 
            'language_id' => '1', 
            'question_list_id' => '272', 
            'topic' => 'What colour flashing lights does a pilot vehicle have?', 
            'a' => 'Red', 
            'b' => 'Red and blue', 
            'c' => 'Yellow', 
            'd' => 'Yellow, or yellow and purple', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1272.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '544', 
            'language_id' => '2', 
            'question_list_id' => '272', 
            'topic' => '开道车会闪烁什么样的警示灯光？', 
            'a' => '红色', 
            'b' => '红蓝双色', 
            'c' => '黄色', 
            'd' => '黄色或是黄紫双色', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1272.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '545', 
            'language_id' => '1', 
            'question_list_id' => '273', 
            'topic' => 'What colour flashing lights do maintenance vehicles use?', 
            'a' => 'Red', 
            'b' => 'Red and blue', 
            'c' => 'Yellow', 
            'd' => 'Yellow and purple', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1273.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '546', 
            'language_id' => '2', 
            'question_list_id' => '273', 
            'topic' => '道路维护车将会闪烁什么样的灯光？', 
            'a' => '红色', 
            'b' => '红蓝双色', 
            'c' => '黄色', 
            'd' => '黄紫双色', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1273.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '547', 
            'language_id' => '1', 
            'question_list_id' => '274', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Don`t turn right', 
            'b' => 'Don`t do a u-turn', 
            'c' => 'Don`t do an n-turn', 
            'd' => 'Steep hill coming up', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1274.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '548', 
            'language_id' => '2', 
            'question_list_id' => '274', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '禁止右转弯', 
            'b' => '禁止掉头', 
            'c' => '禁止做N型转向', 
            'd' => '前方山路陡峭', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1274.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '549', 
            'language_id' => '1', 
            'question_list_id' => '275', 
            'topic' => 'What does this sign mean?', 
            'a' => 'It shows the direction to an information centre', 
            'b' => 'Important monument to the right', 
            'c' => 'There`s an intersection to the right', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1275.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '550', 
            'language_id' => '2', 
            'question_list_id' => '275', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '前往信息中心的方向', 
            'b' => '右侧有重要的纪念碑', 
            'c' => '右侧有路口', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1275.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '551', 
            'language_id' => '1', 
            'question_list_id' => '276', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Turn left now', 
            'b' => 'Do a u-turn, but only to the left', 
            'c' => 'Keep left', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1276.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '552', 
            'language_id' => '2', 
            'question_list_id' => '276', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '马上左转弯', 
            'b' => '在道路左侧可以掉头', 
            'c' => '保持在标识左侧行驶', 
            'd' => '', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1276.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '553', 
            'language_id' => '1', 
            'question_list_id' => '277', 
            'topic' => 'What does this sign mean?', 
            'a' => 'You must not turn left', 
            'b' => 'You must not turn right', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1277.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '554', 
            'language_id' => '2', 
            'question_list_id' => '277', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '禁止左转弯', 
            'b' => '禁止右转弯', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1277.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '555', 
            'language_id' => '1', 
            'question_list_id' => '278', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Traffic lights are not working', 
            'b' => 'Shooting range ahead', 
            'c' => 'Airport runway ahead', 
            'd' => 'Stop on request', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1278.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '556', 
            'language_id' => '2', 
            'question_list_id' => '278', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '交通信号灯工作不正常', 
            'b' => '前方进入射击区', 
            'c' => '前方机场跑道', 
            'd' => '按照路面引导人员的要求停车', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1278.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '557', 
            'language_id' => '1', 
            'question_list_id' => '279', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Approved crossing ahead', 
            'b' => 'Look out for children', 
            'c' => 'Dance classes are nearby', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1279.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '558', 
            'language_id' => '2', 
            'question_list_id' => '279', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '前方准许穿行', 
            'b' => '注意儿童', 
            'c' => '附近有舞蹈班', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1279.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '559', 
            'language_id' => '1', 
            'question_list_id' => '280', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Airport ahead', 
            'b' => 'Pedestrian crossing', 
            'c' => 'Parking either side of the median strip', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1280.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '560', 
            'language_id' => '2', 
            'question_list_id' => '280', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '前方机场', 
            'b' => '人行横道', 
            'c' => '条纹线上两边都可以停车', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1280.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '561', 
            'language_id' => '1', 
            'question_list_id' => '281', 
            'topic' => 'What does this sign mean?', 
            'a' => 'A train station is ahead', 
            'b' => 'A railway level crossing is ahead', 
            'c' => 'A tourist railway attraction is ahead', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1281.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '562', 
            'language_id' => '2', 
            'question_list_id' => '281', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '前方火车站', 
            'b' => '前方铁道交叉口', 
            'c' => '前方铁道是旅游景点', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1281.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '563', 
            'language_id' => '1', 
            'question_list_id' => '282', 
            'topic' => 'What does this sign mean?', 
            'a' => 'The road ahead may have loose stones - drive slowly', 
            'b' => 'The road ahead may puncture your tyre', 
            'c' => 'There`s a median strip of vegetation that may hit your windscreen', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1282.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '564', 
            'language_id' => '2', 
            'question_list_id' => '282', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '路面上有散落的小石子，低速行驶', 
            'b' => '前方路面可能会爆胎', 
            'c' => '前方的植物枝条可能会碰撞你的挡风玻璃', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1282.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '565', 
            'language_id' => '1', 
            'question_list_id' => '283', 
            'topic' => 'What does this sign mean?', 
            'a' => 'No parking', 
            'b' => 'There`s a pedestrian crossing ahead', 
            'c' => 'The speed limit is 50kph', 
            'd' => 'The speed limit is now 100kph', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1283.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '566', 
            'language_id' => '2', 
            'question_list_id' => '283', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '禁止停车', 
            'b' => '前方人行横道', 
            'c' => '道路限速50公里/小时', 
            'd' => '道路限速变为100公里/小时', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1283.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '567', 
            'language_id' => '1', 
            'question_list_id' => '284', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Only trucks and cars with trailers must travel at 70kph', 
            'b' => 'No parking for 70m on either side of the road', 
            'c' => 'The maximum speed is 70mph', 
            'd' => 'The maximum speed is 70kph', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1284.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '568', 
            'language_id' => '2', 
            'question_list_id' => '284', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '卡车以及牵引拖车的小汽车必须以70公里的时速行驶', 
            'b' => '道路两边70米内禁止停车', 
            'c' => '道路最高限速70英里/小时', 
            'd' => '道路最高限速70公里/小时', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1284.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '569', 
            'language_id' => '1', 
            'question_list_id' => '285', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Vehicles are merging from a motorway onramp', 
            'b' => 'The left lane is closed', 
            'c' => 'There`s a building ahead on the left', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1285.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '570', 
            'language_id' => '2', 
            'question_list_id' => '285', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '前方辅路车流并入主路', 
            'b' => '左侧车道关闭', 
            'c' => '前方左侧有建筑物', 
            'd' => '', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1285.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '571', 
            'language_id' => '1', 
            'question_list_id' => '286', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Stop in 50 metres', 
            'b' => 'Maximum speed is 50kph', 
            'c' => 'Maximum speed is 50mph', 
            'd' => 'No parking for 50 metres', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1286.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '572', 
            'language_id' => '2', 
            'question_list_id' => '286', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '50米内停车', 
            'b' => '道路最高限速50公里/小时', 
            'c' => '道路最高限速50英里/小时', 
            'd' => '50米内禁止停车', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1286.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '573', 
            'language_id' => '1', 
            'question_list_id' => '287', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Drive no faster than 50kph because there`s an accident ahead', 
            'b' => 'Drive no faster than 20kph as there`s an accident ahead', 
            'c' => 'Stop until someone removes the sign', 
            'd' => 'This sign isn`t valid - they`re only ever in blue with white writing', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1287.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '574', 
            'language_id' => '2', 
            'question_list_id' => '287', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '前方有事故，以不超过50公里的时速行驶', 
            'b' => '前方有事故，降低行驶速度到20公里/小时', 
            'c' => '停车，等待工作人员移除这个标识', 
            'd' => '这个标识无效，道路交通事故标识应该是蓝底白字的', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1287.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '575', 
            'language_id' => '1', 
            'question_list_id' => '288', 
            'topic' => 'Which of these signs won`t you see at a railway level crossing?', 
            'a' => 'A', 
            'b' => 'B', 
            'c' => 'C', 
            'd' => 'D', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1288.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '576', 
            'language_id' => '2', 
            'question_list_id' => '288', 
            'topic' => '在铁路道口，以下哪个标识不会出现？', 
            'a' => 'A', 
            'b' => 'B', 
            'c' => 'C', 
            'd' => 'D', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1288.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '577', 
            'language_id' => '1', 
            'question_list_id' => '289', 
            'topic' => 'When coming up to a one-lane bridge, what does this sign indicate?', 
            'a' => 'You`ve got right of way, if it`s safe to proceed', 
            'b' => 'Other drivers have right of way and you have to stop', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1289.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '578', 
            'language_id' => '2', 
            'question_list_id' => '289', 
            'topic' => '当你驶近一座单车道桥梁的时候，这个标识指示什么？', 
            'a' => '确保安全的情况下，你拥有优先通行权', 
            'b' => '你需要停车，对面的车辆拥有优先通行权', 
            'c' => '', 
            'd' => '', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1289.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '579', 
            'language_id' => '1', 
            'question_list_id' => '290', 
            'topic' => 'What does this sign mean?', 
            'a' => 'A comfortable travelling speed around this corner is 35mph', 
            'b' => 'A comfortable travelling speed around this corner is 35kph', 
            'c' => 'The corner is 35 metres long', 
            'd' => 'The corner has an angle of 35 degrees - the higher the number, the sharper the corner', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1290.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '580', 
            'language_id' => '2', 
            'question_list_id' => '290', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '驶过这个弯道的舒适速度为35英里/小时', 
            'b' => '驶过这个弯道的舒适速度为35公里/小时', 
            'c' => '弯道长度35米', 
            'd' => '弯道35度角，数字越大表明弯道越急', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1290.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '581', 
            'language_id' => '1', 
            'question_list_id' => '291', 
            'topic' => 'You`re driving at 100kph and see an accident sign. What speed must you slow down to?', 
            'a' => '20kph', 
            'b' => '50kph', 
            'c' => '70kph', 
            'd' => '100kph', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1291.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '582', 
            'language_id' => '2', 
            'question_list_id' => '291', 
            'topic' => '你正在以100公里的时速前进时看到了道路事故标识，你应该马上将车速降到？', 
            'a' => '20公里/小时', 
            'b' => '50公里/小时', 
            'c' => '70公里/小时', 
            'd' => '100公里/小时', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1291.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '583', 
            'language_id' => '1', 
            'question_list_id' => '292', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Drive up to 100km before stopping', 
            'b' => 'A car or motorbike can drive up to 100kph if the weather is OK', 
            'c' => 'The minimum speed in the overtaking lane is 100kph', 
            'd' => 'Any vehicle can travel up to 100kph', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1292.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '584', 
            'language_id' => '2', 
            'question_list_id' => '292', 
            'topic' => '这个标识代表什么意思？', 
            'a' => '还可以前进100公里不用停车', 
            'b' => '如果天气条件良好，小汽车或摩托车可以100公里/小时的速度行驶', 
            'c' => '超车道最低时速为100公里/小时', 
            'd' => '任何汽车都可以100公里/小时的速度行驶', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1292.jpg'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1003', 
            'language_id' => '1', 
            'question_list_id' => '502', 
            'topic' => 'Which of the following is true?', 
            'a' => 'The car turning left has to give way', 
            'b' => 'The car in the lane with the most traffic has priority', 
            'c' => 'The car turning right has to give way', 
            'd' => 'Both cars must stop, the first one to arrive has priority', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1502.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1004', 
            'language_id' => '2', 
            'question_list_id' => '502', 
            'topic' => '以下内容哪些是对的？', 
            'a' => '左转弯的汽车必须让路', 
            'b' => '车多的车道有更高的优先权', 
            'c' => '右转的车必须让路', 
            'd' => '两辆车都必须停下来，先到的车优先通过', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1502.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1005', 
            'language_id' => '1', 
            'question_list_id' => '503', 
            'topic' => 'What does this pavement marking mean?', 
            'a' => 'Taxi parking only', 
            'b' => 'Stop sign ahead', 
            'c' => 'A fire hydrant is here', 
            'd' => 'Level crossing ahead', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1503.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1006', 
            'language_id' => '2', 
            'question_list_id' => '503', 
            'topic' => '路面标记是什么意思？', 
            'a' => '仅出租车可以停在这里', 
            'b' => '前方停车让行', 
            'c' => '这里有消防栓', 
            'd' => '前方有平交路口（比如火车道）', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1503.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1007', 
            'language_id' => '1', 
            'question_list_id' => '504', 
            'topic' => 'You see a set of traffic signals with this light. What does it mean?', 
            'a' => 'Motorbikes may proceed', 
            'b' => 'Bridge is closed ahead', 
            'c' => 'Bicycles may proceed', 
            'd' => 'Buses may proceed', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1504.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1008', 
            'language_id' => '2', 
            'question_list_id' => '504', 
            'topic' => '你看一组交通信号，这个光。这是什么意思？', 
            'a' => '摩托车可能会继续前进', 
            'b' => '桥在前面关闭', 
            'c' => '自行车可以前进', 
            'd' => '巴士可能会继续', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1504.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1009', 
            'language_id' => '1', 
            'question_list_id' => '505', 
            'topic' => 'What does this sign mean?', 
            'a' => 'You should not exceed 50 km/h here during peak hours', 
            'b' => 'You should not park here for more than 50 minutes', 
            'c' => 'You must not exceed 50 km/h here', 
            'd' => 'There is a roundabout 50 metres ahead', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1505.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1010', 
            'language_id' => '2', 
            'question_list_id' => '505', 
            'topic' => '这个标志是什么意思？', 
            'a' => '在繁忙时间，您的速度不应超过每小时50公里', 
            'b' => '您在这里停放的时间不应超过50分钟', 
            'c' => '您此处不得超过50公里/小时', 
            'd' => '前方有一个回旋处50米', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1505.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1011', 
            'language_id' => '1', 
            'question_list_id' => '506', 
            'topic' => 'How fast should you drive on this road?', 
            'a' => 'At a suitable and safe speed between 90 km/h and 110 km/h', 
            'b' => 'As fast as you want', 
            'c' => 'At a speed suitable for the conditions that does not exceed 100 km/h', 
            'd' => '100 km/h', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1506.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1012', 
            'language_id' => '2', 
            'question_list_id' => '506', 
            'topic' => '您应该在这条道路上行驶多快？', 
            'a' => '在90 km / h至110 km / h之间的合适安全速度下', 
            'b' => '随心所欲', 
            'c' => '以适合时速不超过100 km / h的速度', 
            'd' => '100公里/小时', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1506.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1013', 
            'language_id' => '1', 
            'question_list_id' => '507', 
            'topic' => 'Who may park here?', 
            'a' => 'Anyone', 
            'b' => 'Anyone with a disability', 
            'c' => 'Anyone with a mobility parking permit', 
            'd' => 'Answers B and C', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1507.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1014', 
            'language_id' => '2', 
            'question_list_id' => '507', 
            'topic' => '谁可以在这里停车？', 
            'a' => '任何人', 
            'b' => '残疾人', 
            'c' => '持有流动停车证的人', 
            'd' => '答案B和C', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1507.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1015', 
            'language_id' => '1', 
            'question_list_id' => '508', 
            'topic' => 'Where do the road rules apply?', 
            'a' => 'On any public road', 
            'b' => 'On any public road, car park, or paved area', 
            'c' => 'On any paved public road', 
            'd' => 'In any public area', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1016', 
            'language_id' => '2', 
            'question_list_id' => '508', 
            'topic' => '道路规则在哪里适用？', 
            'a' => '在任何公共道路上', 
            'b' => '在任何公共道路，停车场或铺设的区域上', 
            'c' => '在任何铺设的公共道路上', 
            'd' => '在任何公共区域', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1017', 
            'language_id' => '1', 
            'question_list_id' => '509', 
            'topic' => 'Which one of the following is true about this intersection?', 
            'a' => 'The car at the Stop sign must give way to the car at the Give Way sign', 
            'b' => 'The car at the Give Way sign must give way to the car at the Stop sign', 
            'c' => 'The two signs cancel out and the standard give way rules apply', 
            'd' => 'None of the above', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1509.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1018', 
            'language_id' => '2', 
            'question_list_id' => '509', 
            'topic' => '关于该交叉点，以下哪一项是正确的？', 
            'a' => '“停车”标志处的汽车必须让位于“放弃”标志处的汽车', 
            'b' => '“让路”标志处的汽车必须让位于“停车”标志处的汽车', 
            'c' => '两个标志被取消，标准让路规则适用', 
            'd' => '以上都不是', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1509.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1019', 
            'language_id' => '1', 
            'question_list_id' => '510', 
            'topic' => 'What does the number five on this sign represent?', 
            'a' => 'Drivers may park here between 5am and 5pm', 
            'b' => 'Parking here costs $5.00', 
            'c' => 'Drivers may park here for up to five hours', 
            'd' => 'Drivers must not leave their cars unattended for more than five minutes', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1510.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1020', 
            'language_id' => '2', 
            'question_list_id' => '510', 
            'topic' => '这个标志上的数字五代表什么？', 
            'a' => '司机可能会在凌晨5点至下午5点之间停在这里', 
            'b' => '在这里停车的费用为$ 5.00', 
            'c' => '司机最多可以在这里停车五个小时', 
            'd' => '司机不得无人看管超过五分钟', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1510.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1021', 
            'language_id' => '1', 
            'question_list_id' => '511', 
            'topic' => 'What is the minimum allowable tread depth for a standard road tyre?', 
            'a' => '1.5 millimetres of tread', 
            'b' => '4 millimetres of tread', 
            'c' => '0.5 millimetres of tread', 
            'd' => '2.5 millimetres of tread', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1511.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1022', 
            'language_id' => '2', 
            'question_list_id' => '511', 
            'topic' => '标准道路轮胎的最小允许胎面深度是多少？', 
            'a' => '胎面1.5毫米', 
            'b' => '胎面4毫米', 
            'c' => '胎面0.5毫米', 
            'd' => '胎面2.5毫米', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1511.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1023', 
            'language_id' => '1', 
            'question_list_id' => '512', 
            'topic' => 'Which give way rule applies here?', 
            'a' => 'A turning vehicle has priority over a vehicle continuing straight', 
            'b' => 'The vehicle in the busier lane has priority', 
            'c' => 'Which ever car arrives at the intersection first has priority', 
            'd' => 'A turning vehicle must give way to a vehicle continuing straight', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1512.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1024', 
            'language_id' => '2', 
            'question_list_id' => '512', 
            'topic' => '哪个让路规则适用于此处？', 
            'a' => '转弯车辆优先于直行车辆', 
            'b' => '繁忙车道上的车辆优先', 
            'c' => '哪个汽车先到达路口优先', 
            'd' => '转弯车辆必须让位给继续直行的车辆', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1512.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1025', 
            'language_id' => '1', 
            'question_list_id' => '513', 
            'topic' => 'What should you do if an oncoming vehicle drifts into your lane?', 
            'a' => 'Flash your lights, sound your horn, and brake hard', 
            'b' => 'Swerve right to enter the oncoming lane if it is clear', 
            'c' => 'Turn off your headlights and slow down', 
            'd' => 'Answers A and B', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1513.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1026', 
            'language_id' => '2', 
            'question_list_id' => '513', 
            'topic' => '如果迎面驶来的车辆驶入您的车道怎么办？', 
            'a' => '闪烁灯光，发出号角并用力刹车', 
            'b' => '如果畅通无阻，有权进入迎面而来的车道', 
            'c' => '关闭大灯并减速', 
            'd' => '答案A和B', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1513.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1027', 
            'language_id' => '1', 
            'question_list_id' => '514', 
            'topic' => 'Can you turn right at a green traffic signal?', 
            'a' => 'Yes, you have priority', 
            'b' => 'Yes, but you may have to give way to vehicles only', 
            'c' => 'Yes, but you may have to give way to traffic and pedestrians', 
            'd' => 'No', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1514.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1028', 
            'language_id' => '2', 
            'question_list_id' => '514', 
            'topic' => '您能在绿色交通信号灯处右转吗？', 
            'a' => '是的，你有优先权', 
            'b' => '是的，但是您可能只需要让路给车辆', 
            'c' => '是的，但您可能必须让路给行人和行人', 
            'd' => '没有', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1514.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1029', 
            'language_id' => '1', 
            'question_list_id' => '515', 
            'topic' => 'When can you overtake a car that has stopped at a crossing?', 
            'a' => 'When the crossing is clear and it is safe', 
            'b' => 'Never', 
            'c' => 'At any time', 
            'd' => 'When no pedestrians are present', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1515.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1030', 
            'language_id' => '2', 
            'question_list_id' => '515', 
            'topic' => '您什么时候可以超越停在十字路口的汽车？', 
            'a' => '当过路处畅通无阻时', 
            'b' => '决不', 
            'c' => '随时', 
            'd' => '当没有行人在场时', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1515.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1031', 
            'language_id' => '1', 
            'question_list_id' => '516', 
            'topic' => 'Who must wear a safety belt?', 
            'a' => 'The driver and all passengers under 15', 
            'b' => 'All passengers over 15', 
            'c' => 'All passengers in the back seat', 
            'd' => 'All of the above', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1032', 
            'language_id' => '2', 
            'question_list_id' => '516', 
            'topic' => '谁必须戴安全带？', 
            'a' => '司机和所有15岁以下的乘客', 
            'b' => '所有15岁以上的乘客', 
            'c' => '后排所有乘客', 
            'd' => '上述所有的', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1033', 
            'language_id' => '1', 
            'question_list_id' => '517', 
            'topic' => 'What is the minimum safe following distance?', 
            'a' => 'At least two seconds', 
            'b' => 'Far enough away to see the car in front`s brake lights', 
            'c' => 'At least 15 metres', 
            'd' => 'At least one second', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1517.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1034', 
            'language_id' => '2', 
            'question_list_id' => '517', 
            'topic' => '最小安全跟随距离是多少？', 
            'a' => '至少两秒钟', 
            'b' => '足够远的距离可以看到前面的汽车刹车灯', 
            'c' => '至少15米', 
            'd' => '至少一秒钟', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1517.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1035', 
            'language_id' => '1', 
            'question_list_id' => '518', 
            'topic' => 'Can you park in front of a bus stop sign?', 
            'a' => 'Yes', 
            'b' => 'No, not within six metres of the bus stop sign', 
            'c' => 'Only outside of the bus stop`s hours of operation', 
            'd' => 'No, but you can park next to the bus stop sign', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1518.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1036', 
            'language_id' => '2', 
            'question_list_id' => '518', 
            'topic' => '可以在公交车站牌前停车吗？', 
            'a' => '是', 
            'b' => '否，不在公交车站标志的六米范围内', 
            'c' => '仅在公交车站营业时间以外', 
            'd' => '不可以，但是您可以在巴士站标志旁边停车', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1518.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1037', 
            'language_id' => '1', 
            'question_list_id' => '519', 
            'topic' => 'Who is responsible for ensuring that all passengers over 15 wear their safety belts?', 
            'a' => 'The driver', 
            'b' => 'The passengers', 
            'c' => 'Passengers in the back seat do not need to buckle up', 
            'd' => 'Law enforcement', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1038', 
            'language_id' => '2', 
            'question_list_id' => '519', 
            'topic' => '谁负责确保所有15岁以上的乘客都系好安全带？', 
            'a' => '司机', 
            'b' => '乘客', 
            'c' => '后排座位的乘客无需系好安全带', 
            'd' => '执法', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1039', 
            'language_id' => '1', 
            'question_list_id' => '520', 
            'topic' => 'Which of the following must you do before you leave your parked car?', 
            'a' => 'Apply your parking brake', 
            'b' => 'Lock your doors', 
            'c' => 'Leave your car in gear or in `Park`', 
            'd' => 'All of the above', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1040', 
            'language_id' => '2', 
            'question_list_id' => '520', 
            'topic' => '离开停放的汽车之前，您必须执行以下哪项操作？', 
            'a' => '踩下驻车制动器', 
            'b' => '锁好门', 
            'c' => '将车停在档位或在“停车”位置', 
            'd' => '上述所有的', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1041', 
            'language_id' => '1', 
            'question_list_id' => '521', 
            'topic' => 'How many demerit points can you accrue before your license gets suspended?', 
            'a' => '50 points within any two year period', 
            'b' => '100 points within any two year period', 
            'c' => '100 points within any one year period', 
            'd' => '50 points within any one year period', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1042', 
            'language_id' => '2', 
            'question_list_id' => '521', 
            'topic' => '在您的许可证被暂停之前，您可以扣多少分？', 
            'a' => '两年内50分', 
            'b' => '两年内100分', 
            'c' => '一年内可得100分', 
            'd' => '一年内可得50分', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1043', 
            'language_id' => '1', 
            'question_list_id' => '522', 
            'topic' => 'Can you carry passengers while on a restricted license?', 
            'a' => 'Yes', 
            'b' => 'Only certain close family members and dependants', 
            'c' => 'Yes, but only between 5am and 10pm', 
            'd' => 'No', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1044', 
            'language_id' => '2', 
            'question_list_id' => '522', 
            'topic' => '您可以在有限制牌照的情况下载客吗？', 
            'a' => '是', 
            'b' => '仅某些亲密家庭成员和家属', 
            'c' => '是的，但仅在凌晨5点至晚上10点之间', 
            'd' => '没有', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1045', 
            'language_id' => '1', 
            'question_list_id' => '523', 
            'topic' => 'When should you use your hazard lights?', 
            'a' => 'Whenever you have to stop in a hazardous location', 
            'b' => 'When you have parked in a hazardous location due to a lack of car parks', 
            'c' => 'When you don`t think other drivers will be able to see your turn signals', 
            'd' => 'All of the above', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1523.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1046', 
            'language_id' => '2', 
            'question_list_id' => '523', 
            'topic' => '什么时候应该使用危险信号灯？', 
            'a' => '每当您必须在危险场所停车时', 
            'b' => '当由于缺乏停车场而停泊在危险场所时', 
            'c' => '当您不认为其他驾驶员将能够看到您的转向灯时', 
            'd' => '上述所有的', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1523.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1047', 
            'language_id' => '1', 
            'question_list_id' => '524', 
            'topic' => 'When can a police officer stop you to check your vehicle`s fitness for the road?', 
            'a' => 'Only when your car is visibly unsafe', 
            'b' => 'Only when your WoF sticker is out of date', 
            'c' => 'At any time', 
            'd' => 'Only when you have been stopped for another reason', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1048', 
            'language_id' => '2', 
            'question_list_id' => '524', 
            'topic' => '警察什么时候可以阻止您检查车辆的路况？', 
            'a' => '仅当您的车明显不安全时', 
            'b' => '仅当您的WoF贴纸过期时', 
            'c' => '随时', 
            'd' => '仅当您因其他原因而停止', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1049', 
            'language_id' => '1', 
            'question_list_id' => '525', 
            'topic' => 'Which of the following is true?', 
            'a' => 'Cyclists should use the footpath', 
            'b' => 'You should give way to cyclists as if they were cars', 
            'c' => 'Cars always have priority over bicycles', 
            'd' => 'Cyclists only have priority when they are in a cycle lane', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1525.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1050', 
            'language_id' => '2', 
            'question_list_id' => '525', 
            'topic' => '以下内容哪些是对的？', 
            'a' => '骑自行车的人应该走小径', 
            'b' => '您应该让骑车人像汽车一样让路', 
            'c' => '汽车始终优先于自行车', 
            'd' => '骑自行车的人只有在骑车道上才有优先权', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1525.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1051', 
            'language_id' => '1', 
            'question_list_id' => '526', 
            'topic' => 'When may you park on the right side of the street?', 
            'a' => 'Never', 
            'b' => 'At any time', 
            'c' => 'When you are on a one-way street', 
            'd' => 'When you are not on a major road', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1052', 
            'language_id' => '2', 
            'question_list_id' => '526', 
            'topic' => '您什么时候可以停在街道的右侧？', 
            'a' => '决不', 
            'b' => '随时', 
            'c' => '当您在单向街上时', 
            'd' => '当您不在主要道路上时', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1053', 
            'language_id' => '1', 
            'question_list_id' => '527', 
            'topic' => 'You have parked by the roadside after dark. Which of the following is true?', 
            'a' => 'You should turn on your parking lights', 
            'b' => 'Your car must be illuminated by street lighting', 
            'c' => 'Both of the above', 
            'd' => 'Either of the above', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1054', 
            'language_id' => '2', 
            'question_list_id' => '527', 
            'topic' => '天黑后，您已停在路边。以下内容哪些是对的？', 
            'a' => '你应该打开停车灯', 
            'b' => '您的汽车必须由路灯照明', 
            'c' => '以上两者', 
            'd' => '以上任何一种', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1055', 
            'language_id' => '1', 
            'question_list_id' => '528', 
            'topic' => 'When may you drive in a bus lane?', 
            'a' => 'At any time', 
            'b' => 'When preparing to turn', 
            'c' => 'When finding a place to park', 
            'd' => 'Answers B and C', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1528.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1056', 
            'language_id' => '2', 
            'question_list_id' => '528', 
            'topic' => '您什么时候可以在公交专用道上开车？', 
            'a' => '随时', 
            'b' => '准备转弯时', 
            'c' => '在寻找停车位时', 
            'd' => '答案B和C', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1528.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1057', 
            'language_id' => '1', 
            'question_list_id' => '529', 
            'topic' => 'In what order should these cars proceed?', 
            'a' => 'Cars B, C, and then A', 
            'b' => 'Cars A, C, and then B', 
            'c' => 'Cars C, A, and then B', 
            'd' => 'Cars B, A and then C', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1529.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1058', 
            'language_id' => '2', 
            'question_list_id' => '529', 
            'topic' => '这些汽车应按什么顺序进行？', 
            'a' => '汽车B，C，然后是A', 
            'b' => '汽车A，C，然后是B', 
            'c' => '汽车C，A，然后B', 
            'd' => '汽车B，A然后是C', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1529.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1059', 
            'language_id' => '1', 
            'question_list_id' => '530', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Tram stop to the right', 
            'b' => 'Four way intersection ahead', 
            'c' => 'Turn right for detour', 
            'd' => 'Turn right for off road parking', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1530.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1060', 
            'language_id' => '2', 
            'question_list_id' => '530', 
            'topic' => '这个标志是什么意思？', 
            'a' => '电车停在右侧', 
            'b' => '四路交叉口前方', 
            'c' => '向右转弯', 
            'd' => '向右转以关闭路边停车位', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1530.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1061', 
            'language_id' => '1', 
            'question_list_id' => '531', 
            'topic' => 'This car is passing a cyclist. How much room should be left between the car and the cyclist?', 
            'a' => '1.5 metres', 
            'b' => '3 metres', 
            'c' => 'Enough space to avoid a collision', 
            'd' => '0.5 metres', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1531.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1062', 
            'language_id' => '2', 
            'question_list_id' => '531', 
            'topic' => '这辆车驶过骑自行车的人。汽车和骑自行车的人之间应该留多少空间？', 
            'a' => '1.5米', 
            'b' => '3米', 
            'c' => '足够的空间以避免碰撞', 
            'd' => '0.5米', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1531.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1063', 
            'language_id' => '1', 
            'question_list_id' => '532', 
            'topic' => 'You are following a bus that is approaching a level crossing. What should you be aware of here?', 
            'a' => 'You are allowed to pass a bus that has stopped at a level crossing', 
            'b' => 'Buses slow down considerably before reaching a level crossing', 
            'c' => 'Buses are required to stop before all level crossings', 
            'd' => 'Buses don`t have to stop at any level crossings', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1064', 
            'language_id' => '2', 
            'question_list_id' => '532', 
            'topic' => '您正在跟踪接近平交道口的公共汽车。您在这里应该注意什么？', 
            'a' => '允许您通过在平交路口停车的公共汽车', 
            'b' => '公交车在驶入平交道口之前明显减速', 
            'c' => '要求公交车在所有平交道口前停车', 
            'd' => '公交车不必在任何平交道口停下来', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1065', 
            'language_id' => '1', 
            'question_list_id' => '533', 
            'topic' => 'When can you use your rear fog lights?', 
            'a' => 'Only when you are parked', 
            'b' => 'Only at night', 
            'c' => 'Only while you are reversing', 
            'd' => 'Only when visibility is very bad', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1533.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1066', 
            'language_id' => '2', 
            'question_list_id' => '533', 
            'topic' => '什么时候可以使用后雾灯？', 
            'a' => '仅当您停车时', 
            'b' => '只在晚上', 
            'c' => '只有当你倒车时', 
            'd' => '仅当可见度很差时', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1533.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1067', 
            'language_id' => '1', 
            'question_list_id' => '534', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Wrong way - turn around and go back', 
            'b' => 'Dead end', 
            'c' => 'You can drive at any speed up to 100 km/h', 
            'd' => 'You can drive at any speed', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1534.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1068', 
            'language_id' => '2', 
            'question_list_id' => '534', 
            'topic' => '这个标志是什么意思？', 
            'a' => '错误的方式-转身后退', 
            'b' => '死路', 
            'c' => '您可以以最高100 km / h的速度行驶', 
            'd' => '您可以以任何速度驾驶', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1534.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1069', 
            'language_id' => '1', 
            'question_list_id' => '535', 
            'topic' => 'What must you do when you see this sign?', 
            'a' => 'Carefully continue at 20 km/h or less', 
            'b' => 'Continue with care', 
            'c' => 'Pull over and stop', 
            'd' => 'Come to an immediate stop', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1535.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1070', 
            'language_id' => '2', 
            'question_list_id' => '535', 
            'topic' => '看到此标志时该怎么办？', 
            'a' => '仔细继续速度20km / h以下', 
            'b' => '继续小心', 
            'c' => '停下来停下来', 
            'd' => '立即停止', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1535.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1071', 
            'language_id' => '1', 
            'question_list_id' => '536', 
            'topic' => 'What is the legal alcohol limit for NZ motorists over 20?', 
            'a' => 'zero', 
            'b' => '200 mcg per litre of breath or 100 mg per 100 ml of blood', 
            'c' => '250 mcg per litre of breath or 50 mg per 100 ml of blood', 
            'd' => '100 mcg per litre of breath or 100 mg per 100 ml of blood', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1072', 
            'language_id' => '2', 
            'question_list_id' => '536', 
            'topic' => '超过20岁的新西兰驾车者的法定饮酒限制是多少？', 
            'a' => '零', 
            'b' => '每升呼吸200 mcg或每100毫升血液100毫克', 
            'c' => '每升呼吸250 mcg或每100毫升血液50毫克', 
            'd' => '每升呼吸100 mcg或每100毫升血液100毫克', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1073', 
            'language_id' => '1', 
            'question_list_id' => '537', 
            'topic' => 'What does a blue cat`s eye marker represent?', 
            'a' => 'Wrong way, turn around and go back', 
            'b' => 'A no passing zone', 
            'c' => 'A loading zone', 
            'd' => 'The location of a fire hydrant', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1537.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1074', 
            'language_id' => '2', 
            'question_list_id' => '537', 
            'topic' => '蓝猫的眼睛标记代表什么？', 
            'a' => '错误的方法，转身回去', 
            'b' => '禁区', 
            'c' => '装载区', 
            'd' => '消防栓的位置', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1537.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1075', 
            'language_id' => '1', 
            'question_list_id' => '538', 
            'topic' => 'When can a restricted license holder drive alone?', 
            'a' => 'During daylight hours only', 
            'b' => 'At any time', 
            'c' => 'Between 10pm and 5am', 
            'd' => 'Any time between 5am and 10pm', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1076', 
            'language_id' => '2', 
            'question_list_id' => '538', 
            'topic' => '受限制的许可证持有人什么时候可以开车？', 
            'a' => '仅在白天', 
            'b' => '随时', 
            'c' => '晚上10点至凌晨5点之间', 
            'd' => '凌晨5点至晚上10点之间的任何时间', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1077', 
            'language_id' => '1', 
            'question_list_id' => '539', 
            'topic' => 'When can you be tested for drink driving?', 
            'a' => 'You can be tested at any alcohol check point', 
            'b' => 'You can be checked if you are suspected of drink driving', 
            'c' => 'Answers A and B', 
            'd' => 'You can only be tested after breaking a road rule', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1078', 
            'language_id' => '2', 
            'question_list_id' => '539', 
            'topic' => '什么时候可以进行酒后驾驶测试？', 
            'a' => '您可以在任何酒精检查站进行测试', 
            'b' => '您可以检查是否怀疑有酒后驾驶', 
            'c' => '答案A和B', 
            'd' => '您只有在违反道路规则后才能接受测试', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1079', 
            'language_id' => '1', 
            'question_list_id' => '540', 
            'topic' => 'What should you do if you are blinded by the high beams of an oncoming car?', 
            'a' => 'Slow down or stop if necessary', 
            'b' => 'Turn on your high beams', 
            'c' => 'Look to the left edge of the road', 
            'd' => 'Answers A and C', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1080', 
            'language_id' => '2', 
            'question_list_id' => '540', 
            'topic' => '如果您被迎面驶来的汽车的远光灯蒙蔽了眼睛，该怎么办？', 
            'a' => '减速或必要时停止', 
            'b' => '打开远光灯', 
            'c' => '看路的左边缘', 
            'd' => '答案A和C', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1081', 
            'language_id' => '1', 
            'question_list_id' => '541', 
            'topic' => 'For how long must you signal before you turn at a corner?', 
            'a' => 'For at least one second', 
            'b' => 'For at least three seconds', 
            'c' => 'For at least 100 metres', 
            'd' => 'Signalling before a turn is optional', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1082', 
            'language_id' => '2', 
            'question_list_id' => '541', 
            'topic' => '在拐弯之前您必须发信号多长时间？', 
            'a' => '至少一秒钟', 
            'b' => '至少三秒钟', 
            'c' => '至少100米', 
            'd' => '转弯前发信号是可选的', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1083', 
            'language_id' => '1', 
            'question_list_id' => '542', 
            'topic' => 'What does a reflective triangle by the roadside mean?', 
            'a' => 'There is a breakdown or accident ahead', 
            'b' => 'There are road works ahead', 
            'c' => 'There are non-function traffic lights ahead', 
            'd' => 'There is an intersection ahead', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1542.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1084', 
            'language_id' => '2', 
            'question_list_id' => '542', 
            'topic' => '路边的反射三角形是什么意思？', 
            'a' => '前方有故障或事故', 
            'b' => '前方有道路工程', 
            'c' => '前方有不起作用的交通灯', 
            'd' => '前方有一个路口', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1542.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1085', 
            'language_id' => '1', 
            'question_list_id' => '543', 
            'topic' => 'What may happen if you park in a clearway?', 
            'a' => 'Your car will be towed away at your expense', 
            'b' => 'You will receive a warning', 
            'c' => 'Your car will be crushed within five working days', 
            'd' => 'You will receive a parking ticket', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1086', 
            'language_id' => '2', 
            'question_list_id' => '543', 
            'topic' => '如果您在畅通的道路上停车会发生什么？', 
            'a' => '您的车将被拖走，费用自负', 
            'b' => '您将收到警告', 
            'c' => '您的汽车将在五个工作日内被撞碎', 
            'd' => '您将收到一张停车票', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1087', 
            'language_id' => '1', 
            'question_list_id' => '544', 
            'topic' => 'Traffic has stopped ahead. Have any of these cars stopped in the wrong location?', 
            'a' => 'None of these cars should have stopped here', 
            'b' => 'Car C is incorrectly positioned', 
            'c' => 'Car B is incorrectly positioned', 
            'd' => 'Car A is incorrectly positioned', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1544.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1088', 
            'language_id' => '2', 
            'question_list_id' => '544', 
            'topic' => '交通已经停止。这些车中有没有停在错误的位置？', 
            'a' => '这些汽车都不应该在这里停下来', 
            'b' => '汽车C的位置不正确', 
            'c' => '轿厢B的位置不正确', 
            'd' => '汽车A的位置不正确', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1544.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1089', 
            'language_id' => '1', 
            'question_list_id' => '545', 
            'topic' => 'In what order should these cars proceed?', 
            'a' => 'Cars A, B, and then C', 
            'b' => 'Cars C, B, and then A', 
            'c' => 'Cars B, A and then C', 
            'd' => 'Cars B, C, and then A', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1545.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1090', 
            'language_id' => '2', 
            'question_list_id' => '545', 
            'topic' => '这些汽车应按什么顺序进行？', 
            'a' => '汽车A，B，然后是C', 
            'b' => '汽车C，B，然后是A', 
            'c' => '汽车B，A然后是C', 
            'd' => '汽车B，C，然后是A', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1545.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1091', 
            'language_id' => '1', 
            'question_list_id' => '546', 
            'topic' => 'Can you have your license automatically suspended for exceeding a temporary speed limit?', 
            'a' => 'Yes, by going more than 40 km/h over the speed limit', 
            'b' => 'Yes, by going more than 50 km/h over the speed limit', 
            'c' => 'No', 
            'd' => 'Yes, by going more than 20 km/h over the speed limit', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1092', 
            'language_id' => '2', 
            'question_list_id' => '546', 
            'topic' => '您是否可以因为超出临时速度限制而自动暂停许可证？', 
            'a' => '是的，超过限速超过40 km / h', 
            'b' => '是的，超过限速超过50 km / h', 
            'c' => '没有', 
            'd' => '是的，超过限速超过20 km / h', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1093', 
            'language_id' => '1', 
            'question_list_id' => '547', 
            'topic' => 'When may you perform a U-turn?', 
            'a' => 'Only when there is a `U-turn permitted` sign posted', 
            'b' => 'Only when the road is clear', 
            'c' => 'When the road is clear and there are no `No U-turn` signs posted', 
            'd' => 'At any time', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1094', 
            'language_id' => '2', 
            'question_list_id' => '547', 
            'topic' => '您什么时候可以掉头？', 
            'a' => '仅在张贴“允许掉头”标志时', 
            'b' => '只有在道路畅通时', 
            'c' => '当道路畅通并且没有张贴“没有掉头”标志时', 
            'd' => '随时', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1095', 
            'language_id' => '1', 
            'question_list_id' => '548', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Do not overtake', 
            'b' => 'Keep left unless overtaking', 
            'c' => 'Keep left', 
            'd' => 'Left turn ahead', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1548.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1096', 
            'language_id' => '2', 
            'question_list_id' => '548', 
            'topic' => '这个标志是什么意思？', 
            'a' => '不要超车', 
            'b' => '保持超车，除非超车', 
            'c' => '靠左', 
            'd' => '向左转', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1548.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1097', 
            'language_id' => '1', 
            'question_list_id' => '549', 
            'topic' => 'How far can your load legally extend out in front of your vehicle?', 
            'a' => 'Not more than three metres beyond the front axle', 
            'b' => 'No more than one metre beyond the front axle', 
            'c' => 'No more than one metre beyond the front seat', 
            'd' => 'Not more than three metres beyond the front seat', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1549.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1098', 
            'language_id' => '2', 
            'question_list_id' => '549', 
            'topic' => '您的负载可以合法地延伸到车辆前方多远？', 
            'a' => '距前轴不超过三米', 
            'b' => '距前轴不超过一米', 
            'c' => '前排座椅不超过一米', 
            'd' => '距前排座椅不超过三米', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1549.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1099', 
            'language_id' => '1', 
            'question_list_id' => '550', 
            'topic' => 'Your licence has been suspended. When can you start driving again?', 
            'a' => 'After three months', 
            'b' => 'After the suspension has ended', 
            'c' => 'After you have applied for and received a new licence', 
            'd' => 'When you receive your new licence in the mail', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1100', 
            'language_id' => '2', 
            'question_list_id' => '550', 
            'topic' => '您的许可证已被暂停。您什么时候可以再次开始驾驶？', 
            'a' => '三个月后', 
            'b' => '暂停结束后', 
            'c' => '申请并获得新许可证后', 
            'd' => '当您通过邮件收到新许可证时', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1101', 
            'language_id' => '1', 
            'question_list_id' => '551', 
            'topic' => 'What must you do at a Stop sign?', 
            'a' => 'Stop if other traffic is present', 
            'b' => 'Proceed through - other traffic must stop for you', 
            'c' => 'Slow down and prepare to stop for traffic', 
            'd' => 'Come to a complete stop and only proceed once the road is clear', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1551.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1102', 
            'language_id' => '2', 
            'question_list_id' => '551', 
            'topic' => '您必须在停车标志处做什么？', 
            'a' => '如果有其他交通停下', 
            'b' => '继续进行-其他流量必须为您停止', 
            'c' => '放慢脚步，准备停车', 
            'd' => '完全停下来，只有在道路畅通后才能继续', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1551.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1103', 
            'language_id' => '1', 
            'question_list_id' => '552', 
            'topic' => 'You are following a slower car that you don`t intend to pass. There are other cars behind you. Which one of the following is true?', 
            'a' => 'You should stay two seconds behind the car ahead', 
            'b' => 'You should follow as closely as you can', 
            'c' => 'You must leave enough room for the car behind to safely pass you', 
            'd' => 'You should pull over', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1552.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1104', 
            'language_id' => '2', 
            'question_list_id' => '552', 
            'topic' => '您正在驾驶不希望通过的较慢的汽车。您身后还有其他汽车。以下哪一项是正确的？', 
            'a' => '你应该在前面的车后面落后两秒钟', 
            'b' => '你应该尽可能地跟随', 
            'c' => '您必须为汽车留下足够的空间以安全通过', 
            'd' => '你应该停下来', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1552.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1105', 
            'language_id' => '1', 
            'question_list_id' => '553', 
            'topic' => 'You have parked by the kerb facing downhill. Which way should you point your front wheels?', 
            'a' => 'Straight', 
            'b' => 'Away from the kerb', 
            'c' => 'Towards the kerb', 
            'd' => 'It does not matter', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1553.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1106', 
            'language_id' => '2', 
            'question_list_id' => '553', 
            'topic' => '您已停在面向下坡的路边。您应该以哪种方式指向前轮？', 
            'a' => '直行', 
            'b' => '远离路边', 
            'c' => '走向路边', 
            'd' => '不要紧', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1553.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1107', 
            'language_id' => '1', 
            'question_list_id' => '554', 
            'topic' => 'In what order should these cars proceed?', 
            'a' => 'Cars C, B, and then A', 
            'b' => 'Cars B, A, and then C', 
            'c' => 'Cars C, A, and then B', 
            'd' => 'Cars A, C, and then B', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1554.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1108', 
            'language_id' => '2', 
            'question_list_id' => '554', 
            'topic' => '这些汽车应按什么顺序进行？', 
            'a' => '汽车C，B，然后是A', 
            'b' => '汽车B，A，然后是C', 
            'c' => '汽车C，A，然后B', 
            'd' => '汽车A，C，然后是B', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1554.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1109', 
            'language_id' => '1', 
            'question_list_id' => '555', 
            'topic' => 'When do road work speed limit signs apply?', 
            'a' => 'Only when workers are present', 
            'b' => 'At all times', 
            'c' => 'Road work speed limits are advisory only', 
            'd' => 'Only during the day', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1555.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1110', 
            'language_id' => '2', 
            'question_list_id' => '555', 
            'topic' => '道路工作限速标志何时适用？', 
            'a' => '仅当工人在场时', 
            'b' => '每时每刻', 
            'c' => '道路施工限速仅供参考', 
            'd' => '只在白天', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1555.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1111', 
            'language_id' => '1', 
            'question_list_id' => '556', 
            'topic' => 'Assuming that there are no oncoming vehicles ahead, is the overtake pictured legal?', 
            'a' => 'Yes', 
            'b' => 'No', 
            'c' => 'Only if the overtaking car sounds its horn before passing', 
            'd' => 'Only if there is no traffic approaching from the side road', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1556.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1112', 
            'language_id' => '2', 
            'question_list_id' => '556', 
            'topic' => '假设前方没有迎面驶来的车辆，那么超车是否合法？', 
            'a' => '是', 
            'b' => '没有', 
            'c' => '仅当超车的汽车在驶过之前响起号角时', 
            'd' => '仅当没有交通从小路驶来时', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1556.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1113', 
            'language_id' => '1', 
            'question_list_id' => '557', 
            'topic' => 'How should you brake in a vehicle with ABS during an emergency?', 
            'a' => 'Brake firmly', 
            'b' => 'Brake firmly, but not so firmly as to lock up the wheels', 
            'c' => 'Brake slowly and gently', 
            'd' => 'Brake firmly and apply the parking brake', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1114', 
            'language_id' => '2', 
            'question_list_id' => '557', 
            'topic' => '在紧急情况下，您应如何在装有ABS的车辆中刹车？', 
            'a' => '刹车牢固', 
            'b' => '牢牢制动，但不能紧紧锁定车轮', 
            'c' => '缓慢而缓慢地刹车', 
            'd' => '牢牢制动并施加驻车制动', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1115', 
            'language_id' => '1', 
            'question_list_id' => '558', 
            'topic' => 'Which of the following factors should affect your speed whilst driving at night?', 
            'a' => 'The speed limit', 
            'b' => 'The type of road you are on', 
            'c' => 'Your ability to see', 
            'd' => 'All of the above', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1116', 
            'language_id' => '2', 
            'question_list_id' => '558', 
            'topic' => '以下哪些因素会影响您夜间开车时的速度？', 
            'a' => '限速', 
            'b' => '您所走的道路类型', 
            'c' => '你看的能力', 
            'd' => '上述所有的', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1117', 
            'language_id' => '1', 
            'question_list_id' => '559', 
            'topic' => 'Who is responsible for ensuring that all passengers under 15 wear a safety belt or a child restraint?', 
            'a' => 'Passengers under 15 are not required to buckle up', 
            'b' => 'All passengers are responsible for their own safety', 
            'c' => 'The passenger`s parents or legal guardians', 
            'd' => 'The driver', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1118', 
            'language_id' => '2', 
            'question_list_id' => '559', 
            'topic' => '谁负责确保所有15岁以下的乘客佩戴安全带或儿童约束装置？', 
            'a' => '15岁以下的乘客无需系好安全带', 
            'b' => '所有乘客都要为自己的安全负责', 
            'c' => '乘客的父母或法定监护人', 
            'd' => '司机', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1119', 
            'language_id' => '1', 
            'question_list_id' => '560', 
            'topic' => 'What does this sign mean?', 
            'a' => 'The safe speed for the corner ahead is 35 km/h', 
            'b' => 'Keep left and reduce speed to 35 km/h', 
            'c' => 'There is a 35 degree left turn ahead', 
            'd' => 'The speed limit for the corner ahead is 35 km/h', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1560.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1120', 
            'language_id' => '2', 
            'question_list_id' => '560', 
            'topic' => '这个标志是什么意思？', 
            'a' => '前方拐角的安全速度为35 km / h', 
            'b' => '保持向左行驶并将速度降至35 km / h', 
            'c' => '向前转35度', 
            'd' => '前方拐角处的速度限制为35 km / h', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1560.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1121', 
            'language_id' => '1', 
            'question_list_id' => '561', 
            'topic' => 'How must you secure a child between the ages of 8 and 14 in your car?', 
            'a' => 'In a seatbelt or child restraint', 
            'b' => 'In any child restraint', 
            'c' => 'In an approved child restraint', 
            'd' => 'With a safety belt', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1122', 
            'language_id' => '2', 
            'question_list_id' => '561', 
            'topic' => '您如何在汽车中固定8至14岁的孩子？', 
            'a' => '在安全带或儿童约束装置中', 
            'b' => '在任何儿童约束下', 
            'c' => '在批准的儿童约束装置中', 
            'd' => '带安全带', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1123', 
            'language_id' => '1', 
            'question_list_id' => '562', 
            'topic' => 'What factors influence how heavily an alcoholic drink will affect you?', 
            'a' => 'Whether you have already eaten', 
            'b' => 'The amount of alcohol in the drink', 
            'c' => 'Your body size', 
            'd' => 'All of the above', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1124', 
            'language_id' => '2', 
            'question_list_id' => '562', 
            'topic' => '哪些因素会影响酒精饮料对您的影响？', 
            'a' => '你是否已经吃过饭', 
            'b' => '饮料中的酒精含量', 
            'c' => '你的身材', 
            'd' => '上述所有的', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1125', 
            'language_id' => '1', 
            'question_list_id' => '563', 
            'topic' => 'What should you do when you see this sign?', 
            'a' => 'Note that there is a train station ahead', 
            'b' => 'Watch for a level crossing ahead', 
            'c' => 'Watch for pedestrians leaving from a roadside train station', 
            'd' => 'Note that there are rail lines along the roadside', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1563.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1126', 
            'language_id' => '2', 
            'question_list_id' => '563', 
            'topic' => '看到此标志该怎么办？', 
            'a' => '请注意，前面有一个火车站', 
            'b' => '注意前方的路口', 
            'c' => '注意从路边火车站离开的行人', 
            'd' => '请注意，路边有铁路线', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1563.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1127', 
            'language_id' => '1', 
            'question_list_id' => '564', 
            'topic' => 'An oncoming vehicle has entered your lane. Where should you plan your escape?', 
            'a' => 'Prepare to enter the oncoming lane to the right', 
            'b' => 'Prepare to escape off the road to the left', 
            'c' => 'Nowhere, remain in your lane', 
            'd' => 'Any of the above', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1564.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1128', 
            'language_id' => '2', 
            'question_list_id' => '564', 
            'topic' => '迎面驶来的车辆已进入您的车道。您应该在哪里计划逃生？', 
            'a' => '准备在右侧进入迎面而来的车道', 
            'b' => '准备逃离左边的路', 
            'c' => '无处可走', 
            'd' => '以上任何一项', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1564.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1129', 
            'language_id' => '1', 
            'question_list_id' => '565', 
            'topic' => 'Can you turn left here?', 
            'a' => 'Yes', 
            'b' => 'Yes, but only after coming to a complete stop', 
            'c' => 'No, not until the circular light turns green', 
            'd' => 'No, not until the circular light turns off', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1565.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1130', 
            'language_id' => '2', 
            'question_list_id' => '565', 
            'topic' => '你可以在这里左转吗？', 
            'a' => '是', 
            'b' => '是的，但只有在完全停止之后', 
            'c' => '不，直到圆形指示灯变为绿色', 
            'd' => '不，直到圆形灯熄灭', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1565.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1131', 
            'language_id' => '1', 
            'question_list_id' => '566', 
            'topic' => 'What is a clearway?', 
            'a' => 'An area where you must not park', 
            'b' => 'An area where you may not drive', 
            'c' => 'An area where only buses and taxis may park', 
            'd' => 'An area where you must not stop or park', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1566.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1132', 
            'language_id' => '2', 
            'question_list_id' => '566', 
            'topic' => '什么是净路？', 
            'a' => '禁止停车的区域', 
            'b' => '您可能不会开车的地方', 
            'c' => '仅可停放公共汽车和出租车的区域', 
            'd' => '禁止停车或停车的区域', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1566.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1133', 
            'language_id' => '1', 
            'question_list_id' => '567', 
            'topic' => 'How close may you park to a vehicle entrance?', 
            'a' => 'You can park directly beside an entrance', 
            'b' => 'Five metres', 
            'c' => 'One metre', 
            'd' => 'Two metres', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1134', 
            'language_id' => '2', 
            'question_list_id' => '567', 
            'topic' => '您可以停在汽车入口附近多远？', 
            'a' => '您可以直接在入口旁停车', 
            'b' => '五米', 
            'c' => '一米', 
            'd' => '两米', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1135', 
            'language_id' => '1', 
            'question_list_id' => '568', 
            'topic' => 'You are driving in a 60 km/h area and you see a 50 km/h sign ahead. When should you start slowing down?', 
            'a' => 'Before reaching the sign', 
            'b' => 'At any point within 100 metres of the sign', 
            'c' => 'After the sign', 
            'd' => 'At the sign', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1568.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1136', 
            'language_id' => '2', 
            'question_list_id' => '568', 
            'topic' => '您正在以60 km / h的速度行驶，并且前方看到50 km / h的信号。您什么时候应该开始放慢脚步？', 
            'a' => '在到达标志之前', 
            'b' => '在距离标志100米以内的任何位置', 
            'c' => '签收后', 
            'd' => '在标志', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1568.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1137', 
            'language_id' => '1', 
            'question_list_id' => '569', 
            'topic' => 'How far ahead should you look while you drive?', 
            'a' => 'A couple of metres ahead', 
            'b' => 'As far as you can see', 
            'c' => '12 seconds ahead', 
            'd' => 'Three seconds ahead', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1138', 
            'language_id' => '2', 
            'question_list_id' => '569', 
            'topic' => '您开车时应该看多远？', 
            'a' => '前方几米', 
            'b' => '据你所见', 
            'c' => '提前12秒', 
            'd' => '提前三秒钟', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1139', 
            'language_id' => '1', 
            'question_list_id' => '570', 
            'topic' => 'You have a car that was first registered eight years ago. How often must you renew the vehicle`s WoF?', 
            'a' => 'Every 12 months', 
            'b' => 'Every 24 months', 
            'c' => 'Every three months', 
            'd' => 'Every six months', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1570.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1140', 
            'language_id' => '2', 
            'question_list_id' => '570', 
            'topic' => '您有一辆八年前首次注册的汽车。您必须多久更新一次车辆的WoF？', 
            'a' => '每12个月', 
            'b' => '每24个月', 
            'c' => '每三个月', 
            'd' => '每六个月', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1570.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1141', 
            'language_id' => '1', 
            'question_list_id' => '571', 
            'topic' => 'What does this sign mean?', 
            'a' => 'The minimum speed limit is 50 km/h', 
            'b' => 'The maximum speed limit is 50 km/h', 
            'c' => 'The recommended speed limit is 50 km/h', 
            'd' => 'There is a roundabout 50 metres ahead', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1571.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1142', 
            'language_id' => '2', 
            'question_list_id' => '571', 
            'topic' => '这个标志是什么意思？', 
            'a' => '最低限速为50 km / h', 
            'b' => '最高时速为50 km / h', 
            'c' => '建议的速度限制为50 km / h', 
            'd' => '前方有一个回旋处50米', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1571.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1143', 
            'language_id' => '1', 
            'question_list_id' => '572', 
            'topic' => 'Is the overtake pictured legal?', 
            'a' => 'Only if there is no traffic approaching from the other direction', 
            'b' => 'Yes', 
            'c' => 'Only if the overtaking car sounds its horn first', 
            'd' => 'No', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1572.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1144', 
            'language_id' => '2', 
            'question_list_id' => '572', 
            'topic' => '如图所示超车合法吗？', 
            'a' => '仅当没有交通从另一个方向驶来时', 
            'b' => '是', 
            'c' => '只有超车的汽车先响起喇叭', 
            'd' => '没有', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1572.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1145', 
            'language_id' => '1', 
            'question_list_id' => '573', 
            'topic' => 'Power lines have fallen onto your vehicle. What should you do?', 
            'a' => 'Drive to dislodge the power lines', 
            'b' => 'Carefully exit your vehicle while avoiding the power lines', 
            'c' => 'Exit your vehicle and remove the power lines', 
            'd' => 'Stay in your vehicle and await help', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1146', 
            'language_id' => '2', 
            'question_list_id' => '573', 
            'topic' => '电源线掉落到您的车辆上。你该怎么办？', 
            'a' => '开车移开电源线', 
            'b' => '小心退出车辆，同时避开电源线', 
            'c' => '退出车辆并拔下电源线', 
            'd' => '留在您的车辆和等待帮助', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1147', 
            'language_id' => '1', 
            'question_list_id' => '574', 
            'topic' => 'Traffic has stopped ahead. Which car can proceed?', 
            'a' => 'Both cars', 
            'b' => 'Neither car - both must wait', 
            'c' => 'Car B', 
            'd' => 'Car A', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1574.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1148', 
            'language_id' => '2', 
            'question_list_id' => '574', 
            'topic' => '交通已经停止。哪辆车可以行驶？', 
            'a' => '这两款车', 
            'b' => '都不开车-都必须等待', 
            'c' => 'B车', 
            'd' => '汽车A', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1574.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1149', 
            'language_id' => '1', 
            'question_list_id' => '575', 
            'topic' => 'How far may a load extend out from the centre of a vehicle?', 
            'a' => 'No more than 0.75 metres', 
            'b' => 'No more than 1.275 metres', 
            'c' => 'No more than three metres', 
            'd' => 'No more than one metre', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1575.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1150', 
            'language_id' => '2', 
            'question_list_id' => '575', 
            'topic' => '负载可能从车辆中心伸出多远？', 
            'a' => '不超过0.75米', 
            'b' => '不超过1.275米', 
            'c' => '不超过三米', 
            'd' => '不超过一米', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1575.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1151', 
            'language_id' => '1', 
            'question_list_id' => '576', 
            'topic' => 'Can you proceed straight through a green traffic signal?', 
            'a' => 'No', 
            'b' => 'Yes, but only when it is safe and you have given way to any crossing pedestrians', 
            'c' => 'Yes, but only if it is safe', 
            'd' => 'Yes, always', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1576.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1152', 
            'language_id' => '2', 
            'question_list_id' => '576', 
            'topic' => '您可以直接穿过绿色的交通信号灯吗？', 
            'a' => '没有', 
            'b' => '是的，但是只有在安全的情况下，并且您才让路给过路的行人', 
            'c' => '是的，但前提是安全', 
            'd' => '是的，总是', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1576.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1153', 
            'language_id' => '1', 
            'question_list_id' => '577', 
            'topic' => 'When while driving can you make a call on your cell phone?', 
            'a' => 'When your phone is in a special fixed mount', 
            'b' => 'When you need to call 111 or *555 but cannot safely stop', 
            'c' => 'When you have pulled over', 
            'd' => 'All of the above', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1154', 
            'language_id' => '2', 
            'question_list_id' => '577', 
            'topic' => '开车时什么时候可以用手机打电话？', 
            'a' => '当您的手机安装在特殊的固定支架上时', 
            'b' => '当您需要拨打111或* 555但无法安全停止时', 
            'c' => '当你停下来', 
            'd' => '上述所有的', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1155', 
            'language_id' => '1', 
            'question_list_id' => '578', 
            'topic' => 'You see a vehicle with flashing yellow lights. What sort of vehicle is this?', 
            'a' => 'This is a customs, fisheries, or marine reserve car', 
            'b' => 'This is an emergency vehicle (e.g. fire/ambulance/police)', 
            'c' => 'This is a police car', 
            'd' => 'This is a service/maintenance vehicle', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1578.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1156', 
            'language_id' => '2', 
            'question_list_id' => '578', 
            'topic' => '您会看到一辆黄灯闪烁的车辆。这是什么样的车？', 
            'a' => '这是海关，渔业或海洋保护区的汽车', 
            'b' => '这是紧急车辆（例如消防/救护车/警察）', 
            'c' => '这是警车', 
            'd' => '这是服务/维修工具', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1578.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1157', 
            'language_id' => '1', 
            'question_list_id' => '579', 
            'topic' => 'What does this sign mean?', 
            'a' => 'You are currently on a two-way road', 
            'b' => 'Oncoming traffic should give way to you', 
            'c' => 'You must give way to oncoming traffic', 
            'd' => 'No overtaking here', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1579.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1158', 
            'language_id' => '2', 
            'question_list_id' => '579', 
            'topic' => '这个标志是什么意思？', 
            'a' => '您目前在两条道路上', 
            'b' => '即将到来的交通应该让给你', 
            'c' => '您必须让路给迎面而来的交通', 
            'd' => '这里没有超车', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1579.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1159', 
            'language_id' => '1', 
            'question_list_id' => '580', 
            'topic' => 'You have parked your manual car facing up a steep hill. In which gear should you leave your car?', 
            'a' => 'First gear', 
            'b' => 'It does not matter', 
            'c' => 'Reverse', 
            'd' => 'Neutral', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1580.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1160', 
            'language_id' => '2', 
            'question_list_id' => '580', 
            'topic' => '您已将手动车停在陡峭的山坡上。您应该将车停在哪个档位？', 
            'a' => '一档', 
            'b' => '不要紧', 
            'c' => '相反', 
            'd' => '中性', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1580.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1161', 
            'language_id' => '1', 
            'question_list_id' => '581', 
            'topic' => 'Which car must slow down before passing the school bus?', 
            'a' => 'Car A should slow down to 40 km/h', 
            'b' => 'Both cars should slow down to 40 km/h', 
            'c' => 'Car A should slow down to 20 km/h', 
            'd' => 'Both cars should slow down to 20 km/h', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1581.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1162', 
            'language_id' => '2', 
            'question_list_id' => '581', 
            'topic' => '哪辆车在通过校车之前必须减速？', 
            'a' => 'A车应减速至40 km / h', 
            'b' => '两辆车都应减速至40 km / h', 
            'c' => 'A车应减速至20 km / h', 
            'd' => '两辆车都应减速至20 km / h', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1581.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1163', 
            'language_id' => '1', 
            'question_list_id' => '582', 
            'topic' => 'What should you do at a yellow traffic arrow?', 
            'a' => 'Turn in the direction of the arrow', 
            'b' => 'Turn if you can exit the intersection before the red light', 
            'c' => 'Stop, unless you cannot do so safely before entering the intersection', 
            'd' => 'Turn if you can enter the intersection before the red light', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1582.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1164', 
            'language_id' => '2', 
            'question_list_id' => '582', 
            'topic' => '您会在黄色的交通箭头处做什么？', 
            'a' => '朝箭头方向转动', 
            'b' => '如果您可以在红灯亮之前离开交叉路口，请转', 
            'c' => '停止行驶，除非您不能安全进入十字路口', 
            'd' => '能否在红灯亮之前进入交叉路口', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1582.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1165', 
            'language_id' => '1', 
            'question_list_id' => '583', 
            'topic' => 'How should this driver indicate here?', 
            'a' => 'The car should indicate to the right', 
            'b' => 'The car should indicate to the left', 
            'c' => 'The car doesn`t need to signal', 
            'd' => 'The car should indicate to the right and then the left', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1583.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1166', 
            'language_id' => '2', 
            'question_list_id' => '583', 
            'topic' => '该驱动程序应如何在此处指示？', 
            'a' => '汽车应向右指示', 
            'b' => '汽车应向左指示', 
            'c' => '汽车不需要发信号', 
            'd' => '汽车应向右指示，然后向左指示', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1583.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1167', 
            'language_id' => '1', 
            'question_list_id' => '584', 
            'topic' => 'You see a vehicle with flashing red lights. What sort of vehicle is this?', 
            'a' => 'This is a customs, fisheries, or marine reserve car', 
            'b' => 'This is a service/maintenance vehicle', 
            'c' => 'This is an emergency vehicle (e.g. fire/ambulance/police)', 
            'd' => 'This is a police car', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1584.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1168', 
            'language_id' => '2', 
            'question_list_id' => '584', 
            'topic' => '您会看到一辆红灯闪烁的车辆。这是什么样的车？', 
            'a' => '这是海关，渔业或海洋保护区的汽车', 
            'b' => '这是服务/维修工具', 
            'c' => '这是紧急车辆（例如消防/救护车/警察）', 
            'd' => '这是警车', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1584.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1169', 
            'language_id' => '1', 
            'question_list_id' => '585', 
            'topic' => 'When may you answer a phone call while driving?', 
            'a' => 'When you are stationary at traffic lights', 
            'b' => 'When your phone is in a special fixed mount', 
            'c' => 'Never', 
            'd' => 'Answers A and B', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1170', 
            'language_id' => '2', 
            'question_list_id' => '585', 
            'topic' => '您开车时什么时候可以接电话？', 
            'a' => '当您停在交通信号灯时', 
            'b' => '当您的电话放在特殊的固定支架上时', 
            'c' => '从不', 
            'd' => '答案A和B', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1171', 
            'language_id' => '1', 
            'question_list_id' => '586', 
            'topic' => 'What should you do if your engine fails while you are driving?', 
            'a' => 'Turn the key to engage to starter motor and pull over', 
            'b' => 'Change to a lower gear and pull over somewhere safe', 
            'c' => 'Brake firmly and pull over as soon as possible', 
            'd' => 'Put your car in neutral and roll to the side of the road where safe', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1172', 
            'language_id' => '2', 
            'question_list_id' => '586', 
            'topic' => '如果您在行驶中引擎出现故障，该怎么办？', 
            'a' => '转动钥匙以接合起动马达并拉出', 
            'b' => '换低速档并安全越过', 
            'c' => '牢牢制动并尽快将其拉出', 
            'd' => '将您的汽车置于空档，并在安全的情况下向路边滚动', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1173', 
            'language_id' => '1', 
            'question_list_id' => '587', 
            'topic' => 'What should you do if an earthquake occurs while you are driving?', 
            'a' => 'Pull over, stop, and stay in your vehicle', 
            'b' => 'Speed up', 
            'c' => 'Pull over, stop, and leave your vehicle', 
            'd' => 'Keep driving', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1174', 
            'language_id' => '2', 
            'question_list_id' => '587', 
            'topic' => '如果驾车时发生地震该怎么办？', 
            'a' => '停下，停下并留在车内', 
            'b' => '加速', 
            'c' => '停下，停下并离开车辆', 
            'd' => '继续开车', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1175', 
            'language_id' => '1', 
            'question_list_id' => '588', 
            'topic' => 'How should this driver indicate here?', 
            'a' => 'The car should signal right', 
            'b' => 'The car doesn`t need to signal', 
            'c' => 'The car should signal left before leaving the roundabout', 
            'd' => 'The car should signal right before entering and left before leaving the roundabout', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1588.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1176', 
            'language_id' => '2', 
            'question_list_id' => '588', 
            'topic' => '该驱动程序应如何在此处指示？', 
            'a' => '汽车应该发出正确的信号', 
            'b' => '汽车不需要发信号', 
            'c' => '汽车应在驶出回旋处之前向左发出信号', 
            'd' => '汽车应在驶入前和驶入回旋处之前向左发出信号', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1588.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1177', 
            'language_id' => '1', 
            'question_list_id' => '589', 
            'topic' => 'Can you overtake a car approaching a level crossing?', 
            'a' => 'Only if you are over 30 metres from the crossing', 
            'b' => 'Only if you are over 60 metres from the crossing', 
            'c' => 'Yes, but only when there are no trains approaching', 
            'd' => 'Yes, if the crossing lights are out and the barrier is raised', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1178', 
            'language_id' => '2', 
            'question_list_id' => '589', 
            'topic' => '您能超越驶近平交道口的汽车吗？', 
            'a' => '仅在距离十字路口30米以上时', 
            'b' => '仅当您距离十字路口超过60米时', 
            'c' => '是的，但仅当没有火车驶入时', 
            'd' => '是的，如果交叉灯熄灭且障碍物升高', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1179', 
            'language_id' => '1', 
            'question_list_id' => '590', 
            'topic' => 'Can you park in front of a driveway?', 
            'a' => 'You cannot park within one metre of a driveway', 
            'b' => 'No, but you can park next to a driveway entrance', 
            'c' => 'Yes, but only if it`s your driveway', 
            'd' => 'Yes', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1590.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1180', 
            'language_id' => '2', 
            'question_list_id' => '590', 
            'topic' => '您可以将车停在车道前吗？', 
            'a' => '您不能在车道一米范围内停车', 
            'b' => '不可以，但是您可以将车停在车道入口旁边', 
            'c' => '是的，但只有在您的车道上', 
            'd' => '是', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1590.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1181', 
            'language_id' => '1', 
            'question_list_id' => '591', 
            'topic' => 'You arrive at a level crossing with red flashing lights and a lowered barrier. When can you go?', 
            'a' => 'When the lights have gone out', 
            'b' => 'When it is safe to proceed', 
            'c' => 'When the barrier has been raised', 
            'd' => 'When all of the above criteria have been met', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1182', 
            'language_id' => '2', 
            'question_list_id' => '591', 
            'topic' => '您会到达一个带有红色闪烁的灯光和降低的障碍的平交路口。你什么时候可以去', 
            'a' => '灯灭了', 
            'b' => '何时可以安全进行', 
            'c' => '壁垒升高时', 
            'd' => '满足以上所有条件时', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1183', 
            'language_id' => '1', 
            'question_list_id' => '592', 
            'topic' => 'How should you brake in a vehicle without ABS during an emergency?', 
            'a' => 'Brake slowly and gently', 
            'b' => 'Brake firmly and apply the parking brake', 
            'c' => 'Brake firmly, but not so firmly as to skid', 
            'd' => 'Brake firmly', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1184', 
            'language_id' => '2', 
            'question_list_id' => '592', 
            'topic' => '在紧急情况下如何在没有ABS的车辆中制动？', 
            'a' => '缓慢而缓慢地刹车', 
            'b' => '牢牢制动并施加驻车制动', 
            'c' => '刹车牢固，但不能打滑', 
            'd' => '刹车牢固', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1185', 
            'language_id' => '1', 
            'question_list_id' => '593', 
            'topic' => 'What does a yellow flashing traffic signal mean?', 
            'a' => 'The traffic signal is not functioning', 
            'b' => 'Only turning vehicles must stop here', 
            'c' => 'The traffic signal will soon turn red', 
            'd' => 'Turning vehicles may proceed', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1593.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1186', 
            'language_id' => '2', 
            'question_list_id' => '593', 
            'topic' => '交通信号灯呈黄色闪烁是什么意思？', 
            'a' => '交通信号灯不起作用', 
            'b' => '只有转弯的车辆必须在这里停下来', 
            'c' => '交通信号灯将很快变成红色', 
            'd' => '转弯车辆可能会继续前进', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1593.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1187', 
            'language_id' => '1', 
            'question_list_id' => '594', 
            'topic' => 'What should you do while you are being passed by another car?', 
            'a' => 'Nothing, maintain your speed and road position', 
            'b' => 'Speed up', 
            'c' => 'Move as far as possible to the left of the road', 
            'd' => 'Move to the right of your lane', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1188', 
            'language_id' => '2', 
            'question_list_id' => '594', 
            'topic' => '当您被另一辆汽车路过时该怎么办？', 
            'a' => '没事，保持速度和路况', 
            'b' => '加速', 
            'c' => '尽可能移到路的左侧', 
            'd' => '移至车道右侧', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1189', 
            'language_id' => '1', 
            'question_list_id' => '595', 
            'topic' => 'When can you drive over a diagonally lined median painted on the road before a right turn bay?', 
            'a' => 'Before turning right', 
            'b' => 'At any time', 
            'c' => 'Never, you must go around the median', 
            'd' => 'Before turning right in heavy traffic', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1595.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1190', 
            'language_id' => '2', 
            'question_list_id' => '595', 
            'topic' => '您何时可以在右转弯的海湾之前驶过涂在道路上的对角线中位数？', 
            'a' => '在右转之前', 
            'b' => '随时', 
            'c' => '永远不要，你必须绕中位数', 
            'd' => '在交通繁忙时右转', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1595.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1191', 
            'language_id' => '1', 
            'question_list_id' => '596', 
            'topic' => 'You have to enter a bus lane to make a turn. How far can you drive in the bus lane?', 
            'a' => 'You can drive for up to 100 metres in the bus lane', 
            'b' => 'You can drive in the bus lane for as long as you need', 
            'c' => 'You cannot drive in the bus lane', 
            'd' => 'You can drive for up to 50 metres in the bus lane', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1596.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1192', 
            'language_id' => '2', 
            'question_list_id' => '596', 
            'topic' => '您必须进入公交专用道才能转弯。您可以在公交专用道上行驶多远？', 
            'a' => '您可以在公交专用道上行驶100米', 
            'b' => '您可以根据需要在公交专用道上开车', 
            'c' => '您不能在公交专用道上开车', 
            'd' => '您可以在公交专用道上行驶50米', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1596.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1193', 
            'language_id' => '1', 
            'question_list_id' => '597', 
            'topic' => 'You have been stopped at a patrolled school crossing. When may you proceed?', 
            'a' => 'When your lane is clear', 
            'b' => 'When the crossing patrol Stop signs have been taken in', 
            'c' => 'When you receive a green signal', 
            'd' => 'When the crossing is clear', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1597.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1194', 
            'language_id' => '2', 
            'question_list_id' => '597', 
            'topic' => '您已经停止在巡逻学校交通安全。您什么时候可以进行？', 
            'a' => '当你的车道畅通时', 
            'b' => '当过路巡逻停止标志已被录入时', 
            'c' => '当您收到绿色信号时', 
            'd' => '当过路处畅通时', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1597.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1195', 
            'language_id' => '1', 
            'question_list_id' => '598', 
            'topic' => 'What does this sign mean?', 
            'a' => 'This is a clearway', 
            'b' => 'Level crossing ahead', 
            'c' => 'You have to pay to park here', 
            'd' => 'Pedestrian crossing ahead', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1598.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1196', 
            'language_id' => '2', 
            'question_list_id' => '598', 
            'topic' => '这个标志是什么意思？', 
            'a' => '这是一条净路', 
            'b' => '穿越前方的关卡', 
            'c' => '你必须付钱在这里停车', 
            'd' => '行人过路处', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1598.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1197', 
            'language_id' => '1', 
            'question_list_id' => '599', 
            'topic' => 'What does this sign mean?', 
            'a' => 'The speed limit will soon change to 45 km/h', 
            'b' => 'The speed limit is 45 km/h', 
            'c' => 'The safe speed ahead is 45 km/h', 
            'd' => 'The next town is 45 km away', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1599.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1198', 
            'language_id' => '2', 
            'question_list_id' => '599', 
            'topic' => '这个标志是什么意思？', 
            'a' => '速度限制将很快更改为45 km / h', 
            'b' => '限速为45 km / h', 
            'c' => '前方的安全速度为45 km / h', 
            'd' => '下一个镇在45公里外', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1599.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1199', 
            'language_id' => '1', 
            'question_list_id' => '600', 
            'topic' => 'You see a school bus stopped with this flashing sign. What must you do?', 
            'a' => 'Carefully proceed at 20 km/h or less', 
            'b' => 'Proceed with care', 
            'c' => 'Slow down and proceed with care', 
            'd' => 'Stop and wait for the bus to continue', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1600.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1200', 
            'language_id' => '2', 
            'question_list_id' => '600', 
            'topic' => '您会看到一辆校车停在这个闪烁的标志上。你该怎么办', 
            'a' => '小心地以每小时20公里以下的速度行驶', 
            'b' => '谨慎行事', 
            'c' => '放慢脚步，小心翼翼', 
            'd' => '停下来等公共汽车继续', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1600.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1201', 
            'language_id' => '1', 
            'question_list_id' => '601', 
            'topic' => 'Which lane should you use on the motorway?', 
            'a' => 'The right lane unless you are holding up traffic', 
            'b' => 'Any lane', 
            'c' => 'The left lanes unless you are overtaking', 
            'd' => 'The right lane unless you are overtaking', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1202', 
            'language_id' => '2', 
            'question_list_id' => '601', 
            'topic' => '您应该在高速公路上使用哪条车道？', 
            'a' => '右侧车道，除非你影响了交通', 
            'b' => '任何车道', 
            'c' => '除非您超车，否则左车道', 
            'd' => '正确的车道，除非您超车', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1203', 
            'language_id' => '1', 
            'question_list_id' => '602', 
            'topic' => 'Can you park in this loading zone?', 
            'a' => 'You may only park here to load goods', 
            'b' => 'You may load or unload goods and passengers here', 
            'c' => 'You may only stop here to pick up passengers', 
            'd' => 'Yes, you may park here at any time', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1602.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1204', 
            'language_id' => '2', 
            'question_list_id' => '602', 
            'topic' => '你可以停在这个装载区吗？', 
            'a' => '您只能在这里停放货物', 
            'b' => '您可以在这里装卸货物和乘客', 
            'c' => '您只能在这里停下来接客', 
            'd' => '是的，您可以随时在这里停车', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1602.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1205', 
            'language_id' => '1', 
            'question_list_id' => '603', 
            'topic' => 'Who may supervise a learner driver?', 
            'a' => 'Someone who is over 25', 
            'b' => 'Someone who has a vehicle registered in their name', 
            'c' => 'Someone who has been fully licenced for at least two years', 
            'd' => 'Someone who meets all of the above requirements', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1206', 
            'language_id' => '2', 
            'question_list_id' => '603', 
            'topic' => '谁可以监督学习者的驾驶？', 
            'a' => '超过25岁的人', 
            'b' => '以自己的名字注册了车辆的人', 
            'c' => '已获得完全许可至少两年的人', 
            'd' => '符合以上所有条件的人', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1207', 
            'language_id' => '1', 
            'question_list_id' => '604', 
            'topic' => 'You see a vehicle with flashing blue lights. What sort of vehicle is this?', 
            'a' => 'This is an emergency vehicle (e.g. fire/ambulance/police)', 
            'b' => 'This is a customs, fisheries, or marine reserve car', 
            'c' => 'This is a service/maintenance vehicle', 
            'd' => 'This is a police car', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1604.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1208', 
            'language_id' => '2', 
            'question_list_id' => '604', 
            'topic' => '您会看到一辆蓝灯闪烁的车辆。这是什么样的车？', 
            'a' => '这是紧急车辆（例如消防/救护车/警察）', 
            'b' => '这是海关，渔业或海洋保护区的汽车', 
            'c' => '这是服务/维修工具', 
            'd' => '这是警车', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1604.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1209', 
            'language_id' => '1', 
            'question_list_id' => '605', 
            'topic' => 'What does this sign mean?', 
            'a' => 'U-turns permitted', 
            'b' => 'There is a roundabout ahead', 
            'c' => 'Right turns are permitted ahead', 
            'd' => 'There are road works ahead', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1605.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1210', 
            'language_id' => '2', 
            'question_list_id' => '605', 
            'topic' => '这个标志是什么意思？', 
            'a' => '允许掉头', 
            'b' => '前方有一个回旋处', 
            'c' => '允许右转', 
            'd' => '前方有道路工程', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1605.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1211', 
            'language_id' => '1', 
            'question_list_id' => '606', 
            'topic' => 'You have purchased and registered a new car. How frequently must you renew your WoF?', 
            'a' => 'Every 24 months', 
            'b' => 'Every 12 months', 
            'c' => 'Three years after it was first registered, and 12 months thereafter.', 
            'd' => 'Every six months', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1606.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1212', 
            'language_id' => '2', 
            'question_list_id' => '606', 
            'topic' => '您已经购买并注册了新车。您必须多久更新一次WoF？', 
            'a' => '每24个月', 
            'b' => '每12个月', 
            'c' => '首次注册后三年，此后十二个月。', 
            'd' => '每六个月', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1606.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1213', 
            'language_id' => '1', 
            'question_list_id' => '607', 
            'topic' => 'Can a regular car drive in this transit lane?', 
            'a' => 'If the car has three passengers excluding the driver', 
            'b' => 'No', 
            'c' => 'If the car has three passengers including the driver', 
            'd' => 'Only after paying the $3.00 toll', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1607.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1214', 
            'language_id' => '2', 
            'question_list_id' => '607', 
            'topic' => '普通汽车可以在这条运输车道上行驶吗？', 
            'a' => '如果汽车中有三名乘客（驾驶员除外）', 
            'b' => '没有', 
            'c' => '如果汽车有三名乘客，包括驾驶员', 
            'd' => '仅在支付了3.00美元的通行费后', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1607.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1215', 
            'language_id' => '1', 
            'question_list_id' => '608', 
            'topic' => 'Car A is entering the road from a driveway. Who here has priority?', 
            'a' => 'One car should wave the other car through', 
            'b' => 'Car B', 
            'c' => 'Car A has priority if it is on a public driveway', 
            'd' => 'Car A', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1608.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1216', 
            'language_id' => '2', 
            'question_list_id' => '608', 
            'topic' => '汽车A正在从车道进入道路。谁在这里优先？', 
            'a' => '一辆车应通过另一辆车', 
            'b' => 'B车', 
            'c' => '如果汽车A在公共车道上，则具有优先权', 
            'd' => '汽车A', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1608.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1217', 
            'language_id' => '1', 
            'question_list_id' => '609', 
            'topic' => 'Can you park in front of this sign?', 
            'a' => 'No', 
            'b' => 'Yes, always', 
            'c' => 'Yes, but only for 30 minutes', 
            'd' => 'Yes, but only after paying $30', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1609.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1218', 
            'language_id' => '2', 
            'question_list_id' => '609', 
            'topic' => '你能把车停在这个标志的前面吗？', 
            'a' => '没有', 
            'b' => '是的，总是', 
            'c' => '是的，但仅持续30分钟', 
            'd' => '是的，但只有在支付了30美元之后', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1609.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1219', 
            'language_id' => '1', 
            'question_list_id' => '610', 
            'topic' => 'What is the minimum safe following distance when driving in bad weather?', 
            'a' => 'Far enough away to see the car in front`s brake lights', 
            'b' => 'At least two seconds', 
            'c' => 'At least 15 metres', 
            'd' => 'At least four seconds', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1610.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1220', 
            'language_id' => '2', 
            'question_list_id' => '610', 
            'topic' => '在恶劣天气下行驶时的最小安全跟随距离是多少？', 
            'a' => '足够远的距离可以看到前面的汽车刹车灯', 
            'b' => '至少两秒钟', 
            'c' => '至少15米', 
            'd' => '至少四秒钟', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1610.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1221', 
            'language_id' => '1', 
            'question_list_id' => '611', 
            'topic' => 'How must you secure children under seven in your car?', 
            'a' => 'In an approved child restraint', 
            'b' => 'Using a safety belt', 
            'c' => 'In an approved child restraint, but only in the front seat', 
            'd' => 'With a safety belt or child restraint', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1222', 
            'language_id' => '2', 
            'question_list_id' => '611', 
            'topic' => '您如何确保7岁以下的孩子上车？', 
            'a' => '在批准的儿童约束装置中', 
            'b' => '使用安全带', 
            'c' => '在经过批准的儿童约束装置中，但只能在前排座位上', 
            'd' => '带安全带或儿童约束装置', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1223', 
            'language_id' => '1', 
            'question_list_id' => '612', 
            'topic' => 'Should you use your headlights in fog?', 
            'a' => 'Yes, you should use them on full beam', 
            'b' => 'Yes, you should use them on low beam', 
            'c' => 'No', 
            'd' => 'Yes, you should use them on full beam with your hazard lights', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1224', 
            'language_id' => '2', 
            'question_list_id' => '612', 
            'topic' => '您应该在雾中使用大灯吗？', 
            'a' => '是的，您应该在全光下使用它们', 
            'b' => '是的，您应该在近光灯下使用它们', 
            'c' => '没有', 
            'd' => '是的，您应该将它们与危险信号灯一起用于全光束', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1225', 
            'language_id' => '1', 
            'question_list_id' => '613', 
            'topic' => 'What are your rights after failing an alcohol test?', 
            'a' => 'Have a blood test to confirm the results', 
            'b' => 'Send the blood test to an independent analyst', 
            'c' => 'Call a lawyer', 
            'd' => 'All of the above', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1226', 
            'language_id' => '2', 
            'question_list_id' => '613', 
            'topic' => '酒精测试不合格后您有什么权利？', 
            'a' => '进行血液检查以确认结果', 
            'b' => '将血液检查发送给独立分析师', 
            'c' => '打电话给律师', 
            'd' => '上述所有的', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1227', 
            'language_id' => '1', 
            'question_list_id' => '614', 
            'topic' => 'You are approaching a zebra crossing. When must you stop here?', 
            'a' => 'Never, motor vehicles have priority here', 
            'b' => 'Always, even if there are no pedestrians present', 
            'c' => 'When a pedestrian has entered the crossing on your side of the road', 
            'd' => 'When a pedestrian has entered the crossing', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1614.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1228', 
            'language_id' => '2', 
            'question_list_id' => '614', 
            'topic' => '您正在接近斑马线。你什么时候必须停在这里？', 
            'a' => '从不，机动车在这里优先', 
            'b' => '始终，即使没有行人在场', 
            'c' => '当行人进入您这边的十字路口时', 
            'd' => '当行人进入人行横道时', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1614.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1229', 
            'language_id' => '1', 
            'question_list_id' => '615', 
            'topic' => 'You see a vehicle with flashing blue and red lights. What sort of vehicle is this?', 
            'a' => 'This is a service/maintenance vehicle', 
            'b' => 'This is an emergency vehicle (e.g. fire/ambulance/police)', 
            'c' => 'This is a customs, fisheries, or marine reserve car', 
            'd' => 'This is a police car', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1615.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1230', 
            'language_id' => '2', 
            'question_list_id' => '615', 
            'topic' => '您会看到一辆蓝色和红色指示灯闪烁的车辆。这是什么样的车？', 
            'a' => '这是服务/维修工具', 
            'b' => '这是紧急车辆（例如消防/救护车/警察）', 
            'c' => '这是海关，渔业或海洋保护区的汽车', 
            'd' => '这是警车', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1615.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1231', 
            'language_id' => '1', 
            'question_list_id' => '616', 
            'topic' => 'Which car must give way here?', 
            'a' => 'Car A', 
            'b' => 'Car C', 
            'c' => 'Car B', 
            'd' => 'Cars A and C', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1616.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1232', 
            'language_id' => '2', 
            'question_list_id' => '616', 
            'topic' => '哪辆车必须在这里让路？', 
            'a' => '汽车A', 
            'b' => 'C车', 
            'c' => 'B车', 
            'd' => '汽车A和C', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1616.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1233', 
            'language_id' => '1', 
            'question_list_id' => '617', 
            'topic' => 'How long may your car emit visible smoke before it is considered unfit to drive?', 
            'a' => '10 seconds', 
            'b' => '5 seconds', 
            'c' => '2 seconds', 
            'd' => 'There is no limit as to how much smoke your car may emit', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1234', 
            'language_id' => '2', 
            'question_list_id' => '617', 
            'topic' => '您的汽车在被认为不适合驾驶之前会发出可见的烟雾多长时间？', 
            'a' => '10秒', 
            'b' => '5秒', 
            'c' => '2秒', 
            'd' => '您的汽车可能散发多少烟雾没有限制', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1235', 
            'language_id' => '1', 
            'question_list_id' => '618', 
            'topic' => 'Which rule applies to a learner or restricted (Class 1) licence holder who wants to tow a trailer?', 
            'a' => 'The combined weight of the car, trailer, and load must not exceed 6000kg', 
            'b' => 'A class 1 licence holder must not tow a trailer', 
            'c' => 'The combined weight of the car, trailer, and load must not exceed 4500kg', 
            'd' => 'The trailer must not have more than two axles', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1236', 
            'language_id' => '2', 
            'question_list_id' => '618', 
            'topic' => '哪个规则适用于想要拖曳拖车的学习者或受限制的（第1类）许可证持有人？', 
            'a' => '轿厢，拖车和货物的总重量不得超过6000kg', 
            'b' => '1类许可证持有人不得拖曳拖车', 
            'c' => '轿厢，拖车和货物的总重量不得超过4500kg', 
            'd' => '拖车的车轴不得超过两个', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1237', 
            'language_id' => '1', 
            'question_list_id' => '619', 
            'topic' => 'What must you do at a Give Way sign?', 
            'a' => 'Proceed through - other vehicles must stop', 
            'b' => 'Slow down but only stop when you see traffic', 
            'c' => 'Slow down', 
            'd' => 'Come to a complete stop', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1619.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1238', 
            'language_id' => '2', 
            'question_list_id' => '619', 
            'topic' => '您必须在“让路”标志处做什么？', 
            'a' => '继续进行-其他车辆必须停车', 
            'b' => '放慢脚步，但只有在看到路况时才停下来', 
            'c' => '慢一点', 
            'd' => '完全停止', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1619.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1239', 
            'language_id' => '1', 
            'question_list_id' => '620', 
            'topic' => 'You see a traffic signal with this light. What does it mean?', 
            'a' => 'Trucks may proceed', 
            'b' => 'Vehicles in the transit lane may proceed', 
            'c' => 'There is a T-intersection ahead', 
            'd' => 'Trams may proceed', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1620.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1240', 
            'language_id' => '2', 
            'question_list_id' => '620', 
            'topic' => '您会看到带有此指示灯的交通信号灯。这是什么意思？', 
            'a' => '卡车可能会前进', 
            'b' => '过境车道上的车辆可能会继续行驶', 
            'c' => '前方有一个T形交叉路口', 
            'd' => '电车可能会继续', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1620.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1241', 
            'language_id' => '1', 
            'question_list_id' => '621', 
            'topic' => 'When can you overtake another car on the left side?', 
            'a' => 'When there is more than one lane moving in your direction', 
            'b' => 'When the car you are passing has stopped', 
            'c' => 'When the car you are passing is signalling to turn right', 
            'd' => 'Any of the above', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1242', 
            'language_id' => '2', 
            'question_list_id' => '621', 
            'topic' => '什么时候可以超越左侧的另一辆车？', 
            'a' => '当有多条车道向您方向行驶时', 
            'b' => '当您经过的汽车停下来时', 
            'c' => '当您经过的汽车发出向右转的信号时', 
            'd' => '以上任何一项', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1243', 
            'language_id' => '1', 
            'question_list_id' => '622', 
            'topic' => 'What must you do before you open your door after parking by the roadside?', 
            'a' => 'Open the door slowly', 
            'b' => 'Sound your horn', 
            'c' => 'Check for passing vehicles, cyclists, and pedestrians', 
            'd' => 'Activate your hazard lights', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1244', 
            'language_id' => '2', 
            'question_list_id' => '622', 
            'topic' => '在路边停车后打开门之前必须做什么？', 
            'a' => '慢慢开门', 
            'b' => '响你的号角', 
            'c' => '检查过往车辆，骑车人和行人', 
            'd' => '激活危险灯', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1245', 
            'language_id' => '1', 
            'question_list_id' => '623', 
            'topic' => 'What does this sign mean?', 
            'a' => 'You must give way to oncoming traffic', 
            'b' => 'Oncoming traffic should give way to you', 
            'c' => 'No overtaking here', 
            'd' => 'You are on a two-way road', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1623.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1246', 
            'language_id' => '2', 
            'question_list_id' => '623', 
            'topic' => '这个标志是什么意思？', 
            'a' => '您必须让路给迎面而来的交通', 
            'b' => '即将到来的交通应该让给你', 
            'c' => '这里没有超车', 
            'd' => '您在两条道路上', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1623.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1247', 
            'language_id' => '1', 
            'question_list_id' => '624', 
            'topic' => 'How much can a 19 year old drink before driving?', 
            'a' => 'Nothing', 
            'b' => 'It depends on the driver`s license type', 
            'c' => 'One standard drink', 
            'd' => 'Less than 0.08% BAC', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1248', 
            'language_id' => '2', 
            'question_list_id' => '624', 
            'topic' => '开车前19岁的老人可以喝多少酒？', 
            'a' => '没有', 
            'b' => '这取决于驾驶执照的类型', 
            'c' => '一份标准饮料', 
            'd' => 'BAC小于0.08％', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1249', 
            'language_id' => '1', 
            'question_list_id' => '625', 
            'topic' => 'For how long must you indicate before you slow down to park?', 
            'a' => 'At least two seconds', 
            'b' => 'At least one second', 
            'c' => 'At least three seconds', 
            'd' => 'As long as you deem to be safe', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1250', 
            'language_id' => '2', 
            'question_list_id' => '625', 
            'topic' => '您必须减速多长时间才能停车？', 
            'a' => '至少两秒钟', 
            'b' => '至少一秒钟', 
            'c' => '至少三秒钟', 
            'd' => '只要您认为安全', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1251', 
            'language_id' => '1', 
            'question_list_id' => '626', 
            'topic' => 'What does this sign mean?', 
            'a' => 'The speed limit is 30 km/h during the day', 
            'b' => 'The speed limit is 30 km/h while workers are present', 
            'c' => 'The speed limit is 30 km/h for a short distance ahead', 
            'd' => 'The speed limit is 30 km/h while signed', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1626.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1252', 
            'language_id' => '2', 
            'question_list_id' => '626', 
            'topic' => '这个标志是什么意思？', 
            'a' => '白天限速为30 km / h', 
            'b' => '工人在场时限速为30 km / h', 
            'c' => '前方的短距离速度限制为30 km / h', 
            'd' => '签署时，速度限制为30 km / h', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1626.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1253', 
            'language_id' => '1', 
            'question_list_id' => '627', 
            'topic' => 'What can you do at this green turn arrow?', 
            'a' => 'You must stop here', 
            'b' => 'You may turn right or proceed forward here', 
            'c' => 'You may turn right here', 
            'd' => 'You may turn left or right here', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1627.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1254', 
            'language_id' => '2', 
            'question_list_id' => '627', 
            'topic' => '这个绿色的转向箭头能做什么？', 
            'a' => '你必须在这里停下来', 
            'b' => '您可以在这里右转或前进', 
            'c' => '你可以在这里右转', 
            'd' => '您可以在这里左转或右转', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1627.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1255', 
            'language_id' => '1', 
            'question_list_id' => '628', 
            'topic' => 'When may you use the horn?', 
            'a' => 'Only between 5am and 10pm', 
            'b' => 'When it is necessary for traffic safety', 
            'c' => 'To communicate grievances and mistakes to other drivers', 
            'd' => 'Answers B and C', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1256', 
            'language_id' => '2', 
            'question_list_id' => '628', 
            'topic' => '您什么时候可以使用喇叭？', 
            'a' => '仅在凌晨5点至晚上10点之间', 
            'b' => '出于交通安全需要', 
            'c' => '向其他司机传达抱怨和错误', 
            'd' => '答案B和C', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1257', 
            'language_id' => '1', 
            'question_list_id' => '629', 
            'topic' => 'Who has priority here?', 
            'a' => 'The car has priority, but only at a four-way intersection', 
            'b' => 'The car has priority', 
            'c' => 'The cyclist has priority, but only at a four-way intersection', 
            'd' => 'The cyclist has priority', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1629.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1258', 
            'language_id' => '2', 
            'question_list_id' => '629', 
            'topic' => '谁在这里优先？', 
            'a' => '汽车优先，但仅在四路交叉路口', 
            'b' => '汽车优先', 
            'c' => '骑自行车的人优先，但只能在四路交叉路口', 
            'd' => '骑自行车的人优先', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1629.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1259', 
            'language_id' => '1', 
            'question_list_id' => '630', 
            'topic' => 'When can you park in front of this sign?', 
            'a' => 'Between 8pm and 6am', 
            'b' => 'On public holidays', 
            'c' => 'All of the above', 
            'd' => 'Never', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1630.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1260', 
            'language_id' => '2', 
            'question_list_id' => '630', 
            'topic' => '您什么时候可以在这个标志前停车？', 
            'a' => '晚上8点至早上6点之间', 
            'b' => '在公众假期', 
            'c' => '上述所有的', 
            'd' => '决不', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1630.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1261', 
            'language_id' => '1', 
            'question_list_id' => '631', 
            'topic' => 'How close to a fire hydrant may you leave an unattended vehicle?', 
            'a' => 'Not within half a metre of the hydrant', 
            'b' => 'Not within five metres of the hydrant', 
            'c' => 'Not within 10 metres of the hydrant', 
            'd' => 'As close as you want', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1262', 
            'language_id' => '2', 
            'question_list_id' => '631', 
            'topic' => '您可以在无人看管的情况下离消防栓多近？', 
            'a' => '距消防栓不到半米', 
            'b' => '距消防栓不到五米', 
            'c' => '距消防栓10米以内', 
            'd' => '随心所欲', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1263', 
            'language_id' => '1', 
            'question_list_id' => '632', 
            'topic' => 'What must you do at a yellow traffic signal?', 
            'a' => 'Stop, unless you cannot do so safely before entering the intersection', 
            'b' => 'Stop', 
            'c' => 'Drive through if you can exit the intersection before the red light', 
            'd' => 'Drive through if you can enter the intersection before the red light', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1632.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1264', 
            'language_id' => '2', 
            'question_list_id' => '632', 
            'topic' => '黄色交通信号灯该怎么办？', 
            'a' => '停止行驶，除非您不能安全进入十字路口', 
            'b' => '停止', 
            'c' => '如果您可以在红灯前离开十字路口，请驶过', 
            'd' => '如果可以在红灯亮之前进入交叉路口，请驶过', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1632.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1265', 
            'language_id' => '1', 
            'question_list_id' => '633', 
            'topic' => 'What give way rule applies to the driver at this crossing?', 
            'a' => 'Drivers should go first', 
            'b' => 'This is not a crossing', 
            'c' => 'Drivers may stop as a courtesy', 
            'd' => 'Drivers must stop and let pedestrians cross', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1633.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1266', 
            'language_id' => '2', 
            'question_list_id' => '633', 
            'topic' => '有什么让路规则适用于该路口的驾驶员？', 
            'a' => '司机应该先走', 
            'b' => '这不是十字路口', 
            'c' => '司机可能会礼貌地停车', 
            'd' => '驾驶员必须停车并让行人过马路', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1633.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1267', 
            'language_id' => '1', 
            'question_list_id' => '634', 
            'topic' => 'Where can you legally park or stop your vehicle?', 
            'a' => 'Closer than 6 metres to the approach side of a pedestrian crossing', 
            'b' => 'In a bus or transit lane during the hours of operation', 
            'c' => 'On a traffic island (whether it is flush or raised)', 
            'd' => 'In none of the above areas', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1268', 
            'language_id' => '2', 
            'question_list_id' => '634', 
            'topic' => '您可以在哪里合法停放车辆？', 
            'a' => '距人行横道的入口侧不到6米', 
            'b' => '在营业时间内在公共汽车或公交专用道上', 
            'c' => '在交通岛上（无论是齐平的还是抬起的）', 
            'd' => '在上述所有区域中', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1269', 
            'language_id' => '1', 
            'question_list_id' => '635', 
            'topic' => 'Which give way rule applies here?', 
            'a' => 'You have priority', 
            'b' => 'The busier road has priority', 
            'c' => 'Give way to your left', 
            'd' => 'Give way to your right', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1635.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1270', 
            'language_id' => '2', 
            'question_list_id' => '635', 
            'topic' => '哪个让路规则适用于此处？', 
            'a' => '你有优先权', 
            'b' => '繁忙的道路优先', 
            'c' => '让路到你的左边', 
            'd' => '让路到你的右边', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1635.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1271', 
            'language_id' => '1', 
            'question_list_id' => '636', 
            'topic' => 'What should you do when you are followed too closely by another car?', 
            'a' => 'Continue as normal', 
            'b' => 'Speed up to give the car behind more room', 
            'c' => 'Slow down or pull over so the car can pass', 
            'd' => 'Slow down and prevent the car from passing', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1272', 
            'language_id' => '2', 
            'question_list_id' => '636', 
            'topic' => '当您太近地跟随另一辆车时，该怎么办？', 
            'a' => '照常继续', 
            'b' => '加快速度，让汽车后面有更多空间', 
            'c' => '减速或驶过，汽车才能通过', 
            'd' => '减速并防止汽车通过', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1273', 
            'language_id' => '1', 
            'question_list_id' => '637', 
            'topic' => 'You are driving on a two lane road. When can you drive in the right lane?', 
            'a' => 'At any time', 
            'b' => 'Only while passing, preparing to turn right, or when the other lanes are full', 
            'c' => 'Only while you are passing another vehicle', 
            'd' => 'Only while you are passing or preparing to turn right', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1637.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1274', 
            'language_id' => '2', 
            'question_list_id' => '637', 
            'topic' => '您正在两条车道行驶。您什么时候可以在正确的车道上行驶？', 
            'a' => '随时', 
            'b' => '只有当路过，准备右转时，或者当其他车道都满', 
            'c' => '仅当您通过另一辆车时', 
            'd' => '仅在您经过或准备右转时', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1637.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1275', 
            'language_id' => '1', 
            'question_list_id' => '638', 
            'topic' => 'Which action is optional before you change lanes?', 
            'a' => 'Using your indicators', 
            'b' => 'Checking you mirrors', 
            'c' => 'Checking over your shoulder', 
            'd' => 'All of these are essential', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1276', 
            'language_id' => '2', 
            'question_list_id' => '638', 
            'topic' => '更改车道之前，哪个操作是可选的？', 
            'a' => '使用指标', 
            'b' => '检查你的镜子', 
            'c' => '检查你的肩膀', 
            'd' => '所有这些都是必不可少的', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1277', 
            'language_id' => '1', 
            'question_list_id' => '639', 
            'topic' => 'You are pulling out of a driveway. Which one of the following is true?', 
            'a' => 'You must give way to the cyclist only', 
            'b' => 'You have priority', 
            'c' => 'You must give way to the pedestrian and the cyclist', 
            'd' => 'You must give way to the pedestrian only', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1639.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1278', 
            'language_id' => '2', 
            'question_list_id' => '639', 
            'topic' => '您正在退出车道。以下哪一项是正确的？', 
            'a' => '您只能让路单车让步', 
            'b' => '你有优先权', 
            'c' => '您必须让路给行人和骑自行车的人', 
            'd' => '您只能让行人让路', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1639.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1279', 
            'language_id' => '1', 
            'question_list_id' => '640', 
            'topic' => 'Can you park in front of a fire hydrant?', 
            'a' => 'No, not within five metres of the hydrant', 
            'b' => 'Yes, at any time', 
            'c' => 'No, not within 500mm of the hydrant', 
            'd' => 'Only if someone remains to move the car if requested', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1280', 
            'language_id' => '2', 
            'question_list_id' => '640', 
            'topic' => '可以停在消防栓前吗？', 
            'a' => '不，不在消火栓的五米范围内', 
            'b' => '是的，随时', 
            'c' => '不，不在消防栓的500mm范围内', 
            'd' => '仅在有人要求时仍要动车时', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1281', 
            'language_id' => '1', 
            'question_list_id' => '641', 
            'topic' => 'You have accrued too many demerit points. For how long will your license be suspended?', 
            'a' => 'Six months', 
            'b' => 'Two weeks', 
            'c' => 'One year', 
            'd' => 'Three months', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1282', 
            'language_id' => '2', 
            'question_list_id' => '641', 
            'topic' => '您的记分过多。您的许可证将被暂停多长时间？', 
            'a' => '六个月', 
            'b' => '两周', 
            'c' => '一年', 
            'd' => '三个月', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1283', 
            'language_id' => '1', 
            'question_list_id' => '642', 
            'topic' => 'Can you turn right at this traffic signal?', 
            'a' => 'Yes, but you may have to give way first', 
            'b' => 'Yes', 
            'c' => 'No', 
            'd' => 'No, you must wait for the arrow to turn green', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1642.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1284', 
            'language_id' => '2', 
            'question_list_id' => '642', 
            'topic' => '您可以在这个交通信号灯处右转吗？', 
            'a' => '是的，但您可能必须先让位', 
            'b' => '是', 
            'c' => '没有', 
            'd' => '不，您必须等待箭头变为绿色', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1642.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1285', 
            'language_id' => '1', 
            'question_list_id' => '643', 
            'topic' => 'You have been pulled over and an alcohol test has been requested. May you speak to your lawyer?', 
            'a' => 'Yes, you can immediately request contact with your lawyer', 
            'b' => 'Yes, but only after a negative blood test', 
            'c' => 'Yes, but only after a positive test', 
            'd' => 'No, only if you are detained', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1286', 
            'language_id' => '2', 
            'question_list_id' => '643', 
            'topic' => '您已被拉过，并要求进行酒精测试。你可以跟你的律师说话吗？', 
            'a' => '是的，您可以立即请求与您的律师联系', 
            'b' => '是的，但只有在血液检查阴性之后', 
            'c' => '是的，但只有经过正面测试', 
            'd' => '不，只有在您被拘留的情况下', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1287', 
            'language_id' => '1', 
            'question_list_id' => '644', 
            'topic' => 'Other than at night, when are you legally required to use your headlights?', 
            'a' => 'When it is overcast', 
            'b' => 'Whenever visibility is poor at 100m', 
            'c' => 'On the motorway', 
            'd' => 'When visibility is poor and the speed limit is over 80km/h', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1288', 
            'language_id' => '2', 
            'question_list_id' => '644', 
            'topic' => '除晚上外，法律上何时要求您使用大灯？', 
            'a' => '阴天时', 
            'b' => '只要能见度差在100m', 
            'c' => '在高速公路上', 
            'd' => '当能见度很差并且速度限制超过80km / h时', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1289', 
            'language_id' => '1', 
            'question_list_id' => '645', 
            'topic' => 'What must you do at a red arrow signal?', 
            'a' => 'Stop until it is safe to proceed', 
            'b' => 'Continue through', 
            'c' => 'Stop, even if you are not turning', 
            'd' => 'Stop if you are turning in the direction of the arrow', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1645.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1290', 
            'language_id' => '2', 
            'question_list_id' => '645', 
            'topic' => '在红色箭头信号下您必须做什么？', 
            'a' => '停止直到可以安全进行', 
            'b' => '继续通过', 
            'c' => '即使你不转弯也要停下来', 
            'd' => '如果您朝箭头方向转动，请停止', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1645.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1291', 
            'language_id' => '1', 
            'question_list_id' => '646', 
            'topic' => 'What does a yellow cat`s eye marker represent?', 
            'a' => 'A no passing zone', 
            'b' => 'A loading zone', 
            'c' => 'The location of a fire hydrant', 
            'd' => 'Wrong way, turn around and go back', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1646.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1292', 
            'language_id' => '2', 
            'question_list_id' => '646', 
            'topic' => '黄猫的眼睛标记代表什么？', 
            'a' => '禁区', 
            'b' => '装载区', 
            'c' => '消防栓的位置', 
            'd' => '错误的方法，转身回去', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1646.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1293', 
            'language_id' => '1', 
            'question_list_id' => '647', 
            'topic' => 'When can you enter a flush centre median?', 
            'a' => 'When you are passing another car', 
            'b' => 'Only before or after you turn', 
            'c' => 'Never', 
            'd' => 'At any time', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1647.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1294', 
            'language_id' => '2', 
            'question_list_id' => '647', 
            'topic' => '什么时候可以输入齐平中位数？', 
            'a' => '当您经过另一辆车时', 
            'b' => '仅在您转弯之前或之后', 
            'c' => '决不', 
            'd' => '随时', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1647.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1295', 
            'language_id' => '1', 
            'question_list_id' => '648', 
            'topic' => 'When must you use your headlights?', 
            'a' => 'Always', 
            'b' => 'Between an hour before sunset and an hour after sunrise', 
            'c' => 'Between half an hour after sunset and half an hour before sunrise', 
            'd' => 'Between 6pm and 6am', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1296', 
            'language_id' => '2', 
            'question_list_id' => '648', 
            'topic' => '您何时必须使用大灯？', 
            'a' => '总是', 
            'b' => '在日落之前一个小时到日出之后一个小时之间', 
            'c' => '日落后半小时到日出前半小时之间', 
            'd' => '下午6点至早上6点之间', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1297', 
            'language_id' => '1', 
            'question_list_id' => '649', 
            'topic' => 'What does this sign mean?', 
            'a' => 'One way road', 
            'b' => 'Do not turn left or right - go straight only', 
            'c' => 'Traffic moving in your direction has priority', 
            'd' => 'There is an intersection ahead', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1649.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1298', 
            'language_id' => '2', 
            'question_list_id' => '649', 
            'topic' => '这个标志是什么意思？', 
            'a' => '单向路', 
            'b' => '不要向左或向右转-只能直行', 
            'c' => '朝您方向行驶的交通优先', 
            'd' => '前方有一个路口', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1649.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1299', 
            'language_id' => '1', 
            'question_list_id' => '650', 
            'topic' => 'You are approaching a zebra crossing split by a central traffic island. When must you stop here?', 
            'a' => 'Always, even if there are no pedestrians present', 
            'b' => 'When a pedestrian has entered the crossing on your side of the road', 
            'c' => 'Never, motor vehicles have priority here', 
            'd' => 'When a pedestrian has entered the crossing', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1650.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1300', 
            'language_id' => '2', 
            'question_list_id' => '650', 
            'topic' => '您正在接近由中央交通岛分割的斑马线。你什么时候必须停在这里？', 
            'a' => '始终，即使没有行人在场', 
            'b' => '当行人进入您这边的十字路口时', 
            'c' => '从不，机动车在这里优先', 
            'd' => '当行人进入人行横道时', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1650.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1301', 
            'language_id' => '1', 
            'question_list_id' => '651', 
            'topic' => 'What else should you do after a brake failure?', 
            'a' => 'Look for an escape route', 
            'b' => 'Turn on your horn, hazard lights, or high beams', 
            'c' => 'Accelerate to maintain control while searching for an escape route', 
            'd' => 'Answers A and B', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1302', 
            'language_id' => '2', 
            'question_list_id' => '651', 
            'topic' => '刹车故障后您还应该做什么？', 
            'a' => '寻找逃生路线', 
            'b' => '打开喇叭，危险灯或远光灯', 
            'c' => '在搜寻逃生路线时加速保持控制', 
            'd' => '答案A和B', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1303', 
            'language_id' => '1', 
            'question_list_id' => '652', 
            'topic' => 'You have arrived at a level crossing with a Stop sign. When may you proceed?', 
            'a' => 'When the road ahead is clear so you can cross without stopping', 
            'b' => 'After coming to a complete stop', 
            'c' => 'When you are sure that no trains are approaching', 
            'd' => 'When all of the above criteria have been met', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1652.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1304', 
            'language_id' => '2', 
            'question_list_id' => '652', 
            'topic' => '您已到达带有停车标志的平交路口。您什么时候可以进行？', 
            'a' => '当前方道路畅通无阻时，您可以横穿马路', 
            'b' => '完全停止后', 
            'c' => '当您确定没有火车驶入时', 
            'd' => '满足以上所有条件时', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1652.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1305', 
            'language_id' => '1', 
            'question_list_id' => '653', 
            'topic' => 'In what order should these cars proceed?', 
            'a' => 'Cars A, B, and then C', 
            'b' => 'Cars B, C, and then A', 
            'c' => 'Cars C, A, and then B', 
            'd' => 'Cars B, A, and then C', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1653.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1306', 
            'language_id' => '2', 
            'question_list_id' => '653', 
            'topic' => '这些汽车应按什么顺序进行？', 
            'a' => '汽车A，B，然后是C', 
            'b' => '汽车B，C，然后是A', 
            'c' => '汽车C，A，然后B', 
            'd' => '汽车B，A，然后是C', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1653.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1307', 
            'language_id' => '1', 
            'question_list_id' => '654', 
            'topic' => 'When must you dip your headlights?', 
            'a' => 'When you approach a police officer directing traffic', 
            'b' => 'When you are following another vehicle', 
            'c' => 'When you approach a steep hill', 
            'd' => 'Answers A and B', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1308', 
            'language_id' => '2', 
            'question_list_id' => '654', 
            'topic' => '您什么时候必须浸没大灯？', 
            'a' => '当您接近指挥交通的警察时', 
            'b' => '当您跟随另一辆车时', 
            'c' => '当您接近陡峭的山丘时', 
            'd' => '答案A和B', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1309', 
            'language_id' => '1', 
            'question_list_id' => '655', 
            'topic' => 'When can you use your front fog lights?', 
            'a' => 'At any time', 
            'b' => 'At night and when it is foggy', 
            'c' => 'Only when you are stationary', 
            'd' => 'Only when it is foggy', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1655.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1310', 
            'language_id' => '2', 
            'question_list_id' => '655', 
            'topic' => '什么时候可以使用前雾灯？', 
            'a' => '随时', 
            'b' => '在晚上和有雾的时候', 
            'c' => '只有当你静止不动时', 
            'd' => '只有在有雾的时候', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1655.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1311', 
            'language_id' => '1', 
            'question_list_id' => '656', 
            'topic' => 'You have been pulled over and an alcohol test has been requested. Can you refuse the test?', 
            'a' => 'Yes', 
            'b' => 'Yes, but your license will be immediately suspended', 
            'c' => 'Yes, but you will be fined as if you were drink driving', 
            'd' => 'Both answers B and C', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1312', 
            'language_id' => '2', 
            'question_list_id' => '656', 
            'topic' => '您已被拉过，并要求进行酒精测试。你可以拒绝考试吗？', 
            'a' => '是的', 
            'b' => '是，但是您的许可证将立即被暂停', 
            'c' => '是的，但是您会被罚款，就像您酒后驾车', 
            'd' => '答案B和C', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1313', 
            'language_id' => '1', 
            'question_list_id' => '657', 
            'topic' => 'This car is entering the road from a driveway. Which of the following is true?', 
            'a' => 'A car will always have priority over a bicycle on the road', 
            'b' => 'The car must give way as it is entering from a driveway', 
            'c' => 'A bicycle will always have priority over a car on the road', 
            'd' => 'The bicycle must give way as it is entering a driveway', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1657.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1314', 
            'language_id' => '2', 
            'question_list_id' => '657', 
            'topic' => '这辆车正在从车道进入道路。以下内容哪些是对的？', 
            'a' => '在道路上，汽车始终比自行车优先。', 
            'b' => '汽车从车道进入时必须让路', 
            'c' => '自行车始终比道路上的汽车具有优先权', 
            'd' => '自行车进入车道时必须让路', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1657.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1315', 
            'language_id' => '1', 
            'question_list_id' => '658', 
            'topic' => 'When must a learner license holder display L-Plates while driving?', 
            'a' => 'Only at night', 
            'b' => 'Only when driving without a supervisor', 
            'c' => 'At all times', 
            'd' => 'Only during the day', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1658.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1316', 
            'language_id' => '2', 
            'question_list_id' => '658', 
            'topic' => '学习驾驶执照持有人何时应在驾车时显示L牌？', 
            'a' => '只在晚上', 
            'b' => '仅在没有主管的情况下驾驶', 
            'c' => '每时每刻', 
            'd' => '只在白天', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1658.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1317', 
            'language_id' => '1', 
            'question_list_id' => '659', 
            'topic' => 'How could you stop your car if your brakes were to fail?', 
            'a' => 'Gently apply your handbrake', 
            'b' => 'Change to a lower gear', 
            'c' => 'Pump your brakes', 
            'd' => 'All of the above', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1318', 
            'language_id' => '2', 
            'question_list_id' => '659', 
            'topic' => '如果刹车失灵了，怎么停汽车？', 
            'a' => '轻轻地涂抹你的手刹', 
            'b' => '换低档', 
            'c' => '踩刹车', 
            'd' => '上述所有的', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1319', 
            'language_id' => '1', 
            'question_list_id' => '660', 
            'topic' => 'What must you do at a red traffic signal?', 
            'a' => 'Come to a complete stop until the light turns yellow', 
            'b' => 'Slow down but only stop if other vehicles are present', 
            'c' => 'Come to a complete stop until the light turns green', 
            'd' => 'Come to a complete stop and proceed when safe', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1660.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1320', 
            'language_id' => '2', 
            'question_list_id' => '660', 
            'topic' => '红色交通信号灯该怎么办？', 
            'a' => '完全停止，直到指示灯变黄', 
            'b' => '减速，但只有在有其他车辆时才停止', 
            'c' => '完全停止直到指示灯变绿', 
            'd' => '完全停止并在安全的情况下继续', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1660.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1321', 
            'language_id' => '1', 
            'question_list_id' => '661', 
            'topic' => 'Which trailer towing restriction applies to full licence holders?', 
            'a' => 'The combined weight of the car, trailer, and load must not exceed 4500kg', 
            'b' => 'A full licence holder can tow any trailer', 
            'c' => 'The trailer must not have more than two axles', 
            'd' => 'The combined weight of the car, trailer, and load must not exceed 6000kg', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1322', 
            'language_id' => '2', 
            'question_list_id' => '661', 
            'topic' => '哪个拖车牵引限制适用于正式许可证持有人？', 
            'a' => '轿厢，拖车和货物的总重量不得超过4500kg', 
            'b' => '完整的许可证持有人可以拖曳任何拖车', 
            'c' => '拖车的车轴不得超过两个', 
            'd' => '轿厢，拖车和货物的总重量不得超过6000kg', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1323', 
            'language_id' => '1', 
            'question_list_id' => '662', 
            'topic' => 'When must you dip your headlights?', 
            'a' => 'When you park', 
            'b' => 'When an oncoming vehicle is approaching', 
            'c' => 'When you are following another vehicle', 
            'd' => 'All of the above', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1324', 
            'language_id' => '2', 
            'question_list_id' => '662', 
            'topic' => '您什么时候必须浸没大灯？', 
            'a' => '当你停车', 
            'b' => '当迎面驶来的车辆驶近时', 
            'c' => '当您跟随另一辆车时', 
            'd' => '上述所有的', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1325', 
            'language_id' => '1', 
            'question_list_id' => '663', 
            'topic' => 'In what order should these cars proceed?', 
            'a' => 'Cars B, C, and then A', 
            'b' => 'Cars C, A, and then B', 
            'c' => 'Cars A, C, and then B', 
            'd' => 'Cars C, B, and then A', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1663.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1326', 
            'language_id' => '2', 
            'question_list_id' => '663', 
            'topic' => '这些汽车应按什么顺序进行？', 
            'a' => '汽车B，C，然后是A', 
            'b' => '汽车C，A，然后B', 
            'c' => '汽车A，C，然后是B', 
            'd' => '汽车C，B，然后是A', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1663.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1327', 
            'language_id' => '1', 
            'question_list_id' => '664', 
            'topic' => 'What should you do if your accelerator jams on?', 
            'a' => 'Try to raise the accelerator', 
            'b' => 'Brake', 
            'c' => 'Switch off the engine and pull off the road', 
            'd' => 'Answers A and B', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1328', 
            'language_id' => '2', 
            'question_list_id' => '664', 
            'topic' => '如果油门卡住了怎么办？', 
            'a' => '尝试提升加速器', 
            'b' => '刹车', 
            'c' => '关闭发动机并开路', 
            'd' => '答案A和B', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1329', 
            'language_id' => '1', 
            'question_list_id' => '665', 
            'topic' => 'In what order should these cars proceed?', 
            'a' => 'Cars C, A, and then B', 
            'b' => 'Cars B, A, and then C', 
            'c' => 'Cars A, C, and then B', 
            'd' => 'Cars C, B and then A', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1665.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1330', 
            'language_id' => '2', 
            'question_list_id' => '665', 
            'topic' => '这些汽车应按什么顺序进行？', 
            'a' => '汽车C，A，然后B', 
            'b' => '汽车B，A，然后是C', 
            'c' => '汽车A，C，然后是B', 
            'd' => '汽车C，B然后是A', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1665.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1331', 
            'language_id' => '1', 
            'question_list_id' => '666', 
            'topic' => 'You have parked your manual car facing down a steep hill. In which gear should you leave your car?', 
            'a' => 'Neutral', 
            'b' => 'It does not matter', 
            'c' => 'First gear', 
            'd' => 'Reverse', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1666.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1332', 
            'language_id' => '2', 
            'question_list_id' => '666', 
            'topic' => '您已将您的手动车停在陡峭的山坡上。您应该将车停在哪个档位？', 
            'a' => '中性', 
            'b' => '不要紧', 
            'c' => '一档', 
            'd' => '相反', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1666.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1333', 
            'language_id' => '1', 
            'question_list_id' => '667', 
            'topic' => 'When are you allowed to park on the footpath?', 
            'a' => 'When there are no pedestrians present', 
            'b' => 'When you are in front of your place of residence', 
            'c' => 'At any time', 
            'd' => 'Never', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1334', 
            'language_id' => '2', 
            'question_list_id' => '667', 
            'topic' => '您什么时候可以停在人行道上？', 
            'a' => '没有行人在场时', 
            'b' => '当您在居住地之前', 
            'c' => '随时', 
            'd' => '决不', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1335', 
            'language_id' => '1', 
            'question_list_id' => '668', 
            'topic' => 'How should this driver indicate here?', 
            'a' => 'The car should indicate to the right and then the left', 
            'b' => 'The car should indicate to the right', 
            'c' => 'The car doesn`t need to signal', 
            'd' => 'The car should indicate to the left', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1668.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1336', 
            'language_id' => '2', 
            'question_list_id' => '668', 
            'topic' => '该驱动程序应如何在此处指示？', 
            'a' => '汽车应向右指示，然后向左指示', 
            'b' => '汽车应向右指示', 
            'c' => '汽车不需要发信号', 
            'd' => '汽车应向左指示', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1668.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1337', 
            'language_id' => '1', 
            'question_list_id' => '669', 
            'topic' => 'May you use your cell phone to send or receive a text message while driving?', 
            'a' => 'Yes, but only when travelling at 30 km/h or under', 
            'b' => 'Yes, but only on the motorway', 
            'c' => 'Yes, but only when waiting in traffic', 
            'd' => 'No', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1338', 
            'language_id' => '2', 
            'question_list_id' => '669', 
            'topic' => '您可以在开车时使用手机发送或接收短信吗？', 
            'a' => '是的，但仅当以30 km / h或以下的速度行驶时', 
            'b' => '是的，但仅在高速公路上', 
            'c' => '是的，但仅在交通繁忙时', 
            'd' => '没有', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1339', 
            'language_id' => '1', 
            'question_list_id' => '670', 
            'topic' => 'Can you have your license automatically suspended for exceeding a permanent speed limit?', 
            'a' => 'Yes, by going more than 20 km/h over the speed limit', 
            'b' => 'No', 
            'c' => 'Yes, by going more than 40 km/h over the speed limit', 
            'd' => 'Yes, by going more than 50 km/h over the speed limit', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1340', 
            'language_id' => '2', 
            'question_list_id' => '670', 
            'topic' => '您是否可以出于永久性的速度限制而自动将许可证暂停？', 
            'a' => '是的，超过限速超过20 km / h', 
            'b' => '没有', 
            'c' => '是的，超过限速超过40 km / h', 
            'd' => '是的，超过限速超过50 km / h', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1341', 
            'language_id' => '1', 
            'question_list_id' => '671', 
            'topic' => 'Traffic has stopped for a red light. Which car is positioned incorrectly?', 
            'a' => 'Car B', 
            'b' => 'Neither car', 
            'c' => 'Both cars', 
            'd' => 'Car A', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1671.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1342', 
            'language_id' => '2', 
            'question_list_id' => '671', 
            'topic' => '交通已经停止，红灯亮了。哪辆车的位置不正确？', 
            'a' => 'B车', 
            'b' => '既没有车', 
            'c' => '这两款车', 
            'd' => '汽车A', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1671.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1343', 
            'language_id' => '1', 
            'question_list_id' => '672', 
            'topic' => 'How far can your load legally extend out behind your vehicle?', 
            'a' => 'No more than four metres beyond your rear bumper', 
            'b' => 'No more than one metre beyond your rear axle', 
            'c' => 'No more than one metre beyond your rear bumper', 
            'd' => 'No more than four metres beyond your rear axle', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1672.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1344', 
            'language_id' => '2', 
            'question_list_id' => '672', 
            'topic' => '您的负载可以合法地延伸到车辆后面多远？', 
            'a' => '后保险杠不超过四米', 
            'b' => '后轴不超过一米', 
            'c' => '后保险杠不超过一米', 
            'd' => '后轴不超过四米', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1672.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1345', 
            'language_id' => '1', 
            'question_list_id' => '673', 
            'topic' => 'How close can this car park to this intersection?', 
            'a' => 'Three metres from the intersection', 
            'b' => 'Six metres from the intersection', 
            'c' => '12 metres from the intersection', 
            'd' => 'One metre from the intersection', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1673.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1346', 
            'language_id' => '2', 
            'question_list_id' => '673', 
            'topic' => '这个停车场可以到这个十字路口多近？', 
            'a' => '距十字路口三米', 
            'b' => '距十字路口六米', 
            'c' => '距十字路口12米', 
            'd' => '距十字路口一米', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1673.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1347', 
            'language_id' => '1', 
            'question_list_id' => '674', 
            'topic' => 'Can you turn right at this traffic signal?', 
            'a' => 'No, you must wait for the arrow to turn green', 
            'b' => 'No', 
            'c' => 'Yes', 
            'd' => 'Yes, but you may have to give way first', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1674.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1348', 
            'language_id' => '2', 
            'question_list_id' => '674', 
            'topic' => '您可以在这个交通信号灯处右转吗？', 
            'a' => '不，您必须等待箭头变为绿色', 
            'b' => '没有', 
            'c' => '是', 
            'd' => '是的，但您可能必须先让位', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1674.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1349', 
            'language_id' => '1', 
            'question_list_id' => '675', 
            'topic' => 'Why would you dial *555?', 
            'a' => 'To contact emergency services', 
            'b' => 'To report a traffic incident', 
            'c' => 'To check congestion on the road ahead', 
            'd' => 'Answers B and C', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1350', 
            'language_id' => '2', 
            'question_list_id' => '675', 
            'topic' => '为什么要拨* 555？', 
            'a' => '联系紧急服务', 
            'b' => '报告交通事故', 
            'c' => '检查前方道路的拥堵情况', 
            'd' => '答案B和C', 
            'e' => '', 
            'ans' => 'B', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1351', 
            'language_id' => '1', 
            'question_list_id' => '676', 
            'topic' => 'Who may park here?', 
            'a' => 'Anyone with a disability or with young children', 
            'b' => 'Anyone with a mobility parking permit for up 30 minutes', 
            'c' => 'Anyone for up to 30 minutes', 
            'd' => 'Answers A and C', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1676.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1352', 
            'language_id' => '2', 
            'question_list_id' => '676', 
            'topic' => '谁可以在这里停车？', 
            'a' => '残障人士或年幼的孩子', 
            'b' => '持有流动停车许可证最多30分钟的人', 
            'c' => '最多30分钟', 
            'd' => '答案A和C', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1676.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1353', 
            'language_id' => '1', 
            'question_list_id' => '677', 
            'topic' => 'This lane is wide enough for two vehicles. Has this car passed lawfully?', 
            'a' => 'No', 
            'b' => 'Only if the driver can see at least 100 metres of clear road ahead', 
            'c' => 'Yes, definitely', 
            'd' => 'Only if the car being passed is holding up traffic', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1677.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1354', 
            'language_id' => '2', 
            'question_list_id' => '677', 
            'topic' => '这条车道足以容纳两辆车。这辆车合法通过了吗？', 
            'a' => '没有', 
            'b' => '仅当驾驶员可以看到前方至少100米的净路时', 
            'c' => '当然是', 
            'd' => '仅当通过的汽车阻塞交通时', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1677.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1355', 
            'language_id' => '1', 
            'question_list_id' => '678', 
            'topic' => 'What does a yellow traffic signal mean? Note that this signal is not flashing.', 
            'a' => 'You must stop before the intersection if it is safe to do so', 
            'b' => 'You can proceed if you can clear the intersection before it turns red', 
            'c' => 'You must stop before the intersection', 
            'd' => 'These traffic lights are out of order', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1678.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1356', 
            'language_id' => '2', 
            'question_list_id' => '678', 
            'topic' => '黄色交通信号是什么意思？请注意，该信号没有闪烁。', 
            'a' => '如果安全的话，您必须在十字路口前停车', 
            'b' => '如果可以在交点变红之前清除交点，则可以继续', 
            'c' => '你必须在交叉路口前停下来', 
            'd' => '这些交通信号灯故障', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1678.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1357', 
            'language_id' => '1', 
            'question_list_id' => '679', 
            'topic' => 'What must you do here?', 
            'a' => 'Come to a complete stop, give way to the next vehicle, and proceed in turn', 
            'b' => 'Come to a complete stop, give way, and proceed when safe', 
            'c' => 'Only come to a complete stop if other vehicles are present', 
            'd' => 'Come to a complete stop and proceed immediately', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1679.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1358', 
            'language_id' => '2', 
            'question_list_id' => '679', 
            'topic' => '您在这里必须做什么？', 
            'a' => '停下来，下一辆车，然后依次进行', 
            'b' => '完全停下来，让路，然后在安全时继续', 
            'c' => '仅在有其他车辆的情况下完全停止', 
            'd' => '完全停止并立即进行', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1679.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1359', 
            'language_id' => '1', 
            'question_list_id' => '680', 
            'topic' => 'Under normal conditions, which of the following actions can you perform on a motorway?', 
            'a' => 'A U-turn when safe', 
            'b' => 'Drop off passengers', 
            'c' => 'Stop beside the motorway', 
            'd' => 'None of the above', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1360', 
            'language_id' => '2', 
            'question_list_id' => '680', 
            'topic' => '在正常情况下，您可以在高速公路上执行以下哪些动作？', 
            'a' => '安全时掉头', 
            'b' => '下车乘客', 
            'c' => '在高速公路旁边停下', 
            'd' => '以上都不是', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1361', 
            'language_id' => '1', 
            'question_list_id' => '681', 
            'topic' => 'Which right of way rule applies here?', 
            'a' => 'The car on the through road of a T-intersection must give way', 
            'b' => 'All vehicles on the terminating road of a T-intersection must give way', 
            'c' => 'Vehicles never have right of way before they turn left', 
            'd' => 'The first car to arrive has right of way', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1681.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1362', 
            'language_id' => '2', 
            'question_list_id' => '681', 
            'topic' => '哪条通行权规则适用于此？', 
            'a' => 'T形交叉路口的直通车必须让路', 
            'b' => 'T形交叉路口终止道路上的所有车辆必须让路', 
            'c' => '车辆在左转弯之前永远不会过路', 
            'd' => '第一辆到达的汽车拥有通行权', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1681.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1363', 
            'language_id' => '1', 
            'question_list_id' => '682', 
            'topic' => 'What do the lines on this road mean?', 
            'a' => 'A passing zone will soon begin', 
            'b' => 'You may pass a long or a wide vehicle here', 
            'c' => 'A no passing zone will soon begin', 
            'd' => 'You may exceed the speed limit by 10 km/h while passing here', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1682.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1364', 
            'language_id' => '2', 
            'question_list_id' => '682', 
            'topic' => '什么是这条道路上的线是什么意思？', 
            'a' => '过境区即将开始', 
            'b' => '您可以在这里通过长途或宽途车辆', 
            'c' => '禁区将很快开始', 
            'd' => '经过此处时，您可能会超出速度限制10 km / h', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1682.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1365', 
            'language_id' => '1', 
            'question_list_id' => '683', 
            'topic' => 'What must you do before you change lanes?', 
            'a' => 'Look over your shoulder', 
            'b' => 'Check your mirrors', 
            'c' => 'Indicate for at least three seconds', 
            'd' => 'All of the above', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1366', 
            'language_id' => '2', 
            'question_list_id' => '683', 
            'topic' => '换道之前必须做什么？', 
            'a' => '看你的肩膀', 
            'b' => '检查你的镜子', 
            'c' => '指示至少三秒钟', 
            'd' => '上述所有的', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1367', 
            'language_id' => '1', 
            'question_list_id' => '684', 
            'topic' => 'What should you do if you break down on the motorway?', 
            'a' => 'Lift up your bonnet and boot', 
            'b' => 'Use your hazard lights', 
            'c' => 'Indicate and pull over as far from the roadway as possible', 
            'd' => 'All of the above', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1368', 
            'language_id' => '2', 
            'question_list_id' => '684', 
            'topic' => '如果您在高速公路上抛锚，该怎么办？', 
            'a' => '抬起引擎盖并启动', 
            'b' => '使用危险灯', 
            'c' => '指示并尽可能远离道路', 
            'd' => '上述所有的', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1369', 
            'language_id' => '1', 
            'question_list_id' => '685', 
            'topic' => 'Where can you perform a U-turn?', 
            'a' => 'Any corner that is not controlled by traffic lights and where U-turns are not prohibited', 
            'b' => 'Only at a traffic light', 
            'c' => 'Any place safe and clear of traffic where U-turns are not prohibited', 
            'd' => 'Only where a U-TURN PERMITTED sign is present', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1370', 
            'language_id' => '2', 
            'question_list_id' => '685', 
            'topic' => '在哪里可以掉头？', 
            'a' => '没有交通信号灯控制且禁止掉头的任何拐角', 
            'b' => '仅在红绿灯处', 
            'c' => '在禁止禁止掉头的任何安全无路的地方', 
            'd' => '仅在出现掉头许可标志的地方', 
            'e' => '', 
            'ans' => 'C', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1371', 
            'language_id' => '1', 
            'question_list_id' => '686', 
            'topic' => 'Which right of way rule applies here?', 
            'a' => 'You have right of way if you are turning right', 
            'b' => 'If you are turning, you must give way to all vehicles that are not turning', 
            'c' => 'Each vehicle can proceed in the order of their arrival', 
            'd' => 'None of the above', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1686.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1372', 
            'language_id' => '2', 
            'question_list_id' => '686', 
            'topic' => '哪条通行权规则适用于此？', 
            'a' => '如果您向右转，您将拥有通行权', 
            'b' => '如果要转弯，则必须让位于所有未转弯的车辆', 
            'c' => '每辆车都可以按照到达顺序进行', 
            'd' => '以上都不是', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1686.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1373', 
            'language_id' => '1', 
            'question_list_id' => '687', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Road narrows on the left', 
            'b' => 'Traffic may enter the road from the left ahead', 
            'c' => 'Left lane ends ahead', 
            'd' => 'Road works ahead', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1687.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1374', 
            'language_id' => '2', 
            'question_list_id' => '687', 
            'topic' => '这个标志是什么意思？', 
            'a' => '左侧路变窄', 
            'b' => '交通可能从左前方进入道路', 
            'c' => '左车道在前方结束', 
            'd' => '前方道路工程', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1687.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1375', 
            'language_id' => '1', 
            'question_list_id' => '688', 
            'topic' => 'Can you change lanes at an intersection?', 
            'a' => 'Only when there is heavy traffic', 
            'b' => 'No, never', 
            'c' => 'Yes, always', 
            'd' => 'Only when safe after indicating for three seconds', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1688.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1376', 
            'language_id' => '2', 
            'question_list_id' => '688', 
            'topic' => '您可以在十字路口更改车道吗？', 
            'a' => '只有在交通繁忙时', 
            'b' => '没有永不', 
            'c' => '是的，总是', 
            'd' => '仅在指示三秒钟后安全', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1688.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1377', 
            'language_id' => '1', 
            'question_list_id' => '689', 
            'topic' => 'You want to turn right at this green light. Which one of the following is true?', 
            'a' => 'You cannot proceed unless you are at a green turn arrow', 
            'b' => 'You must give way to all pedestrians and all traffic crossing your path', 
            'c' => 'You have right of way to proceed', 
            'd' => 'You only need to give way to other drivers before you proceed', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1689.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1378', 
            'language_id' => '2', 
            'question_list_id' => '689', 
            'topic' => '您想在这个绿灯处右转。以下哪一项是正确的？', 
            'a' => '除非您处于绿色转向箭头，否则您无法继续', 
            'b' => '您必须让路给所有行人和所有横穿道路的交通', 
            'c' => '您有权继续进行', 
            'd' => '您只需要让路给其他驱动程序，然后再继续', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1689.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1379', 
            'language_id' => '1', 
            'question_list_id' => '690', 
            'topic' => 'Can you turn left at this green light?', 
            'a' => 'No, you need a green turn arrow', 
            'b' => 'Yes, but you must come to a complete stop first', 
            'c' => 'Yes, you have right of way to proceed', 
            'd' => 'Yes, but you must give way to pedestrians first', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1690.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1380', 
            'language_id' => '2', 
            'question_list_id' => '690', 
            'topic' => '您能在这个绿灯左转吗？', 
            'a' => '不，您需要一个绿色的转向箭头', 
            'b' => '是的，但是您必须先完全停止', 
            'c' => '是的，您有权继续进行', 
            'd' => '是的，但是您必须先让路给行人', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1690.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1381', 
            'language_id' => '1', 
            'question_list_id' => '691', 
            'topic' => 'You have just passed a vehicle on the highway. How can you tell whether it is safe to return to your lane?', 
            'a' => 'It is safe once you can see the car you`ve passed in your side mirror', 
            'b' => 'It is safe once you have indicated for three seconds', 
            'c' => 'It is safe once you can see the car you`ve passed in your rear view mirror', 
            'd' => 'It is safe once you see the car pass by your passenger window', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1691.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1382', 
            'language_id' => '2', 
            'question_list_id' => '691', 
            'topic' => '您刚刚在高速公路上经过了一辆汽车。您如何判断返回车道是否安全？', 
            'a' => '一旦您可以在后视镜中看到已经驶过的汽车，这是安全的', 
            'b' => '指示三秒钟后，这很安全', 
            'c' => '一旦您在后视镜中看到驶过的汽车就很安全', 
            'd' => '一旦您看到汽车从乘客车窗经过，这是安全的', 
            'e' => '', 
            'ans' => 'C', 
            'img' => '1691.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1383', 
            'language_id' => '1', 
            'question_list_id' => '692', 
            'topic' => 'This driver is giving a hand signal. What does it mean?', 
            'a' => 'The driver intends to slow or stop', 
            'b' => 'The driver intends to turn left', 
            'c' => 'The driver intends to turn right', 
            'd' => 'The driver is allowing you to pass', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1692.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1384', 
            'language_id' => '2', 
            'question_list_id' => '692', 
            'topic' => '该驾驶员正在发出手势。这是什么意思？', 
            'a' => '驾驶员打算减速或停车', 
            'b' => '驾驶员打算向左转', 
            'c' => '驾驶员打算右转', 
            'd' => '司机允许您通过', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1692.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1385', 
            'language_id' => '1', 
            'question_list_id' => '693', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Watch for children crossing ahead', 
            'b' => 'This section of road is shared with pedestrians', 
            'c' => 'Pedestrian crossing ahead', 
            'd' => 'Footpath ends ahead, watch for pedestrians', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1693.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1386', 
            'language_id' => '2', 
            'question_list_id' => '693', 
            'topic' => '这个标志是什么意思？', 
            'a' => '留意儿童过马路', 
            'b' => '这条路与行人共享', 
            'c' => '行人过路处', 
            'd' => '行人路尽头，注意行人', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1693.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1387', 
            'language_id' => '1', 
            'question_list_id' => '694', 
            'topic' => 'Which right of way rule applies here?', 
            'a' => 'You must give way to any vehicles that are turning left before you turn right', 
            'b' => 'There is no rule for this situation - one driver must let the other through', 
            'c' => 'You have right of way over any vehicles that are turning left if you are turning right', 
            'd' => 'The first car to arrive has right of way here', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1694.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1388', 
            'language_id' => '2', 
            'question_list_id' => '694', 
            'topic' => '哪条通行权规则适用于此？', 
            'a' => '在您右转之前，您必须让路给所有向左转的车辆', 
            'b' => '对于这种情况没有规则-一个驾驶员必须让另一个通过', 
            'c' => '如果您在向右转弯，则您有权越过所有向左转弯的车辆', 
            'd' => '第一辆到达的汽车就在这里', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1694.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1389', 
            'language_id' => '1', 
            'question_list_id' => '695', 
            'topic' => 'Which of the following is most true about a cyclist`s right of way at an intersection?', 
            'a' => 'Cyclists only have right of way if they are in a cycle lane', 
            'b' => 'You must give way to cyclists as you would any car', 
            'c' => 'Cyclists only have right of way if there is no cycle lane present', 
            'd' => 'Cyclists do not have right of way', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1695.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1390', 
            'language_id' => '2', 
            'question_list_id' => '695', 
            'topic' => '以下哪项是最真实大约在十字路口的方式cyclist`s吧？', 
            'a' => '骑自行车的人只有在自行车道上才有权通行', 
            'b' => '您必须像骑车一样让路给骑自行车者', 
            'c' => '骑自行车的人只有在没有自行车道的情况下才有权通行', 
            'd' => '骑自行车的人没有通行权', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1695.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1391', 
            'language_id' => '1', 
            'question_list_id' => '696', 
            'topic' => 'Which right of way rule applies here?', 
            'a' => 'The car continuing straight must give way to the car turning right', 
            'b' => 'You must give way to your right', 
            'c' => 'You must give way to your left', 
            'd' => 'The car turning right must give way to the car continuing straight', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1696.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1392', 
            'language_id' => '2', 
            'question_list_id' => '696', 
            'topic' => '哪条通行权规则适用于此？', 
            'a' => '继续直行的汽车必须让路给右转的汽车', 
            'b' => '你必须让路', 
            'c' => '你必须让路到你的左边', 
            'd' => '向右转弯的汽车必须让位于继续直行的汽车', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1696.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1393', 
            'language_id' => '1', 
            'question_list_id' => '697', 
            'topic' => 'A car has broken down on a quiet road and you want to tow it to safety with a chain. Which of the following is true?', 
            'a' => 'You can freely tow a car with a rope or chain if you are followed by an escort vehicle', 
            'b' => 'You must not tow another vehicle with a rope or chain', 
            'c' => 'You are free to tow a car with a rope or chain within the posted speed limits', 
            'd' => 'You must not exceed 50 km/h while towing another vehicle with a rope or chain', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1394', 
            'language_id' => '2', 
            'question_list_id' => '697', 
            'topic' => '一辆汽车在一条安静的道路上抛锚了，您想用链条将其拖到安全地带。以下内容哪些是对的？', 
            'a' => '如果您跟随有伴游车辆，则可以用绳索或链子自由拖曳汽车', 
            'b' => '您不得用绳索或链条拖曳其他车辆', 
            'c' => '您可以在规定的速度限制内用绳索或链条随意拖曳汽车', 
            'd' => '用绳子或链子拖曳另一辆车时，您不得超过50 km / h', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1395', 
            'language_id' => '1', 
            'question_list_id' => '698', 
            'topic' => 'Which of the following is true about the speed limit?', 
            'a' => 'The speed limit is the maximum speed you can travel under good road conditions', 
            'b' => 'The speed limit is the fastest you can travel on a section of road while remaining safe', 
            'c' => 'You may exceed the speed limit by up to 10 km/h while passing', 
            'd' => 'All of the above', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1396', 
            'language_id' => '2', 
            'question_list_id' => '698', 
            'topic' => '关于速度限制，以下哪项是正确的？', 
            'a' => '速度限制是您在良好路况下可以行驶的最大速度', 
            'b' => '速度限制是您可以在保持安全的前提下在一段路段上行驶的最快速度', 
            'c' => '通过时，您可能会超出速度限制达10 km / h', 
            'd' => '上述所有的', 
            'e' => '', 
            'ans' => 'A', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1397', 
            'language_id' => '1', 
            'question_list_id' => '699', 
            'topic' => 'You have arrived at a narrow stretch of road and you must give way to oncoming traffic. Which sign will you see here?', 
            'a' => 'Sign B', 
            'b' => 'Sign A', 
            'c' => 'Either sign', 
            'd' => 'None of these', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1699.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1398', 
            'language_id' => '2', 
            'question_list_id' => '699', 
            'topic' => '您到达的路很窄，必须让路给迎面而来的交通。您会在这里看到哪个标志？', 
            'a' => '标志B', 
            'b' => '签名A', 
            'c' => '任何一个标志', 
            'd' => '都不是', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1699.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1399', 
            'language_id' => '1', 
            'question_list_id' => '700', 
            'topic' => 'What must you do here?', 
            'a' => 'You must take turns with cross traffic here; you give way first', 
            'b' => 'Slow down and be ready to give way to all crossing traffic', 
            'c' => 'Come to a complete stop, give way, and proceed when safe', 
            'd' => 'Proceed; other cars must give way to you here', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1700.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1400', 
            'language_id' => '2', 
            'question_list_id' => '700', 
            'topic' => '您在这里必须做什么？', 
            'a' => '您必须在这里交叉路口。你先让路', 
            'b' => '放慢脚步，准备让路给所有过境交通', 
            'c' => '完全停下来，让路，然后在安全时继续', 
            'd' => '继续;其他汽车必须在这里让位', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1700.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1401', 
            'language_id' => '1', 
            'question_list_id' => '701', 
            'topic' => 'What does this sign mean?', 
            'a' => 'Rail level crossing ahead', 
            'b' => 'Toll booth ahead', 
            'c' => 'Three lanes are traveling in each direction here', 
            'd' => 'Pedestrian crossing ahead', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1701.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1402', 
            'language_id' => '2', 
            'question_list_id' => '701', 
            'topic' => '这个标志是什么意思？', 
            'a' => '前方铁路道口', 
            'b' => '收费站前方', 
            'c' => '这里有三个车道在每个方向上行驶', 
            'd' => '行人过路处', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1701.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1403', 
            'language_id' => '1', 
            'question_list_id' => '702', 
            'topic' => 'Which one of the following is true about making a right turn?', 
            'a' => 'You may turn from the left or right side of your lane', 
            'b' => 'You must turn from the centre of your lane', 
            'c' => 'You must turn from the right side of your lane', 
            'd' => 'You must turn from the left side of your lane', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1702.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1404', 
            'language_id' => '2', 
            'question_list_id' => '702', 
            'topic' => '关于右转弯，以下哪一项是正确的？', 
            'a' => '您可以从车道的左侧或右侧转弯', 
            'b' => '您必须从车道中心转弯', 
            'c' => '您必须从车道的右侧转弯', 
            'd' => '您必须从车道的左侧转弯', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1702.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1405', 
            'language_id' => '1', 
            'question_list_id' => '703', 
            'topic' => 'This driver is giving a hand signal. What does the signal mean?', 
            'a' => 'The driver intends to turn right', 
            'b' => 'The driver intends to turn left', 
            'c' => 'The driver is allowing you to pass', 
            'd' => 'The driver intends to slow or stop', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1703.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1406', 
            'language_id' => '2', 
            'question_list_id' => '703', 
            'topic' => '该驾驶员正在发出手势。信号是什么意思？', 
            'a' => '驾驶员打算右转', 
            'b' => '驾驶员打算向左转', 
            'c' => '司机允许您通过', 
            'd' => '驾驶员打算减速或停车', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1703.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1407', 
            'language_id' => '1', 
            'question_list_id' => '704', 
            'topic' => 'What does this sign mean?', 
            'a' => 'The left lane ends ahead', 
            'b' => 'Traffic may enter the road from the left', 
            'c' => 'Road narrows on the left', 
            'd' => 'No left turns ahead', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1704.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1408', 
            'language_id' => '2', 
            'question_list_id' => '704', 
            'topic' => '这个标志是什么意思？', 
            'a' => '左车道在前方结束', 
            'b' => '交通可能会从左侧进入道路', 
            'c' => '左侧路变窄', 
            'd' => '没有左转向前', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1704.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1409', 
            'language_id' => '1', 
            'question_list_id' => '705', 
            'topic' => 'Can you pass this car here?', 
            'a' => 'Only if the car you are passing is holding up traffic', 
            'b' => 'No', 
            'c' => 'Yes, when safe', 
            'd' => 'Only if you can clearly see that he road is clear for 300 metres', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1705.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1410', 
            'language_id' => '2', 
            'question_list_id' => '705', 
            'topic' => '你可以在这儿通过这辆车吗？', 
            'a' => '仅当您经过的汽车阻塞交通时', 
            'b' => '没有', 
            'c' => '是的，只要安全', 
            'd' => '只有清楚地看到他的路畅通300米', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1705.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1411', 
            'language_id' => '1', 
            'question_list_id' => '706', 
            'topic' => 'You are at a give way sign and another car is at a stop sign. Which of the following is true?', 
            'a' => 'The car at the give way sign must give way to the car at the stop sign', 
            'b' => 'The car at the stop sign must give way to the car at the give way sign', 
            'c' => 'The first car to arrive has right of way here', 
            'd' => 'The two signs cancel each other out - the standard right of way rules apply here', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1706.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1412', 
            'language_id' => '2', 
            'question_list_id' => '706', 
            'topic' => '您处于让路标志，另一辆车处于停止标志。以下内容哪些是对的？', 
            'a' => '停车标志处的汽车必须让位于停车标志处的汽车', 
            'b' => '停车标志处的汽车必须让路', 
            'c' => '第一辆到达的汽车就在这里', 
            'd' => '这两个标志相互抵消-这里适用标准的通行权规则', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1706.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1413', 
            'language_id' => '1', 
            'question_list_id' => '707', 
            'topic' => 'When must you use your indicators?', 
            'a' => 'Before you turn or change lanes', 
            'b' => 'Before you enter or exit a park', 
            'c' => 'When you are turning on a roundabout', 
            'd' => 'All of the above', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1707.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1414', 
            'language_id' => '2', 
            'question_list_id' => '707', 
            'topic' => '您什么时候必须使用指标？', 
            'a' => '在您转弯或更改车道之前', 
            'b' => '在您进入或退出公园之前', 
            'c' => '当您打开环形交叉路口时', 
            'd' => '上述所有的', 
            'e' => '', 
            'ans' => 'D', 
            'img' => '1707.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1415', 
            'language_id' => '1', 
            'question_list_id' => '708', 
            'topic' => 'You are driving below the speed limit and holding up traffic. What should you do?', 
            'a' => 'Keep as close to the left side of the road as possible', 
            'b' => 'Pull over when safe to let traffic pass', 
            'c' => 'Speed up on straight stretches of road', 
            'd' => 'Answers A and B only', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1416', 
            'language_id' => '2', 
            'question_list_id' => '708', 
            'topic' => '您正在驾驶低于速度限制并阻碍交通。你该怎么办？', 
            'a' => '尽可能靠近道路的左侧', 
            'b' => '在安全的情况下将车停靠以让交通通过', 
            'c' => '在直路上加速', 
            'd' => '仅答案A和B', 
            'e' => '', 
            'ans' => 'D', 
            'img' => ''
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1417', 
            'language_id' => '1', 
            'question_list_id' => '709', 
            'topic' => 'What does a flashing yellow traffic signal mean?', 
            'a' => 'These traffic lights are out of order', 
            'b' => 'You can proceed if you can clear the intersection before it turns red', 
            'c' => 'You cannot turn left or right here', 
            'd' => 'You must stop before the intersection if it is safe to do so', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1709.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1418', 
            'language_id' => '2', 
            'question_list_id' => '709', 
            'topic' => '黄色的交通信号灯闪烁是什么意思？', 
            'a' => '这些交通信号灯故障', 
            'b' => '如果可以在交点变红之前清除交点，则可以继续', 
            'c' => '您不能在这里左转或右转', 
            'd' => '如果安全的话，您必须在十字路口前停车', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1709.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1419', 
            'language_id' => '1', 
            'question_list_id' => '710', 
            'topic' => 'You see a car with yellow and purple lights approach. What does this tell you?', 
            'a' => 'A very wide load is approaching - you may have to pull over', 
            'b' => 'You must move out of the way and let the vehicle pass', 
            'c' => 'Road works ahead - slow down and prepare to stop', 
            'd' => 'You must pull over for a vehicle inspection', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1710.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1420', 
            'language_id' => '2', 
            'question_list_id' => '710', 
            'topic' => '您会看到一辆带有黄色和紫色灯光的汽车。这告诉你什么？', 
            'a' => '负载非常大-您可能必须停下来', 
            'b' => '您必须移开道路并让车辆通过', 
            'c' => '道路前方施工-减速并准备停车', 
            'd' => '你必须停下来检查车辆', 
            'e' => '', 
            'ans' => 'A', 
            'img' => '1710.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1421', 
            'language_id' => '1', 
            'question_list_id' => '711', 
            'topic' => 'Which of the following is true about towing a trailer with a car?', 
            'a' => 'You should use your hazard lights while you tow a trailer', 
            'b' => 'You must not exceed 90 km/h while towing a trailer', 
            'c' => 'You may tow up to two trailers at once so long as their total mass is under three tonnes', 
            'd' => 'All of the above', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1711.png'
            ]);
            
            DB::table('questions')->insert([ 
            'id' => '1422', 
            'language_id' => '2', 
            'question_list_id' => '711', 
            'topic' => '关于用汽车拖曳拖车，以下哪项是正确的？', 
            'a' => '拖挂拖车时应使用危险灯', 
            'b' => '拖挂拖车时不得超过90 km / h', 
            'c' => '只要它们的总重量在三吨以下，您就可以一次拖曳两个拖车', 
            'd' => '上述所有的', 
            'e' => '', 
            'ans' => 'B', 
            'img' => '1711.png'
            ]);
            
            
    }
}
