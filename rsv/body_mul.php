<?
  if($grade=='1'){
      for ($i=1; $i < 37; $i++) {
        # code...
        if($cha=='1')
          $qq = "SELECT * from $td WHERE first='멀$i'";
        else if($cha=='2')
          $qq = "SELECT * from $td WHERE second='멀$i'";
        $db1 = mysqli_query($conn, $qq);
        $torows = mysqli_num_rows($db1);
        if (!$db1 || $torows == 0) {
          $res = 0;
        } else {
          $res = 1;
        }
        $book[$i] = $res;
      }
      $book[0] = "0"; ?>

      <body id="mainbd">
         <img src="/image/seat.jpg" id="mulseat">
          <form method="POST"style="margin-top: 2%;">
            <select name="st1" id="st">
              <script>
              var resarray = [<?php echo '"'.implode('","',  $book).'"' ?>];
              for (var i = 0; i < 20; i++) {
                if (resarray[i] != 1) {
                  j = i+1;
                  document.write("<option value='멀"+j+"'>컴퓨터"+j+"번</option>");
                }
              }

              for (var h = 20; h < 36; h++) {
                if (resarray[h] != 1) {
                  k = h+1;
                  document.write("<option value='멀"+k+"'>노트북"+k+"번</option>");
                }
              }
              </script>
            </select>
          <input type="text" name="no1" id="multextip1" placeholder="학번">
          <input type="text" name="name1" id="multextip2" placeholder="이름">
          <input type="submit" id="submit" value="등록">
          <p id="sbch"> 정확히 입력했는지 확인하세요. 오타가 있으면 정확히 입력되지 않습니다. </p>
      </form>
      <?
         $seat = $_POST["st1"];
         if($cha=='1'){
           rsvwork($td,1,'first',$seat);
           rsvwork($td,1,'mul','1멀');
         }else if($cha=='2'){
           rsvwork($td,1,'second',$seat);
           rsvwork($td,1,'mul','2멀');
         }
  }else if($grade=='2'||$grade=='3'){ ?>
      <body id="mainbd">
         <img src="/image/input.png" id="input">
          <form method="POST"style="margin-top: 5%;">
          <input type="text" name="no1" id="textip1" placeholder="학번">
          <input type="text" name="name1" id="textip2" placeholder="이름">
          <input type="text" name="no2" id="textip1" placeholder="학번">
          <input type="text" name="name2" id="textip2" placeholder="이름">
          <input type="text" name="no3" id="textip1" placeholder="학번">
          <input type="text" name="name3" id="textip2" placeholder="이름">
          <input type="submit" id="submit" value="등록">
          <p id="sbch"> 정확히 입력했는지 확인하세요. 오타가 있으면 정확히 입력되지 않습니다. </p>
      </form>
      <?
      if($cha=='1')
        rsvwork($td,3,'first','멀티실');
      else if($cha=='2')
        rsvwork($td,3,'second','멀티실'); ?>
      </body>
<? } ?>
