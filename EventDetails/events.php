<?php

    $connection = mysqli_connect('localhost','root','','events_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $nos = $_POST['nos'];
        $college = $_POST['college']; 
    
    

    $request="INSERT into register_form(name , email , number , college) VALUES ('$name','$email','$nos','$college')";

    $result = mysqli_query($connection,$request);

    mysqli_close($connection);

    header('location:popup.html');
    }else{
        echo 'something went wrong try again'; 
    }



?>