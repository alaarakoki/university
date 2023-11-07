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
    <section class="header-contact">
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
            <h1>CONTACT</h1>
        </div>
    </section>

    <section class="map">

    <h3>Location</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2426.268380416856!2d13.428883424194115!3d52.546670134255656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a84df945cee6c5%3A0x4c4b4c1d37bd9184!2zV2ljaGVydHN0cmHDn2UgNDgsIDEwNDM5IEJlcmxpbiwg2KPZhNmF2KfZhtmK2Kc!5e0!3m2!1sar!2s!4v1698781123726!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>
 
    <section class="information-contact">

        <div class="infor">

            <h3>Information Contact</h3>
            <i class="fa fa-map-marker" aria-hidden="true"></i><p>Berlin, Germany - 440012</p>
            <div class="text-infor"> <span>Wichertstraße 48, 10439 Berlin, German</span></div> 
            <i class="fa fa-phone" aria-hidden="true"></i><p>+123-456-7890</p> 
            <div class="text-infor"><span>Monday To Saturday 10 AM To 8 PM</span></div> 
            <i class="fa fa-envelope" aria-hidden="true"></i><p>loinbcofpa@gmail.com</p> 
            <div class="text-infor"><span>Email us your qure</span></div> 

        </div>

        <div class="form-contact">

            <form action="contact-form.php" method="post">

                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="text" name="name">
                    <label for="floatingPassword">ENTER NAME</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="text" name="subject">
                    <label for="floatingInput">SUBJECT</label>
                </div>

                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="massage"></textarea>
                    <label for="floatingTextarea2">MASSAGE</label>
                </div>

                <button class="comment-btn" name="contact">POST CONTACT</button>

            </form>

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