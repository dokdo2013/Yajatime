<html lang="ko">
<?
//include ('/home/hosting_users/hyeonwoo2016/www/t/template/t_header_hanna.php');
$grade=$_GET['grade'];
?>

    <body id="mainbd">
        <form method="GET" style="margin-top: 17%;" action="/t/mch/map.php">
    <!--      <select name="year" style="margin-left: 38.3%; width: 7%">
              <option value="2017">2017년</option>
              <option value="2018">2018년</option>
            </select>
          <select name="month" style="margin-right: 1%; margin-left: 1%; width: 7%">
              <option value="01">1월</option>
              <option value="02">2월</option>
              <option value="03">3월</option>
              <option value="04">4월</option>
              <option value="05">5월</option>
              <option value="06">6월</option>
              <option value="07">7월</option>
              <option value="08">8월</option>
              <option value="09">9월</option>
              <option value="10">10월</option>>
              <option value="11">11월</option>
              <option value="12">12월</option>
            </select>
            <select name="day" style="margin-right: 1%; margin-left: 1%; width: 7%;">
              <option value="01">1일</option>
              <option value="02">2일</option>
              <option value="03">3일</option>
              <option value="04">4일</option>
              <option value="05">5일</option>
              <option value="06">6일</option>
              <option value="07">7일</option>
              <option value="08">8일</option>
              <option value="09">9일</option>
              <option value="10">10일</option>
              <option value="11">11일</option>
              <option value="12">12일</option>
              <option value="13">13일</option>
              <option value="14">14일</option>
              <option value="15">15일</option>
              <option value="16">16일</option>
              <option value="17">17일</option>
              <option value="18">18일</option>
              <option value="19">19일</option>
              <option value="20">20일</option>
              <option value="21">21일</option>
              <option value="22">22일</option>
              <option value="23">23일</option>
              <option value="24">24일</option>
              <option value="25">25일</option>
              <option value="26">26일</option>
              <option value="27">27일</option>
              <option value="28">28일</option>
              <option value="29">29일</option>
              <option value="30">30일</option>
              <option value="31">31일</option>
              </select>
              <select name="per" style="margin-right: 38.3%; width: 7%; float: right">
                <option value="00">0교시</option>
                <option value="01">1차시</option>
                <option value="02">2차시</option>
                <option value="03">3차시</option>
              </select>  -->
              <input type="date" name="date" style="width:20%;height: 50px;font-size: 1.5em;text-align: center;margin-left: 35%;margin-bottom: 10px">
              <select name="cha" style="margin-left: 2%;height: 50px;width: 7%;font-size: 1.3em;">
                <option value="0">0교시</option>
                <option value="1">1차시</option>
                <option value="2">2차시</option>
                <option value="3">3차시</option>
              </select>
              <input type="hidden" name="grade" value="<?=$grade?>">
        <input type="submit" id="submit3" value="검색" style="font-size:1.2em">
    </form>
    <script>
    var agent = navigator.userAgent.toLowerCase();
    if (agent.indexOf("msie") != -1) {
        document.write("인터넷 익스플로러 사용시 '연도-월-일'을 직접 입력하셔야 합니다. 숫자 개수 4-2-2를 지켜주세요. (예시 : 2018-05-01) ");
        document.write("<br>");
    }if (agent.indexOf("safari") != -1 && agent.indexOf("chrome") == -1) {
        document.write("사파리 일부 버전의 경우 사용시 '연도-월-일'을 직접 입력하셔야 합니다. 숫자 개수 4-2-2를 지켜주세요. (예시 : 2018-05-01) ");
        document.write("<br>");
    }
    //document.write(agent);
    </script>
    </body>
<?

include ('/home/hosting_users/hyeonwoo2016/www/template/pc_footer.php');

?>
</html>
