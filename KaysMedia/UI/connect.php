<?php
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    //Database connection
    $conn = new mysqli('localhost', 'root', '', 'kaysmedia', '3306', '');
    if($conn->connect_error){
        die('Connection Failed :' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into users(Name, Email, Password) values(?, ?, ?)");
        $stmt->bind_param("sss", $Name, $Email, $Password);
        $stmt->execute();
        echo "registration successful";
        $stmt->close();
        $conn->close();
    }
?>


