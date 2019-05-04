<?php
include("auth.php");
include("sql_manage.php");
function wrap_single_quotes_comma($str)
{
	return "'" . $str . "', ";
}

function wrap_single_quotes($str)
{
	return "'" . $str . "' ";
}

function check_field($key_value, $table_name, $field_name, $field_value)
{
	$con = connect_sql();
	$query = "SELECT " . $key_value . " from " . $table_name . " where " . $field_name . " = " . "'" . $field_value . "'" . ";";
	$res = mysqli_query($con, $query);
	print "\n-------------->";
	free($con);
	return mysqli_num_rows($res);
}

function add_user($username, $password, $isAdmin, $phone, $email, $address, $birthday)
{
	$con = connect_sql();
	$basic_query = "INSERT INTO users(username, password, isAdmin, phone, email, address, birthday) values ("
		. wrap_single_quotes_comma($username) . wrap_single_quotes_comma($password) . wrap_single_quotes_comma($isAdmin)
		. wrap_single_quotes_comma($phone) . wrap_single_quotes_comma($email) . wrap_single_quotes_comma($address) .
		"'" . $birthday . "');";
	if (!check_field("user_id", "users", "username", $username)) {
		mysqli_query($con, $basic_query);
	}
	check_field("user_id", "users", "username", $username);
}

add_user("user", "pass", "1", " + 1488", "pidor@sa . s", "nope", "228");