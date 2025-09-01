<?php

function load_template($name){
    //print("including $name.php");
    include __DIR__."/../_templates/$name.php";
}

// function validate_credentials($username, $password){
    
//     if ($username == "althaf@gmail.com" && $password == "1234") {
//         return true;
//     } else {
//         return false;
//     }
    
//     }


function signup ($Username, $Password, $email, $phone){

$servername = "localhost";
$username = "althaf-0131";
$password = "200326613204";
$dbname = "althaf_newdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn===false) {
  die("Connection failed: ");
}

else{
    echo "Connected successfully";
}

$sql = "INSERT INTO `auth` (`id`, `user_name`, `password`, `email`, `phone`, `blocked`, `active`) 
VALUES (NULL, '$Username', '$Password', '$email', '$phone', '0', '0')";

$result = false;

if ($conn->query($sql) === TRUE) {
  $result = true;

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  $result = false;
}

$conn->close();

return $result;

}

?>