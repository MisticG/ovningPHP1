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

        //$timestoLoop = antal gånger loopen ska köras. Funktionen heter myCoolLoop()
        /*function myCoolLoop($timestoLoop) {
            //variabeln läggs in direkt i loopen
            for($number = 1; $number<=$timestoLoop; $number++) {
                echo $number . "<br>";
            };
        }
        //kör funktionen utanför funktionen och skriv in antal gånger
        myCoolLoop(20);*/

        $buu = "foobar";
        
    
    //echo $buu "<br>";
    //array med låtar
    $bestPlayList = array("MJ - Thriller", "Madonna - Rain", "Marshmallow - Happier", "Abba - Dancing Queen", "Abba - Mama Mia", "Ariana Grande - Nånting", "Barry White - Never gonna give you up", "20 seconds of summer - Youngblood", "Madonna - Playground", "Madonna - Cherish");

    //funktion för att ta ut det minsta värdet
    function minsta($valueOne, $valueTwo) {
        $smallestValue = min($valueOne, $valueTwo);
        return $smallestValue;
    };
    
    //funktion för vart arrayen ska börja och sluta och för att den ska köras även om värdet för stop är mer än längden på array.
    function myCoolLoop($start, $stop, $array) {

        //längd på array
        $lengthSongs = count($array) - 1;
        
        //$end får tillbaka returvärdet på funktionen. Dvs det minsta värdet.
        $end = minsta($stop, $lengthSongs);
        
        //$end används i loopen för att bestämma vilket index i arrayen som loopen ska stoppa på.
        for($i = $start; $i <= $end; $i++) {
            
            //skriver ut arrayen på sidan
            echo $array[$i] . "<br>";
        };
    }
    //myCoolLoop $startar på 0, $stoppar på 22 och skriver ut $bestPlayList. Antalet bestäms i $stop-variabeln.
    myCoolLoop(0, 22, $bestPlayList);
    ?>
    
</body>
</html>