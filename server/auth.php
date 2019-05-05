<?php
include("sql_manage.php");
include('sql_misc.php');
session_start();
if (isset($_SESSION['logged'] ) && $_SESSION['logged'] == $_POST['username']) {
	print "Already logged";
} elseif (isset($_POST['submit']) and $_POST['submit'] == 'Войти' and isset($_POST['password']) and isset($_POST['username'])) {
	if ($res = generic_read("users", "username" . " = " . wrap_single_quotes($_POST["username"]))) {
		if (hash("whirlpool", $_POST['password']) == $res['password']) {
            header('Location: ../src/index.html');
			print "zaebis";
			$_SESSION['logged'] = $_POST['username'];
		}
		else
		{
			print "bad user or password";
		}
	} else {
		print "bad user or password"; //todo one ,ore fucking todo
	}
}
