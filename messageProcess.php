<?php

require "connection.php";

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

if (empty($message)) {
    echo "Please enter the message";
} else {

    // Database::iud("insert into messages (client_name,client_email,message) values ('" . $name . "','" . $email . "','" . $message . "')");
    echo "Success";
}
