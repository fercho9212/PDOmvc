<?php

function loadData(){
    $consultas = new Consultas();
    $filas=$consultas->load();
    
    include('table.php');
}
