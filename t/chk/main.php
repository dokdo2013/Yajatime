<?
    $grade=$_GET['grade'];
?>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <link href="/t/style.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width, height=device-height"/>
    </head>
    <body id="mainbd">

        <? if($grade == 1 || $grade == 2): ?>
        <div id='bt1'>
            <img src="/image/1cha.png" style="width: 50%; margin-top: 3%; margin-bottom: 5%; margin-left: auto; margin-right: auto; display: block;" >
          </br>
          <a href="/t/chk/room_action.php?grade=<?=$grade?>&cha=1&room=don"><img src="/image/dongari.png" style="width: 20%; margin-left: 20%; float:left;"></a>
          <a href="/t/chk/room_action.php?grade=<?=$grade?>&cha=1&room=won"><img src="/image/wontak.png" style="width: 20%; float: middle;"><a>
          <a href="/t/chk/room_action.php?grade=<?=$grade?>&cha=1&room=mul"><img src="/image/multi.png" style="width: 20%; margin-right: 20%; float:right;"><a>
          <a href="/t/chk/room_action.php?grade=<?=$grade?>&cha=1&room=sam"><img src="/image/sm.png" style="width: 20%; margin-left:29.5%; float:left;"><a>
          <a href="/t/chk/room_action.php?grade=<?=$grade?>&cha=1&room=etc"><img src="/image/gita.png" style="width: 20%; margin-right:29.5%; float: right;"></a>
        <? else: ?>
        <div id='bt2'>
            <img src="/image/1cha.png" style="width: 50%; margin-top: 3%; margin-bottom: 5%; margin-left: auto; margin-right: auto; display: block;" >
          </br>
          <a href="/t/chk/room_action.php?grade=<?=$grade?>&cha=1&room=mul"><img src="/image/multi.png" style="width: 20%; margin-left: 29%"><a>
          <a href="/t/chk/room_action.php?grade=<?=$grade?>&cha=1&room=etc"><img src="/image/gita.png" style="width: 20%; margin-right: 29%"><a>
        <? endif; ?>
      </div>

      <div id='bt2'>
          <img src="/image/2cha.png" style="width: 50%; margin-top: 3%; margin-left: auto; margin-right: auto; display: block; margin-bottom: 5%;" >
        </br>
          <a href="/t/chk/room_action.php?grade=<?=$grade?>&cha=2&room=mul"><img src="/image/multi.png" style="width: 20%; margin-left: 29%"><a>
          <a href="/t/chk/room_action.php?grade=<?=$grade?>&cha=2&room=etc"><img src="/image/gita.png" style="width: 20%; margin-right: 29%"><a>
      </div>
    </body>
    <? include ('/opt/bitnami/apache2/htdocs/template/pc_footer.php'); ?>
</html>
