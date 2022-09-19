<?php
//$dataHost='localhost';
//$dataName='student';
//$dataUserName='root';
//$dataPassword='';
//
//$mysql = mysqli_connect($dataHost,$dataUserName,$dataPassword,$dataName);

include_once ("config.php");

$result = mysqli_query($mysql,"SELECT * FROM Student order by id desc")
?>
<html>

<head>
    <title>Student management</title>
</head>

<body>
<a href="create.php">Add new student</a><br/><br/>
    <table width="90%" border="1">
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php
        while ($student_data = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$student_data['name']."</td>";
            echo "<td>".$student_data['mobile']."</td>";
            echo "<td>".$student_data['email']."</td>";
            echo "<td><a href='edit.php?id=$student_data[id]'>Edit</a> |
            <a href='delete.php?id=$student_data[id]' >Delete</a></td></tr>";
        }
        ?>
    </table>
</body>
</html>
