<?php
if (isset($_POST['Submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

//    $dataHost='localhost';
//    $dataName='student';
//    $dataUserName='root';
//    $dataPassword='';
//
//    $mysql = mysqli_connect($dataHost,$dataUserName,$dataPassword,$dataName);

    include_once ("config.php");

    $result = mysqli_query($mysql,"INSERT INTO Student(name,email,mobile)
    values ('$name','$email','$mobile')");

    echo "User added successfully";
}
?>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
<a href="index.php">Go to home</a>
<form action="create.php" method="post" name="form">
    <table width="25%" border="0">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="text" name="mobile"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>
</body>
</html>
