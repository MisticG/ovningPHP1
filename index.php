<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 

        $greetings = "Hello World";
        echo("<h1>" . $greetings . "</h1>");

        echo ("<br>" . "<br>");

        
        for($x = 0; $x<=10; $x++) {
            echo "number is $x <br>";
        };

        echo "<br>";

        //lägger till 1 till varje $number med hjälp av for loop

        $number = 1;
        for($number = 1; $number<=10; $number++) {
            echo "number is $number <br>";
        };

        echo "<br>";

        $numbers = array(1,2,3,4,5,6,7,8,9,10);

        foreach ($numbers as $value) {
        echo "$value <br>";
        }

        

    
    ?>
    
</body>
</html>