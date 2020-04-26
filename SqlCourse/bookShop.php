<!DOCTYPE HTML>

<html>
    <head>
        <title>Shop</title>
    </head>
    <body>
        <?php
            if (isset($_POST['key'])) {
                $rowKeyData = $_POST['key'];
            } else {
                require 'loginData.php';
                $conn = new mysqli($hn, $un, $pw, $db);
                if ($conn->connect_error) die("Fatal Error1");

                $query = "select account, password from account where account=";
                $query = $query.$_POST['account'];
                // echo $query;
                $result = $conn->query($query);

                if (!$result) die("Account only number");
                
                if ($result->num_rows > 0) {
                    $rowData = $result->fetch_assoc()['password'];
                    // echo $rowData;
                    if ($rowData == $_POST['password']) {
                        $queryKey = "select account.key from account where account=";
                        $queryKey = $queryKey.$_POST['account'];
                        // echo "<br>".$queryKey;
                        $resultKey = $conn->query($queryKey);

                        if (!$resultKey) die("Fatal Error3");
                        
                        if ($resultKey->num_rows > 0) {
                            $rowKeyData = $resultKey->fetch_assoc()['key'];
                            // echo "<br>key:".$rowKeyData;
                        }
                    } else {
                        header("Location: loginAgainPage.html");
                    }
                } else {
                    header("Location: loginAgainPage.html");
                }
                $result->close();
                $conn->close();
            }
        ?>
        <form style="text-align:center;" action="orderCheck.php" method="post">
            <h1>Cart</h1>
            <h3 style="color:#fff8f8;">Book</h3>
            <select name="book"  style="font-weight:bold;">
                <option value="factfulness">Factfulness</option>
                <option value="sapiens">Sapiens</option>
                <option value="refresh">Refresh</option>
                <option value="deepLearning">Deep Learning</option>
            </select>
            <br>
            <h3 style="color:#fff8f8;">Amount</h3>
            <input type="text" name="amount" placeholder="Amount">
            <input type="hidden" name="key" value="<?php echo $rowKeyData ?>">
            <input type="submit" name="" value="Buy">
        </form>
    </body>
</html>