<?php 

session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
        if(isset($user_name)){ 
            $user_name = $_POST['user_name'];
            $_SESSION['user_name'] = $user_name;
        }
		$pass = $_POST['password'];

		if(!empty($user_name) && !empty($pass) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['pass'] === $pass)
					{
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

	<style type="text/css">
	
	#text{
        font-family: "Raleway", sans-serif !important;

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{
        font-family: "Raleway", sans-serif !important;

		padding: 10px;
        top: 20px;
		width: 100px;
		color: black;
		background-color: lightblue;
		border: none;
	}

	#box{
        font-family: "Raleway", sans-serif !important;

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>