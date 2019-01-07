<?php
    
    function getallproducts(){
        include 'conn.php';
        $data = array();
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row);
            }
        }
    return $data;
    }

    function getsingleproduct($id){
        include 'conn.php';
        $sql = "SELECT * FROM products WHERE id=$id";
        $result = $conn->query($sql);
        $row=$result->fetch_assoc();
        return $row;
    }

    function getcategories(){
        include 'conn.php';
        $data = array();
        $sql = "SELECT * FROM categories";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row);
            }
        }
    return $data;
    }

?>