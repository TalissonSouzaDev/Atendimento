<?php 

session_start();
$inicio = $_POST['inicio'];
$final =  $_POST['final'];
$guiche = $_POST['guiche'];
$atendimento = $_POST['atendimento'];
$intei =$_POST['intei'];
$intef = $_POST['intef'];

$hora_atendimento = (strtotime($final) - strtotime($inicio)) + (strtotime($intei) - strtotime($intef));
    $total = ($hora_atendimento/3600);
    $horass = ($total * 60);
    @$horas = $horass /$atendimento;
    if(!empty($guiche)){
    $total = $horas *$guiche;
    }
    else {
        echo "<script>window.alert('guiche em banco')</script>";
    }

   $_SESSION['total'] = $total;
   $_SESSION['inicio'] = $inicio;
   $_SESSION['final'] = $final;
   $_SESSION['guiche'] = $guiche;
   $_SESSION['atendimento'] = $atendimento;
   $_SESSION['intei'] = $intei;
   $_SESSION['intef'] = $intef;
     
header('location:mensagen.php');



?>