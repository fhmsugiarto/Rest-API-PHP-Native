<?php
    include "../config/database.php";
    
    $nim_mahasiswa = isset($_POST["nim"]) ? $_POST["nim"] : "";
    $nama_mahasiswa = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $prodi_mahasiswa = isset($_POST["prodi"]) ? $_POST["prodi"] : "";
    $fakultas_mahasiswa = isset($_POST["fakultas"]) ? $_POST["fakultas"] : "";
    $status_mahasiswa = isset($_POST["status"]) ? $_POST["status"] : "";

    $sql = "INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim_mahasiswa`, `nama_mahasiswa`, `prodi_mahasiswa`, `fakultas_mahasiswa`, `status_mahasiswa`) 
    VALUES (NULL, '".$nim_mahasiswa."', '".$nama_mahasiswa." ', '".$prodi_mahasiswa."', '".$fakultas_mahasiswa."', '".$status_mahasiswa."')";
  

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