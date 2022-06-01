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
   
   $data = date("m-d");
   if($data == "01-10"){
     echo "Wishing you a very Happy BirthDay";
   }else{
     echo "$data";
   }
    
  ?>
  
</body>
</html>