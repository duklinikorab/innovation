<?php

function dbconnection(){
   global $dbcon ;
   $dbcon = mysqli_connect("localhost","root","","innovation_messages");
}

function addMessage($name, $email){
    global $dbcon;
    dbconnection();
    $query = "INSERT INTO user_messages(name,email) 
    VALUES ('$name','$email')";
    $result = mysqli_query($dbcon, $query);
    if($result){
        header("Location: index.php");
    }
}

?>