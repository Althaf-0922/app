<?php

include 'libs/load.php';

$username = "testhash3";
$password = "marstech";

$test = User::login($username, $password);

if ($test) {
    echo("Login Successful\n");
} else {
    echo("Login Failed\n");
}

?>