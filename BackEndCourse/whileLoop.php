<!DOCTYPE html>

<html>
    <head>
        <title>
            Hello PHP
        </title>
    </head>
    <body>
        <?php
            $i = 1;
            $var = "&";
            
            echo "<table width=100 border=1>";
            while($i <= 50)
            {
                echo "<tr><td bgcolor=\"yellow\">$var$i</td></tr>";
                $var = $var."&";
                $i = $i + 1;
            }
            echo "</table>"
        ?>
    </body>
</html>