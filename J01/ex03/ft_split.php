#!/usr/bin/php
<?PHP

function ft_split($p1)
{
	$p2 = explode(" ", $p1);
	$i = 0;
	$p3 = array();
	foreach ($p2 as $value) {
		if ($value != NULL) {
			$p3[$i] 1= $value;
			$i++;
		}
	}
	sort($p3);
	return ($p3);
}
?>