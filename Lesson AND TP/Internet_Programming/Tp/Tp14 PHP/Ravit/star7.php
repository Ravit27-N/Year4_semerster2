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
   
    $myFavColor = "red";
    switch($myFavColor){
      case "pink":
        echo "My favorite color is pink!<br>";
      break;
      case "red":
        echo "My favorite color is red!<br>";
      break;
      case "orange":
        echo "My favorite color is orage!<br>";
      break;
      default:
       echo "My favorite color is not pink,red,orange!";
       
    }
    
  ?>
  
</body>
</html>