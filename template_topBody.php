<?php
    $starttime = microtime();
    $startarray = explode(" ", $starttime);
    $starttime = $startarray[1] + $startarray[0];
    ?>
<div align="center">
<div id="spacer1"></div>
<div class="banner">
<br/>
<br/>
<h1>MyStock Quote</h1>
<p><?php include('web-admin/description.php'); ?></p>
<br/>
</div>
<div id="nav">
<div class="menu">
<?php include('web-admin/nav.txt'); ?>
</div>
<div class="date">
<?php include('scripts/date.php'); ?>
</div>
</div>
<div id="spacer2">
<p>Latest News :: <?php include('web-admin/latestnews.txt'); ?></p>
</div>
