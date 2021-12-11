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
            $session->set_flash_message("credentials_password", "Hibás jelszó!");
            redirect("../index.php");
        }

	} else {
        $session->set_flash_message("credentials_email", "Hibás email!");
        redirect("../index.php");
	}

}

?>