<?php

class Database 
{
    public static $conn = null;
    public static function getConnection()
    {
        if (Database::$conn == null) {
            $servername = "localhost";
            $username = "althaf-0131";
            $password = "200326613204";
            $dbname = "althaf_newdb";

            mysqli_report(MYSQLI_REPORT_OFF);

            // Create connection
            $connection = new mysqli($servername, $username, $password, $dbname);
            // Check connection

            if ($connection->connect_error) {
            echo("Connection failed: " . $connection->connect_error);
            }

            else{
                // echo "Connected successfully..... Assigning new connection";
                Database::$conn = $connection;
                return Database::$conn;
            }
        }
        else {
            echo "using existing connection";
            return Database::$conn;
        }
    }
}

?>