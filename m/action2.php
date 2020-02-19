<?
error_reporting(E_ALL & ~E_NOTICE);
ini_set("display_errors", 1);
$grade = $_GET['grade'];
$time = $_GET['time'];
$group = $_GET['group'];
$cnt = $_GET['cnt'];
$room = $_GET['room'];

// HTML head, header
include ('/home/hosting_users/hyeonwoo2016/www/grade_template/m_frontend.php');

// DB 정보
include ('/home/hosting_users/hyeonwoo2016/www/template/DB_information.php');
$dt = date("Ymd");
$td = "${grade}_stud$dt";
include ('/home/hosting_users/hyeonwoo2016/www/template/m_rsvwork.php');

$room1 = $room.'1';
$room2 = $room.'2';
echo "<body id=\"mainbd\">";
if($group=='0'){
    if($cnt==0||$cnt==2){
        include ('/home/hosting_users/hyeonwoo2016/www/template/m_form6.php');
        rsvwork($td,6,'first',$room1);
    }else if($cnt==1||$cnt==3){
        $qm = "SELECT id, name FROM $td WHERE first='${room}1'";
        $result = mysqli_query($conn, $qm);
        $total_rowsm = mysqli_num_rows($result);
        echo "<br><br>";
        echo "현재 입력된 사람 : ";
        if($total_rowsm > "0"){
            while($row = $result->fetch_array()) {
                $w1="$row[0]";
                $w2="$row[1]";
                echo "</br>";
                echo "$w1 ";
                echo "$w2 ";
            }
        }

        include ('/home/hosting_users/hyeonwoo2016/www/template/m_form6.php');
        rsvwork($td,6,'first',$room1);
        $conn->close();
    }
  }
  else if($group=='1'){
      if($cnt==0||$cnt==1){
          include ('/home/hosting_users/hyeonwoo2016/www/template/m_form6.php');
          rsvwork($td,6,'first',$room2);
      }else if($cnt==2||$cnt==3){
          $qm = "SELECT id, name FROM $td WHERE first='${room}2'";
          $result = mysqli_query($conn, $qm);
          $total_rowsm = mysqli_num_rows($result);
          echo "<br><br>";
          echo "현재 입력된 사람 : ";
          if($total_rowsm > "0"){
              while($row = $result->fetch_array()) {
                  $w1="$row[0]";
                  $w2="$row[1]";
                  echo "</br>";
                  echo "$w1 ";
                  echo "$w2 ";
              }
          }
          include ('/home/hosting_users/hyeonwoo2016/www/template/m_form6.php');
          rsvwork($td,6,'first',$room2);
          $conn->close();
      }
  }
echo "</body>";
?>
