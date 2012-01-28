<?php
session_start();
require_once 'db.php';
require_once 'library.php';
if (isset($_POST['user_email'])) 
   {
   $email = htmlspecialchars($_POST['user_email']);
   $password = htmlspecialchars($_POST['user_password']);
   $confirm = htmlspecialchars($_POST['confirm_password']);

   $isvalidemail = checkemail($email);
   $isvalidpsswd = checkpassword($password, $confirm);
   $isemailtaken = isemailtaken($email);
   $password = sha1($password);
   
   if ($isvalidemail == 0){
   header('Location:index.php'); mysql_close($db); exit();}
   
   if ($isvalidpsswd == 0){
   header('Location:index.php'); mysql_close($db); exit();}
   
   if ($isemailtaken == 0) {
   header('Location:index.php'); mysql_close($db); exit();}
   
   $query = "INSERT INTO users (email, password) 
	     VALUES ('$email', '$password')";
   $result = mysql_query($query) or die(mysql_error());
   $query = "INSERT INTO user_selections (state, email, candidate) 
	     VALUES ('DC', '$email', 'DONEGAN')";
   $result = mysql_query($query) or die(mysql_error());
   $_SESSION['user'] = $email;
   header('Location:map.php');
   }
mysql_close($db);
?>
