<?php

$username=$_POST["username"];
$password=$_POST["password"];

$conn = new mysqli("localhost","root","sejal","hostay");

$sql1 = "INSERT INTO user(username, password) VALUES('$username', '$password');";


if($conn -> query($sql1) == TRUE){
    echo "<script LANGUAGE='JAVASCRIPT'>
    window.alert('not successful');
    window.location.href='http://127.0.0.1:5500/login.html;
    </script>";
}
else{
    echo "<script LANGUAGE='JAVASCRIPT'>
    window.alert('successful!!');
    window.location.href='http://127.0.0.1:5500/login.html;
    </script>";
}

$conn -> close();

