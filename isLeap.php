<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function isLeapYear($year){
            if ($year % 4 == 0){
                if ($year % 100 == 0){
                    if($year % 400 == 0){
                        return true;
                    }
                    else{
                        return false;
                    }
                }
                else{
                    return true;
                }
            }
            else {
                return  false;
            }
        }

        $year = 2018;
        echo 'Is '. $year .' a leap year?  <br>';
        if(isLeapYear($year)){
            echo "Yes";
        }
        else{
            echo "No";
        }
    ?>
</body>
</html>