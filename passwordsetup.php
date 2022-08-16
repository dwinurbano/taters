<?php

include("connection.php");
include("function.php");



if(isset($_POST['update']))
{
    $email_add = $_POST['email_add'];
    $pass = $_POST['pass'];

   
   $sql = "UPDATE users SET pass='$pass' WHERE email_add='$email_add'";

   if (mysqli_query($con, $sql)) {
     echo "Record updated successfully";
   } else {
     echo "Error updating record: " . mysqli_error($con);
   }
   
   mysqli_close($con);

}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> Password Setup </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
		width: 150px;
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
    #back{
        color: white;
    }




	</style>


        <div id="box">

        <form action="passwordsetup.php" method="post">

            Email Address: <input type="text" name="email_add" ></input> 
            <br><br>

            Set Password:<input type="text" name="pass"><br><br>

            <input id="button" type="submit" name="update" value="Update Password">
            <a id="back" href = login.php>Click here to Login</a>


            

        </form>
        </div>



    </body>


</html>