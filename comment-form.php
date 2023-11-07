<?php

 $connection = mysqli_connect('localhost','root','','university');

   if(isset($_POST['comment'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment= $_POST['comment'];
    
        $request = " insert into comment(name, email, comment) values('$name', '$email', '$comment')";
        
        mysqli_query($connection,$request);

        header('location:blog.php');
        }
        else{

            echo 'something went wromg try again';

        };