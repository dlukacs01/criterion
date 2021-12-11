<?php

class User extends Db_object {

	protected static $db_table = "users";

	protected static $db_table_fields = array('email', 'password', 'first_name', 'last_name');

	public $id;
	public $email;
	public $password;
	public $first_name;
	public $last_name;

	public static function verify_user($email){
		global $database;

		$email = $database->escape_string($email);

		$sql = "SELECT * FROM  " . self::$db_table . " WHERE ";
		$sql .= "email = '{$email}' ";
		$sql .= "LIMIT 1";

		$the_result_array = self::find_by_query($sql);

		// returns the founded user as an object, or false...
		return !empty($the_result_array) ? array_shift($the_result_array) : false;
	}

}

?>