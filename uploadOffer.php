<?php
    include_once 'header.php';
    ?>
<section class="upload-offer-section"> 
<div class="upload-offer-content">
    <h1>Add places to travel</h1>
    <form method="POST" action="includes/saveOffer.php" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        
        <div>
            <input name="text" placeholder="Place"/> <!-- TITLE, nu TEXT-->
        </div>
        <div>
            <input type="text" name="country" placeholder="Country">
        </div>
        <div>
            <textarea name="description" cols="40" rows="4" placeholder="Description"></textarea>
        </div>
        <div>
            <input type="file" name="image" title="Choose a file" >
        </div>
        <div>
            <input type="text" name="time" placeholder="Time">
        </div>
        <div>
            <input type="text" name="price" placeholder="Price">
        </div>
        <div>
            <input type="submit" name="upload"  value="Submit">
        </div>
    </form>
</div>
</section>
<?php
    include_once 'footer.php';
?>