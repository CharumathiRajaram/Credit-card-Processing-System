<?php
$message="";
if(count($_POST)>0) {
    $conn = mysqli_connect("localhost","root","","creditcard");
    $result = mysqli_query($conn,"SELECT * FROM securityans WHERE birth='" . $_POST["birth"] . "' and grandpa = '". $_POST["grandpa"]."' and friend = '". $_POST["friend"]."' and food = '". $_POST["food"]."' and teacher = '". $_POST["teacher"]."'");
    $count  = mysqli_num_rows($result);
    if($count==0) {
        echo '<script> alert("It seems like Fraud Transaction.so we terminate this ....transaction")</script>';
       
    } else {
        echo "You are successfully authenticated!";
        header("location:payment.html");
}
}
?>