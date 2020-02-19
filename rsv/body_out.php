<body id="mainbd">
   <img src="/image/input.png" id="input">
    <form method="POST"style="margin-top: 5%;">
      <select name="chkno" style="margin-left: auto; margin-right: auto; display: block;">
        <option value="1">1차시</option>
        <option value="2">2차시</option>
        <option value="3">3차시</option>
        <option value="4">1,2차시</option>
        <option value="5">1,3차시</option>
        <option value="6">2,3차시</option>
        <option value="7">1,2,3차시</option>
      </select>
    <input type="text" name="no1" id="textip1" placeholder="학번">
    <input type="text" name="name1" id="textip2" placeholder="이름">
    </br>
    <input type="submit" id="submit" value="등록">
    <p id="sbch"> 정확히 입력했는지 확인하세요. 오타가 있으면 정확히 입력되지 않습니다. </p>
  </form>
</body>

<?
  switch($chkno){
      case 1:
          rsvwork($td,1,'first','외출');
          break;
      case 2:
          rsvwork($td,1,'second','외출');
          break;
      case 3:
          rsvwork($td,1,'third','외출');
          break;
      case 4:
          rsvwork($td,1,'first','외출');
          rsvwork($td,1,'second','외출');
          break;
      case 5:
          rsvwork($td,1,'first','외출');
          rsvwork($td,1,'third','외출');
          break;
      case 6:
          rsvwork($td,1,'second','외출');
          rsvwork($td,1,'third','외출');
          break;
      case 7:
          rsvwork($td,1,'first','외출');
          rsvwork($td,1,'second','외출');
          rsvwork($td,1,'third','외출');
          break;
  }
