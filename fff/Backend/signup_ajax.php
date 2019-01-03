<?php
    include 'conn.php';
    $data = $_POST;
    $username = $data['username'];
    $password = $data['password'];
    $sql = "INSERT INTO login (username,password) VALUES('$username','$password')";
    $result = $conn->query($sql);
    echo $result
    // if($result){
    //     echo 'SUCCESS';
    // }
?>