<?php



include_once("includes/database.class.php");
include_once("includes/user.class.php");
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


// function signup ($Username, $Password, $email, $phone){
// $conn = Database::getConnection();

// $sql = "INSERT INTO `auth` (`id`, `user_name`, `password`, `email`, `phone`, `blocked`, `active`) 
// VALUES (NULL, '$Username', '$Password', '$email', '$phone', '0', '0')";

// $error = false;

// if ($conn->query($sql) === TRUE) {
//   $error = false;

// } else {
//   // echo "Error: " . $sql . "<br>" . $conn->error;
//   $error = $conn->error;
// }

// $conn->close();

// return $error;
// }

?>