<?
$grade = $_GET['grade'];
$time = $_GET['time'];

// HTML head, header
include ('./grade_template/pc_frontend.php');

// 학년별 파일 include
if($time=='y'){
    if($grade==1)
      include ('./grade_template/pc_g1_body.php');
    else if($grade==2)
      include ('./grade_template/pc_g2_body.php');
    else if($grade==3)
      include ('./grade_template/pc_g3_body.php');
}else if($time=='n'){
    include ('./grade_template/pc_timeout_body.php');
    include ('/home/hosting_users/hyeonwoo2016/www/template/ad_lsuleaderboard.php');
}

if($grade==''&&$time==''){
    echo "<script>alert(\"비정상적인 접근입니다.\")</script>";
    echo "<meta http-equiv='refresh' content='0; url=/index.php'>";
}
// footer
include ('./template/pc_footer.php');
?>
