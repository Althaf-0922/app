<html>
    <head>
        <title>Base64 Encoding and Decoding in PHP</title>
    </head>
    <body>
        <?php

        $pass = isset($_GET['pass']) ? $_GET['pass'] : 'password123'; //ternary operator
        echo(md5($pass));
        ?>
    </body>
</html>