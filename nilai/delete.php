<?php
    include "../config/database.php";
    
    $id_nilai = $_GET["id"];


    $sql ="DELETE FROM nilai WHERE nilai.id_nilai = ".$id_nilai."";
   
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