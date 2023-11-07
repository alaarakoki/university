<?php

 $connection = mysqli_connect('localhost','root','','university');

   if(isset($_POST['contact'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject= $_POST['subject'];
        $massage= $_POST['massage'];
    
        $request = " insert into contact(name, email, subject, massage) values('$name', '$email', '$subject', '$massage')";
        
        mysqli_query($connection,$request);

        header('location:contact.php');
        }
        else{

            echo 'something went wromg try again';

        };