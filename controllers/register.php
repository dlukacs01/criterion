<?php
require_once("../config/init.php");

$user = new User();

if(isset($_POST['submit'])) {

    if($user) {

        $user->email = $_POST['inputEmailAddress'];
        $user->first_name = $_POST['inputFirstName'];
        $user->last_name = $_POST['inputLastName'];

        $password = $_POST['inputPassword'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $user->password = $hashed_password;

        $user->save(); // save to db
        $session->message("The user {$user->email} has been added");
        $session->login($user);
        redirect("../views/admin/index.php");

    }

}

?>