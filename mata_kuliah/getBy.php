<?php
    include "../config/database.php";
    
    $id_mk= $_GET["id"];


    $sql ="SELECT mata_kuliah.id_mk, mata_kuliah.nama_mk, mata_kuliah.kode_mk, dosen.nama_dosen, mata_kuliah.sks_mk, mata_kuliah.semester_mk FROM mata_kuliah
    LEFT JOIN dosen ON dosen.id_dosen=mata_kuliah.id_dosen
    WHERE mata_kuliah.id_mk = ".$id_mk."";
   
   $query = mysqli_query($conn, $sql);
   while($data = mysqli_fetch_array($query)){
    $item[]=array(
        "id"=>$data["id_mk"],
            "nama_mk"=>$data["nama_mk"],
            "kode_mk"=>$data["kode_mk"],
            "dosen"=>$data["nama_dosen"],
            "sks"=>$data["sks_mk"],
            "semester"=>$data["semester_mk"],
    );
}  

    $response = array(
        "Status"=>"OK",
        "data"=>$item
    );
    echo json_encode($response);

?>