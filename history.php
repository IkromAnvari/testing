<?php
$path = __DIR__."/upload/images/";
$images = scandir($path);
$images = preg_grep("/\.(?:png|gif|jpg)$/i", $images);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/history.css">
</head>
<body>
<div class="wrapper">
    <?php
    foreach($images as $image) {
    ?>
    <div>
        <img src="<?php echo "/upload/images/".$image ?>" class="banner" alt="">
        <p><a href="<?php echo "/upload/images/".$image ?>" download><span>Скачать файл</span></a>
    </div>
    <?php
    }
    ?>

    <div class="footer">
        <p>Все права защищены</p>
    </div>
</div>

</body>
</html>
