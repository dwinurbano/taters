<?php
session_start();


include("connection.php");
include("function.php");



if($_SERVER['REQUEST_METHOD'] == "POST")
{
   $user_name =  $_POST['user_name'];
   $last_name =  $_POST['last_name'];
   $first_name =  $_POST['first_name'];
   $house_name =  $_POST['house_name'];
   $brgy_name =  $_POST['brgy_name'];
   $municipality_name =  $_POST['municipality_name'];
   $mobile_num =  $_POST['mobile_num'];
   $age_num =  $_POST['age_num'];
   $gender =  $_POST['gender'];
   $email_add =  $_POST['email_add'];
   




   if (!empty($user_name) && !empty($last_name)){


    $_SESSION['email_add'] = $email_add;
    //Save to database

   $query = "insert into users (user_name,last_name,first_name,house_name,brgy_name,municipality_name,mobile_num,age_num,gender,email_add) 
   values('$user_name','$last_name','$first_name','$house_name','$brgy_name','$municipality_name','$mobile_num','$age_num','$gender','$email_add')";

   mysqli_query($con, $query);


   header("Location: sendemail.php");
  // die;
   }

   else{
    echo "Something wrong!";
   }

   

}



?>

<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="main.css">
        <title> Sign Up </title>
</head>
<body>
    <h1>SIGN UP</h1>


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
		width: 500px;
		padding: 20px;
	}

	</style>












<div id= "box">
    <form method = "post">
        Username: 
        <input type = "text" name = "user_name"><br><br>
        Last Name:
        <input type = "text" name = "last_name"><br><br>
        First Name:
        <input type = "text" name = "first_name"><br><br>
        House No., Street, Building, Village:
        <input type = "text" name = "house_name"><br><br>
        Baranggay:
        <input type = "text" name = "brgy_name"><br><br>
        Municipality:
        <input type = "text" name = "municipality_name"><br><br>
        Mobile Number:
        <input type = "text" name = "mobile_num"><br><br>
        Age:
        <input type = "text" name = "age_num"><br><br>
        Gender:
        <input type = "text" name = "gender"><br><br>
        Email Address:  
        <input type = "text" name = "email_add"> </input>     
        <?php 
        if(isset($email_add)){ $email_add = $_POST['email_add'];
            $_SESSION['varname'] = $var_value;
        }
         ?>
        
        <br><br>  

        <input id = "button" type = "submit" value = "SIGNUP"><br><br>
        

    </form>


</div>



 



</body>
</html>