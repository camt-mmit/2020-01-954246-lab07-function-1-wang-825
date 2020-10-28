<?php
/*Name: Wang Zexue
  ID: 602110191
  Wechat name:Wang*/
function caculate($m,$n,$i){ 
  $j=1;
  for($k=0;$k<$i;$k++){
    $j=$j*($m+$n);
} 
  return $j;
}
  $a=(int)$_SERVER['argv'][1];
  $b=(int)$_SERVER['argv'][2];
  $c=(int)$_SERVER['argv'][3];
  $d=(int)$_SERVER['argv'][4];
  $p=(int)$_SERVER['argv'][5];
  $q=(int)$_SERVER['argv'][6];
  $r=(int)$_SERVER['argv'][7];
  $x="";
  fscanf(STDIN,"%d%d%d",$x,$x1,$x2);
  $x1=caculate($a,$b,$p);
  $x2=caculate($c,$d,$q);
  $x=caculate($x1,$x2,$r);
  printf("%d",$x);