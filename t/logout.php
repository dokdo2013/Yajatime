<html lang="ko">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width, height=device-height"/>
    </head>

    <?php
    session_start();
    include ('/home/hosting_users/hyeonwoo2016/www/t/template/connect_information.php');
    $time = date("Y-m-d H:i:s",time());
    $ip = $_SERVER['REMOTE_ADDR'];
    //$_SESSION['id'] = $id;
    $id = $_SESSION['id'];
    $sqllog = "INSERT INTO account_log(time, name, log, ip) VALUES ('$time', '$id', '로그아웃', '$ip')";
    $conn->query($sqllog);

    session_destroy();
    ?>

    <meta http-equiv='refresh' content='0;url=/t/main.php'>
</html>
