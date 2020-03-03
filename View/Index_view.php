<?php
include "Registration_form.html";
//  Controller: assigns user data to $user array
include "/Users/ruslanagaev/Desktop/PHP_STORM/Portfolio/Controller/Registration_form_controller.php";
//  Model: sends user data to DB.
include "/Users/ruslanagaev/Desktop/PHP_STORM/Portfolio/Model/Registration_form_model.php";
insert_into_db($user); // Function from model
