<?php 
    include_once 'header.php';
?>

        <div class="signUp-container">   
            <h1>Signup</h1>
            <form class="signUp-form" action="includes/signup.inc.php" method="POST">
                <input type="text" name="first" placeholder="First Name">
                <input type="text" name="last" placeholder="Last Name">
                <input type="text" name="email" placeholder="E-mail">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="submit" >Sign up</button>
            </form>
       </div>
        
<?php 
    include_once 'footer.php';
?>
    </body>
</html>

