<?php
$message="";
if(count($_POST)>0) {
    $conn = mysqli_connect("localhost","root","","creditcard");
    $result = mysqli_query($conn,"SELECT * FROM customer_details WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
    $count  = mysqli_num_rows($result);
    if($count==0) {
      header("location:invalid.html");
    } else {
        echo"You are successfully authenticated!";
        header("location:verify.html");
}
}
?>