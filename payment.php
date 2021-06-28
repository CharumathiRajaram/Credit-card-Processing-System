
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "creditcard";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['submit'])) 
{
$amount=$_POST['amount'];
$cvv=$_POST['cvv'];
$result = mysqli_query($conn,"SELECT * FROM customer_details WHERE cvv=$cvv");
if($result==TRUE){
  while($rows=$result->fetch_array()){
    $credit=$rows['creditamount'];
    if($amount>$credit){
      echo '<script> alert("It seems like fraud transaction")</script>';
    }else{
    $detuct=$credit - $amount;
  
  $sql = "UPDATE customer_details SET creditamount=$detuct WHERE cvv=$cvv";
   
  if ($conn->query($sql) === TRUE) {
    header("location:success.html");
    }
   else {
    echo "Error updating record: " . $conn->error;
  }
   }
  }
}else{
  echo '<script> alert("Invalid credentials") </script>';
}
 
 

$conn->close();

}


?>












 
