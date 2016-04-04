#!/usr/bin/php
<?PHP

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

print_r($argv);
unset($argv[0]);
print_r($argv);
$var = implode(" ", $argv);
$var = ft_split($var);
foreach ($var as $value)
	print($value."\n");

?>