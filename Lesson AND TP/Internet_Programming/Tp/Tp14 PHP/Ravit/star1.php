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
    define("Email","ravit@example.com");
    echo Email;
    echo"<br>";

    define("myCon",true);
    echo myCon;
    echo"<br>";

    define("ONECONSTANT","Some value");
    echo ONECONSTANT;
    echo"<br><br>";

    define("CONSTANT","Hello world");
    echo CONSTANT;
    echo Constant;
    echo"<br><br>";

    define("GREETING","Hello world", true);
    echo GREETING;
    echo Greeting;

  ?>
  
</body>
</html>