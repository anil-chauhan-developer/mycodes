<?php
$str="INDIA";
for($i=0;$i<strlen($str); $i++){
    for($j=0;$j<=$i;$j++)
    {
      echo $str[$i];
    }
    echo "</br>";
}
echo "=================<br>";

for($i=0;$i<strlen($str); $i++){
    for($j=0;$j<=$i;$j++)
    {
      echo $str[$j];
    }
    echo "</br>";
}

echo "=================<br>";

for($i=0;$i<strlen($str); $i++){
    for($j=$i;$j<=$i;$j++)
    {
      echo $str[$j];
    }
    echo "</br>";
}

echo "=================<br>";

for($i=0;$i<strlen($str); $i++){
    for($j=$i;$j<strlen($str);$j++)
    {
      echo $str[$i];
    }
    echo "</br>";
}

echo "=================<br>";

for($i=0;$i<strlen($str); $i++){
    for($j=$i;$j<strlen($str);$j++)
    {
      echo $str[$j];
    }
    echo "</br>";
}
echo "=================<br>";
?>
