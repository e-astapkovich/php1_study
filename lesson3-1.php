<!-- 
Задание 1.
С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка. -->
<?php
$num1 = 0;
while ($num1 <= 100) {
	if (!($num1 % 3)) {
		echo $num1 . '<br>';
	}
	$num1++;
}
?>