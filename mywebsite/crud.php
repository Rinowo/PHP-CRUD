<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management</title>

    <?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'T2110M company');

    $link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

    $result = mysqli_query($link, "SELECT * FROM student ORDER BY id DESC");


    ?>
</head>
<body>
<a href="create.php">Add new student</a>
<br><br>
    <table width="90%" border="1px solid grey">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while ($student_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$student_data['name']."</td>";
                echo "<td>".$student_data['email']."</td>";
                echo "<td>".$student_data['mobile']."</td>";
                echo "<td> <a href='edit.php?id=$student_data[id]'>Edit</a> | 
                        <a href='delete.php?id=$student_data[id]'>Delete</a> </td></tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>