<?php

$mysql_host = getenv('MYSQL_HOST') ?: 'localhost';
$mysql_user = getenv('MYSQL_USER') ?: 'root';
$mysql_password = getenv('MYSQL_PASSWORD') ?: '';
$connection_string = "mysql:host={$mysql_host};dbname=moodle";
$db = new PDO($connection_string, $mysql_user, $mysql_password);

$stmt = $db->prepare("SELECT id FROM mdl_assignfeedback_witsoj WHERE id=1");
$stmt->execute();
$result = $stmt->fetchAll();
