<!DOCTYPE html>
 <html lang="en">
 <head>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="assets/image/icone-logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Website Design - Easy Tutorials</title>
   
 </head>
 <body>
    <section class="header-about">
        <nav>
            <a href="index.html"><img src="assets/image/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-window-close" aria-hidden="true" onclick="HideMenu()"></i>

                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" aria-hidden="true" onclick="ShowMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>ABOUT</h1>
        </div>
    </section>

    <!---------subject-------------->

    <section class="sub-about">
        <div class="content-sub">
            <h2>We are world's largest university</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque voluptas et veritatis natus
            excepturi. Pariatur repudiandae placeat autem consectetur expedita, aspernatur obcaecati enim. Fugiat,
            quasi?
            </p>

            <a href="contact.php" class="content-about-btn">CONTACT US</a>

        </div>

        <div class="content-img">
            <img src="assets/image/about.jpg" alt="meeting">
        </div>
    </section>

    <!------------Footer------------>
    <section class="footer">
             <h4>About Us</h4>
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed inventore atque, vel quas modi doloribus. Minus reprehenderit autem quibusdam eveniet,
                ullam at vel cumque rem, dolorem id nisi saepe. Corporis laudantium, porro nemo ducimus distinctio dolorum modi? Illum soluta deleniti distinctio 
             <br>corporis pariatur rem, excepturi, officia veritatis tempore, quo recusandae!</p>
             <div class="icone">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-linkedin"></i>
             </div>
             <p>Made With<i class="fa fa-heart"></i>by easy Tutorials</p>

    </section> 
    
        <!-- footer section starts -->

        <section class="footers">

            <div class="box-container">

                <div class="box">

                    <h3>quick links</h3>
                    <a href="index.php"><i class="fa fa-angle-right" aria-hidden="true"></i>home</a>
                    <a href="about.php"><i class="fa fa-angle-right" aria-hidden="true"></i>about</a>
                    <a href="course.php"><i class="fa fa-angle-right" aria-hidden="true"></i>course</a>
                    <a href="blog.php"><i class="fa fa-angle-right" aria-hidden="true"></i>blog</a>
                    <a href="contact.php"><i class="fa fa-angle-right" aria-hidden="true"></i>contact</a>

                </div>

                <div class="box">

                    <h3>extra links</h3>
                    <a href="contact.php"><i class="fa fa-angle-right" aria-hidden="true"></i>ask question</a>
                    <a href="about.php"><i class="fa fa-angle-right" aria-hidden="true"></i>about us</a>
                    <a href="privacy-policy.php"><i class="fa fa-angle-right" aria-hidden="true"></i>privacy policy</a>
                    <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>terms of use</a>
                    <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>contact us </a>
                    
                </div>

                <div class="box">

                    <h3>contact info</h3>
                    <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+123-456-7890</a>
                    <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+111-425-7290</a>
                    <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>loikuymwm@gmail.com</a>
                    <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>loinbcofpa@gmail.com</a>
                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Berlin, Germany - 440012</a>

                </div>

                <div class="box">

                    <h3>follow us</h3>
                    <a href=""><i class="fa-brands fa-facebook"></i>facebook</a>
                    <a href=""><i class="fa-brands fa-instagram"></i>instagram</a>
                    <a href=""><i class="fa-brands fa-twitter"></i>twitter</a>
                    <a href=""><i class="fa-brands fa-linkedin"></i>linkedin</a>
                    <a href=""><i class="fa-brands fa-telegram"></i>telegram</a>
                    
                </div>

            </div>

                <div class="credit">created by <span>mr.Alaa Rakouki</span> | all rights reserved! </div>

        </section>

<!-- footer section ends -->


    <!--Javascript For Toggle Menu-->
    <script>
        var navLinks = document.getElementById("navLinks")

        function ShowMenu(){
            navLinks.style.right="0";

        }
        function HideMenu(){
            navLinks.style.right="-200px";

        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 </body>
 </html>



