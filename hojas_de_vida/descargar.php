<?php

if (isset($_GET['archivo'])) { 
    $file = $_GET['archivo'];
    if (is_file($file)) {
      $filename = "cv".$_GET['archivo']; // el nombre con el que se descargará, puede ser diferente al original
      /*header("Content-Type: application/octet-stream");*/
      header("Content-Type: application/force-download");
      header("Content-Disposition: attachment; filename=\"$filename\"");
      readfile($file);
    } else {
      die("Error: no se encontró el archivo '$file'");
    }
  }