<?php

$err="";

if(isset($_POST['submit'])) {
    if(!empty($_POST['name'])) {
        $name=$_POST['name'];
    } else {
        $err .= "Molim Vas unesite Vase ime<br>";
    }
    if(!empty($_POST['email'])) {
        $email=$_POST['email'];
    } else {
        $err .= "Molim Vas unesite Vas email<br>";
    }
    if(!empty($_POST['message'])) {
        $message = $_POST['message'];
        
    } else {
        $err .= "Molim Vas unesite Vasu poruku<br>";
    }
    if($err=="") {
        echo "Vasa poruka je uspesno poslata";
    }
}
?>