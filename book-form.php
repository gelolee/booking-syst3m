<?php

    $connect = mysqli_connect('localhost', 'root','', 'travel_db');

    if(isset($_POST['send'])){
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $request = " insert into book_form(lname, fname, phone, address, location, guests, arrivals, leaving) values 
        ('$lname', '$fname', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

        mysqli_query($connect, $request);

        header('location:index.php#book');
    }else{
        echo 'failed your request';
    }



    if(isset($_POST['details-update']))
    {
        $travel_id = mysqli_real_escape_string($connect, $_POST['travel_id']);
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];
    
        $query = "UPDATE book_form SET lname='$lname', fname='$fname', phone='$phone', address='$address', location='$location', guests='$guests', arrivals='$arrivals', leaving='$leaving' 
        WHERE id='$travel_id' ";
        $query_run = mysqli_query($connect, $query);
    
        if($query_run)
        {            
            header('Location: edit.php');
            exit(0);
        }
        else
        {
            header('Location: edit.php');
            exit(0); 
        }
    }


    if(isset($_POST['delete']))

{
    $post_id = $_POST['delete'];

    $query = "DELETE FROM book_form WHERE id = '$post_id' LIMIT 1";
    $query_run = mysqli_query($connect, $query);

    

    if($query_run)
    {      
        header('Location: edit.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Failed!";
        header('Location: edit1.php');
        exit(0); 
    }
}
?>