<?php
require ('Zutrittscode.php');
require('QRGenerator.php');
if($_GET['output']=="json"){
    $array = [$this->Zutrittscode->getDatum(), $this->Zutrittscode->getPasswort()];
    echo json_encode($array);

}

if($_GET['output']=="html" || !isset($_GET['output'])){
    echo '<img src="' . QRGenerator::renderQRCode() . '" />';
}
