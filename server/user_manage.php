<?php
include("auth.php");
function add_user($username, $password, $isAdmin, $phone, $email, $address, $birthday)
{
	$con = connect_sql();
	$basic_query = "INSERT INTO users(username, password, isAdmin, phone, email, address, birthday) values (;";
	mysqli_multi_query();
}