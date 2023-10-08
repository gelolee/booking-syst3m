<?php
$connect = mysqli_connect('localhost', 'root','', 'travel_db');


if(isset($_POST['login_btn'])){
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);

    $log_query = "INSERT INTO userlog (email) VALUES ('$email')";
    $log_query_run = mysqli_query($connect, $log_query);

    $login_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";
    $login_query_run = mysqli_query($connect, $login_query);
   

    if(mysqli_num_rows($login_query_run) > 0){        
        foreach($login_query_run as $data){
            $user_id = $data['id'];
            $user_name = $data['fname'].' '.$data['lname'];
            $user_email = $data['email'];
            
        }

        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'user_name'=>$user_name,
            'user_email'=>$user_email,
        ];
            $_SESSION['message'] = "Welcome User";
            $query = "UPDATE users SET created_at = NOW()";
            $query .="WHERE email = {$_SESSION['email']} LIMIT 1"; 
            header("Location: index.php");
            exit(0);
        }
        
        
    }
    else{
        $_SESSION['message'] = "Invalid Email or Password";
        header("Location: login.php");
        exit(0);  
    }

?>