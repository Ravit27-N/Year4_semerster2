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
    if(isset($_POST["submitBtn"])){
      
      $filename = $_FILES["resume"]["name"];
      $filesize = $_FILES["resume"]["size"]/1024;
      $filetype = $_FILES["resume"]["type"];
      $fileTmpName = $_FILES["resume"]["tmp_name"];
  
      if($filetype == "application/vnd.openxmlformats-officedocument.wordprocessingml.document"){
        if($filesize <= 200){
          $random = rand(1111,9999);
          $newFilename = $random.$filename;

          $uploadPath = "testUpload/".$newFilename;

          if(move_uploaded_file($fileTmpName,$uploadPath)){
            echo "Successful" ."<br>";
            echo "File Name: ". $filename ."<br>";
            echo "File Size: ". $filesize ."<br>";
            echo "File Type: ". $filetype ."<br>";
          }
        }else{
          echo "Maximum upload file size limit is 200kb";
        }
      }else{
        echo "You can only upload a word doc file";
      }

    }


  ?>
   
</body>
</html>