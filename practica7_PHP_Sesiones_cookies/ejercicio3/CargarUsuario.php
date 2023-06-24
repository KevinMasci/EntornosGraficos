<?php 
      if(isset($_POST['user']))
      {
          $user = $_POST['user'];
          setcookie("usuario", $user, time() + 3600*24*365);
      }
      
      header("Location: index.php");
      exit;
?>