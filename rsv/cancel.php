<?
$grade = $_GET['grade'];
$time = $_GET['time'];

// HTML head, header
include ('/home/hosting_users/hyeonwoo2016/www/grade_template/pc_frontend.php');
?>

    <body id="mainbd">
       <img src="/image/input.png" id="input">
        <form method="POST" style="margin-top: 5%;">
        <input type="text" name="no1" id="textip1" placeholder="학번">
        <input type="text" name="name1" id="textip2" placeholder="이름">
        <select name="p" style="margin-left: auto;margin-right: auto; display: block; margin-top: 1%">
          <option value="">차시 선택</option>
          <option value="1차">1차</option>
          <option value="2차">2차</option>
        </select>
        <input type="submit" id="submit" value="등록">
        <p id="sbch"> 정확히 입력했는지 확인하세요 오타는 책임지지 않습니다 </p>
    </form>
<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set("display_errors", 1);
include ('/home/hosting_users/hyeonwoo2016/www/template/DB_information.php');
$dt = date("Ymd");
$td = "${grade}_stud$dt";

    for ($i=1; $i<=6; ++$i) {
        if (!array_key_exists("no${i}", $_POST) || !array_key_exists("name${i}", $_POST)) {
            continue;
        }
        $num = $_POST["no${i}"];
        $name = addslashes($_POST["name${i}"]);
        $p = $_POST["p"];

        if ($p == "1차") {
          $sql = sprintf("UPDATE $td SET first='정독실' WHERE id='%d' and name='%s'", $num, $name);
          $conn->query($sql);
        }
        if ($p == "2차") {
          $sql = sprintf("UPDATE $td SET second='정독실' WHERE id='%d' and name='%s'", $num, $name);
          $conn->query($sql);
        }
        if ($name != null) {
         echo "<script>alert(\"$num $name $p 취소 완료\");</script>";
        }
        if ($conn->query($sql) === FALSE) {
            echo "Error updating record: " . $conn->error;
        }
    }
    mysqli_close($conn);
    ?>
    </body>
    <?  include ('/home/hosting_users/hyeonwoo2016/www/template/pc_footer.php'); ?>
</html>
