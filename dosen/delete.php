<?php
    include "../config/database.php";
    
    $id_dosen = $_GET["id"];


    $sql ="DELETE FROM dosen WHERE dosen.id_dosen = ".$id_dosen.";";
   
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