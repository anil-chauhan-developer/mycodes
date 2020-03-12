<?php

$start    = '2010';
$end      = '2016';
$getRangeYear = abs(strtotime(date('Y',$start)) - strtotime(date('Y',$end)));
//$getRangeYear   = range(date('Y', strtotime($start)), date('Y', strtotime($end)));
echo "<pre>"; print_r($getRangeYear);

?>
