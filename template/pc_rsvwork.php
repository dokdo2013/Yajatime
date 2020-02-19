<?
include_once ('/home/hosting_users/hyeonwoo2016/www/template/DB_information.php');

function rsvwork($db,$while,$when,$where){
  global $conn;
    for ($i=1; $i<=$while; ++$i) {
        if (!array_key_exists("no${i}", $_POST) || !array_key_exists("name${i}", $_POST)) {
            continue;
          }
          $num = $_POST["no${i}"];
          $name = addslashes($_POST["name${i}"]);
          $time = date("Y-m-d H:i:s",time());
          $ip = $_SERVER['REMOTE_ADDR'];
          if ($name != null) {
            $sql = sprintf("UPDATE $db SET $when='%s' WHERE id='%d' and name='%s'",$where, $num, $name);
            $sqllog = "INSERT INTO log(time, num, name, seat, ip) VALUES ('$time', '$num', '$name','$where','$ip')";
            $conn->query($sqllog);

            if ($conn->query($sql) === FALSE) {
              echo "Error updating record: " . $conn->error;
            }
            echo "<script>alert(\"$num $name $where 입력 완료\");</script>";
            $g = $db[0];
            echo "<meta http-equiv='refresh' content='0; url=/grade_main.php?grade=$g&time=y'>";
          }
        }
}
