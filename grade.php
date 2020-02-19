<? include ('/home/hosting_users/hyeonwoo2016/www/template/pc_basic_head.php'); ?>
<? //include ('/home/hosting_users/hyeonwoo2016/www/template/time_js.php'); ?>
<? include ('/home/hosting_users/hyeonwoo2016/www/template/pc_basic_header.php'); ?>

<? $time = $_GET['time']; ?>

  <body style="background-color: #FFD1DC">
    <style>
          @import url('http://fonts.googleapis.com/earlyaccess/hanna.css');
          body {font-family: 'Hanna';}
        </style>
      <p style="text-align: center; margin-top:5%; margin-bottom: -5%; font-size: 2.7em">해당되는 학년을 선택하세요</p>
    <div id="dongrs" style="margin-top:5%">
      <div id="bt4" onclick="d1input()">
        <? if($time=='y'): ?>
          <script>
            function d1input() { location.href="grade_main.php?grade=1&time=y"; }
          </script>
        <? else: ?>
          <script>
            function d1input() { location.href="grade_main.php?grade=1&time=n"; }
          </script>
        <? endif; ?>
        <img src="/image/grade1.png" style="width: 70%; margin-left: auto; margin-right: auto; display: block; margin-top: 5%">
      </div>
      <div id="bt4" onclick="d2input()">
        <? if($time=='y'): ?>
          <script>
            function d2input() { location.href="grade_main.php?grade=2&time=y"; }
          </script>
        <? else: ?>
          <script>
            function d2input() { location.href="grade_main.php?grade=2&time=n"; }
          </script>
        <? endif; ?>
        <img src="/image/grade2.png" style="width: 70%; margin-left: auto; margin-right: auto; display: block; margin-top: 5%">
      </div>
      <div id="bt4" onclick="d3input()">
        <? if($time=='y'): ?>
          <script>
            function d3input() { location.href="grade_main.php?grade=3&time=y"; }
          </script>
        <? else: ?>
          <script>
            function d3input() { location.href="grade_main.php?grade=3&time=n"; }
          </script>
        <? endif; ?>
        <img src="/image/grade3.png" style="width: 70%; margin-left: auto; margin-right: auto; display: block; margin-top: 5%">
      </div>
    </div>
    <br><br>
    <div>
    <? include ('/home/hosting_users/hyeonwoo2016/www/template/ad_lsuleaderboard.php'); ?>
    <? include ('/home/hosting_users/hyeonwoo2016/www/template/ad_lsuleaderboard.php'); ?>
</div>
  </body>
  <? include ('/home/hosting_users/hyeonwoo2016/www/template/pc_footer.php'); ?>
</html>
