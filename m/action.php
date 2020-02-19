<?
$grade = $_GET['grade'];
$time = $_GET['time'];
$cha = $_GET['cha'];
$room = $_GET['room'];

// HTML head, header
include ('/home/hosting_users/hyeonwoo2016/www/grade_template/m_frontend.php');
include ('/home/hosting_users/hyeonwoo2016/www/template/m_rsvwork.php');

// DB 정보
include ('/home/hosting_users/hyeonwoo2016/www/template/DB_information.php');
$dt = date("Ymd");
$td = "${grade}_stud$dt";

function check($room){
    global $td, $conn;
    $qd1 = "SELECT * from $td WHERE first='${room}1'";
    $qd2 = "SELECT * from $td WHERE first='${room}2'";
    $dbd1 = mysqli_query($conn, $qd1);
    $total_rowsd1 = mysqli_num_rows($dbd1);
    $dbd2 = mysqli_query($conn, $qd2);
    $total_rowsd2 = mysqli_num_rows($dbd2);
    $cnt=0;
    if($total_rowsd1 != 0)
      $cnt++;
    if($total_rowsd2 != 0)
      $cnt+=2;
    return $cnt;
}

// HTML body
switch($room){
    case 'don' :
        $cnt = check('동아리실');
        include ('/home/hosting_users/hyeonwoo2016/www/m/rsv/body_don.php'); break;
    case 'won' :
        $cnt = check('원탁');
        include ('/home/hosting_users/hyeonwoo2016/www/m/rsv/body_won.php'); break;
    case 'mul' :
        include ('/home/hosting_users/hyeonwoo2016/www/m/rsv/body_mul.php'); break;
    case 'out' :
        include ('/home/hosting_users/hyeonwoo2016/www/m/rsv/body_out.php'); break;
    case 'hom' :
        include ('/home/hosting_users/hyeonwoo2016/www/m/rsv/body_hom.php'); break;
    case 'sam' :
        include ('/home/hosting_users/hyeonwoo2016/www/m/rsv/body_sam.php'); break;
    case 'etc' :
        include ('/home/hosting_users/hyeonwoo2016/www/m/rsv/body_etc.php'); break;
    default :
        echo "<script>alert(\"비정상적인 접근입니다.\")</script>";
        echo "<meta http-equiv='refresh' content='0; url=/m/index.php'>";
        break;
}

// HTML footer
include ('/home/hosting_users/hyeonwoo2016/www/template/m_footer.php');
?>
