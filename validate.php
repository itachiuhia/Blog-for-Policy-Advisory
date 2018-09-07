<?php
include ('php/connection.php');

$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){

 if(empty($_POST['email']) || empty($_POST['password'])){
      echo "Username or Password is empty";
 }
 else
 {
 $uname=$_POST['email'];
 $pass=sha1($_POST['password']);

 $sql= "select username,password from admin where username='$uname'";
 $result =$conn->query($sql);
 
 if($result === FALSE) { 
    die($conn->error);
}


$row_cnt = $result->num_rows;
if($row_cnt!=0){
	while($row= $result->fetch_assoc()){
		$dbuser=$row['username'];
		$dbpass=$row['password'];
		if($uname==$dbuser&&$pass==$dbpass){

			//Start session
			  session_start();
              session_destroy();
              session_start();

			$_SESSION['username']=$uname;
			$_SESSION['signed_in'] = true;
			header("Location: upload.php");
			}else{
				echo "Please Enter the valid Credential <a href='Login.php'>Login Again.</a>";
			}
	}
}
 else
 {
 	echo "Username or Password is Invalid";
 }
 }
}

?>