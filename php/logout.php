<?php
function logout(){

// Check if the existing user has a session
session_start();
include "../storage/users.csv";
// if it does
session_unset();
unset($_SESSION["email"]);
unset($_SESSION["password"]);

// destroy the session and redirect to login page
session_destroy();

}
header('Location: login.php');

// echo "HANDLE THIS PAGE";
