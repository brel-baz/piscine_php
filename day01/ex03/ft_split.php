#!/usr/bin/php -n
<?php
function ft_split($str)
{
	$str =trim($str);
	$tab = preg_split("/[\s,]+/", $str);
	sort($tab);
	return $tab;
}