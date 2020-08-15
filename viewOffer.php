<?php
include_once 'header.php';
include_once 'includes/dbh.inc.php';
$sql= "SELECT * FROM offers WHERE ID='{$_GET['id']}'";
$query= mysqli_query($conn, $sql)or die(mysqli_error($conn));
$row= mysqli_fetch_array($query);

?>
<section class="view-offer-section">
    <div class="view-offer">

            <div class="view-offer_image" style="background-image: url('<?php echo substr($row['image'],1, strlen($row['image'])) ?>'); background-size: cover;"> 
            </div>
            <div class="view-offer_text">
            <?php echo '<h1>'.$row['title'].', '.$row['country'].'</h1>'; ?>
            <?php echo '<p>'.$row['time'].', '.$row['price'].'&euro;</p>'; ?>
            <?php echo '<p>'.$row['description'].'</p>'; ?>
                <form action="index.php">
                <button class="contactSendButton">Back</button>
                </form>
            </div>
    </div>



</section>

<?php 
    include_once 'footer.php';
?>