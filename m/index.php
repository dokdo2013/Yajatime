<html lang="ko">
    <head>
        <title>야자타임</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <meta name="description" content="부산국제고등학교 야간자율학습 통합관리시스템 야자타임입니다.">
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width, height=device-height">
    </head>
<body bgcolor="#1d2123">
<div onclick="pageclick();" style="position:fixed; height: 100%; width: 100%; top:0;left:0;">
<script>
function pageclick() {
  var hour = new Date().getHours();
  var min = new Date().getMinutes();
  if (hour > 7 & hour < 18) {
    location.href="/m/grade.php?time=y";
  } else if (hour == 18 && min<45) {
    location.href="/m/grade.php?time=y";
  } else {
      location.href="/m/grade.php?time=n";
  }
}
</script>
  <img src='/m/image/cover.jpg' style="height: 100%" id="cover">
</div>
</body>
</html>
