<?php
    include "../config/database.php";
    
    $id_mahasiswa = $_GET["id"];

    $nim_mahasiswa = isset($_POST["nim"]) ? $_POST["nim"] : "";
    $nama_mahasiswa = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $prodi_mahasiswa = isset($_POST["prodi"]) ? $_POST["prodi"] : "";
    $fakultas_mahasiswa = isset($_POST["fakultas"]) ? $_POST["fakultas"] : "";
    $status_mahasiswa = isset($_POST["status"]) ? $_POST["status"] : "";

    $sql ="UPDATE `mahasiswa` SET `nim_mahasiswa` = '".$nim_mahasiswa."', 
    `nama_mahasiswa` = '".$nama_mahasiswa."', `prodi_mahasiswa` = '".$prodi_mahasiswa."',
     `fakultas_mahasiswa` = '".$fakultas_mahasiswa."', `status_mahasiswa` = '".$status_mahasiswa."' 
    WHERE `mahasiswa`.`id_mahasiswa` = ".$id_mahasiswa.";";
   
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