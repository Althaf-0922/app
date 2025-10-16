<?php
        
        // session_start();
        // $cookie_name = "testscript";
        // $cookie_value = $_SERVER ['REQUEST_URI'];
        // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

        // // echo __LINE__;
        // // print_r("_SERVER");
        // // print_r($_SERVER);
        // // print_r("_GET");
        // // print_r($_GET);
        // // print_r("_POST");
        // // print_r($_POST);
        // // print_r("_FILES");
        // // print_r($_FILES);
        // // print_r("_COOKIE");
        // // print_r($_COOKIE);

        // print("_SESSION<br>");
        // print_r($_SESSION);

        // if (isset($_GET["clear"])) {
        //     session_unset();
        //     print("Session Cleared\n\n");
        // }

        // if(isset($_SESSION['a'])){
        //     print("Variable already exists.... Value: {$_SESSION['a']}\n\n");
        // } else{
        //     $_SESSION['a'] = time();
        //     print("Assigning new Variable... Value: {$_SESSION['a']}\n\n");
        // }

        // if (isset($_GET["destroy"])) {
        //     session_destroy();
        //     print("Session Destroyed\n\n");
        // }

    include "libs/load.php";


        print("_SESSION<br>");
        print_r($_SESSION);

    if (isset($_GET["clear"])) {
            Session::unset();
            print("Session Cleared\n\n");
        }

        if(Session::isset('a')){
            print("Variable already exists.... Value: ".Session::get('a')."\n\n");
        } else{
            Session::set('a', time());
            print("Assigning new Variable... Value: ".Session::get('a')."\n\n");
        }

        if (isset($_GET["destroy"])) {
            Session::destroy();
            print("Session Destroyed\n\n");
        }
    

?>