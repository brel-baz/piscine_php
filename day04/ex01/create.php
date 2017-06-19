<?php
if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] == 'OK')
{
	$pwd = hash('whirlpool', $_POST['passwd']);
	$db = array('login'=>$_POST['login'], 'passwd'=>$pwd);
	$flag = 0;
	if (file_exists("../private") == false)
	{
		mkdir("../private");
		file_put_contents("../private/passwd", serialize(array($db)));
	}
	else if (file_exists("../private/passwd") == false)
	{
		file_put_contents("../private/passwd", serialize(array($db)));
	}
	else
	{
		$file_content = unserialize(file_get_contents("../private/passwd"));
		foreach ($file_content as $ele)
		{
			if ($ele['login'] == $_POST['login'])
			{
				$flag = 1;
				echo "ERROR\n";
				break;
			}
		}
		if ($flag == 0)
		{
			$file_content[] = $db;
			file_put_contents('../private/passwd', serialize($file_content));
		}
	}
	if ($flag == 0)
		echo "OK\n";
}
else
	echo "ERROR\n";
?>
