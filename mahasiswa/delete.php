<?php
    include "../config/database.php";
    
    $id_mahasiswa = $_GET["id"];


    $sql ="DELETE FROM `mahasiswa` WHERE `mahasiswa`.`id_mahasiswa` = ".$id_mahasiswa.";";
   
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