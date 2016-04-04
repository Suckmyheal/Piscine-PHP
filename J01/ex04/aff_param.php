#!/usr/bin/php
<?PHP

$i = 0;

foreach ($argv as $value) {
	if ($i >= 1)
	{
		print($value."\n");
	}
	$i++;
}

?>