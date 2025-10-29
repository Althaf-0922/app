<?php

        // $pass = isset($_GET['pass']) ? $_GET['pass'] : 'password123'; //ternary operator
        // echo(md5($pass));


// $str = <<<EOL
// password12355454444444
// gfggggghhjjhkkjjkk
// ddrrtrtrtrtrytyty
// EOL;

// echo("Data Length: ". strlen($str) . "\n");
// $md5 = md5($str);
// $md5len = strlen($md5);

// $b64 = base64_encode($str);
// $b64len = strlen($b64);

// echo("MD5: $md5 (Length: $md5len)\n"); //Security through obscurity
// echo("Base64: $b64 (Length: $b64len)\n"); //Security through obscurity

// $data = "hello";



// foreach (hash_algos() as $v) {

//         $r = hash($v, $data, false);

//         printf("%-12s %3d %s\n", $v, strlen($r), $r);

// }

// $time = microtime(true);

// $options = [
//     // Increase the bcrypt cost from 12 to 13.
//     'cost' => 10,
// ];
// echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
// echo "\ntook time". (microtime(true) - $time). " seconds\n";

// See the password_hash() example to see where this came from.
// See the password_hash() example to see where this came from.
$hash = '$2y$12$4Umg0rCJwMswRw/l.SwHvuQV01coP0eWmGzd61QH2RvAOMANUBGC.';

if (password_verify('123', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

?>
