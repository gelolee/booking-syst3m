<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVEL</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="script.js" defer></script> 
</head>
<body>
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" class="logo animate__animated animate__fadeInLeft"> <i class="fa-solid fa-plane-departure animate__animated animate__fadeInLeft"></i>TRAVEL</a>

        <nav class="navbar animate__animated animate__fadeInRight">
            <a href="#home">home</a>
            <a href="#aboutus">about us</a>
            <a href="#gallery">gallery</a>
            <a href="#services">services</a>
            <a href="#book">book</a>
        </nav>
       <h1 class="menu"><i class="fa-solid fa-user animate__animated animate__fadeInRight"><a href="login.php" class = "logout">Logout</a></i></h1>

        </div>
       </div>
    </header>

    <section class="home" id="home">

        <div class="content">
            <span class="animate__animated animate__fadeInUp">it's more fun in the philippines</span>
            <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat.</p><br>
                <a href="#book" class="btn animate__animated animate__fadeInUp animate__delay-1s" >Book now</a>
            
        </div>
    </section>

    <section class="about" id="aboutus">
        <div class="heading">
        </div>
        <div class="img-container" data-aos="fade-right">   
        <img src="./images/baguio.webp" class="img">
        <div class="controls">
            <span class="control-btn" data-src="images/homeimg1.jpg"></span>
            <span class="control-btn" data-src="images/4kimg.jpg"></span>
            <span class="control-btn" data-src="images/222.jpg"></span>
        </div>
        </div>

        <div class="content1" data-aos="fade-left">
            <span>About us</span>
            <h3>a lot of tourist spot awaits you</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat</p>

        </div>
    </section>

    <section class="destination" id="gallery">
        <div class="heading" data-aos="zoom-in-down">
            <span>gallery</span>
            <h1>choose your destinations</h1>
        </div>

        <div class="box-container">
            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="images/boracay.webp" alt="">
                </div>
                <div class="content2">
                    <h3>Boracay</h3>
                    <p>lorem ipsum lorem ipsum</p>
                    <a href="#">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="images/chocohills.webp" alt="">
                </div>
                <div class="content2">
                    <h3>Chocolate Hills</h3>
                    <p>lorem ipsum lorem ipsum</p>
                    <a href="#">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="images/coron.webp" alt="">
                </div>
                <div class="content2">
                    <h3>Coron</h3>
                    <p>lorem ipsum lorem ipsum</p>
                    <a href="#">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="images/elnido.webp" alt="">
                </div>
                <div class="content2">
                    <h3>El Nido</h3>
                    <p>lorem ipsum lorem ipsum</p>
                    <a href="#">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="images/moalboal.webp" alt="">
                </div>
                <div class="content2">
                    <h3>MoalBoal</h3>
                    <p>lorem ipsum lorem ipsum</p>
                    <a href="#">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="images/puerto.webp" alt="">
                </div>
                <div class="content2">
                    <h3>Puerto Princesa</h3>
                    <p>lorem ipsum lorem ipsum</p>
                    <a href="#">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="images/tagaytay.webp" alt="">
                </div>
                <div class="content2">
                    <h3>Tagaytay</h3>
                    <p>lorem ipsum lorem ipsum</p>
                    <a href="#">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="images/vigan.jpg" alt="">
                </div>
                <div class="content2">
                    <h3>vigan</h3>
                    <p>lorem ipsum lorem ipsum</p>
                    <a href="#">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="images/cebu.jpg" alt="">
                </div>
                <div class="content2">
                    <h3>cebu</h3>
                    <p>lorem ipsum lorem ipsum</p>
                    <a href="#">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>

    </section>

    <section class="services" id="services">

        <div class="heading" data-aos="zoom-in-down">
            <span>our services</span>
            <h1>this is what we offer</h1>
        </div>

        <div class="box-container">
            <div class="box" data-aos="fade-up">
                <i class="fa-solid fa-earth-asia"></i>
                <h3>philippines</h3>
                <p>Lorem ipsum lorem ipsum</p>
            </div>

            <div class="box" data-aos="fade-up">
                <i class="fas fa-hiking"></i>
                <h3>Adventures</h3>
                <p>Lorem ipsum lorem ipsum</p>
            </div>

            <div class="box" data-aos="fade-up">
                <i class="fa-solid fa-hotel"></i>
                <h3>hotel</h3>
                <p>Lorem ipsum lorem ipsum</p>
            </div>

            <div class="box" data-aos="fade-up">
                <i class="fa-solid fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>Lorem ipsum lorem ipsum</p>
            </div>

            <div class="box" data-aos="fade-up">
                <i class="fa-solid fa-car"></i>
                <h3>car rental</h3>
                <p>Lorem ipsum lorem ipsum</p>
            </div>

            <div class="box" data-aos="fade-up">
                <i class="fa-solid fa-user-large"></i>
                <h3>tour guide</h3>
                <p>Lorem ipsum lorem ipsum</p>
            </div>
        </div>
    </section>

    <section class="booking" id="book" data-aos="zoom-in">
        <div class="heading">
        <h1>Book your trip now!</h1>
        </div>

        <form action="book-form.php" method="post" class = "book_form">
            <div class="flex">
                <div class="inputBox">
                    <span>Last Name: </span>
                    <input type="text" placeholder="Please Enter Your Full Name" name="lname">
                </div>
                <div class="inputBox">
                    <span>First Name: </span>
                    <input type="name" placeholder="Please Enter Your Email Address" name="fname">
                </div>
                <div class="inputBox">
                    <span>Mobile Number: </span>
                    <input type="number" placeholder="Please Enter Your Mobile Number" name="phone">
                </div>
                <div class="inputBox">
                    <span>Address: </span>
                    <input type="text" placeholder="Please Enter Your Address" name="address">
                </div>
                <div class="inputBox">
                    <span>Where to: </span>
                    <input type="text" placeholder="Please Enter Your Place You Want To Visit" name="location">
                </div>
                <div class="inputBox">
                    <span>Guests: </span>
                    <input type="number" placeholder="Please Enter How many Guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>Arrivals: </span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>Leaving: </span>
                    <input type="date" name="leaving">
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">
            <a href="detail.php" class="btn" >view details</a>
            <a href="edit.php" class="btn" >edit details</a>
        </form>   
    </section>

    <section class="footer">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="footer-col">
                    <h4>quick links</h4>
                    <ul>
                        <li><a href="#home">home</a></li>
                        <li><a href="#aboutus">about us</a></li>
                        <li><a href="#gallery">gallery</a></li>
                        <li><a href="#services">services</a></li>
                        <li><a href="#book">book</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>group member</h4>
                    <ul>
                        <li><a href="#">Angelo Lee Salenga</a></li>
                        <li><a href="#">Junelie Batu</a></li>
                        <li><a href="#">Dennis Malig</a></li>
                        <li><a href="#">Einstein Cabanayan</a></li>
                        <li><a href="#">Edgar Supan</a></li>
                        <li><a href="#">Jon Ray Macaling</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                        <div class="social-links">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-telegram"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </section>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js">

<script>
    AOS.init({
        duration: 900,
        offset: 150,
    });
</script>
</body>
</html>