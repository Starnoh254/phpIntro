<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="biodata.php" method="POST">
        Name : <input type="text" name="name"><br><br>
        Age : <input type="number" name="age"><br><br>
        Gender:  
        <select name="gender"> 
            <option value="Male">Male</option>  
            <option value="Female">Female</option>   
        </select><br><br>

        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST[ 'name' ];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        
        echo "<h2>Your Biodata</h2>";
        echo "Name : ". $name ."<br>";
        echo "Age : ". $age ." years old<br>";
        echo "Gender : ". $gender;
    }
    ?>
</body>
</html>