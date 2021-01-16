<!-- 
6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать. -->

<?php

// вложенное меню
$menuArr = [
	"About us",
	"Price",
	"Catalog",
	"Contacts",
	[
		"item-1",
		"item-2",
		"item-3",
		[
			"subitem-1",
			"subitem-2",
			"subitem-3",
			"subitem-4",
			[
				123,
				456,
				789
			],
			"subitem-5",
		],
		"item-4",
		"item-5"
	]
];

// одноуровневое меню
// $menuArr = [
// 	"About us",
// 	"Price",
// 	"Catalog",
// 	"Contacts"
// ];

function renderMenu($arr) {
	$menu = $menu . "<ul>";
	foreach ($arr as $val) {
		if (is_array($val)) {
			$menu = $menu . "<li>" . renderMenu($val) . "</li>";
			continue;
		}
		$menu = $menu . "<li>$val</li>";
	}
	$menu = $menu . "</ul>";
	return $menu;
}
?>

<?=renderMenu($menuArr) ?>

