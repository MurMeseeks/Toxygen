<?php
include("auth_sql.php");
include("sql_manage.php");
include("sql_misc.php");


function add_user($username, $password, $isAdmin, $phone, $email, $address, $birthday)
{
	$con = connect_sql();
	if (!(mysqli_real_escape_string($con, $username) ||
		mysqli_real_escape_string($con, $isAdmin) ||
		mysqli_real_escape_string($con, $phone) ||
		mysqli_real_escape_string($con, $email) ||
		mysqli_real_escape_string($con, $address) ||
		mysqli_real_escape_string($con, $birthday))) {
		return false; //todo hacked
	}
	print "\nok ok\n";
	$basic_query = "INSERT INTO users(username, password, isAdmin, phone, email, address, birthday) values ("
		. wrap_single_quotes_comma($username) . wrap_single_quotes_comma($password) . wrap_single_quotes_comma($isAdmin)
		. wrap_single_quotes_comma($phone) . wrap_single_quotes_comma($email) . wrap_single_quotes_comma($address) .
		"'" . $birthday . "');";
	if (!check_field("user_id", "users", "username", $username)) {
		print "\n" . $basic_query . "\n";

		mysqli_query($con, $basic_query);

		return true; //todo ok
	} else
		return false; //todo exists

}

function remove_user($username)
{
	if (check_field("user_id", "users", "username", $username)) {
		$user_id = mysqli_query(connect_sql(), "select user_id from users where username = " . wrap_single_quotes($username) . ";");
		$basic_query = "delete from users where user_id = " . wrap_single_quotes(mysqli_fetch_array($user_id)["user_id"]) . ";";
		$res = mysqli_query(connect_sql(), $basic_query);
		return boolval($res);
	} else
		return false;
}

function update_user($username, $values)
{
	if (!check_field("user_id", "users", "username", $username)) {
		return false;
	} else {
		print_r($values);
		print_r(array_keys($values));
		$query = "update users set ";
		foreach ($values as $key => $value) {
			$query = $query . $key . " = " . wrap_single_quotes_comma($value);
		}
		$query = rtrim($query, ", ");
		$query = $query . "WHERE username = " . wrap_single_quotes($username) . " ;";
		$res = mysqli_query(connect_sql(), $query);
		return $res;
	}
}

function read_user_props_by_id($user_id)
{
	$user_id = intval($user_id);
	if (!is_numeric($user_id))
		return false;
	$query = "SELECT * from users where user_id = " . wrap_single_quotes($user_id) . ";";
	$res = mysqli_query(connect_sql(), $query);
	$res = mysqli_fetch_array($res);
	return $res;
}

//
//print add_user("user", "pass", "1", " + 1488", "pidor@sa . s", "nope", "228") . "\n";
//print remove_user("user");
$array = array("phone" => "144447");
//print update_user("user", $array);
//print_r( read_user_props_by_id(5));