<?php
    include('web-admin/dbase_credentials.php');
    function mysqli_result($res, $row, $field=0) {
        $res->data_seek($row);
        $datarow = $res->fetch_array();
        return $datarow[$field];
    }
    $name = "";
    if(isset($_GET['symbol'])){
        $name = $_GET['symbol'];
        $con = mysqli_connect($hostName,$userName,$userPass);
        if (!$con){
            die("Cannot connect : " . mysql_error());
        }
        mysqli_select_db($con,$dbaseName);
        $sql = "SELECT * FROM symbols LEFT OUTER JOIN quotes ON quotes.qSymbol = symbols.symSymbol WHERE qSymbol = '$name' ORDER BY qQuoteDateTime DESC";
        $myData = mysqli_query($con,$sql);
        $frecord = mysqli_fetch_array($myData);
        echo "<h3>" . $frecord['symName'] . "</h3>";
        echo "<p>Symbol: " . $frecord['qSymbol'] . "</p>";
        echo "<table border = 0>
        <th>Date</th>
        <th>Last</th>
        <th>Change</th>
        <th>% Chg</th>
        <th>Volume</th>
        </tr>";
        
        while ($record = mysqli_fetch_array($myData)){
            echo "<tr>";
            echo "<td>" . $record['qQuoteDateTime'] . "</td>";
            echo "<td>" . $record['qLastSalePrice'] . "</td>";
            echo "<td>" . $record['qNetChangePrice'] . "</td>";
            echo "<td>" . $record['qNetChangePct'] . "</td>";
            echo "<td>" . number_format($record['qShareVolumeQty']) . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        
        $myData->free();
        mysqli_close($con);
    }
    
    ?>
