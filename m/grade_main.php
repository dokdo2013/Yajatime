<?
$grade = $_GET['grade'];
$time = $_GET['time'];

// HTML head, header
include ('/home/hosting_users/hyeonwoo2016/www/grade_template/m_frontend.php');

// 학년별 파일 include
if($time=='y'){
    if($grade==1)
      include ('/home/hosting_users/hyeonwoo2016/www/grade_template/m_g1_body.php');
    else if($grade==2)
      include ('/home/hosting_users/hyeonwoo2016/www/grade_template/m_g2_body.php');
    else if($grade==3)
      include ('/home/hosting_users/hyeonwoo2016/www/grade_template/m_g3_body.php');
}else if($time=='n'){
    include ('/home/hosting_users/hyeonwoo2016/www/grade_template/m_timeout_body.php');
}

if($grade==''&&$time==''){
    echo "<script>alert(\"비정상적인 접근입니다.\")</script>";
    echo "<meta http-equiv='refresh' content='0; url=/m/index.php'>";
}
// footer
include ('/home/hosting_users/hyeonwoo2016/www/template/m_footer.php');
?>
