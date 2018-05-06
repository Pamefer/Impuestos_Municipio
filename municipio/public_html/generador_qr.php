<?php 
    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include ("../resources/library/phpqrcode.php"); 

    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    //$datos= 'ESTE ES LO QUE SE VA A GRAFICAR';
    $filename = $PNG_TEMP_DIR.'test.png';
    
    //Calidad L M Q H
    $errorCorrectionLevel = 'M';
    //Tamanio de 1 a 10
    $matrixPointSize = 3;

    //GENERACION DE CODIGO:
    $filename = $PNG_TEMP_DIR.'test'.md5($datos.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
    QRcode::png($datos, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
         
    //Mostrar archivo generado
    echo '<img class="qr" src="'.$PNG_WEB_DIR.basename($filename).'" />';  