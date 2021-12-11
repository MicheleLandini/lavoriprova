<?php

session_start();
header('location:index.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'registra');

$name = $_POST['user'];
$email= $_POST['email'];
$pass= $_POST['password'];

$s = " select * from utenti where name ='$name'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo" Username Already Taken";
}else{
    $reg= "insert into utenti(name , email , password) values ('$name','$email','$pass')";
    mysqli_query($con, $reg);
    echo"REGISTRAZIONE ANDATA A BUON FINE";
}

?>