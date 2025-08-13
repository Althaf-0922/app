<?php

function load_template($name){
    //print("including $name.php");
    include __DIR__."/../_templates/$name.php";
}

?>