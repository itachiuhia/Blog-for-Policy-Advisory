<?php
session_start();
  if ($_SESSION['signed_in']) {
  echo "<script>alert(welcome ".$_SESSION['username'].")</script>";
}
else{
  header("Location: Login.php");
}
?>

<!DOCTYPE html>
</html>
<head>
<title>Policy Advisory Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Harsh t@nG0 Gautam">
<link href="css/upload.css" rel='stylesheet' type='text/css' />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<style>
div.tooltext {

  background-color: black;
    width: 315px;height: 231px;
    color:#fff;
    text-align: center;
  border-radius: 6px;
    margin-top: -5px;
    padding: 30px 3px;
    z-index: 1;
  font-size: 20px;
    position: absolute;
    left:73%;top:70%;
    float:right;
    visibility: visible;
}
textarea:hover .tooltext{
    visibility: visible;
} 

/* Dropdown Button */
.dropbtn {
  
    background-color: #e0a322;
    border-radius: 40px;
   border: none;
   padding: 10px;
    cursor: pointer;
}

/* Dropdown menu */
.dropbtn:hover, .dropbtn:focus {
    background-color: #b7861d;
}
.dropdown {
   position: fixed;
  top: 6px;
  left:10px;
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: rgba(0,0,0,0);
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a {
    color: white;
    padding: 3px 3px;
    text-decoration: none;
    display: block;
    border: none;
    text-align: left;
    border-radius: 3px;
}
.dropdown-content a:hover {background-color: #000}
.show {display:block;}




</style>

 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
 
 <!-- Include Editor style. -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.4/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
 <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.4/css/froala_style.min.css" rel="stylesheet" type="text/css" />

</head>
<body style="background-color:#5f675e">

<div class="dropdown">
 <!--<button onclick="myFunction()" class="dropbtn">Dropdown</button> -->
 <img src="images/menu.png" onclick="myFunction()" class="dropbtn">
  <div id="myDropdown" class="dropdown-content">
    <a href="editpost.php">Edit Post</a>
    <a href="adminpanel.php">Admin Panel</a>
    <a href="logout.php">Log Out</a>
  </div>
</div>


	<div class="form-style container" >
<h1>Upload Files</h1>
 <form action="postupload.php" method="post" enctype="multipart/form-data">
   <p>Image Upload </p><input type="file" name="image" placeholder="Related Image" id="image" value="<?php echo "Click here"?>" required/>
   <p>Title </p><input type="text" name="title" placeholder="Title of Post" id="title" required/>
   <p>Author</p> <input type="text" name="author" placeholder="author of title" id="author" required/>
   <p>About The Blog </p>
    
       <textarea name="fulltext" id="text" style="height:500px; width: 571px;" required></textarea>
       <div class="tooltext">Instruction: Insert first line as text upto 500 characters.!!
        <br> Otherwise It will create the havoc in Main page.</div>              
   
                     <input type="submit" value="Upload" name="upload" />
   </form>
</div>

 
    <!-- Include external JS libs. -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.4/js/froala_editor.pkgd.min.js"></script>
 
    <!-- Initialize the editor. -->
    <script> $(function() { $('textarea').froalaEditor() }); </script>

    <!-- Latest compiled and minified JavaScript -->
    <!-- DropDown Menu-->
<script>

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>