<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);
}

function registerUser($username, $email, $password){
    //save data into the file
    
    $userdata = "../storage/users.csv";
    $handle = fopen($userdata, "a");
    $no_rows = count(file($userdata));
    if($no_rows > 1){
        $no_rows = ($no_rows - 1) + 1;
    }
    fputcsv($handle, array($username, $email, $password));
    
    fclose($handle);

    // print_r(array($username , $email ,  $password));
    header('Location: ../dashboard.php');
}


