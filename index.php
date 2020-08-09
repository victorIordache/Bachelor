<?php
    include_once 'header.php';
    include_once 'includes/dbh.inc.php';
    $sql = 'SELECT * FROM offers;';
    $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
?>

<section class="search-section" id="home">
    <div class="align-content">

       
    <div class="search-div">
        <h1>Where do you wanna travel?</h1>
            <form class="search-form" action="includes/search-form.php" method="POST">
                <div class="form-group">

                    <input type="text" name="country" class="form-control" placeholder="Country to visit">
                </div>
                
                <div class="form-group">

                    <input type="month" name="date" class="form-control" min="2020-09" value="2020-10">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="contactSendButton">Search</button>
                </div>
            </form>
    </div>
        
       
    <div class="slideshow middle">
        <div class="slides">
            <input type="radio" name="r" id="r1" checked>
            <input type="radio" name="r" id="r2">
            <input type="radio" name="r" id="r3">
            <input type="radio" name="r" id="r4">
            <input type="radio" name="r" id="r5">
            <div class="slide s1">
                <img src="images/barcelona.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="images/aurora.png" alt="">
            </div>
            <div class="slide">
                <img src="images/traveller.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="images/castlePeles.jpg" alt="">
            </div>
            <div class="slide">
                <img src="images/transfagarasan.jpg" alt="">
            </div>
        </div>
        
        <div class="navigation">
            <label for="r1" class="bar"></label>
            <label for="r2" class="bar"></label>
            <label for="r3" class="bar"></label>
            <label for="r4" class="bar"></label>
            <label for="r5" class="bar"></label>
        </div>  
    </div>
      
        </div>
</section>

<section class="section-parallax">
    <div class="parallax" data-parallax="scroll" data-z-index="100" data-image-src="images/parallax4.jpeg">
        
    </div>
</section>


<section class="moving-cards" id="explore">  
    <div class="align-content">
        
        
        <div class="first-card card-middle">
            <div class="front">
                <img src="images/aurora.jpeg" alt="">
            </div>
            <div class="back">
                <div class="back-content card-middle">
                    <h2>Aurora Boreala, Porjus</h2>
                    <span>Sweden</span>
                    <div class="sm">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-card card-middle">
            <div class="front">
                <img src="images/MachuPicchu.jpeg" alt="">
            </div>
            <div class="back">
                <div class="back-content card-middle">
                    <h2>Machu Picchu, Cusco</h2>
                    <span>Peru</span>
                    <div class="sm">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="third-card card-middle">
            <div class="front">
                <img src="images/oahu.jpeg" alt="">
            </div>
            <div class="back">
                <div class="back-content card-middle">
                    <h2>Maui Beach House</h2>
                    <span>Oahu, Hawaii</span>
                    <div class="sm">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        
      
        
    </div>
</section>

<section class="paris-section">
    <div class="parallax" data-parallax="scroll" data-z-index="100" data-image-src="images/paris.jpg">
        <div class="align-content-monthly">
            <div class="monthly-offer">
            <h2 class="monthly-offer-text-h2">TRAVEL WITH NO LIMITS</h2>
            <h3 class="monthly-offer-text-h3">WE TAKE CARE OF IT</h3>
            </div>
        </div>
    </div>
</section>

<section class="offer-section" id="adventure">
    <div class="align-content">
        <?php
        while($row=mysqli_fetch_array($query)){
        ?>
        
        <div class="offer" style="background-image: url(<?php echo substr($row['image'], 1, strlen($row['image'])) ?>); background-size: cover;">
            <div class="text-offer">
                <h1><?php echo $row['title'];?></h1>
                <h2><?php echo $row['time'];?></h2>
                <h3><?php echo $row['price'];?> &euro;</h3>
            </div>
            <form action="<?php echo "view.php?id=".$row['id']; ?>">
            <input type="submit" class="contactSendButton view-button-offer_align" value="View" />
            </form>
        </div>
    <?php } ?>
    </div>
</section>

<section class="section-parallax">
    <div class="parallax" data-parallax="scroll" data-z-index="100" data-image-src="images/parallax5.jpeg">
        
    </div>
</section>


