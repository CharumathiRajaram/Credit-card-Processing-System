<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "creditcard") or die("Connection Error: " . mysqli_error($conn));
$_SESSION["email"] =$_POST['email'];
if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from customer_details WHERE email='" . $_SESSION["email"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["confirmpassword"] == $_POST["newpassword"]) {
        mysqli_query($conn, "UPDATE customer_details set password='" . $_POST["newpassword"] . "' WHERE email='" . $_SESSION["email"] . "'");
       echo "<script>alert('password changed successfully')</script>";
    } else
    echo"<script>alert('enter valid password')</script>";}
?>