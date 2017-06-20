<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		$connection = mysqli_connect('localhost','root','','user_account');
		if($connection == true){
			//echo "success";
		}
		else{
			die (mysqli_error($connection));
		}
		
		//$insert_data = "INSERT INTO user(u_name,u_password) VALUES('sasika','123')";
		//$query = mysqli_query($connection,$insert_data);
		
		//if ($query == false){
			//die(mysqli_error($connection));
		//}
		
	?>
</body>
</html>