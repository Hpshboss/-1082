<!DOCTYPE HTML>

<html>
    <head>
        <title>Order Check</title>
    </head>
    <body>
        <?php
            require 'loginData.php';
            $conn = new mysqli($hn, $un, $pw, $db);
            if ($conn->connect_error) die("Fatal Error");

            $query = "select account from account where account.key=";
            $query = $query."\"".$_POST['key']."\"";
            // echo $query;
            $result = $conn->query($query);

            if (!$result) die("Fatal Error");
            
            if ($result->num_rows > 0) {
                $rowData = $result->fetch_assoc()["account"];
                $queryOrder = "insert into ME2025.order (id, account, product, amount)"." values(".date("YmdHis").$rowData.",".$rowData.", \"".$_POST['book']."\", ".$_POST['amount'].")";
                // echo "<br>".$queryOrder;
                $resultOrder = $conn->query($queryOrder);

                if (!$resultOrder) die("<br>Fatal Error");
            }
            
            // $resultOrder->close();
            // $result->close();
            $conn->close();
        ?>
        <form style="text-align: center;" action="bookShop.php" method="post">
            <h3>Success Order</h3>
            <input type="hidden" name="key" value="<?php echo $_POST['key'] ?>">
            <input type="submit" name="" value="Go Back Cart">
        </form>
    </body>
</html>