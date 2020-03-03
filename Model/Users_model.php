<?php
include "/Users/ruslanagaev/Desktop/PHP_STORM/Portfolio/Model/DB.php";

$connection = new DB;


class Users extends DB
    /**
     * This class is used to get user data from DB
     */
{
    public function get_user()
    {
        $connection = new DB;
        return $time_stmt_query = array(
            "all"       => $connection->get_connection()->query("SELECT * FROM " . $connection->db_name) ,
            "day"       => $connection->get_connection()->query("SELECT * FROM " . $connection->db_name . " WHERE Registration_time > NOW() - INTERVAL 1 DAY"),
            "hour"      => $connection->get_connection()->query("SELECT * FROM " . $connection->db_name . " WHERE Registration_time > NOW() - INTERVAL 1 HOUR"),
            "half-hour" => $connection->get_connection()->query("SELECT * FROM " . $connection->db_name . " WHERE Registration_time > NOW() - INTERVAL 30 MINUTE")
        );
    }
}
