<?php

function convertPdfToImages(string $filename)
{
    $im = new Imagick($filename);

    $noOfPagesInPDF = $im->getNumberImages();

    if ($noOfPagesInPDF) {

        for ($i = 0; $i < $noOfPagesInPDF; $i++) {

            $url = $filename . '[' . $i . ']';

            $image = new Imagick($url);

            $image->setImageFormat("jpg");

            $image->writeImage(__DIR__ . "/upload/images/" . ($i + 1) . '-' . rand() . '.jpg');
        }

        echo "Конвертация прошла успешно <br>";
    }
}
