<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
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
                    <a class="navbar-brand" href="index.php">EOKA Travels</a>
                    </div>
                    <div>
                        <ul>
                            <li <?php if(isset($_SESSION['u_id'])) echo 'style="padding: 5px 10px;"'; ?>>
                                <a href="index.php" class="cool-link">Home</a>
                            </li>
                            <li <?php if(isset($_SESSION['u_id'])) echo 'style="padding: 5px 10px;"'; ?>>
                                <a href="#explore"  class="cool-link">Explore</a>
                            </li >
                            <li <?php if(isset($_SESSION['u_id'])) echo 'style="padding: 5px 10px;"'; ?>>
                                <a href="#adventure" class="cool-link">Adventure</a>
                            </li>
                            <li <?php if(isset($_SESSION['u_id'])) echo 'style="padding: 5px 10px;"'; ?>>
                                <a href="#reviews" class="cool-link">Reviews</a>
                            </li>
                            <li <?php if(isset($_SESSION['u_id'])) echo 'style="padding: 5px 10px;"'; ?>>
                                <a href="#contact" class="cool-link">Contact</a>
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