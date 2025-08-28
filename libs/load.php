<?php

function load_template($name){
    //print("including $name.php");
    include __DIR__."/../_templates/$name.php";
}

function validate_credentials($username, $password){
    
    if ($username == "althaf@gmail.com" && $password == "1234") {
        return true;
    } else {
        return false;
    }
    
    }

?>