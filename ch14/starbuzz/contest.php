<?php
if ($_POST) {
	$beans = $_POST["beans"];
	$beantype = $_POST["beantype"];
	$bags = $_POST["bags"];
	$date = $_POST["date"];
	$extras = $_POST["extras[]"];
	$name = $_POST["name"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$zip = $_POST["zip"];
	$phone = $_POST["phone"];
	
?>

<!DOCTYPE html>
<html> 
<head> 
<meta name="robots" content="noindex,  nofollow">
<meta charset="utf-8">
<title>Head First HTML and CSS Chapter 14 Contest</title> 
<style type="text/css">
img {
	float: left;
	margin-right: 20px;
}
div {
	padding-top: 40px;
}
</style>
</head>
<body>

<p>
<img src="http://headfirstlabs.com/Images/hfguy.jpg" alt="Head First Guy">
</p>

<div>
<p>
	Starbuzz Bean Machine благодарит Вас, <strong><?php print($name);?></strong>, за Ваш заказ.
	Заказанные Вами <strong><?php print($bags);?></strong> пакетика <strong><?php print($beantype);?></strong> кофе <strong><?php print($beans);?></strong> будут отправлены по адреасу: <br>
	<strong><?php print($address);?></strong><br>
	<strong><?php print($city);?></strong><br>
	<strong><?php print($state);?></strong>
	<strong><?php print($zip);?></strong><br>
	<strong><?php print($phone);?></strong><br>
	и будут доставлены к <strong><?php print($date);?></strong><br>
</p>
</div>


</body> 
</html>


<?php

}

?>
