
<html>
    <head></head>

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
            background-position: center;
        }
        .left .copy{
            color: white;
            text-align: center;

        }
        .right .copy{
            color: black;
            text-align: center;
        }
        .right form{
            width: 328px;
        }
        form input[type="email"],
        form input[type="password"]{
            display: block;
            width: 100%;
            box-sizing: border-box;
            border-radius: 8px;
            border: 1px solid #c4c4c4;
            padding: 1em;
            margin-bottom: 1.25rem;
            font-size: 0.875rem;
        }
        label{
            display: block;
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }
        .input-container .password{
            position: relative;
        }
        .input-container .password i{
            position: absolute;
            top: 42px;
            right: 16px;
        }
        .sign p{
            margin-top: 1.15rem;
        }
        .signup-btn{
            display: block;
            cursor: pointer;
            width: 100%;
            background: var(--primary-blue);
            color: white;
            font-weight: 700;
            border: none;
            padding: 1rem;
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

        
    </style>
    <div class = split-screen>
        <div class = "left">
        <section class = "copy">
            <h1></h1>
        </section>
        </div>
        <div class = "right">
            <form action = "logincode.php" method = "POST">
                <section class = "copy">
                    <h2>Sign in</h2>
                </section>
                <div class="input-container email" >
                    <label for = "email">Email</label>
                    <input id = "email" name = "email" required type="email" placeholder="Email">
                </div>
                <div class="input-container password" >
                    <label for = "password">Password</label>
                    <input id = "password" name = "password" required type="password" placeholder="Password">
                    <i class = "far fa-eye-slash"></i>
                </div>
                    <button class = "signup-btn" name = "login_btn" type="submit">Log in</button>
                   <section class = "sign"><p class = "sign" >Dont have an account? <a href = "reg.php">Sign up</a></p></section> 
                </div>
            </form>
        </div>

    </div>

</body>

</html>

