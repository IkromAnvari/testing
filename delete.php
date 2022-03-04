<?php

$filename = $_GET["path"];

$filePath = __DIR__."\\upload\\images\\".$filename;

unlink($filePath);

header("Location: /history.php");
exit();