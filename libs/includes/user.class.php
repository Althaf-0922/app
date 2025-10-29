<?php

class User {
    private $conn;
    // private static $salt = "auths@lt#1236565";
    public static function signup ($Username, $Password, $email, $phone){


// $Password = md5(strrev(md5($Password)). User::$salt);  //Security through obscurity   

$options = [
    // Increase the bcrypt cost from 12 to 13.
    'cost' => 9,
];
$Password = password_hash($Password, PASSWORD_BCRYPT, $options);


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

   public static function login ($Username, $Password) {
    // $Password = md5(strrev(md5($Password)). User::$salt) ;
    $query = " SELECT * FROM `auth` WHERE `user_name` = '$Username'";
    $conn = Database::getConnection();
    $result = $conn->query($query);

    if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // print_r($row['password'] . "\n");
        // print($Password . "\n");
        if(password_verify($Password, $row['password'])) {
            return $row;
        } else {
            print("password does not match");
        }
    } else {
        return false;
    }

   }

public function __construct($Username){
    $this->conn = Database::getConnection();
    $this->conn ->query();

}

public static function authentication()
{

}
public static function getBio()
{

}
public static function setBio()
{
  
}
public static function getAvatar()
{
  
}
public static function setAvatar()
{
  
}

}



?>
