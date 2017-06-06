<!doctype html public "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF_8" /> <!--UTF_8下划线、下划线、下划线、下划线、下划线-->
	<title>图片验证码</title>
	</head>
	<body background="../image/1.jpg" style="font-size:16px;color:#000099; font-family:'微软雅黑';">
		<table width="166" border="1" align="center" bordercolor="#cccccc" bordercolorlight="#ffffff">
		  <tr><td width="156" height="139">
			<img src="image/1.jpg" hspace="4" border="0" usemap="#map"><br>
			<form action ="" method = "">
				验证码:<input name ="text" type ="text" size="8" >
				<?php
					switch($_GET['link']){			
						case "1":
				?>
						<img src="check_imgword.php">
				<?php
						break;
						case "2":
				?>
						<img src="check_imgnum.php">
				<?php
						break;
						default:
				?>
						<img src="check_imgnum.php">
				<?php
					}
				?>
			</form>
		

	</td></tr></table>
	
<map name="map"><area shape="rect" coords="14,47,54,67" href="index.php?link=1"><area shape="rect" coords="91,45,132,66" href="index.php?link=2"></map></body>
</html>
