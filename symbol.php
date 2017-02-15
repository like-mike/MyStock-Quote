<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>MyStock Quote - Symbol</title>
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
<h1>Symbol::</h1>
<div style="height:300px;overflow:auto;">
<?php include('scripts/symbol_script.php'); ?>
</div>
<br/>
</div>
<div class="col2">
<br/>
<br/>
<br/>
<div id="column2">
<div id="column_div">
<h3 class="sidebar-title">Enter Stock Quote Symbol</h3>


<form action="symbol.php" method="get">
<label>
Search
<input type="text" name="keywords" value="<?php echo $name;?>" onkeyup="document.getElementById('t2').value = this.value">
</label>

<input type="submit" value="Search">
</form>
</body>


</div>
</div>
</div>
</div>
<?php include('template/template_footer.php'); ?></body>
</html>