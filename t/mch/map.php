<?
  $grade = $_GET['grade'];
  $cha = $_GET['cha'];
  $date = $_GET['date'];
  switch($cha){
    case '0' :
        $cha1 = 'zero'; $cha2 = 'zeros';
        break;
    case '1' :
        $cha1 = 'one'; $cha2 = 'first';
        break;
    case '2' :
        $cha1 = 'two'; $cha2 = 'second';
        break;
    case '3' :
        $cha1 = 'three'; $cha2 = 'third';
        break;
  }
?>

<!-- 버튼 작동 스크립트 파일 -->

<? include ('/home/hosting_users/hyeonwoo2016/www/t/template/map_include.php'); ?>

<!-- HTML 시작 -->

<? include ('/home/hosting_users/hyeonwoo2016/www/t/template/map_head.php'); ?>
<? include ('/home/hosting_users/hyeonwoo2016/www/t/template/t_header.php'); ?>
<? include ('/home/hosting_users/hyeonwoo2016/www/t/template/connect_information.php'); ?>

<body id="mainbd">

     <?php
      if($date!=''){
          $dt_y = substr($date, 0, 4);
          $dt_m = substr($date, 5, 2);
          $dt_d = substr($date, 8, 2);
          $dt = $dt_y.$dt_m.$dt_d;
          $td = "${grade}_stud$dt";
          $result_query = "SHOW TABLES LIKE '$td'";
          $result_exist = mysqli_query($conn,$result_query);
          $row_exist = mysqli_fetch_array($result_exist);
          if($row_exist == true){
              // 아무 작업도 하지 않는다~~~
          }else{
              echo "<script>alert('날짜에 해당하는 좌석표가 없네요 T_T 날짜를 다시 확인해주세요')</script>";
              echo "<script>history.back();</script>";
          }
      }else{
          $dt = date("Ymd");
          $td = "${grade}_stud$dt";
      }
      $cntquery = "SELECT * FROM $td WHERE 1";
      $cntresult = mysqli_query($conn, $cntquery);
      $rowsm = mysqli_num_rows($cntresult);

     for ($i=0; $i<="$rowsm"; ++$i) {
       $sql = "SELECT * from $td WHERE pname='$i'";
       $result = mysqli_query($conn, $sql);
       while($row = $result->fetch_assoc()) {
         $name = "$row[name]";
         $first = "$row[$cha2]";
         $chk = "$row[$cha1]";
         $pn = "$row[pname]";
         $num = "$row[id]";
          }
       ${'n'.$i} = $num.$name;
       ${'f'.$i} = $first;
       ${'c'.$i} = $chk;
     }
     $s1 = "SELECT * from $td WHERE $cha2='정독실'";
     $s2 = "SELECT * from $td WHERE $cha2='멀티실'";
     $s3 = "SELECT * from $td WHERE $cha2='동아리실1' or $cha2='동아리실2'";
     $s4 = "SELECT * from $td WHERE $cha2='원탁1' or $cha2='원탁2'";
     $s5 = "SELECT * from $td WHERE $cha2 <> '멀티실' and $cha2 <> '정독실' and $cha2 <> '동아리실1' and $cha2 <> '동아리실2' and $cha2 <> '원탁1' and $cha2 <> '원탁2'";
     $s6 = "SELECT * from $td WHERE $cha1='0'";
     $s7 = "SELECT * from $td WHERE $cha1='1'";
     for($i=1;$i<=7;$i++){
       ${'qr'.$i} = mysqli_query($conn,${'s'.$i});
       ${'rows'.$i} = mysqli_num_rows(${'qr'.$i});
     }

      ?>
      <? include ('/home/hosting_users/hyeonwoo2016/www/t/template/map_basetable.php'); ?>
      <?
      switch($grade){
        case '1' :
            include ('/home/hosting_users/hyeonwoo2016/www/t/template/map_grade1.php');
            break;
        case '2' :
            include ('/home/hosting_users/hyeonwoo2016/www/t/template/map_grade2.php');
            break;
        case '3' :
            include ('/home/hosting_users/hyeonwoo2016/www/t/template/map_grade3.php');
            break;
      }
      ?>

</body>
</html>
