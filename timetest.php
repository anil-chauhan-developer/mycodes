//$spTimes = ServiceproviderTimeSlots::select('from_time')->get();

// $spTimes = ServiceproviderTimeSlots::get();
// $timeslotData=[];
// if(count($spTimes)>0){
//   foreach ($timeSlots as $key=>$timeSlot) {
//     $StartTime    = strtotime ($timeSlot['from_time']); //Get Timestamp
//     $EndTime      = strtotime ($timeSlot['to_time']); //Get Timestamp
//     $AddMins      = $timeSlot['time_slot_duration'] * 60;
//     $spTimeSlot   = isset($spTimes[$key]['from_time'])?$spTimes[$key]['from_time']:0;
//     $ReturnArray  = [];
//     while ($StartTime <= $EndTime) //Run loop
//     {
//       if($spTimeSlot <= date ("G:i", $StartTime)){
//         $data['is_active'] = 1;
//         $data['from_time'] = date ("G:i", $StartTime);
//       }else{
//         $data['is_active'] = 0;
//         $data['from_time'] = date ("G:i", $StartTime);
//       }
//       //$ReturnArray[] = date ("G:i", $StartTime);
//       $ReturnArray[] = $data;
//       $StartTime += $AddMins; //Endtime check
//     }
//     $timeslotData[]=['id'=>$timeSlot['id'],'name'=>$timeSlot['day_name'],'time_slot'=>$ReturnArray];
//   }
// }
