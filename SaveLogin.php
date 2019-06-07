<?php
session_start(); 
$_SESSION['error']="";
?>
<?php

    if(isset($_POST['submit'])){
     $user = $_POST['email'];
     $pass = $_POST['pwd'];
    if(isset($_POST["email"]) && isset($_POST["pwd"])){
    $file = fopen('Store.txt', 'r');
    $good=false;
    while(!feof($file)){
        $line = fgets($file);
        $array = explode(";",$line);
    if($_POST['email'] == trim($array[0]) &&  $_POST['pwd'] == trim($array[1]))
    {
            $good=true;
            break;
        }else {
            $_SESSION['auth']=$good;
            $_SESSION['error']="Credential not match";
        }
    }
    $_SESSION['auth']=$good;
    if($good){
        header("Location:Detail.php"); 
    }else{
        header("Location:Login.html");
    }
    }
}   
?>