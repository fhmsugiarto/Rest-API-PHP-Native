<?php
    include "../config/database.php";
    
    $id_nilai= $_GET["id"];


    $sql ="SELECT nilai.id_nilai, mata_kuliah.nama_mk, mahasiswa.nama_mahasiswa , nilai.nilai FROM `nilai`
    LEFT JOIN mata_kuliah ON mata_kuliah.id_mk=nilai.id_mk
    LEFT JOIN mahasiswa ON mahasiswa.id_mahasiswa=nilai.id_mahasiswa
    WHERE nilai.id_nilai = ".$id_nilai."";
   
   $query = mysqli_query($conn, $sql);
   while($data = mysqli_fetch_array($query)){
    $item[]=array(
        "id"=>$data["id_mk"],
        "id"=>$data["id_nilai"],
        "nama_mk"=>$data["nama_mk"],
        "nama"=>$data["nama_mahasiswa"],
        "nilai"=>$data["nilai"],
    );
}  

    $response = array(
        "Status"=>"OK",
        "data"=>$item
    );
    echo json_encode($response);

?>