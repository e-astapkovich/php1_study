<!--
Задание №1
Объявить две целочисленные переменные $a и $b и задать им произвольные начальные
значения. Затем написать скрипт, который работает по следующему принципу:
a. Если $a и $b положительные, вывести их разность.
b. Если $а и $b отрицательные, вывести их произведение.
c. Если $а и $b разных знаков, вывести их сумму.
Ноль можно считать положительным числом -->
<?php
echo "ЗАДАНИЕ 1 <br>";

$a = rand(-999, 999);
$b = rand(-999,999);
echo "$a <br>";
// echo "<br>";
echo "$b <br>";
if ($a >= 0 && $b >= 0 ) {
	echo $a - $b;
} else if ($a < 0 && $b < 0) {
	echo $a * $b;
} else {
	echo $a + $b;
}
echo '<br><br>';
?>

<!--
Задание №2
Присвоить переменной значение в промежутке [0..15]. С помощью оператора
switch организовать вывод чисел от $a до 15.-->
<?php
echo "ЗАДАНИЕ 2 <br>";


$randomVar = rand(0,15);
// $randomVar = 2;
switch ($randomVar) {
	case 0:
		echo "0 <br>";
	case 1:
		echo "1 <br>";
	case 2:
		echo "2 <br>";
	case 3:
		echo "3 <br>";
	case 4:
		echo "4 <br>";
	case 5:
		echo "5 <br>";
	case 6:
		echo "6 <br>";
	case 7:
		echo "7 <br>";
	case 8:
		echo "8 <br>";
	case 9:
		echo "9 <br>";
	case 10:
		echo "10 <br>";
	case 11:
		echo "11 <br>";
	case 12:
		echo "12 <br>";
	case 13:
		echo "13 <br>";
	case 14:
		echo "14 <br>";
	case 15:
		echo "15 <br>";
}
echo '<br><br>';
?>

<!-- 
Задание №3
Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
Обязательно использовать оператор return.-->
<?php
function sum($a, $b){
	return $a + $b;
}

function subtract($a, $b){
	return $a - $b;
}

function multiply($a, $b){
	return $a * $b;
}

function division($a, $b){
	return $a / $b;
}
?>

<!-- 
Задание №4
Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В
зависимости от переданного значения операции выполнить одну из арифметических
операций (использовать функции из пункта 3) и вернуть полученное значение (использовать
switch). -->
<?php
echo "before <br>";
function mathOperation($a, $b, $operation){
	$result = NULL;
	switch ($operation) {
		case 'сложение':
			$result = sum($a, $b);
			break;
		case 'вычитание':
			$result = subtract($a, $b);
			break;
		case 'умножение':
			$result = multiply($a, $b);
			break;
		case 'деление':
			$result = division($a, $b);
			break;
	}
	return $result;
}
echo "after <br>";

// проверка
echo mathOperation(5, 6, 'сложение');
echo '<br>';
echo mathOperation(5, 6, 'вычитание');
echo '<br>';
echo mathOperation(5, 6, 'умножение');
echo '<br>';
echo mathOperation(600, 6, 'деление');
echo '<br>';
?>



<!-- 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести
текущий год в подвале при помощи встроенных функций PHP.
6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function
power($val, $pow), где $val – заданное число, $pow – степень.
7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с
правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты. -->