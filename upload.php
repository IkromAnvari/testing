<?php

require_once ('convertPdf.php');
require_once ('convertPptx.php');

/*error_reporting(-1);
ini_set('display_errors', 'On');
*/
if(isset($_FILES["fileToUpload"])) {

    $file = $_FILES["fileToUpload"];
    $allowed = ['pdf', 'pptx'];
    $filename = $file['name'];

    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        echo 'Загрузка файла с таким расширением не поддерживается';
    }

    $fileTmpPath = $file["tmp_name"];

    if ($ext === 'pdf') {
        convertPdfToImages($fileTmpPath);
    } else {
        convertPptxToPdf($fileTmpPath, $fileTmpPath);
    }
}