<div id="footer">
<p>All information displayed is non-realtime and is used for demonstration purposes only</p>
<?php
    $endtime = microtime();
    $endarray = explode(" ", $endtime);
    $endtime = $endarray[1] + $endarray[0];
    $totaltime = $endtime - $starttime;
    $totaltime = round($totaltime,5);
    echo "This page loaded in $totaltime seconds.";
    ?>
</div>
</div>