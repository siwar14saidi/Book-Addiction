<?php
session_start();

require_once "../models/user.php";

if (isset($_GET['event']) && !empty($_GET['event'])) {
    $event = $_GET['event'];

    if ($event == 'register') {
        # code Register
        $user = new User();
        $user->firstname = $_POST['firstname'];
        $user->lastname = $_POST['lastname'];
        $user->email = $_POST['email'];
        $user->password = md5($_POST['password']);
        $user->isAdmin = 0;
        $user->register();
    } else if ($event == 'login') {
        $user = new User();
        $user->email = strtolower($_POST['email']);
        $user->password = md5($_POST['password']);
        $user->login();
    } else if ($event == 'add_admin') {
        $user = new User();
        $user->email = isset($_POST["email"]) ? $_POST["email"] : "admin@admin.com";
        $user->password = isset($_POST["password"]) ? md5($_POST["password"]) : md5("secret");
        $user->name = isset($_POST["firstname"]) ? $_POST["firstname"] :  "Super";
        $user->name = isset($_POST["lastname"]) ? $_POST["lastname"] :  "Admin";
        $user->isAdmin = 1;
        $user->register();
    } else if ($event == 'logout') {
        session_start();

        session_unset();

        session_destroy();

        header('location:../views/index.html?logout=true');
  
    }
    else{
        echo "You are not allowed !";
    }
}
else{
    echo "You are not allowed !";
}
?>