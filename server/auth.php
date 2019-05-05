<?php
include("sql_manage.php");
include('sql_misc.php');
print_r($_POST);
if (isset($_POST['submit']) and $_POST['submit'] == 'Войти' and isset($_POST['password']) and isset($_POST['username'])) {
	if ($res = generic_read("users", "username" . " = " . wrap_single_quotes($_POST["username"]))) {
		if (hash("whirlpool", $_POST['password']) == $res['password']) {
            header('Location: ../src/index.html');
		}
	} else {
		print "no such user or password"; //todo one ,ore fucking todo
	}
}
