#!/usr/bin/php -n
<?php
function ft_split($str)
{
	$str =trim($str);
	$tab = preg_split("/[\s]+/", $str);
	sort($tab);
	return $tab;
}

$i = 1;
$tmp = $argv[1];
while ($i < $argc)
{
	if ($i + 1 < $argc)
		$tmp = $tmp." ".$argv[$i + 1];
	$i++;
}
$tab = ft_split($tmp);
$i = 0;
while ($i < count($tab))
{
	echo "$tab[$i]\n";
	$i++;
}
?>