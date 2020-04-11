<!DOCTYPE html>

<html>
    <head>
        <title>
            Hello PHP
        </title>
    </head>
    <body>
        <?php $i = 1; $var = "&"; ?>
        <table width=100 border=1>
        <?php for($i = 1; $i <= 50; $i++) { ?>
        <tr><td bgcolor="yellow"><?php echo "$var$i"; ?></td></tr>
        <?php $var = $var."&"; } ?>
        </table>
    </body>
</html>