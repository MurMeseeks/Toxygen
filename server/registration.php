<?php

include_once("sql_misc.php");
session_start();
$query_str = "";

if (!isset($_POST))
	return (0);
$checker = 0;
$warning = "";

if (check_field("username", "users", "username", $_POST["username"]))
{
	print("User with this login exists!\n");
}
else if (check_field("email", "users", "email", $_POST["email"]))
{
	print("This email is occupied!\n");
}
else
{
	unset($_POST["passwordAnother"]);
	unset($_POST["submit"]);
	if (strlen($_POST["username"]) > 30)
	{
		$warning = $warning."Username too long\n ";
		$checker += 1;
	}
	if (strlen($_POST["phone"]) > 15)
	{
		$warning = $warning."Phone number is wrong format\n ";
		$checker += 1;
	}
	if (strlen($_POST["email"]) > 30)
	{
		$warning = $warning."Email is wrong format\n ";
		$checker += 1;
	}
	if (strlen($_POST["address"]) > 30)
	{
		$warning = $warning."Address is wrong format\n ";
		$checker += 1;
	}
	if (strlen($_POST["birthday"]) > 30)
	{
		$warning = $warning."Birthday is wrong format\n ";
		$checker += 1;
	}
	if ($checker)
	{
		print($warning);
		return;
	}
	$_POST["password"] = hash("whirlpool", $_POST["password"]);
	$_POST["isAdmin"] = 0;
    $_SESSION['logged'] = $_POST['username'];
    header("Location: ../src/index.php");
	print("result = '".generic_insert("users", $_POST)."';");

}

