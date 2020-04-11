<!DOCTYPE html>

<html>
    <head>
        <title>
            Hello PHP
        </title>
    </head>
    <body>
        <?php
            $a = 15;
            $b = array("cat", "dog", "tiger", "lion", "elephant");
            echo "Hello World<br>"; //print out Hello World
            echo $a."<br>";
            echo $b[4]."<br><br>";

            $a1 = 2;
            $a2 = 3;
            echo "ans1=", $a1, " ans2=", $a2;
            echo "<br>";
            echo "ans1=$a1 ans2=$a2";
            echo "<br>";
            echo "ans3=", $a1 + $a2;
            echo "<br>";

            $printValue = print "use print to print out";
            echo "<br>";
            echo $printValue;
        ?>
    </body>
</html>