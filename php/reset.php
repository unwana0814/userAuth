<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword = $_POST['password'];

    resetPassword($email, $password);
}

function resetPassword($email, $password){
    //open file and check if the username exist inside
    //if it does, replace the password

    $userdata = "../storage/users.csv";

    $handle = fopen($userdata, "r");
    $handle = fgetcsv($userdata);

    fclose($handle);

    if($password['password'] !== ''){

    }

}
echo "Password changed successfully";


