<?php
    include "../config/database.php";

    $sql = "SELECT * FROM dosen";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){
        $item[]=array(
            "id"=>$data["id_dosen"],
            "nidn"=>$data["nidn_dosen"],
            "nama"=>$data["nama_dosen"]   
        );
    }  

    $response = array(
        "Status"=>"OK",
        "data"=>$item
    );
    echo json_encode($response);
    
?>