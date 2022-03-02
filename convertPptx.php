<?php

/**
 * Данная конвертация работает только с *nix system
 */

function convertPptxToPdf(string $filename) {
    $filePath = __DIR__ . '/upload/pdf/';
    $espOutputDirectory = escapeshellarg($filePath);
    $espFile = escapeshellarg($filename);

    $cmd = "sudo libreoffice --headless --convert-to pdf --outdir {$espOutputDirectory} {$espFile}";

    execute($cmd);

    echo "Конвертация прошла успешно <br>";
}

/**
 * @param string $cmd
 * @param string $input
 * @return array
 */
function execute(string $cmd, string $input = '')
{
    $process = proc_open($cmd, [0 => ['pipe', 'r'], 1 => ['pipe', 'w'], 2 => ['pipe', 'w']], $pipes);

    if (false === $process) {
        echo 'Cannot obtain ressource for process to convert file';
    }

    fwrite($pipes[0], $input);
    fclose($pipes[0]);
    $stdout = stream_get_contents($pipes[1]);
    fclose($pipes[1]);
    $stderr = stream_get_contents($pipes[2]);
    fclose($pipes[2]);
    $rtn = proc_close($process);

    return [
        'stdout' => $stdout,
        'stderr' => $stderr,
        'return' => $rtn,
    ];
}