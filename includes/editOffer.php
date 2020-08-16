<?php
session_start();
include 'dbh.inc.php';
if(!isset($_POST['submit'])){
    $sql = "SELECT * FROM offers WHERE id='{$_GET['id']}'";
    $result = mysqli_query($conn,$sql);
    $record = mysqli_fetch_array($result);
}else{
    $sql2 = "SELECT * FROM offers WHERE id='{$_POST['id']}'";
    $result2 = mysqli_query($conn,$sql2);
    $rec = mysqli_fetch_array($result2);
    $title = $_POST['title'];
    $country = $_POST['country'];
    $time = $_POST['time'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $target = "../images/".basename($_FILES['image']['name']);

    $sql1 = "UPDATE offers SET image='{$target}', title='{$title}', country='{$country}', time='{$time}', price='{$price}', description='{$description}' WHERE id='{$_POST['id']}'";
    mysqli_query($conn,$sql1)or die(mysqli_error($conn));
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    header("Location: ../index.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css">
        <title>EOKA</title>
        <script src="https://kit.fontawesome.com/98e4273cd0.js" crossorigin="anonymous"></script>
        <script src="js/signupModifier.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="js/file.js"></script>
    </head>
    <body id="body">
        <header>
            <nav>
                <div class="container">
                    <div>
                    <a class="navbar-brand" href="../index.php">EOKA Travels</a>
                    </div>
                    <div>
                        <ul>
                            <li <?php if(isset($_SESSION['u_id'])) echo 'style="padding: 5px 10px;"'; ?>>
                                <a href="../index.php" class="cool-link">Home</a>
                            </li>
                            <li <?php if(isset($_SESSION['u_id'])) echo 'style="padding: 5px 10px;"'; ?>>
                                <a href="../index.php#explore"  class="cool-link">Explore</a>
                            </li >
                            <li <?php if(isset($_SESSION['u_id'])) echo 'style="padding: 5px 10px;"'; ?>>
                                <a href="../index.php#adventure" class="cool-link">Adventure</a>
                            </li>
                            <li <?php if(isset($_SESSION['u_id'])) echo 'style="padding: 5px 10px;"'; ?>>
                                <a href="../index.php#reviews" class="cool-link">Reviews</a>
                            </li>
                            <li <?php if(isset($_SESSION['u_id'])) echo 'style="padding: 5px 10px;"'; ?>>
                                <a href="../index.php#contact" class="cool-link">Contact</a>
                            </li>
                            <?php
                                if(isset($_SESSION['u_id'])){
                                    echo '<li style="padding: 5px 10px;">
                                <a href="accountSettings.php"  class="cool-link">Settings</a>
                            </li>';
                                }
                            ?>
                        
                        <?php
                            if(isset($_SESSION['u_id'])){
                                echo '<form action="includes/logout.inc.php" method="POST">
                                            <button class="button cool-link" type="submit" name="submit">Logout</button>
                                       </form>';
                            }else {
                                echo '<div class="account">
                                    <a href="#" class="button cool-link" id="button">Login</a>
                                    </div>
                                    <div class="popup">
                                    <div class="popup-content">
                                        <i class="far fa-times-circle fa-3x close" style="color: navajowhite;"></i>
                                        <form action="includes/login.inc.php" method="POST" >
                                            <i class="fas fa-user fa-3x"></i>
                                            <input type="text" name="uid" placeholder="Username/e-mail">
                                            <input type="password" name="pwd" placeholder="Password">
                                            <button type="submit" name="submit" class="button">Login</button>
                                        </form>
                                        <p>You don\'t have an account? Sign up <a href="signup.php"> here</a>.</p></div>';
                            }
                        ?>     
                            </ul>
                    </div> 
                </div>
            </nav>
        </header>

<section class="edit-offer-section">
    <div class="edit-offer">
        
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
                <h1>Edit this offer:</h1>
                <div>
                    <input type="text" name="title" value="<?php echo $record['title']; ?>"/>
                </div>
                <div>
                    <input type="text" name="country" value="<?php echo $record['country']; ?>" />
                </div>
                <div>
                    <textarea name="description" cols="40" rows="4" placeholder="<?php echo $record['description']; ?>"></textarea>
                </div>

                <div>
                    <input type="file" name="image" value="<?php echo $record['image']; ?>"/>
                </div>

                <div>
                    <input type="text" name="time" value="<?php echo $record['time']; ?>"><br/>
                </div>

                <div>
                    <input type="text" name="price" value="<?php echo $record['price']; ?>"><br/>
                </div>

                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
                <div>
                    <input type="submit" name="submit" value="Edit"/>
                </div>
            </form>
            <div style="background-image: url('<?php echo substr($record['image'],0, strlen($record['image'])); ?>'); background-size: cover; width: 30%;">
            </div>
    </div>
</section>
    </body>
<?php 
    include_once '../footer.php';
?>

