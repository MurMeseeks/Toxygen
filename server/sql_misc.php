<?php
function wrap_single_quotes_comma($str)
{
	return "'" . $str . "', ";
}

function wrap_single_quotes($str)
{
	return "'" . $str . "' ";
}
function wrap_comma_space($str)
{
	return $str . ", ";
}
function check_field($key_value, $table_name, $field_name, $field_value)
{
	$con = connect_sql();
	$query = "SELECT " . $key_value . " from " . $table_name . " where " . $field_name . " = " . "'" . $field_value . "'" . ";";
//	print "\nCHECK query = " . $query . "\n";
	$res = mysqli_query($con, $query);
	return mysqli_num_rows($res);
}
function generic_insert( $table_name, $values)
{

	$query = "INSERT INTO ".$table_name."(";
	$inserted_fields = "";
	$inserted_values = "";
	foreach ($values as $key=>$value)
	{
		$inserted_fields =$inserted_fields . wrap_comma_space($key);
		$inserted_values = $inserted_values . wrap_single_quotes_comma($value);
	}
	$inserted_fields = rtrim($inserted_fields, ", ");
	$inserted_values = rtrim($inserted_values, ", ");
	$query = $query . $inserted_fields . ") " . "values ( ".$inserted_values.");";
	print $query;

}
$val = array("weight"=>7, "product_name" => "huita");
generic_insert("products", $val);