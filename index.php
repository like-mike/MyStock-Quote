<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>MyStock Quote - Home</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="shortcut icon" href="web-images/favicon.ico" type="image/x-icon" />
<!--[if IE 5]>
<link href="/css/ie5.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]-->
<!--[if IE 6]>
<link href="/css/ie6.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]-->
<!--[if IE 7]>
<link href="/css/ie7.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]-->
</head>
<body>
<?php include('template/template_topBody.php'); ?>
<div id="container">
<div class="col1">
<h1>Home::</h1>
<h3>Welcome to MyStock Quote!</h3>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
</div>
<div class="col2">
<br/>
<br/>
<br/>
<div id="column2">
<div id="column_div">
<h3 class="sidebar-title">Enter Stock Quote Symbol</h3>

<span style="float:left;">
<form action="quote.php" method="get">
<input type="text" id="t1" name="symbol" value="" onkeyup="document.getElementById('t2').value = this.value">
<input type="submit" name="History" value="Quote">
</form>
</span>
<span style="float:left;">
<form action="history.php" method="get">
<input type="submit" name="History" value="History">
<input type="hidden" id="t2" name="symbol" value="">
</form>
</span>



</div>
</div>
</div>
</div>
<?php include('template/template_footer.php'); ?>
</body>
</html>