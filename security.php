<?php
$servername="localhost";
$username="root";
$password="";
$database_name="creditcard";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if (!$conn)
{
	die("connection failed:"  . mysqli_connect_error());
	
}
if (isset($_POST['submit'])) 
{
	
    
    $email=$_POST['email'];
    $birth=$_POST['birth'];
    $grandpa=$_POST['grandpa'];
    $friend=$_POST['friend'];
    $food=$_POST['food'];
    $teacher=$_POST['teacher'];

    $sql_query="INSERT INTO securityans(email,birth,grandpa,friend,food,teacher)VALUES ('$email','$birth','$grandpa','$friend','$food','$teacher')";
     if (mysqli_query($conn,$sql_query)) 
    {
        
      header("location:Registersuccess.html");

    }else
    {
    	echo "Errror:";
    }
    mysqli_close($conn); 
}
?>
