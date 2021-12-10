<?php
require_once("../config/init.php");

if(isset($_POST['submit'])) {
	$email = trim($_POST['inputEmailAddress']);
	$password = trim($_POST['inputPassword']);

	// Method to check database user
	$user_found = User::verify_user($email);

	if($user_found) {

        if(password_verify($password, $user_found->password)) {
            $session->login($user_found);
            redirect("../views/admin/index.php");
        } else {
            redirect("../index.php");
        }

	} else {
		$the_message = "Hibás email cím vagy jelszó!";
	}

} else {
	// so we wont get the undeclared variables error on the screen (setting default values)
	$the_message = ""; 
	$email = "";
	$password = "";
}

?>