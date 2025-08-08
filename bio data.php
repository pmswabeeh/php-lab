<!DOCTYPE html>
<html>
<head>
    <title>Biodata Form</title>
</head>
<body>
    <h2>Enter Your Biodata</h2>
    <form action="biodata.php" method="post">
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" required><br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br><br>

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="address">Address:</label><br>
        <textarea name="address" rows="4" cols="30" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
