<?php
$a = '1';
$b = &$a;
$b = "2$b";
//echo $a.", ".$b;

//implode and join as same
$test =['1','2','3'];
echo $hh=implode('',$test);
echo "<br>";
 echo $eee=join($test);
 
?>
