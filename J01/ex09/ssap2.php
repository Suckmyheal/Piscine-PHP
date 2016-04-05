#!/usr/bin/php
<?php

$str = implode(" ", $argv);
$str = explode(" ", $str);
unset($str[0]);
$alpha = array();
$isnum = array();
$special = array();
foreach ($str as $my_str) {
	if (ctype_alpha($my_str))
		$alpha[] = $my_str;
	else if (is_numeric($my_str))
		$isnum[] = $my_str;
	else
		$special[] = $my_str;
}
if ($alpha)
	natcasesort($alpha);
if ($isnum)
	sort($isnum, SORT_STRING);
if ($special)
	natcasesort($special);
foreach ($alpha as $value) {
	echo "$value\n";
}
foreach ($isnum as $value) {
	echo "$value\n";
}
foreach ($special as $value) {
	echo "$value\n";
}
?>
