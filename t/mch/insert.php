<?php
$cha = $_GET['value'];
$grade = $_GET['grade'];
switch($cha){
  case '1' : $cha='one'; break;
  case '2' : $cha='two'; break;
  case '3' : $cha='three'; break;
}
if(isset($_POST["insert"]))
{
  include ('/home/hosting_users/hyeonwoo2016/www/t/template/connect_information.php');
  $dt = date("Ymd");
  $td = "${grade}_stud$dt";
  $sql = "UPDATE $td SET $cha='1' where pname= '".$_POST["insert"]."'";
  $result = mysqli_query($conn, $sql);
}
?>
