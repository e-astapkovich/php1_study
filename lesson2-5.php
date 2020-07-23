<!-- 
Задание 5
Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести
текущий год в подвале при помощи встроенных функций PHP. -->
<?php
$currentYear = date("Y");
?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Lesson2</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		.container {
			width: 1200px;
			margin: 0 auto;
		}
		.header {
			height: 150px;
			background-color: darkcyan;
		}
		.main {
			background-color: #ccc;
			min-height: calc(100vh - 300px);
		}
		.footer {
			display: flex;
			justify-content: center;
			-ms-align-items: center;
			align-items: center;
			height: 150px;
			background-color: #555;
			color: #eee;
			font-size: 24px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="header"></div>
		<div class="main"></div>
		<div class="footer">
			<?=$currentYear ?>
		</div>
	</div>
</body>
</html>