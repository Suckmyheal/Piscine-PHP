#!/usr/bin/php
<?php

function ft_split($p1)
{
	$p2 = explode(" ", $p1);
	$i = 0;
	foreach ($p2 as $value) {
		if ($value == NULL) {
			unset($p2[$i]);
		}
		$i++;
	}
	return ($p2);
}

unset($argv[0]);
$var = implode(" ", $argv);
$var = ft_split($var);
sort($var);
foreach ($var as $value)
	print($value."\n");

?>
