<?php
    include_once 'header.php';
    ?>
<section class="gray"> 
<div id="content">
    <form method="POST" action="includes/saveOffer.php" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div>
            <input type="file" name="image">
        </div>
        <div>
            <textarea name="text" cols="40" rows="4" placeholder="bla bla"></textarea> <!-- TITLE, nu TEXT-->
        </div>
        <div>
            <input type="text" name="time"">
        </div>
        <div>
            <input type="text" name="price">
        </div>
        <div>
            <input type="submit" name="upload">
        </div>
    </form>
</div>
</section>
<?php
    include_once 'footer.php';
?>