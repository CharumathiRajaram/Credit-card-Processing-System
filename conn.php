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
	
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $cardholder=$_POST['cardholder'];
    $cardnumber=$_POST['cardnumber'];
    $expdate=$_POST['expdate'];
    $cvv=$_POST['cvv'];
    $creditamount=$_POST['creditamount'];

    $sql_query="INSERT INTO customer_details(username,password,email,phone,cardholder,cardnumber,expdate,cvv,creditamount)VALUES ('$username','$password','$email','$phone','$cardholder','$cardnumber','$expdate','$cvv','$creditamount')";
    if (mysqli_query($conn,$sql_query)) 
    {
     
      header("location:security.html");

    }else
    {
    	echo "Errror:";
    }
    mysqli_close($conn); 
}
?>
