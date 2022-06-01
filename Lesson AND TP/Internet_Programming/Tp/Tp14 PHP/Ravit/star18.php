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
    $name = trim($_POST["name"]);
    $number = trim($_POST["number"]);
    $email = trim($_POST["email"]);

    if($name == ""){
      $errorMsg = "error: You did not enter a name";
      $code="1";
      echo $errorMsg;
    }else if($number==""){
      $errorMsg = "error: Please enter numeric value";
      $code = "2";
      echo $errorMsg;
    } else if(is_numeric(trim($number)) == false ){
      $errorMsg = "error: Please enter numeric value.";
      $code = "2";
      echo $errorMsg;
    }else if(strlen($number)<10){
      $errorMsg = "error: Number should be ten degits.";
      echo $errorMsg;
    }else if($email==""){
      $errorMsg = "error: PLease enter email";
      $code = "3";
      echo $errorMsg;
    }else{
      echo "<b>Success</b>";
    }

  ?>
   
</body>
</html>