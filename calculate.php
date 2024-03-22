<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Two Numbers</title>
</head>
<body>
    <form method="post">
        <label for="num1">Enter the first number:</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Enter the second number:</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <input type="submit" value="Calculate Sum">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $sum = $num1 + $num2;
        echo "<p>The sum of $num1 and $num2 is: $sum</p>";
    }
    ?>
</body>
</html>
