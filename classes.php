<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // php is object oriented
        class Car {
            // define the attributes / properties 
            public $make;
            public $model;
            public $year;

            // Constructor method 
            public function __construct($make , $model , $year){
                $this->make = $make ;
                $this->model = $model;
                $this->year = $year;
            }

            // Method 
            public function displayInfo(){
                echo "Make: " . $this->make . ", Model: " . $this->model . ", Year: " .  $this->year;
            }   
        }

        $car1 = new Car("Toyota" , "Corolla" , 2022);
        $car2 = new Car("Subaru" , "Impreza" , 2002);

        $car1 ->displayInfo();
        echo "<br>";
        $car2 ->displayInfo();
    ?>
</body>
</html>