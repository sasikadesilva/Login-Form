<?php include('user.php'); ?>
<?php include('connection.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
	
		
			 
		
	foreach($new_array as $value){
		for($i = 0; $i < count($value[0]);$i++){
			
		if($check->user_name == $value[0][$i]){
			if($check->password == $value[1][$i]){
				echo "successfull";
			}
			else{
				echo "password is wrong";
				
			}
		}
		
		}
		
	}
	?>
</body>
</html>