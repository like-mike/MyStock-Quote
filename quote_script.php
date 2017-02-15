<?php
    include('web-admin/dbase_credentials.php');
    $name = "";
    error_reporting(E_ALL ^ E_DEPRECATED);
    if(isset($_GET['symbol'])){
        $name = $_GET['symbol'];
        
        $con = mysqli_connect($hostName,$userName,$userPass);
        if (!$con){
            die("Cannot connect : " . mysql_error());
        }
        mysqli_select_db($con,$dbaseName);
        $sql = "SELECT * FROM symbols LEFT OUTER JOIN quotes ON quotes.qSymbol = symbols.symSymbol WHERE qSymbol = '$name' ORDER BY qQuoteDateTime DESC LIMIT 1";
        $myData = mysqli_query($con,$sql);
        echo "<table border = 0>";
        
        while ($record = mysqli_fetch_array($myData)){
            echo "<tr>";
            echo "<td>Symbol: " . $record['symSymbol'] . "</td>";
            echo "<td>" . $record['qQuoteDateTime'] . "</td>";
            echo "<h3>" . $record['symName'] . "</h3>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Last:</th>";
            echo "<td>" . $record['qLastSalePrice'] . "</td>";
            echo "<th>Prev Close:</th>";
            echo "<td>" . $record['qPreviousClosePrice'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Change:</th>";
            echo "<td>" . $record['qNetChangePrice'] . "</td>";
            echo "<th>Bid:</th>";
            echo "<td>" . $record['qBidPrice'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>%Change:</th>";
            echo "<td>" . $record['qNetChangePct'] . "%</td>";
            echo "<th>Ask:</th>";
            echo "<td>" . $record['qAskPrice'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>High:</th>";
            echo "<td>" . $record['qTodaysHigh'] . "</td>";
            echo "<th>52 Week High:</th>";
            echo "<td>" . $record['q52WeekHigh'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Low:</th>";
            echo "<td>" . $record['qTodaysLow'] . "</td>";
            echo "<th>52 Week Low:</th>";
            echo "<td>" . $record['q52WeekLow'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Daily Volume:</th>";
            echo "<td>" . number_format($record['qShareVolumeQty']) . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>PE Ratio:</th>";
            echo "<td>" . $record['qCurrentPERatio'] . "</td>";
            echo "<th>Market Cap.:</th>";
            echo "<td>" . $record['symMarketCap'] . " Mil</td>";
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Earnings/share:</th>";
            echo "<td>" . $record['qEarningsPerShare'] . "</td>";
            echo "<th>#Shrs Out.:</th>";
            echo "<td>" . number_format($record['qTotalOutstandingSharesQty']) . "</td>";
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Div/Share:</th>";
            echo "<td>" . $record['qCashDividendAmount'] . "</td>";
            echo "<th>Div. Yield:</th>";
            echo "<td>" . $record['qCurrentYieldPct'] . "%</td>";
            echo "</tr>";
        }
        echo "</table>";
        $myData->free();
        mysqli_close($con);
    }
    
    ?>