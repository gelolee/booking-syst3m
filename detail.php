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
       <h1 class="menu"><i class="fa-solid fa-user animate__animated animate__fadeInRight"></i></h1>

        </div>
       </div>
    </header>
    
    <?php

    $connect = mysqli_connect('localhost', 'root','', 'travel_db');

    $request = "SELECT * FROM book_form";
    $post = mysqli_query($connect, $request);

    if(mysqli_num_rows($post) > 0){
        foreach($post as $requests)
        {
            ?>
            <section class="booking-d" id="book">
        <div class="heading">
        <h1>Details</h1>
        </div>

        <form action="book-form.php" method="post" class = "book_form">
            <div class="flex">
                <div class="inputBox-d">
                    <span>Last Name: <span class = info><?= $requests['lname'] ?></span></span><br>
                    <span>First Name: <span class = info><?= $requests['fname'] ?></span></span> <br>
                    <span>Mobile Number: <span class = info><?= $requests['phone'] ?></span></span><br>
                    <span>Address: <span class = info><?= $requests['address'] ?></span></span><br>
                    <span>Where to: <span class = info><?= $requests['location'] ?></span></span><br>
                    <span>Guests: <span class = info><?= $requests['guests'] ?></span></span><br>
                    <span>Arrivals: <span class = info><?= $requests['arrivals'] ?></span></span><br>
                    <span>Leaving: <span class = info><?= $requests['leaving'] ?></span></span><br> 
                    
                    <br><a href="index.php#book" class="btn" >back</a>
            </div>
        </form>   
    </section>
            <?php
        }
    }

    ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js">

<script>
    AOS.init({
        duration: 800,
        offset: 150,
    });
</script>
</body>
</html>