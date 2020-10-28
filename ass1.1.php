<?php
/*Name: Wang Zexue
  ID: 602110191
  Wechat name:Wang*/
  function cf($c){
      return $c*(9/5)+32;
    
  }
  function plus($start,$end,$step,$array){
      for($i=$start;$i<=$end;$i+=$step)
      $array[]=$i;
      return $array; 
  }
  function prin($array){
    printf("Celsius Fahrenheit\n");
    foreach($array as $c){
    printf("%6.2f %6.2f\n",$c,cf($c));
    }
    return $array;
  }


  $start = (int)$_SERVER['argv'][1];
  $end = (int)$_SERVER['argv'][2];
  $step = (float)$_SERVER['argv'][3];
 
  $array=[];
  $array=plus($start,$end,$step,$array);
  prin($array);
