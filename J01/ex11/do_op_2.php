#!/usr/bin/php
<?php

if ($argc != 2)
	return ;

function ft_split_b($p1, $p0)
{
	$p2 = explode($p0, $p1);
	$i = 0;
	$p3 = array();
	foreach ($p2 as $value) {
		if ($value != NULL) {
			$p3[$i] = $value;
			$i++;
		}
	}
	return ($p3);
}

function ft_split($p1)
{
	$p2 = explode(" ", $p1);
	$i = 0;
	$p3 = array();
	foreach ($p2 as $value) {
		if ($value != NULL) {
			$p3[$i] = $value;
			$i++;
		}
	}
	return ($p3);
}

if ($argc != 2)
	return(print("Incorrect Parameters\n"));
if (strpos($argv[1], '+') != FALSE)
{
	$p1 = ft_split_b($argv[1], '+');
	print_r($p1);
	$p2 = ft_split(implode(" ", $p1));
	print_r($p2);
	if (is_numeric($p2[0]) != TRUE || is_numeric($p2[1]) != TRUE)
		return (print("Syntax Error"."\n"));
	else
		return (print($p2[0] + $p2[1])."\n");
}
else if (strpos($argv[1], '-') != FALSE)
{
	$p1 = ft_split_b($argv[1], '-');
	$p2 = ft_split(implode(" ", $p1));
	if (is_numeric($p2[0]) != TRUE || is_numeric($p2[1]) != TRUE)
		return (print("Syntax Error"."\n"));
	else
		return (print($p2[0] - $p2[1])."\n");
}
else if (strpos($argv[1], '*') != FALSE)
{
	$p1 = ft_split_b($argv[1], '*');
	$p2 = ft_split(implode(" ", $p1));
	if (is_numeric($p2[0]) != TRUE || is_numeric($p2[1]) != TRUE)
		return (print("Syntax Error"."\n"));
	else
		return (print($p2[0] * $p2[1])."\n");
}
else if (strpos($argv[1], '/') != FALSE)
{
	$p1 = ft_split_b($argv[1], '/');
	$p2 = ft_split(implode(" ", $p1));
	if (is_numeric($p2[0]) != TRUE || is_numeric($p2[1]) != TRUE)
		return (print("Syntax Error"."\n"));
	else
		return (print($p2[0] / $p2[1])."\n");
}
else if (strpos($argv[1], '%') != FALSE)
{
	$p1 = ft_split_b($argv[1], '%');
	$p2 = ft_split(implode(" ", $p1));
	if (is_numeric($p2[0]) != TRUE || is_numeric($p2[1]) != TRUE)
		return (print("Syntax Error"."\n"));
	else
		return (print($p2[0] % $p2[1])."\n");
}

?>