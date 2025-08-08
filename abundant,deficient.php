<!DOCTYPE html>
<html>
<head>
    <title>Number Type Checker</title>
</head>
<body>

<h2>Check if a Number is Perfect, Abundant, or Deficient</h2>

<form method="post">
    <label for="number">Enter a positive integer:</label>
    <input type="number" name="number" id="number" min="1" required>
    <input type="submit" value="Check">
</form>

<?php
if (isset($_POST['number'])) {
    $number = (int)$_POST['number'];
    $sum = 0;

    // Calculate sum of proper divisors
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }

    // Determine type
    echo "<h3>Result:</h3>";
    echo "<p>Number: $number</p>";
    echo "<p>Sum of proper divisors: $sum</p>";

    if ($sum == $number) {
        echo "<p><strong>$number is a Perfect number.</strong></p>";
    } elseif ($sum > $number) {
        echo "<p><strong>$number is an Abundant number.</strong></p>";
    } else {
        echo "<p><strong>$number is a Deficient number.</strong></p>";
    }
}
?>

</body>
</html>
