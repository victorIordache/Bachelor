<?php
    include_once 'header.php';
    include 'includes/dbh.inc.php';
    $sql = 'SELECT * FROM users;';
    $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $row=mysqli_fetch_array($query);
    $cookie_name = "user";
    $cookie_value = $row['user_last'].' '.$row['user_first'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<section class="account-settings"> 
    <div class="settings-section">
        <?php echo "<h1>Hello, ".$cookie_value.'!</h1>';?>
        <h2>What action would you like to do ?</h2>
        <a href="uploadOffer.php">Upload another offer</a><br/>
        <a href="index.php#adventure">Delete an offer</a><br/>
        <a href="index.php#adventure">Edit an offer</a><br/>
</div>
</section>
<?php
    include_once 'footer.php';
?>
    </body>
</html>
