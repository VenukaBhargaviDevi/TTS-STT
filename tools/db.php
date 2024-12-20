<?php
function getDatabaseConnection(){
    $servername="localhost";
    $username="root";
    $password="";
    $database="beststoredb";
    $connection = new mysqli($servername,$username,$password,$database);
    if($connection->connect_error){
        die("Error failed to connect MySQL: ".$connection->connect_error);

    }

    return $connection;

}
?>