<?php

//index.php

session_start();
require '../vendor/autoload.php';
?>
<?php
   if(!isset($_SESSION["name"]))
   {
    header('Location: index.php');
   }
?>

<?php
   if(isset($_FILES['excel'])){
      $errors= array();
      $file_name = $_FILES['excel']['name'];
      $file_size =$_FILES['excel']['size'];
      $file_tmp =$_FILES['excel']['tmp_name'];
      $file_type=$_FILES['excel']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['excel']['name'])));
      
      $extensions= array("xlsx","xls","xlsm");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 5 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"data.".$file_ext);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="excel" />
         <input type="submit"/>
      </form>
      
   </body>
</html>