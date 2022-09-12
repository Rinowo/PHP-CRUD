<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Contact Us</h2>
    <form action="server-process.php" method="POST">
        <div>
            <label for="name">Name:</label>
            <input <?php ?> type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject">
        </div>
        <div>
            <label for="mess">Message:</label>
            <textarea name="mess" id="mess" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" value="submit">
        </div>
    </form>
</body>
</html>
