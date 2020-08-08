<?php
    include_once 'header.php';
    include 'includes/dbh.inc.php';
    $sql = 'SELECT * FROM offers;';
    $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    
?>
<section class="account-settings"> 

<a href="uploadOffer.php">Upload another offer</a>
</section>
<?php
    include_once 'footer.php';
?>
        <a class="gotopbtn" href="#"> <i class="fa fa-arrow-up" aria-hidden="true"></i> </a>
    </body>
</html>
