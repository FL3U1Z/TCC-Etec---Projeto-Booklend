<?php
    session_start();
    require_once('conexao.php');
   
    $reserva = 0;
    if(isset($_REQUEST["reserva"])) {
        if($_REQUEST["reserva"] != "") {
        $reserva = $_REQUEST["reserva"];
        }
    }
    $query = "SELECT * from reserva where id_reserva =".$reserva;
    $result = mysqli_query($conexao, $query);

    if(mysqli_fetch_array($result)){
        $query = "DELETE from reserv_liv where id_reserva =".$reserva;

        if($result = mysqli_query($conexao, $query)){
            $query = "DELETE from reserva where id_reserva =".$reserva;
            $result = mysqli_query($conexao, $query);
            echo "<script>window.location.href='../view/dashboard.php';</script>";
        } 
     
    }
