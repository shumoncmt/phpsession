<?php
// $username = "jimmy";
// $password = "123456";


// $username = "janedoe";
// $password = "password456";

$username= "admin";
$password = "admin123";

$userData = file_get_contents("users.json");
$users = json_decode($userData, true);

foreach($users as $u=>$p){
    if($u==$username && $p==$password){
        echo "Login Successful";
        exit;
    }
}
echo "Login Failed";