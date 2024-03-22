<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Check if number is even or odd </h1>
    <form  action="" method="POST">
        Enter a number: <input type="number" name="numb" required><br>
        <input type="submit" value="Submit"><br>
    </form>

    <?php
        // Checking if the form has been submitted
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num = $_POST['numb'];
            // Checking if the input is empty
            if(empty($num)){
                echo "Please enter a valid number!";
            }else {
                // Checking if the number is even
                if($num % 2 === 0){
                    echo "The number entered is even";
                }
                else{
                    echo "The number entered is odd";
                }
            }
        }
    ?>
</body>
</html>