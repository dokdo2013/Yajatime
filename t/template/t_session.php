<?php
  //error_reporting(E_ALL);
  //ini_set("display_errors", 1);
  session_start();
  if(!isset($_SESSION['id']) || !isset($_SESSION['is_logged'])){
      echo "<script>alert(\"접속 권한이 없습니다.\");</script>";
      echo "<meta http-equiv='refresh' content='0; url=/t/account/login.php'>";
      exit;
    }
?>
