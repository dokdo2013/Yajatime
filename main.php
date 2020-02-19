<html lang="ko">
    <head>
        <title>LSU - 부산국제고 IT창업동아리</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <meta name="description" content="부산국제고등학교 IT창업동아리 LSU입니다.">
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width, height=device-height">
    </head>
    <body bgcolor="#FF9696">
<div id="lsu" style="margin-top:5%">
  <div id="lsu_big" onclick="click1()">
      <script>
        function click1() {
          var agent = navigator.userAgent.toLowerCase();
          if (agent.indexOf("msie") != -1) {
              alert("인터넷 익스플로러는 지원하지 않습니다. 크롬이나 다른 브라우저를 이용해주세요.");
              return 0;
          }
          var hour = new Date().getHours();
          var min = new Date().getMinutes();
          if (hour > 7 & hour < 18) {
            location.href="/grade.php?time=y";
          } else if (hour == 18 && min<45) {
            location.href="/grade.php?time=y";
          } else {
              location.href="/grade.php?time=n";
          }
        }
      </script>
    <img src="/image/lsu/big_yjtime.jpg" style="width: 60%; margin-left: auto; margin-right: auto; display: block; margin-top: 1%">
  </div>

  <div id="lsu_big" onclick="click2()">
      <script>
        function click2() {
          var agent = navigator.userAgent.toLowerCase();
          if (agent.indexOf("msie") != -1) {
              alert("인터넷 익스플로러는 지원하지 않습니다. 크롬이나 다른 브라우저를 이용해주세요.");
              return 0;
          }
            location.href="/t/index.php";
        }
      </script>
    <img src="/image/lsu/big_yjtimet.jpg" style="width: 60%; margin-left: auto; margin-right: auto; display: block; margin-top: 3%; margin-bottom:3%">
  </div>
<!--
  <div id="lsu_small" onclick="click3()">
      <script>
        function click3() {
            alert('3월 초 오픈 예정');
        }
      </script>
    <img src="/image/lsu/small_recruit.jpg" style="width: 29%; margin-left: 20%; margin-right: 0.5%; border:2px solid white; margin-top: 3%; margin-bottom:3%">
  </div> -->

  <div>
    <? include ('/home/hosting_users/hyeonwoo2016/www/template/ad_lsuleaderboard.php'); ?>
    <!--<img src="/image/lsu/small_wantad.jpg" style="width: 29%; margin-left: 0.5%; margin-top: 3%; margin-bottom:3%"> -->
  </div>
<br>

</div>
</body>
</html>
