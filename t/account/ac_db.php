<html lang="ko">
    <head>
        <meta charset="utf-8">
        <link href="/t/style.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width, height=device-height"/>
    </head>
    <?php
    $nm = $_POST['name'];
    $cd = $_POST['code'];
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $pwr = $_POST['pwr'];
    $conn = new mysqli('localhost', 'sothing', 'sothing97', 'sothing');
    if ("$pw"=="$pwr") {
      $sql = "SELECT pw FROM account WHERE id='$nm'";
      $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
      if ($row["pw"]=="$cd"){
          $input = "UPDATE account SET pw='$pw' WHERE name='$nm'";
          if ($conn->query($input) === TRUE) {
            echo "<script>alert(\"비밀번호 변경에 성공하였습니다\");location.href='/t/login.php';</script>";
          } else {
            echo "Error updating record: " . $conn->error;
          }
          /*echo "<script>alert(\"회원가입 되었습니다. 메인 화면으로 이동합니다.\");location.replace('./main.php');</script>";*/
      } else {
        echo "<script>alert(\"기존 비밀번호가 맞지 않습니다.\");history.back();</script>";
      }
    }
    } else {
      echo "<script>alert(\"비밀번호가 서로 맞지 않습니다.\");history.back();</script>";
    }
    if($result->num_rows==0 && "$pw"=="$pwr") {
        echo "<script>alert(\"해당되는 사용자가 없습니다.\");history.back();</script>";
    }
    $conn->close();
  ?>
  </html>
