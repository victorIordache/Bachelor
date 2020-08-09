<?php

include_once 'includes/dbh.inc.php';
$sql= "SELECT * FROM offers WHERE ID='{$_GET['id']}'";
$query= mysqli_query($conn, $sql)or die(mysqli_error($conn));
$row= mysqli_fetch_array($query);
    echo $row['title'];
    echo "Imagine: <img src=".$row['image']."><br/>";
    ?>
<a href="index.php">Back</a>
