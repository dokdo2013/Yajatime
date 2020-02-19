<? include ('/home/hosting_users/hyeonwoo2016/www/template/m_basic_head.php'); ?>
<? include ('/home/hosting_users/hyeonwoo2016/www/template/time_js.php'); ?>
<? include ('/home/hosting_users/hyeonwoo2016/www/template/m_basic_header.php'); ?>

<? $time = $_GET['time']; ?>

  <body style="background-color: #FFD1DC">
    <div id="dongrs" style="margin-top:5%">
      <? include ('/home/hosting_users/hyeonwoo2016/www/template/ad_lsumobile.php'); ?>
      <div onclick="d1input()">
        <? if($time=='y'): ?>
          <script>
            function d1input() { location.href="grade_main.php?grade=1&time=y"; }
          </script>
        <? else: ?>
          <script>
            function d1input() { location.href="grade_main.php?grade=1&time=n"; }
          </script>
        <? endif; ?>
        <img src="/m/image/grade1.png" style="width: 70%; margin-left: auto; margin-right: auto; display: block; margin-top: 5%">
      </div>
      <div onclick="d2input()">
        <? if($time=='y'): ?>
          <script>
            function d2input() { location.href="grade_main.php?grade=2&time=y"; }
          </script>
        <? else: ?>
          <script>
            function d2input() { location.href="grade_main.php?grade=2&time=n"; }
          </script>
        <? endif; ?>
        <img src="/m/image/grade2.png" style="width: 70%; margin-left: auto; margin-right: auto; display: block; margin-top: 5%">
      </div>
      <div onclick="d3input()">
        <? if($time=='y'): ?>
          <script>
            function d3input() { location.href="grade_main.php?grade=3&time=y"; }
          </script>
        <? else: ?>
          <script>
            function d3input() { location.href="grade_main.php?grade=3&time=n"; }
          </script>
        <? endif; ?>
        <img src="/m/image/grade3.png" style="width: 70%; margin-left: auto; margin-right: auto; display: block; margin-top: 5%">
      </div>
    </div>
  </body>
  <? //include ('/home/hosting_users/hyeonwoo2016/www/template/m_footer.php'); ?>
</html>
