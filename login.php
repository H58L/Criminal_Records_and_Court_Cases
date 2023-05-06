<?php
if($isset($_POST['submit'])){

  function validate($data){
      $data=trim($data);     // The trim() function removes whitespace and other predefined characters from both sides of a string.
      $data=stripslashes($data);    // The stripslashes() function removes backslashes
      $data=htmlspecialchars($data);  // The htmlspecialchars() function converts some predefined characters to HTML entities.
      return $data;       
  }
  $uname = validate($_POST['email']);
  $passw = validate($_POST['pass']);
  
  if(empty($uname)){
      header("Location: index.php?error=User name is required");
      exit();
  }
  else if(empty($pass)){
      header("Location: index.php?error=Password is required");
      exit();
  }
  else{
      echo "Valid input";
  }
  }
  else{
  header("Location: index.php");
  exit();
  }
  
?>
