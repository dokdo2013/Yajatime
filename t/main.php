<?php error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();
if(!isset($_SESSION['id']) || !isset($_SESSION['is_logged'])){
  //echo "<script>alert(\"접속 권한이 없습니다.\");</script>";
  echo "<meta http-equiv='refresh' content='0; url=/t/account/login.php'>";
  exit;
}else if($_SESSION['class'] < 2 && $_SESSION['class'] > 1){
  echo "<meta http-equiv='refresh' content='0; url=grade_main.php?grade=1'>";
}else if($_SESSION['class'] < 3 && $_SESSION['class'] > 2){
  echo "<meta http-equiv='refresh' content='0; url=grade_main.php?grade=2'>";
}else if($_SESSION['class'] < 4 && $_SESSION['class'] > 3){
  echo "<meta http-equiv='refresh' content='0; url=grade_main.php?grade=3'>";
}else{
  echo "<script>alert('잘못된 접근입니다.');</script>";
  echo "<meta http-equiv='refresh' content='0; url=/t/account/logout.php'>";
}
?>
