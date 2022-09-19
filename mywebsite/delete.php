<?php
//$dataHost='localhost';
//$dataName='student';
//$dataUserName='root';
//$dataPassword='';
//
//$mysql = mysqli_connect($dataHost,$dataUserName,$dataPassword,$dataName);

include_once ("config.php");

$id = $_GET['id'];

$result = mysqli_query($mysql,"DELETE FROM student where id='$id'");
header("Location:index.php");
?>
