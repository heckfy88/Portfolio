<?php

include "/Users/ruslanagaev/Desktop/PHP_STORM/Portfolio/Model/DB.php";

//  User data array is sent to MySQL

function insert_into_db($user)
{
    $connection = new DB;
    if ($user["Submit"] == "Confirm") {
        $sql = "INSERT INTO Dbase (Last_name, First_name, Email, Address, Country, State, Zip, Registration_time) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $connection->get_connection()->prepare($sql);
        $stmt->execute(
            [$user['last_name'], $user['first_name'],
                $user['email'], $user['address'],
                $user['country'], $user['state'],
                $user['zip'], date('Y-m-d H:i:s')]
        );
    }
}
