<?php

class User {
    private $conn;
    public static function signup ($Username, $Password, $email, $phone){

$conn = Database::getConnection();

$sql = "INSERT INTO `auth` (`id`, `user_name`, `password`, `email`, `phone`, `blocked`, `active`) 
VALUES (NULL, '$Username', '$Password', '$email', '$phone', '0', '0')";

$error = false;

if ($conn->query($sql) === TRUE) {
  $error = false;

} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
  $error = $conn->error;
}

$conn->close();

return $error;
}

public function login ($Username){
    $this->conn = Database::getConnection();
    $this->conn ->query();

}
}



?>
