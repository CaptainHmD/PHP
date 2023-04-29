<?php

function createUser($user_name,$email,$password,$mysqli){
    
    //sql statement
    $sql = "INSERT INTO users (user_name,email,password) VALUES ('$user_name','$email','$password')";
    // $sql = "delete from users where user_name='test'";
    //do sql statement
   $result= $mysqli->query($sql);
   return $result;
}
?>