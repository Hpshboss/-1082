<!DOCTYPE html>

<html>
    <head>
        <title>
            Hello PHP
        </title>
    </head>
    <body>
        <?php
            $salary = rand(30000, 60000); // lower limit: 30000, upper limit: 60000
            $salaryLim = 45000;

            if ($salary < $salaryLim)
            {
                echo "Employed";
            }
            else
            {
                echo "Get Out";
            }
        ?>
    </body>
</html>