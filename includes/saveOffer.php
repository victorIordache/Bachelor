<?php

require_once 'dbh.inc.php';
$msg = "";

if(isset($_POST['upload'])){
    $target = "../images/".md5(uniqid(time())).basename($_FILES['image']['name']);
    $text=$_POST['text'];
    $country= $_POST['country'];
    $time=$_POST['time'];
    $price=$_POST['price'];
    $description = $_POST['description'];
    $sql = "INSERT INTO offers(title,country,image,time,price,description)VALUES('$text','$country','$target','$time','$price','$description')";
    mysqli_query($conn,$sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        header("Location: ../index.php?login=error");
    }else{
        $msg = "vai vai vai";
    }
}