<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'T2110M company');

    $link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);


if (isset($_POST['update'])) {
        $id = $_POST['id'];

        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile= $_POST['mobile'];

        $result = mysqli_query($link, "UPDATE student 
        SET name = '$name', email = '$email', mobile = '$mobile' WHERE id=$id");

        header("location: crud.php");
    }
?>

<?php
    $id = $_GET['id'];

    $result = mysqli_query($link, "SELECT * FROM student WHERE id = $id");

    while ($user_data = mysqli_fetch_array($result)) {
        $name = $user_data['name'];
        $email = $user_data['email'];
        $mobile = $user_data['mobile'];
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
</head>
<body>
<a href="crud.php"> Home</a>
<br><br>
<form action="edit.php" method="post" name="update_student">
    <table border="1px solid grey">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $name;?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $email;?>"></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="text" name="mobile" value="<?php echo $mobile;?>"></td>
        </tr>
        <tr>
            <td><input type="text" name="id" hidden value="<?php echo $_GET['id'];?>"></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>
