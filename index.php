<!DOCTYPE html>
<html>
<head>
  <style>
 body{ font-size: 12px; font-family: Arial; }
 </style>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>

<?php

if ($_GET['ajax']){

echo "<div id='window-width'>{$_GET['w']}</div>";
echo "<div id='window-height'>{$_GET['h']}</div>";
echo "<div id='screen-width'>{$_GET['sw']}</div>";
echo "<div id='screen-height'>{$_GET['sh']}</div>";


} else {
$ua = $_SERVER['HTTP_USER_AGENT'];
// var_dump(get_browser($ua));
?>
  
<span id="screen-size"></span>

<br><center>
<img id="gr" src="http://ajaxload.info/cache/FF/FF/FF/00/00/00/5-0.gif">
</center>

	<script>

$(document).ready(function() {

  $("#gr").attr("src", "graph/?ajax=1&w="+$(window).width() +
										  "&h="+$(window).height() +
										  "&sw="+screen.width +
										  "&sh="+screen.height);
  $("#gr").fadeIn(1500); 
	});


</script>

<?php } ?>

</body>
</html>
