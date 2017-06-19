#!/usr/bin/php -n
<?php 
while (1)
{
	echo "Entrez un nombre : ";
	$input = trim(fgets(STDIN)); 
	if (feof(STDIN) == TRUE)
	{
		echo "^D\n";
		exit(1);
	}
	$tmp = substr($input, -1, 1);
	if (is_numeric($input))
		if ($tmp % 2 == 0)
			echo "Le chiffre $input est Pair \n";
		else
			echo "Le chiffre $input est Impair \n";
	else
		echo "'$input' n'est pas un chiffre \n";
}
?> 
