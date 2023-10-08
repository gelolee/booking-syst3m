<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

<body>
    <style>
        :root{
            font-size: 100%;
            font-size: 16px;
            line-height: 1.5;
            --primary-blue: #233975;
        }
        body{
            padding: 0;
            margin: 0;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: 500;
        }
        h1{
            font-size: 2.25rem;
            font-weight: 700;
        }
        h2{
            font-size: 1.5rem;
            font-weight: 700;
        }
        .split-screen{
            display: flex;
            flex-direction: column;
        }
        .left{
            height: 200px;
        }
        .left, .right{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .right{
            background-color:#D3D3D3;
        }
        .left{
            background-color: maroon;
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)), url('./images/ph2.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .left .copy{
            color: white;
            text-align: center;
            --webkit-font-smoothing: antialiased;
            --moz-osx-font-smoothing: grayscale;

        }
        .left p{
            font-weight: 400;
        }
        .right .copy{
            color: black;
            text-align: center;
        }
        .right .copy p{
            margin: 1.5em;
            font-size: 0.875rem;
        }
        .right form{
            width: 328px;
        }
        form input[type="number"],
        form input[type="name"],
        form input[type="password"]{
            display: block;
            width: 100%;
            box-sizing: border-box;
            border-radius: 8px;
            border: 1px solid #c4c4c4;
            padding: 1em;
            margin-bottom: .5rem;
            font-size: 0.875rem;
        }
        label {
            display: block;
            margin-bottom: 0.1rem;
            font-size: 1rem;
        }
        .input-container .password{
            position: relative;
        }
        .input-container .password i{
            position: absolute;
            top: 32px;
            right: 16px;
        }
        .signup-btn{
            display: block;
            cursor: pointer;
            width: 30%;
            background: var(--primary-blue);
            color: white;
            font-weight: 700;
            border: none;
            padding: .5rem;
            border-radius: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .signup-btn:hover{
            background: #2c4893;
        }
        @media screen and (min-width: 900px){
            .split-screen{
                flex-direction: row;
                height: 100vh;
            }
            .left,
            .right{
                display: flex;
                width: 50%;
                height: auto;
            }
        }
        .checkbox-container input{
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }
        .checkbox-container{
            display: block;
            position: relative;
            padding-left: 2rem;
            cursor: pointer;
            user-select: none;
            margin: 0 0 1.25rem 0;
        }
        .checkbox-container input:checked~.checkmark{
            background-color: var(--primary-blue);
            border: 1px solid var(--primary-blue);
        }
        .checkmark{
            position: absolute;
            width: 24px;
            height: 24px;
            background: white;
            border: 1px solid #c4c4c4;
            border-radius: 2px;
            top: -4;
            left: 0;
        }
        .checkmark:after{
            content: "";
            position: absolute;
            display: none;

        }
        .checkbox-container input:checked~.checkmark:after{
            display: block;
        }
        .checkbox-container .checkmark:after{
            border: solid white;
            border-width: 0 3px 3px 0;
            width: 5px;
            height: 10px;
            left: 8px;
            top: 4px;
            transform: rotate(45deg);
        }
        
    </style>
    <div class = split-screen>
        <div class = "left">
        <section class = "copy">
            <h1></h1>
        </section>
        </div>
        <div class = "right">
            <form action = "regcode.php" method = "POST">
                <section class = "copy">
                    <h2>Sign up</h2>
                </section>
                <div class="input-container email" >
                    <!--<label for = "name">First Name</label>-->
                    <input id = "name" name = "fname" required type="name" placeholder="First Name">
                </div>
                <div class="input-container email" >
                    <!--<label for = "name"> Last Name</label>-->
                    <input id = "name" name = "lname" required type="name" placeholder="Last Name">
                </div>
                <div class="input-container email" >
                    <!--<label for = "name">Email</label>-->
                    <input id = "name" name = "email" required type="name" placeholder="Email">
                </div>
                <div class="input-container email" >
                    <!--<label for = "password">Password</label>-->
                    <input id = "password" name = "password" required type="password" placeholder="Password">
                </div>
                <div class="input-container email" >
                    <!--<label for = "password">Confirm Password</label>-->
                    <input id = "password" name = "cpassword" required type="password" placeholder="Confirm Password">
                </div>
                <div class = "input-container cta">
                    <label class = "checkbox-container">
                        <input required type = "checkbox">
                        <span class = "checkmark"></span>
                        <a href="#">Privacy Policy</a>.
                        <section class = "sign"><p class = "sign" >Have an account? <a href = "login.php">Sign in</a></p></section> 
                    </label>
                </div>
                    <button class = "signup-btn" name = "register_btn" type="submit">Okay</button>
                    <br>
                </div>
            </form>
        </div>

    </div>

</body>


</html>

<?php
include('includes/footer.php');
?>