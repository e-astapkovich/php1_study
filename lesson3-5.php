<!-- 
5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку. -->
<?php

/**
*stu - string to underline
*/
function stu($str) {
	return str_replace(' ', '_', $str);
}

echo stu('lorem ipsum dolorem sit');
?>