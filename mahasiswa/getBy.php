<?php
    include "../config/database.php";
    
    $id_mahasiswa = $_GET["id"];


    $sql ="SELECT * FROM `mahasiswa` WHERE id_mahasiswa = ".$id_mahasiswa."";
   
   $query = mysqli_query($conn, $sql);
   while($data = mysqli_fetch_array($query)){
    $item[]=array(
        "id"=>$data["id_mahasiswa"],
        "nim"=>$data["nim_mahasiswa"],
        "nama"=>$data["nama_mahasiswa"],
        "prodi"=>$data["prodi_mahasiswa"],
        "fakultas"=>$data["fakultas_mahasiswa"],
        "status"=>$data["status_mahasiswa"],
    );
}  

    $response = array(
        "Status"=>"OK",
        "data"=>$item
    );
    echo json_encode($response);

?>