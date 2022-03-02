<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP File Upload</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="banner">
   <div class="div"><span class="text">Загрузите файл</span>
       <input type="file" name="fileToUpload" id="fileToUpload" class="file">
       <input type="submit" name="submit" value="Начать конвертацию" class="submit"></div>
       </div>
</form>
<ul>
  <li>
    <a class="btn" href="history.php">
      <span>история загрузок</span>
    </a>
  </li>
</ul>
</body>
</html>