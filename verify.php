<?php
$message="";
if(count($_POST)>0) {
    $conn = mysqli_connect("localhost","root","","creditcard");
    $result = mysqli_query($conn,"SELECT * FROM customer_details WHERE cardholder='" . $_POST["cardholder"] . "' and cardnumber = '". $_POST["cardnumber"]."' and expdate='".$_POST["expdate"]."'");
    $count  = mysqli_num_rows($result);
    if($count==0) {
      header("location:invalidcard.html");
    } else {
        echo"You are successfully authenticated!";
      header("location:checksecurity.html");
}
}
?>
