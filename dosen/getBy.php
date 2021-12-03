<?php
    include "../config/database.php";
    
    $id_dosen = $_GET["id"];


    $sql ="SELECT * FROM `dosen` WHERE id_dosen = ".$id_dosen."";
   
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