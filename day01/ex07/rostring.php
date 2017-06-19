#!/usr/bin/php -n
<?php
function ft_split($str)
{
	$str =trim($str);
	$tab = preg_split("/[\s,]+/", $str);
	return $tab;
}
if ($argc > 1)
{
	$tab = ft_split($argv[1]);
	$i = 1;
	while ($i < count($tab))
	{
		echo "$tab[$i]";
		echo " ";
		$i++;
	}
	echo "$tab[0]\n";
}
else if ($argc > 1)
	echo "$argv[1]\n";
?>