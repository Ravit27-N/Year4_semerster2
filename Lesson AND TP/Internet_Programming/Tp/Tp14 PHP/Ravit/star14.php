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
    $multiArray = array(
      "A" => array(0=>"red",2=>"blue",3=>"green"),
      "B" => array(1=>"orage",2=>"black"),
      "C" => array(0=>"white",4=>"purple",8=>"gray"),
    );
    
    echo $multiArray["A"][3];
    echo "<br>";
    echo $multiArray["C"][8];

  ?>


  
</body>
</html>