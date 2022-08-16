

<!DOCTYPE html>
<html>


<head>
        <link rel="stylesheet" href="main.css">
        <title> Main page </title>
</head>
<body>
    
    <h1>
    <?php

    session_start();
    include("function.php");
    include("connection.php");


    $user_name = $_SESSION['user_name'];

    echo 'Welcome!' . $user_name." to my Test Page";

    session_abort();
    
    ?>
   
    </h1>
    <br>

    <p>

    This is the main page.   <br><br><br><br> <br>

    <?php

        include('connection.php');

        $result = mysqli_query($con,"SELECT * FROM users");

         while($row = mysqli_fetch_array($result))
      {
      echo $row['user_name'] ." - ". $row['last_name'] ." - ". $row['first_name'] ." - ". $row['house_name']." - ". $row['brgy_name'] . " - ".$row['municipality_name']
      ." - ".$row['mobile_num'] ." - ". $row['age_num']." - ".$row['gender'] ." - ". $row['email_add']."<br>"; 
      echo "<br />";
      }

     mysqli_close($con);
    ?>

    </p>

    <br>
    <br>

    <a href = "login.php"> Click here to Logout</a>


</body>
</html>



