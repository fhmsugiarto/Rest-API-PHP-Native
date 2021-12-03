<?php
    include "../config/database.php";
    
    $nama_mk= isset($_POST["matkul"]) ? $_POST["matkul"] : "";
    $kode_mk= isset($_POST["kode"]) ? $_POST["kode"] : "";
    $id_dosen = isset($_POST["id_dosen"]) ? $_POST["id_dosen"] : "";
    $sks_mk = isset($_POST["sks"]) ? $_POST["sks"] : "";
    $semester_mk = isset($_POST["semester"]) ? $_POST["semester"] : "";
    
    
    $sql = "INSERT INTO `mata_kuliah` (`id_mk`, `nama_mk`, `kode_mk`, `id_dosen`, `sks_mk`, `semester_mk`)
    VALUES (NULL, '".$nama_mk."', '".$kode_mk."', '".$id_dosen."', '".$sks_mk."', '".$semester_mk."')";
  

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