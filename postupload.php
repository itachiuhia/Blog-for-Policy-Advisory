<?php
include ('php/connection.php');

if(isset($_POST['upload'])){
  if(empty($_FILES['image'])||empty($_POST['title'])||empty($_POST['author'])||empty($_POST['fulltext'])){
    header("Location: upload.php");
    
  }else{
    $filename=$_FILES['image']['name'];
    $filetype=$_FILES['image']['type'];
    $filesize=$_FILES['image']['size'];
    $filetmp=$_FILES['image']['tmp_name'];

    $title=$_POST['title'];
    $author=$_POST['author'];
    $text=$_POST['fulltext'];


    $file_ext = strrchr($filename, '.');

 //check if its allowed or not
       $whitelist = array(".jpg",".jpeg",".gif",".png"); 
       if (!(in_array($file_ext, $whitelist))) {
           die('not allowed extension,please upload images only');
        }
        

         //check upload type
           $pos = strpos($filetype,'image');
          if($pos === false) {
               die('File Type is not image');
            }
            
          $imageinfo = getimagesize($filetmp);
          if($imageinfo['mime']!= 'image/gif' && $imageinfo['mime']!= 'image/jpeg'&& $imageinfo['mime']!= 'image/jpg'&& $imageinfo['mime']!= 'image/png')
          {
             die('error 2');
           }
       
    $path="image/";
    if(move_uploaded_file($filetmp, $path.$filename)) {
        $result = $conn->query("INSERT INTO post(image,title,author,text) VALUES ('$filename','$title','$author','$text')");
       
       echo "<br>".$conn->error;
       
       if($result) {
                
                header("Location:upload.php");}
              }else if(!$result){
              
            }
  }
}



?>