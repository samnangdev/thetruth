<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert User</title>
</head>
<body>
    <h2>Insert User</h2>
    <form action="action.php" method="post">
        <label for="userid">User ID:</label>
        <input type="number" name="userid"><br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="username">Email:</label>
        <input type="text" name="email" required><br><br>
        <label for="username">Password:</label>
        <input type="text" name="password" required><br><br>


        <input type="submit" value="Insert">
    </form>
</body>
</html>
