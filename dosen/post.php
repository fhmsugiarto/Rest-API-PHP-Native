<?php
    include "../config/database.php";
    
    $nidn_dosen = isset($_POST["nidn"]) ? $_POST["nidn"] : "";
    $nama_dosen= isset($_POST["nama"]) ? $_POST["nama"] : "";

    $sql = "INSERT INTO `dosen` (`id_dosen`, `nidn_dosen`, `nama_dosen`) VALUES (NULL, '".$nidn_dosen."', '".$nama_dosen."');";
    
    $query = mysqli_query($conn, $sql);
    if($query){
        $mesaage =  "Succes";
    }else{
        $mesaage =  "Failed";
    }

    $response = array(
        "Status"=>"OK",
        "message"=>$mesaage
    );
    echo json_encode($response);
?>