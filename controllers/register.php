<?php
require_once("../config/init.php");

$user = new User();

if(isset($_POST['submit'])) {

    if($user) {

        // check if email exists already
        $email_already_exists = false;

        $existing_users = User::find_all();

        foreach($existing_users as $existing_user) {
            if($existing_user->email === $_POST['inputEmailAddress']) {
                $email_already_exists = true;
            }
        }

        // check password confirm
        $password_confirmed = false;

        if($_POST['inputPassword'] === $_POST['inputConfirmPassword']) {
            $password_confirmed = true;
        }

        // ready to register?
        if($email_already_exists) {
            $session->set_flash_message("email", "Ezzel az email címmel már korábban regisztráltak!");
            redirect("../register.php");
        } elseif ($password_confirmed !== true) {
            $session->set_flash_message("password", "A két jelszó nem egyezik!");
            redirect("../register.php");
        } else {

            $user->email = $_POST['inputEmailAddress'];
            $user->first_name = $_POST['inputFirstName'];
            $user->last_name = $_POST['inputLastName'];

            $password = $_POST['inputPassword'];
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $user->password = $hashed_password;

            $user->save(); // save to db
            $session->login($user);
            redirect("../views/admin/index.php");

        }

    }

}

?>