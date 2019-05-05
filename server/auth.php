<?php
include("sql_manage.php");
include('sql_misc.php');
print_r($_POST);
if ($_POST['submit'] == 'Войти') {
	if ($res = generic_read("users", "username" . " = " . $_POST["username"])) {
		print_r($res);
	}
	else
	{
		print "no such user or password";
	}
}