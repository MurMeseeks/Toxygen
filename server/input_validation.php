<?PHP
function field_is_valid($field)
{
	if ($field && strlen($field) <= 30)
		return (true);
	return (false);
}

function input_is_valid($username, $password, $isAdmin, $phone, $email, $address, $birthday)
{
	if (field_is_valid($username) &&
		field_is_valid($password) &&
		field_is_valid($isAdmin) &&
		field_is_valid($phone) &&
		field_is_valid($email) &&
		field_is_valid($address) &&
		field_is_valid($birthday)) {
		return (hash('whirlpool', $password));
	}
	return (false);
}