<!DOCTYPE html>

<html>
    <head>
        <title>
            Hello PHP
        </title>
    </head>
    <body>
        <?php
            $var = "&";
            
            echo "<table width=100 border=1>";
            for($i = 1; $i <= 50; $i++)
            {
                echo "<tr><td bgcolor=\"yellow\">$var$i</td></tr>";
                $var = $var."&";
            }
            echo "</table>"
        ?>
    </body>
</html>