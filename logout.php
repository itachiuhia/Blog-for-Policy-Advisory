<?php
session_start();

session_destroy();

echo "You have been Logged out. For <a href='index.php'>Home page </a> or Wnat to<a href='login.php'> upload another post </a>"
?>