<?
$grade = $_GET['grade'];
$time = $_GET['time'];

// HTML head, header
include ('/home/hosting_users/hyeonwoo2016/www/grade_template/pc_frontend.php');
?>
      <body id="mainbd">
        <form method="POST"style="margin-top: 17%;">
          <select name="chkno" style="margin-left: auto; margin-right: auto; display: block;">
            <option value="1">동아리실 I</option>
            <option value="2">동아리실 II</option>
            <option value="3">원탁 1</option>
            <option value="4">원탁 2</option>
            <option value="5">1차 멀티</option>
            <option value="6">2차 멀티</option>
            <option value="7">꿈모리실</option>
            <option value="8">사물함</option>
            <option value="9">1차 외출</option>
            <option value="10">1차 귀가</option>
            <option value="11">2차 외출</option>
            <option value="12">2차 귀가</option>
            <option value="13">전체 이석일지</option>
            <option value="14">1차시 이석일지</option>
            <option value="15">2차시 이석일지</option>
          </select>
        <input type="submit" id="submit" value="검색">
    </form>

<?php
    $chkno = $_POST['chkno'];
    include ('/home/hosting_users/hyeonwoo2016/www/template/DB_information.php');
    $dt = date("Ymd");
    $td = "${grade}_stud$dt";

    function room_find($type,$room){
      global $conn,$td;
        switch($type){
            case '1':
                $qm = "SELECT id, name FROM $td WHERE first='$room'";
                $result = mysqli_query($conn, $qm);
                $total_rowsm = mysqli_num_rows($result);
                if($total_rowsm == "0"){
                  echo "<strong>신청자가 없습니다</strong>";
                }else{
                  echo "<strong> $room 은 $total_rowsm 명입니다.</strong>";
                }
                if($total_rowsm > "0"){
                  while($row = $result->fetch_array()) {
                      $w1="$row[0]";
                      $w2="$row[1]";
                      echo "</br>";
                      echo "$w1 ";
                      echo "$w2 ";
                  }
                }
                mysqli_close($conn);
                break;

            case '2' :
                $qm = "SELECT id, name FROM $td WHERE second='$room'";
                $result = mysqli_query($conn, $qm);
                $total_rowsm = mysqli_num_rows($result);
                if($total_rowsm == "0"){
                  echo "<strong>신청자가 없습니다</strong>";
                }else{
                  echo "<strong> $room 은 $total_rowsm 명입니다.</strong>";
                }
                if($total_rowsm > "0"){
                  while($row = $result->fetch_array()) {
                      $w1="$row[0]";
                      $w2="$row[1]";
                      echo "</br>";
                      echo "$w1 ";
                      echo "$w2 ";
                  }
                }
                $conn->close();
                break;

            case '3' :
                $qm1 = "SELECT first, id, name FROM $td WHERE first <> '$room'";
                $qm2 = "SELECT second, id, name FROM $td WHERE second <> '$room'";
                $result1 = mysqli_query($conn, $qm1);
                $result2 = mysqli_query($conn, $qm2);
                $total_rowsm1 = mysqli_num_rows($result1);
                $total_rowsm2 = mysqli_num_rows($result2);
                $total_rowsm = $total_rowsm1 + $total_rowsm2;
                if($total_rowsm == "0"){
                    echo "<strong>신청자가 없습니다</strong>";
                }else{
                    echo "<strong>총 이석인원은 $total_rowsm 명입니다.</strong>";
                    echo "</br>";
                }
                if($total_rowsm > "0"){
                    echo "</br>";
                    echo "<strong>1차시 이석 : $total_rowsm1 명</strong>";
                    while($row = $result1->fetch_array()) {
                        $w1="$row[0]";
                        $w2="$row[1]";
                        $w3="$row[2]";
                        echo "</br>";
                        echo "$w1 ";
                        echo "$w2 ";
                        echo "$w3";
                    }
                }
                if($total_rowsm > "0"){
                    echo "</br>";
                    echo "</br>";
                    echo "<strong>2차시 이석 : $total_rowsm2 명</strong>";
                    while($row = $result2->fetch_array()) {
                        $w4="$row[0]";
                        $w5="$row[1]";
                        $w6="$row[2]";
                        echo "</br>";
                        echo "$w4 ";
                        echo "$w5 ";
                        echo "$w6";
                    }
                }
                $conn->close();
                break;

            case '4' :
                $qm1 = "SELECT first, id, name FROM $td WHERE first <> '정독실'";
                $result1 = mysqli_query($conn, $qm1);
                $total_rowsm = mysqli_num_rows($result1);
                if($total_rowsm == "0"){
                    echo "<strong>신청자가 없습니다</strong>";
                }else{
                    echo "<strong>1차시 이석인원은 $total_rowsm 명입니다.</strong>";
                    echo "</br>";
                }
                if($total_rowsm > "0"){
                    while($row = $result1->fetch_array()) {
                        $w1="$row[0]";
                        $w2="$row[1]";
                        $w3="$row[2]";
                        echo "</br>";
                        echo "$w1 ";
                        echo "$w2 ";
                        echo "$w3";
                    }
                }
                $conn->close();
                break;

            case '5' :
                $qm2 = "SELECT second, id, name FROM $td WHERE second <> '정독실'";
                $result2 = mysqli_query($conn, $qm2);
                $total_rowsm = mysqli_num_rows($result2);
                if($total_rowsm == "0"){
                    echo "<strong>신청자가 없습니다</strong>";
                }else{
                    echo "<strong>2차시 이석인원은 $total_rowsm 명입니다.</strong>";
                    echo "</br>";
                }
                if($total_rowsm > "0"){
                    while($row = $result2->fetch_array()) {
                        $w4="$row[0]";
                        $w5="$row[1]";
                        $w6="$row[2]";
                        echo "</br>";
                        echo "$w4 ";
                        echo "$w5 ";
                        echo "$w6";
                    }
                }
                $conn->close();
                break;
        }
    }

    function room_find_mul($cha,$g){
      global $conn,$td;
        if($g=='1'){
            if($cha=='1'){
              $qm = "SELECT id, name FROM $td WHERE mul='1멀'";
            }else if($cha=='2'){
              $qm = "SELECT id, name FROM $td WHERE mul='2멀'";
            }else{
              return ;
            }
            $result = mysqli_query($conn, $qm);
            $total_rowsm = mysqli_num_rows($result);
            if($total_rowsm == "0"){
              echo "<strong>신청자가 없습니다</strong>";
            }else{
              echo "<strong> $room 은 $total_rowsm 명입니다.</strong>";
            }
            if($total_rowsm > "0"){
              while($row = $result->fetch_array()) {
                  $w1="$row[0]";
                  $w2="$row[1]";
                  echo "</br>";
                  echo "$w1 ";
                  echo "$w2 ";
              }
            }
            $conn->close();
        }else if($g=='2'){
            if($cha=='1') room_find(1,'멀티실');
            else if($cha=='2') room_find(2, '멀티실');
            else return ;
        }
    }

    switch($chkno){
        case '1': room_find(1,'동아리실1'); break;
        case '2': room_find(1,'동아리실2'); break;
        case '3': room_find(1,'원탁1'); break;
        case '4': room_find(1,'원탁2'); break;
        case '5': room_find_mul(1,$grade); break;
        case '6': room_find_mul(2,$grade); break;
        case '7': room_find(1,'꿈모리실'); break;
        case '8': room_find(1,'사물함'); break;
        case '9': room_find(1,'외출'); break;
        case '10': room_find(1,'귀가'); break;
        case '11': room_find(2,'외출'); break;
        case '12': room_find(2,'귀가'); break;
        case '13': room_find(3,'정독실'); break;
        case '14': room_find(4,'정독실'); break;
        case '15': room_find(5,'정독실'); break;
    }

    ?>
    </div>
  </body>
  <?  include ('/home/hosting_users/hyeonwoo2016/www/template/pc_footer.php'); ?>
</html>
