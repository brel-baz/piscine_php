<?php
$flag = 0;
if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] == 'OK')
{
	$newpw = hash('whirlpool', $_POST['newpw']);
	$oldpw = hash('whirlpool', $_POST['oldpw']);
	$db = unserialize(file_get_contents("../private/passwd"));
	$i = 0;
	foreach ($db as $ele)
	{
		if ($ele['login'] == $_POST['login']) 
		{
			if ($ele['passwd'] == $oldpw)
			{
				$db[$i]['passwd'] = $newpw;
				$flag = 1;
			}
		}
		$i++;
	}
	file_put_contents('../private/passwd', serialize($db));
	if ($flag == 1)
		echo "OK\n";
	else
		echo "ERROR\n";
}
else
	echo "ERROR\n";
?>
