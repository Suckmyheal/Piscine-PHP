#!/usr/bin/php
<?php

if ($argc != 4)
	return(print("Incorrect Parameters\n"));
if (strpos($argv[2], '+') != FALSE || $argv[2][0] == '+')
	return (print($argv[1] + $argv[3])."\n");
if (strpos($argv[2], '-') != FALSE || $argv[2][0] == '-')
	return (print($argv[1] - $argv[3])."\n");
if (strpos($argv[2], '*') != FALSE || $argv[2][0] == '*')
	return (print($argv[1] * $argv[3])."\n");
if (strpos($argv[2], '/') != FALSE || $argv[2][0] == '/')
	return (print($argv[1] / $argv[3])."\n");
if (strpos($argv[2], '%') != FALSE || $argv[2][0] == '%')
	return (print($argv[1] % $argv[3])."\n");
?>