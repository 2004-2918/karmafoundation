<?php
session_start();
include('db.php');
date_default_timezone_set('Asia/Kolkata');
if(isset($_POST['amt']) && isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['cause'])){
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $cause=$_POST['cause'];
    $payment_status="pending";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($con,"insert into payment(name,amount,email,cause,payment_status,added_on) values('$name','$amt','$email','$cause','$payment_status','$added_on')");
    $_SESSION['OID']=mysqli_insert_id($con);
}


if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];
    mysqli_query($con,"update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
}
?>