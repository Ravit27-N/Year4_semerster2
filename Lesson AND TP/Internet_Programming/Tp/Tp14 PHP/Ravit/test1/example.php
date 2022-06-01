<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

    // include composer autoload
    require 'vendor/autoload.php';
    // import the Intervention Image Manager Class
    use Intervention\Image\ImageManagerStatic as Image;
    //get image from upload/17.jpg => resize it => write to img/test.jpg
    $img = Image::make('upload/17.jpg')->resize(200,200)->save("img/test.jpg",100);


    echo "Running completed <br> <h1>Please check file test.jpg</h1>";
?>  
</body>
</html>