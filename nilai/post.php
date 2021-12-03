<?php
    include "../config/database.php";
    
    $id_mk= isset($_POST["id_mk"]) ? $_POST["id_mk"] : "";
    $id_mahasiswa= isset($_POST["id_mahasiswa"]) ? $_POST["id_mahasiswa"] : "";
    $nilai = isset($_POST["nilai"]) ? $_POST["nilai"] : "";
        
    $sql = "INSERT INTO `nilai` (`id_nilai`, `id_mk`, `id_mahasiswa`, `nilai`) 
    VALUES (NULL, '".$id_mk."', '".$id_mahasiswa."', '".$nilai."');";
  

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