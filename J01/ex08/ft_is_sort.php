#!/usr/bin/php
<?PHP

function ft_is_sort($p1)
{
	$i = 0;
	foreach ($p1 as $value) {
		if ($i > 1)
		{
			if ($value < $tmp)
				return (FALSE);
		}
		$tmp = $value;
		$i++;
	}
	return (TRUE);
}

?>