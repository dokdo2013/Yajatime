<html>
<meta charset="utf-8">
<?php
include ('/home/hosting_users/hyeonwoo2016/www/t/template/connect_information.php');

//$conn = new mysqli('localhost', 'sothing', 'sothing97', 'sothing');
//extract($_POST);
$id = $_POST['id'];
$pw = $_POST['pw'];
$q = "SELECT * FROM account WHERE id='$id'";
$result = $conn->query($q);
$name = "SELECT name FROM account WHERE id='$id'";
$name_result = $conn->query($name);

$time = date("Y-m-d H:i:s",time());
$ip = $_SERVER['REMOTE_ADDR'];

if(!$id or !$pw){
    echo "<script>alert(\"아이디, 비밀번호를 입력해 주세요.\");</script>";
	echo "<script>history.back();</script>";
	exit;
}
if($result->num_rows==1) {
	$row = $result->fetch_array(MYSQLI_ASSOC);
	if($row['pw'] == $pw){
    session_start();
	$_SESSION['is_logged'] = 'YES';
	$_SESSION['id'] = $id;
  $_SESSION['name'] = $row['name'];

  $sqllog = "INSERT INTO account_log(time, name, log, ip) VALUES ('$time', '$id', '로그인', '$ip')";
  $conn->query($sqllog);

  $usercheck = $pw / 1000;
  $_SESSION['class'] = $usercheck;
  if($usercheck < 2 && $usercheck > 1){
    echo "<meta http-equiv='refresh' content='0; url=/t/grade_main.php?grade=1'>";
  }else if($usercheck < 3 && $usercheck > 2){
    echo "<meta http-equiv='refresh' content='0; url=/t/grade_main.php?grade=2'>";
  }else if($usercheck < 4 && $usercheck > 3){
    echo "<meta http-equiv='refresh' content='0; url=/t/grade_main.php?grade=3'>";
  }else{
    echo "<meta http-equiv='refresh' content='0; url=/t/main.php'>";
  }

	//echo "<meta http-equiv='refresh' content='0; url=http://야자타임.com/t/main.php'>";

	}
	else {
	echo "<script>alert(\"아이디 또는 비밀번호가 틀렸습니다.\");</script>";
	echo "<meta http-equiv='refresh' content='0; url=/t/account/login.php'>";
	exit;
	}
}
else {
    echo "<script>alert(\"아이디 또는 비밀번호가 틀렸습니다.\");</script>";
	echo "<meta http-equiv='refresh' content='0; url=/t/account/login.php'>";
	exit;
}
$conn->close();
?>
</html>