<section class="slider2-section" id="reviews">
    
    <div id="slider2">
        <input type="radio" name="slider2" id="slide1" checked>
        <input type="radio" name="slider2" id="slide2">
        <input type="radio" name="slider2" id="slide3">
        <input type="radio" name="slider2" id="slide4">
        <div id="slides2">
            <div id="overflow">
                <div class="inner">
                    <div class="slide2 slide_1">
                        <div class="slide-content">
                            <div class="slide-content_image">
                            </div>
                            <div class="slide-content_text">
                                <h1> #SEEKERSSPOTLIGHT</h1>
                                <h2> @DUNITAH</h2>
                                <p>"On the day to day, Seek Discomfort acts as a reminder to reconsider everyday decisions and actions, and not take anything for granted. It helps me stay away from routines where I feel that something becomes mundane and loses the meaning and excitement it once brought me."</p>
                                <p><a href="https://www.instagram.com/p/CBd_4IRh2yT/">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="slide2 slide_2">
                        <div class="slide-content">
                            <div class="slide-content_image">
                            </div>
                            <div class="slide-content_text">
                                <h1> #SEEKERSSPOTLIGHT</h1>
                                <h2> @JOEYTNS</h2>
                                <p>”To me, Seek Discomfort means getting out of your comfort zone as often as possible so that you can be a stronger and more experienced version of yourself. I believe it’s a way of living life to the fullest and something that I encourage everyone to try in their own way 😊"</p>
                                <p><a href="https://www.instagram.com/p/CAikhrtB39r/">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></p>
                           
                            </div>
                        </div>
                    </div>
                    <div class="slide2 slide_3">
                        <div class="slide-content">
                            <div class="slide-content_image">
                            </div>
                            <div class="slide-content_text">
                                <h1> #SEEKERSSPOTLIGHT</h1>
                                <h2> @VIKCY.ANDMIA</h2>
                                <p>”Sometimes the most amazing opportunities or lessons are outside our comfort zone. If we just step outside our safety bubble, or even our daily routine, we can find so much joy and even life changing experiences. And all of that just because of two words we put trust in: Seek Discomfort."</p>
                                <p><a href="https://www.instagram.com/p/CBd_4IRh2yT/">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></p>
                           
                            </div>
                        </div>
                    </div>
                    <div class="slide2 slide_4">
                        <div class="slide-content">
                            <div class="slide-content_image">
                            </div>
                            <div class="slide-content_text">
                                <h1> #SEEKERSSPOTLIGHT</h1>
                                <h2> @GABRIELPETERS4</h2>
                                <p>Seek Discomfort is a huge motivator for me. I live life around the goal to not have any regrets when I’m older. Ideally I don’t want to have regret for things I didn’t do throughout my life whether that’s skydiving or traveling to a dream destination. So Seek Discomfort is my way of getting out of my comfort zone and living my life through spontaneous actions so that I can look back on my life and feel content with how I spent every second. I wear the brand so that I can spread the message to others to push them out of their comfort zone and motivate them to try something new. Seek Discomfort to me is not just a brand it’s a lifestyle."</p>
                                <p><a href="https://www.instagram.com/p/CBd_4IRh2yT/">Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></p>
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="controls">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
        </div>
        <div id="bullets">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
        </div>
    </div>
    
</section> 

<section class="contact" id="contact">
    <div class="align-content-center">
        <div class="contact-title">
            <h2>Get in touch with us</h2>
            <p>We'd love to start planning your vacation, one that suits your needs!</p>
        </div>
        <form class="contact-form" action="includes/contactform.inc.php" method="POST">
            <div class="form-group">
                
                <input type="text" name="name" class="form-control" placeholder="Full name">
            </div>
            <div class="form-group">
                <input type="text" name="mail" class="form-control" placeholder="E-mail">
            </div>
            <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
                <textarea class="form-control textarea" name="message" placeholder="Your message"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="contactSendButton">Send</button>
            </div>
        </form>
    </div>        
</section>


<?php
    include_once 'footer.php';
?>
        <a class="gotopbtn" href="#"> <i class="fa fa-arrow-up" aria-hidden="true"></i> </a>
    </body>
</html>
