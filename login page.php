<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<h2>Login</h2>

<form method="post">
    <label>Username:</label>
    <input type="text" name="username" required><br><br>

    <label>Password:</label>
    <input type="password" name="password" required><br><br>

    <input type="submit" name="login" value="Login">
</form>

<?php
// Check if form is submitted
if (isset($_POST['login'])) {
    // DB credentials
    $host = "localhost";
    $user = "root";
    $pass = ""; // replace with your password
    $dbname = "login_system";

    // Connect to MySQL
    $conn = new mysqli($host, $user, $pass, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize input
    $username = $conn->real_escape_string($_POST['username']);
    $password = sha1($_POST['password']); // use SHA1 (for now)

    // Query
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        echo "<p style='color:green;'>Login successful. Welcome, $username!</p>";
        // Redirect or start session here
    } else {
        echo "<p style='color:red;'>Invalid username or password.</p>";
    }

    $conn->close();
}
?>

</body>
</html>
