<?php
date_default_timezone_set('PRC'); //设置中国时区
header("Content-type: text/html; charset=utf-8");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>




		<link rel="stylesheet" media="all" type="text/css" href="css/time1/jquery-ui.css" />
		<link rel="stylesheet" media="all" type="text/css" href="css/time1/jquery-ui-timepicker-addon.css" />
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/time1/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/time1/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="js/time1/jquery-ui-sliderAccess.js"></script>


<script type="text/javascript">
			
			$(function(){
				$('#basic_example_2').timepicker();
			});
			
		</script>
</head>

<body>
<!-- ============= example -->
					<div class="example-container">
						<p>Add only a timepicker:</p>
						<div>
					 		<input type="text" name="basic_example_2" id="basic_example_2" value="" />
						</div>					
<pre>
$('#basic_example_2').timepicker();
</pre>
					</div>
</body>
</html>



