<?php
$
$arr [] = "C++";
$arr [] = "Swift";
$arr [] = "PHP";
$arr [] = "Python";
$arr [] = "Java";


sort($arr);
echo "<br>";

/* rsort($arr);
print_r($arr);
echo "<br>"; */


echo '<br>Языки программирования: <br>';
foreach($arr as $title => $values)
{
 echo  $values, '<br>';
  
}
 
/* $arr = arr('C++',PHP','Java','Swift','Python'); */
?>