
<?php
$arr['Понедельник'] = 'Математика';
$arr['Вторник'] = 'Проектная деятельность';
$arr['Среда'] = 'Английский';
$arr['Четверг'] = 'Физическая подготовка';
$arr['Пятница'] = 'Правоведение';

sort($arr);
echo "<br>"; 

foreach($arr as $title => $values)
{
 
	 echo  $values, '<br>';
	 echo'<br>';
	 
}
?>
