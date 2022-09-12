<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'T2110M company');

$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

$id = $_GET['id'];

$result = mysqli_query($link, "DELETE FROM student WHERE id = '$id'");
header("Location: crud.php");
