<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

$targetDir = "./images/photos/"; // Carpeta donde se almacenarán las fotos
if (!file_exists($targetDir)) {
  mkdir($targetDir, 0777, true);
}

$files = $_FILES['files'];

foreach ($files['name'] as $key => $name) {
  $targetFile = $targetDir . basename($name);
  if (move_uploaded_file($files['tmp_name'][$key], $targetFile)) {
    // Foto subida exitosamente
  } else {
    // Error al subir la foto
  }
}
?>
