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

unset($argv[0]);
if ($argc >= 2)
{
	$var = ft_split($argv[1]);
	array_push($var, $var[0]);
	unset($var[0]);
	print(implode(" ", $var)."\n");
}

?>