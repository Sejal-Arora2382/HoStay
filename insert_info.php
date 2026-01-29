<?php

error_reporting(E_ERROR | E_PARSE);

$name=$_POST["name"];
$type=$_POST["type"];
$phno=$_POST["phno"];
$email=$_POST["email"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$pin=$_POST["pin"];
$gen=$_POST["gen"];
$aadh=$_POST["aadh"];
$age=$_POST["age"];
$rand = 3;

$conn = new mysqli("localhost","root","sejal","hostay");

 if(isset($_POST['submit']))
 {
     if(!empty($_POST['name'])&& !empty($_POST['type'])&& !empty($_POST['phno'])&&!empty($_POST['email'])&&!empty($_POST['address'])&&!empty($_POST['city'])&&!empty($_POST['state'])&&!empty($_POST['pin'])&&!empty($_POST['gen'])&&!empty($_POST['aadh'])&&!empty($_POST['age']))
     {

              $sql1 = "insert into personal_info (name, contact, email, age, type, adhaar, gender, address, city, pin, state, user_id) values ('$name','$phno','$email','$age','$type','$aadh','$gen','$address','$city','$pin','$state', '$rand');";
              $conn -> query($sql1);

     }
     
     
 }

 ?>