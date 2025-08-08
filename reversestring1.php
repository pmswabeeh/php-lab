<!DOCTYPE html>
<html>
<head>
    <title>Reverse String</title>
</head>
<body>

<h2>Reverse a String</h2>

<!-- Form to get user input -->
<form method="post" action="">
    <label for="userString">Enter a string:</label>
    <input type="text" id="userString" name="userString" required>
    <input type="submit" value="Reverse">
</form>

<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input string and sanitize it
    $userInput = htmlspecialchars($_POST["userString"]);

    // Function to reverse the string
    function reverseString($str) {
        return strrev($str);
    }

    // Reverse the input and display it
    $reversed = reverseString($userInput);

    echo "<h3>Results:</h3>";
    echo "<p>Original String: $userInput</p>";
    echo "<p>Reversed String: $reversed</p>";
}
?>

</body>
</html>
