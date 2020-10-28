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
$fp=fopen($_SERVER['argv'][1],'r');
fscanf($fp,"%d",$n);
for($i=0;$i<$n;$i++){
  fscanf($fp,"%f%f%f",$start,$end,$step);
  $array=plus($start,$end,$step,$array);
}
prin($array);
fclose($fp);