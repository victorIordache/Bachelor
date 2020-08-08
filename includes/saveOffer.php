<?php

require_once 'dbh.inc.php';
$msg = "";

if(isset($_POST['upload'])){
    $target = "../images/".md5(uniqid(time())).basename($_FILES['image']['name']);
    $text=$_POST['text'];
    $time=$_POST['time'];
    $price=$_POST['price'];
    $sql = "INSERT INTO offers(title,image,time,price)VALUES('$text','$target','$time','$price')";
    mysqli_query($conn,$sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        header("Location: ../index.php?login=error");
    }else{
        $msg = "vai vai vai";
    }
}