<body id="mainbd">
   <img src="/image/input.png" id="input">
   <form method="POST" style="margin-top: 5%;">
     <input type="text" name="no1" id="textip1" placeholder="학번" required>
     <input type="text" name="name1" id="textip2" placeholder="이름" required>
     <br>
     <input type="text" name="room1"  placeholder="이석위치" style="width: 10%;
        height: 3%;
        margin-left: auto;
        margin-right: auto;
        display: block;
        margin-top: 5%;" required>
    <input type="submit" id="submit" value="등록">
    <p id="sbch"> 정확히 입력했는지 확인하세요. 오타가 있으면 정확히 입력되지 않습니다. </p>
  </form>
  <?php
    $room1 = $_POST['room1'];
    rsvwork($td,1,'first',$room1);
  ?>
</body>
