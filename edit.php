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
            <a href="index.php#home">home</a>
            <a href="index.php#aboutus">about us</a>
            <a href="index.php#gallery">gallery</a>
            <a href="index.php#services">services</a>
            <a href="index.php#book">book</a>
        </nav>
       <h1 class="menu"><i class="fa-solid fa-user animate__animated animate__fadeInRight"><a href="login.php" class = "logout">Logout</a></i></h1>

        </div>
       </div>
    </header>
    <table class="table">
        <thead>
            <th><h1>Last Name</h1></th>
           <th><h1>First Name</h1></th>
            <th><h1>Mobile No.</h1></th>
           <th><h1>Address</h1></th>
            <th><h1>Location</h1></th>
            <th><h1>Guests</h1></th>
            <th><h1>Arrivals</h1></th>
             <th><h1>Leaving</h1></th>
             <th><h1>Action</h1></th>
            <th><h1>Action</h1></th>
            <th><h1>Action</h1></th>
        </thead>
        <?php
        $connect = mysqli_connect('localhost', 'root','', 'travel_db');
        $posts = "SELECT * FROM book_form";
        $posts_run = mysqli_query($connect, $posts);
           if(mysqli_num_rows($posts_run) > 0)
    {
        foreach($posts_run as $post)
        {
            ?>
            <tr>
            <tbody>
            <td><h1><?= $post['lname'] ?></h1></td>
            <td><h1><?= $post['fname'] ?></h1></td>
            <td><h1><?= $post['phone'] ?></h1></td>
            <td><h1><?= $post['address'] ?></h1></td>
            <td><h1><?= $post['location'] ?></h1></td>
            <td><h1><?= $post['guests'] ?></h1></td>
            <td><h1><?= $post['arrivals'] ?></h1></td>
            <td><h1><?= $post['leaving'] ?></h1></td>
            <td>
                <a href = "edit1.php?id=<?= $post['id']?> " class = "btn">Edit</a>
            </td>
            <td>
                <form action = "book-form.php" method = "POST">
                    <button type = "submit" name = "delete" value = "<?= $post['id']?>" class =" btn">Delete</button>
                 </form>
            </td>
            <td>
            <a href="index.php#book" class="btn" >back</a>
            </td>
            </tbody>
            </tr>

            <?php
        }

    }
            ?>
    </table>

    <style>
        body{
            margin: 10%;
            padding: 0;
            font-family: sans-serif;
        }
        *{
            box-sizing: border-box;
        }
        .table{
            width: 100%;
            border-collapse: collapse;
        }

    .table td, .table th{
        padding: 18px 18px;
        margin: 10%;
        border: 1px solid #ddd;
        text-align: center;
    }
    .table th{
        background-color: grey;
        color: #ffff;
    }
    .btn{
    font-size: 18px;
    font-weight: bold;
    background: grey;
    padding: 15px;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    color: azure;
    border-radius: 10px;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
 }

 .btn:hover, .btn:focus, .btn:active{
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
 }

    </style>
</body>
</html>