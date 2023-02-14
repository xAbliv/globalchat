<?php

$message = $_POST['message'];

$pdo = new PDO("mysql:host=localhost;dbname=chat", "username", "password");
