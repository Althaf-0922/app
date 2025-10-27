<?php

include 'libs/load.php';

$user = "testhash3";
$pass = "marstech";
$result = null;

if(isset($_GET['logout'])){
    Session::destroy();
    die("Session Destroyed, <a href='logintest.php'> Login Again </a>");
}

if(Session::get('is_loggedin')){
    $userdata = Session::get('session_user');
    print("Welcome Back, $user");
    $result = $userdata;

}else {
    print("No Session Found, trying to login now.");
    $result = User::login($user, $pass);
    print_r($result);


if ($result) {
    echo("Login sucessful, $user \n");
    Session::set('is_loggedin',true);
    Session::set('session_user', $result);
} else {
    echo("Login Failed! \n");

}
}

echo <<< EOL
<br><br><a href="logintest.php?logout">Logout </a>
EOL



?>