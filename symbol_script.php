<?php
    include('web-admin/dbase_credentials.php');
    function mysqli_result($res, $row, $field=0) {
        $res->data_seek($row);
        $datarow = $res->fetch_array();
        return $datarow[$field];
    }
    $name = "";
    if(isset($_GET['keywords'])){
        $name = $_GET['keywords'];
        $con = mysqli_connect($hostName,$userName,$userPass);
        if (!$con){
            die("Cannot connect : " . mysql_error());
        }
        mysqli_select_db($con,$dbaseName);
        $sql = "SELECT symName, symSymbol FROM symbols WHERE symName LIKE '%{$name}%' OR symSymbol LIKE '%{$name}%' ORDER BY symName ASC";
        $myData = mysqli_query($con,$sql);
        
        echo "<table border = 0; width = 400>
        <th>Name</th>
        <th>Symbol</th>
        <th></th>
        </tr>";
        
        while ($record = mysqli_fetch_array($myData)){
            $re = $record['symSymbol'];
            echo "<tr>";
            echo "<td>" . $record['symName'] . "</td>";
            echo "<td>" . "<a href=quote.php?symbol=$re>$re</a>" . "</td>";
            echo "<td>" . "<a href=history.php?symbol=$re>History</a>" . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        
        $myData->free();
        mysqli_close($con);
    }
    
    ?>
