<?php
// include('./')

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

loginUser($email, $password);
}

function loginUser($email, $password){
    /*
    Finish this function to check if username and password 
    from file match that which is passed from the form
    */

    $userdata = "../storage/users.csv";

    $handle = fopen($userdata, "r");
    $handle = fgetcsv($userdata);

    fclose($handle);

        if($userdata !== ''){
            $_SESSION['email'] = $email[1] && $_SESSION['password'] = $password[2];
            header('Location: ../dashboard.php');
        }else
    header('Location: ../forms/register.html');

}
?>

