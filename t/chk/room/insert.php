<?php
if(isset($_POST["insert"]))
{
  $username = "sothing";
  $password = "sothing97";
  $dbname = "sothing";


  $conn = new mysqli($servername, $username, $password, $dbname);
  $dt = date("md");
  $td = "1_stud$dt";
  $sql = "UPDATE $td SET one='1' where pname= '".$_POST["insert"]."'";
  $result = mysqli_query($conn, $sql);
}
?>
