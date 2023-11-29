<?php

use  Dompdf\Dompdf;

// crear una instancia y usar la clase dompdf 
$dompdf = new  Dompdf ();
$dompdf-> loadHtml ( 'hola mundo' );

// (Opcional) Configurar el tamaño y la orientación del papel 
//$dompdf-> setPaper ( 'A4' , 'landscape' );

// Representa el HTML como PDF 
$dompdf -> render ();

// Envía el PDF generado al navegador 
$dompdf -> stream ();