<?php
/*Name: Wang Zexue
  ID: 602110191
  Wechat name:Wang*/
  function cacu1($k,$base,$y){
    $j=1;
    for($i=0;$i<$y;$i++)
       $j*=($k-$base);
  return $j; 
}
  $fp=fopen($_SERVER['argv'][1],'r');
  fscanf($fp,"%d",$n);
  $x=0;
  for($m=1;$m<=$n;$m++){
    fscanf($fp,"%f %f",$base,$y);
    
    $x=cacu1($x,$base,$y);
  }
  fclose($fp);
  echo $x;
