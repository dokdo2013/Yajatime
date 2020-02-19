<? //include_once ('/home/hosting_users/hyeonwoo2016/www/template/time_js.php'); ?>

<head>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-7503255255011124",
        enable_page_level_ads: true
      });
    </script>
    <title>야자타임 - 부산국제고 온라인 이석일지</title>
    <meta name="description" content="부산국제고등학교 온라인 이석일지 서비스 '야자타임'입니다.">
    <meta charset="utf-8">
    <link href="/css/<?=$grade?>.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width, height=device-height"/>
</head>
<header>
  <?php
    $today = date("Ymd");
    $FOOD_URL= "http://gukje.hs.kr/asp/FOOD/FOOD_1001/main.html?siteid=gukjehs&boardid=FOOD&uid=$today&pagemode=view";
  ?>
    <div id="maintl">
        <a href="/grade_main.php?grade=<?=$grade?>&time=<?=$time?>"><img src="/image/title.png" style="width: 20%; margin-top:1%; margin-left:1%;"></a>
        <a href=<?php echo $FOOD_URL; ?>><img src="/image/FOOD.jpg" style="width: 5%; margin-top:1%; margin-right:1%; float:right"></a>
        <a href="/rsv/check.php?grade=<?=$grade?>&time=<?=$time?>"><img src="/image/check.jpg" style="width: 5%; margin-top:1%; margin-left:1%; margin-right:1%; float:right"></a>
        <a href="/rsv/cancel.php?grade=<?=$grade?>&time=<?=$time?>"><img src="/image/cancel.jpg" style="width: 5%; margin-top:1%; float:right"></a>
        <a href="/rsv/find.php?grade=<?=$grade?>&time=<?=$time?>"><img src="/image/rf.jpg" style="width: 5%; margin-top:1%; margin-right:1%; float:right"></a>
    </div>
</header>
<? include ('/home/hosting_users/hyeonwoo2016/www/template/ad_lsuleaderboard.php'); ?>
