<!DOCTYPE html>
<html>
<head>
    <title>Bio Data Display</title>
</head>
<body>
    <h2>Bio Data of the Person</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name    = htmlspecialchars($_POST['name']);
        $age     = htmlspecialchars($_POST['age']);
        $gender  = htmlspecialchars($_POST['gender']);
        $email   = htmlspecialchars($_POST['email']);
        $phone   = htmlspecialchars($_POST['phone']);
        $address = htmlspecialchars($_POST['address']);

        echo "<strong>Name:</strong> $name <br>";
        echo "<strong>Age:</strong> $age <br>";
        echo "<strong>Gender:</strong> $gender <br>";
        echo "<strong>Email:</strong> $email <br>";
        echo "<strong>Phone:</strong> $phone <br>";
        echo "<strong>Address:</strong> $address <br>";
    } else {
        echo "No data submitted!";
    }
    ?>
</body>
</html>
