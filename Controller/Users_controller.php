<?php
include "/Users/ruslanagaev/Desktop/PHP_STORM/Portfolio/Model/Users_model.php";

$user = new Users;
if (isset($_POST["submit"])) {
    switch ($_POST["submit"]) {
        case "All":
            $stmt = $user->get_user()['all'];
            break;
        case "Last Day":
            $stmt = $user->get_user()['day'];
            break;
        case "Last Hour":
            $stmt = $user->get_user()['hour'];
            break;
        case "Last 30 Minutes":
            $stmt = $user->get_user()['half-hour'];
            break;
    }
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        foreach (array_slice($row, 1) as $value) {
            echo "<td>" . $value;
        }
    }
}
