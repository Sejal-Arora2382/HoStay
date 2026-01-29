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
$avail=$_POST["avail"];


$conn = new mysqli("localhost","root","sejal","hostay");


if(isset($_POST['submit']))
{
    if(!empty($_POST['name'])&& !empty($_POST['type'])&& !empty($_POST['phno'])&&!empty($_POST['email'])&&!empty($_POST['address'])&&!empty($_POST['city'])&&!empty($_POST['state'])&&!empty($_POST['pin'])&&!empty($_POST['avail']))
    {

             $sql1 = " insert into hdetails (name, contact, email, type, address, city, pin, state, availability) values ('$name', '$phno','$email','$type','$address','$city','$pin','$state','$avail');";

             $conn -> query($sql1);

    }
    
    
}