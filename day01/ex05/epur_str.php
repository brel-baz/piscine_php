#!/usr/bin/php -n
<?php
function ft_split($str)
{
	$str =trim($str);
	$tab = preg_split("/[\s]+/", $str);
	return $tab;
}
$tab = ft_split($argv[1]);
$i = 0;
while ($i < count($tab))
{
	echo "$tab[$i]";
	if ($i < count($tab) - 1)
		echo " ";
	$i++;
}
echo "\n";
?>