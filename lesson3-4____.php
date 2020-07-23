<!-- 
4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк. -->


/**
*какая-то проблема с кодировкой...
*/
<?php
echo 'ЗАДАНИЕ 4 <br>';

function translit($str) {
	$letters = [
	"а"=>"a",
	"б"=>"b",
	"в"=>"v",
	"г"=>"g",
	"д"=>"d",
	"е"=>"e",
	"ё"=>"yo",
	"ж"=>"zh",
	"з"=>"z",
	"и"=>"i",
	"й"=>"j",
	"к"=>"k",
	"л"=>"l",
	"м"=>"m",
	"н"=>"n",
	"о"=>"o",
	"п"=>"p",
	"р"=>"r",
	"с"=>"s",
	"т"=>"t",
	"у"=>"u",
	"ф"=>"f",
	"х"=>"x",
	"ц"=>"c",
	"ч"=>"ch",
	"ш"=>"sh",
	"щ"=>"shh",
	"ъ"=>"''",
	"ы"=>"y'",
	"ь"=>"'",
	"э"=>"e'",
	"ю"=>"yu",
	"я"=>"ya",
	"А"=>"A",
	"Б"=>"B",
	"В"=>"V",
	"Г"=>"G",
	"Д"=>"D",
	"Е"=>"E",
	"Ё"=>"Yo",
	"Ж"=>"Zh",
	"З"=>"Z",
	"И"=>"I",
	"Й"=>"J",
	"К"=>"K",
	"Л"=>"L",
	"М"=>"M",
	"Н"=>"N",
	"О"=>"O",
	"П"=>"P",
	"Р"=>"R",
	"С"=>"S",
	"Т"=>"T",
	"У"=>"U",
	"Ф"=>"F",
	"Х"=>"X",
	"Ц"=>"C",
	"Ч"=>"Ch",
	"Ш"=>"Sh",
	"Щ"=>"Shh",
	"Ъ"=>"''",
	"Ы"=>"Y'",
	"Ь"=>"'",
	"Э"=>"E'",
	"Ю"=>"Yu",
	"Я"=>"Ya"
	];
	echo "str: $str <br>";
	$latinArr = [];
	$str = convert_cyr_string($str,'i', 'k');
	echo "str после конвертации: $str <br>";
	$rusArr = str_split($str);
	echo "rusArr: $rusArr <br>";
	echo "rusArr[0]: $rusArr[0] <br>";
	foreach($rusArr as $value) {
		echo "value: $value <br>";
		echo "letters[value]: $letters[$value] <br>";
		if (array_key_exists($value, $letters)) {
			$latinArr[] = $letters[$value];
			echo "if";
		} else {
			$latinArr[] = $value;
			echo "else";
		}
	}
	echo $latinArr;
	$translited = implode($latinArr);
	echo "$translited";
	return $translited;
} 

echo translit("п");

?>