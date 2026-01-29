<?php

error_reporting(E_ERROR | E_PARSE);

$date=$_POST["date"];
$amount=$_POST["amount"];
$bank_name=$_POST["bank_name"];
$acc_no=$_POST["acc_no"];
$ifsc=$_POST["ifsc"];
$cvv=$_POST["cvv"];
$upi=$_POST["upi"];
$card_no=$_POST["card_no"];

$conn = new mysqli("localhost","root","sejal","hostay");

if($upi!=null){
    $sql1 = "INSERT INTO payment(bank_name, date, amount, upi_id, acc_number, ifsc, cvv, card_no) VALUES(NULL, '$date', '$amount', '$upi', NULL, NULL, NULL, NULL );";
    $conn -> query($sql1);
}

if($bank_name!=null){
    $sql1 = "INSERT INTO payment(bank_name, date, amount, upi_id, acc_number, ifsc, cvv, card_no) VALUES('$bank_name', '$date', '$amount', NULL, '$acc_no', '$ifsc', NULL, NULL );";
    $conn -> query($sql1);
}

if($cvv!=null){
    $sql1 = "INSERT INTO payment(bank_name, date, amount, upi_id, acc_number, ifsc, cvv, card_no) VALUES(NULL, '$date', '$amount', NULL, NULL, NULL,'$cvv','$card_no' );";
    $conn -> query($sql1);
}


// $sql1 = "INSERT INTO payment(bank_name, date, amount, upi_id, acc_number, ifsc, cvv, card_no) VALUES('$bank_name', '$date', '$amount', '$upi', '$acc_no', '$ifsc', '$cvv', '$card_no' );";

// if($conn -> query($sql1) == TRUE){
//     echo "<script LANGUAGE='JAVASCRIPT'>
//     window.alert('not successful');
//     window.location.href='http://127.0.0.1:5500/login.html;
//     </script>";
// }
// else{
//     echo "<script LANGUAGE='JAVASCRIPT'>
//     window.alert('successful!!');
//     window.location.href='http://127.0.0.1:5500/login.html;
//     </script>";
// }

$conn -> close();