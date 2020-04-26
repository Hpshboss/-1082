<?php
    if (isset($_POST['var'])) {
        if ($_POST['var'] == "") {
            require 'loginData.php';
            $conn = new mysqli($hn, $un, $pw, $db);
            
            if ($conn->connect_error) die("Fatal Error1");

            $query = "select * from ME2025.order";
            // echo $query;
            $result = $conn->query($query);
            echo "<table border=1>";
            if (!$result) die("Fatal Error2");
            for ($j = 0; $j < $result->num_rows; $j++) {
                echo "<tr>";
                $result->data_seek($j);
                echo "<td>";
                echo $result->fetch_assoc()['id'];
                echo "</td>";
                $result->data_seek($j);
                echo "<td>";
                echo $result->fetch_assoc()['account'];
                echo "</td>";
                $result->data_seek($j);
                echo "<td>";
                echo $result->fetch_assoc()['product'];
                echo "</td>";
                $result->data_seek($j);
                echo "<td>";
                echo $result->fetch_assoc()['amount'];
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
            $result->close();
            $conn->close();
        }
    }
?>