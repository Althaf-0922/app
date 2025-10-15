<?php
        
        session_start();
        $cookie_name = "testscript";
        $cookie_value = $_SERVER ['REQUEST_URI'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

        // echo __LINE__;
        // print_r("_SERVER");
        // print_r($_SERVER);
        // print_r("_GET");
        // print_r($_GET);
        // print_r("_POST");
        // print_r($_POST);
        // print_r("_FILES");
        // print_r($_FILES);
        // print_r("_COOKIE");
        // print_r($_COOKIE);

        print("_SESSION<br>");
        print_r($_SESSION);

        if(isset($_SESSION['a'])){
            print("Variable already exists.... Value: {$_SESSION['a']}\n\n");
        } else{
            $_SESSION['a'] = time();
            print("Assigning new Variable... Value: {$_SESSION['a']}\n\n");
        }
    
    

        

?>