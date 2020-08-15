<?php
    include 'header.php';
    include 'includes/dbh.inc.php';
?>
<section class="search-page">
    
    <?php 
        if(isset($_POST['submit-search'])){
            $search = mysqli_real_escape_string($conn, $_POST['country']);
            $sql = "SELECT * FROM offers WHERE country LIKE '%$search%' OR title LIKE '%$search%'";
            $result = mysqli_query($conn,$sql);
            $queryResult = mysqli_num_rows($result);
            
            if($queryResult > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="offer-search">';
                    echo '<div class="offer-search_image" style="background-image: url('.substr($row['image'],3, strlen($row['image'])).'); background-size: cover;"></div>';
                    echo '<div class="offer-search_text">';
                    echo '<h1>'.$row['title'].', '.$row['country'].'</h1>
                            <p>'.$row['time'].', '.$row['price'].'</p>
                            <p>'.$row['description'].'</p>
                        </div>     
                    </div>';
                }
            }else {
                echo 'There are no results matching your search';
            }
        }
    ?>

</section>
<?php 
    include 'footer.php';
?>