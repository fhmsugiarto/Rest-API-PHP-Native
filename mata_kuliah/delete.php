<?php
    include "../config/database.php";
    
    $id_mk = $_GET["id"];


    $sql ="DELETE FROM mata_kuliah WHERE mata_kuliah.id_mk = ".$id_mk."";
   
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