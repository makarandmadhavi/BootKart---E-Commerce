<?php
    
    function getuserdetails(){
        include 'conn.php';
        $data =array();
        $sql = "SELECT * FROM login";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row);
            }
        }
    return $data;
    }

?>