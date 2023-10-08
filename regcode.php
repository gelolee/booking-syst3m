<?php
$connect = mysqli_connect('localhost', 'root','', 'travel_db');

if(isset($_POST['register_btn'])){
    $fname = mysqli_real_escape_string($connect, $_POST['fname']);
    $lname = mysqli_real_escape_string($connect, $_POST['lname']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $cpassword = mysqli_real_escape_string($connect, $_POST['cpassword']);

   
    if($password == $cpassword){
        $checkemail = "SELECT email FROM users WHERE email = '$email'";
        $checkemail_run = mysqli_query($connect, $checkemail);

        if(mysqli_num_rows($checkemail_run) > 0 ){
            $_SESSION['message'] = "Already Exists";
        header("Location: reg.php");
        exit(0);
        }
        else{
            $user_query = "INSERT INTO users (fname,lname,email,password)  VALUES('$fname', '$lname', '$email', '$password')";
            $user_query_run = mysqli_query($connect, $user_query);

            if($user_query_run){
                $_SESSION['message'] = "Successfully!";
                header("Location: login.php");
                exit(0);
            }
            else{
                $_SESSION['message'] = "Register Failed!";
                header("Location: reg.php");
                exit(0);
            }
        }

    }
    else
    {
        $_SESSION['message'] = "Please check Password and Confirm Password";
                header("Location: reg.php");
                exit(0);
    }
    
}
else
{
    header("Location: reg.php");
    exit(0);
}
   

?>