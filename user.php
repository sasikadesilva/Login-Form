<?php include('connection.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="POST" action="">
	<input type="text" id="user_name" />
    <input type="password" id="password" />
    <input type="submit" id="check" />
</form>
	<?php
	
	if(isset($_POST['check'])){
		$user_name = $_POST['user_name'];
		$user_password = $_POST['password'];
		
		
	}
	
	
	 class user{
			public	$user_name;
			public  $password;
			
		public function confirm(){
			$connection = mysqli_connect('localhost','root','','user_account');
			$select = "SELECT * FROM user";
			$select_query = mysqli_query($connection,$select);
			$user_name = array();
			$password = array();
			foreach($select_query as $key => $value){
				 
				 array_push( $user_name,$value['u_name']);
				 array_push( $password,$value['u_password']);
				 
				
			}
			$final = array($user_name,$password);
			return $final;
		}
		
	  
			
			
		}
		
		$check = new user();
		$new_array = array($check->confirm());
		//$check->user_name = $user_name;
		//$check->password = $user_password;
		//var_dump($new_array);
		
		
		
		
		
		
		
		
		
		
	?>
</body>
</html>