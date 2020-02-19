<html lang="ko">
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width, height=device-height"/>
</head>
<style>
  table {
    border-collapse: collapse;
    }

    table, td, th {
      border: 1px solid black;
      text-align: center;
      font-size: 1em;
      }
     table#map{
        margin-left: auto;
        margin-right: auto;
        width: auto;
        margin-top: 5%;
       }
     table#now {
          float: right;
          margin-right: 1%;
          margin-top: 1%;
       }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<header>
    <div id="maintl">
        <a href="http://야자타임.com/t/main.php"><img src="image/title.png" style="width: 20%; margin-top:1%; margin-left:1%;"></a>
    </div>
</header>
<body id="mainbd">
<?php
$username = "sothing";
$password = "sothing97";
$dbname = "sothing";

// Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
$dt = date("md");
$td = "1_stud$dt";
  $sql = "SELECT * from $td WHERE first='원탁1' or first='원탁2'";
  $result = mysqli_query($conn, $sql);
  while($row = $result->fetch_assoc()) {
  $name[] = "$row[name]";
  $first[] = "$row[first]";
  $chk[] = "$row[one]";
  $p[] = "$row[pname]";
     }

  //${'n'.$i} = $name;
  //${'f'.$i} = $first;
  //${'c'.$i} = $chk;
  //${'p'.$i} = $i;
  $s1 = "SELECT * from $td WHERE first='원탁1' or first='원탁2'";
  $s2 = "SELECT * from $td WHERE first='원탁1' and one='1'";
  $s21 = "SELECT * from $td WHERE first='원탁2' and one='1'";
  $s3 = "SELECT * from $td WHERE first='원탁1' and one='0'";
  $s31 = "SELECT * from $td WHERE first='원탁2' and one='0'";
  $qr1 = mysqli_query($conn, $s1);
  $qr2 = mysqli_query($conn, $s2);
  $qr21 = mysqli_query($conn, $s21);
  $qr3 = mysqli_query($conn, $s3);
  $qr31 = mysqli_query($conn, $s31);
  $rows1 = mysqli_num_rows($qr1);
  $rows2 = mysqli_num_rows($qr2) + mysqli_num_rows($qr21);
  $rows3 = mysqli_num_rows($qr3) + mysqli_num_rows($qr31);
 ?>
 <script>
 var n_array = [<?php echo '"'.implode('","', $name).'"' ?>];
 var f_array = [<?php echo '"'.implode('","', $first).'"' ?>];
 var c_array = [<?php echo '"'.implode('","', $chk).'"' ?>];
 var p_array = [<?php echo '"'.implode('","', $p).'"' ?>];
 </script>
 <body id=mainbd>
   <table id="now">
       <tr>
         <td>이석인원</td>
         <td>체크</td>
         <td>미체크</td>
       </tr>
       <tr>
         <td style="width:5em;"><?php echo "$rows1"; ?></td>
         <td style="width:5em;"><?php echo "$rows2"; ?></td>
         <td style="width:5em;"><?php echo "$rows3"; ?></td>
       </tr>
   </table>
   <br>
   <br>
   <br>
<table id="map">
  <tr>
      <script>
        for (var i=0; i<10; i++){
          var j = (i+1)*2;
          var k = j-1;
          if (n_array[i] == undefined) {

          } else {
            document.write('<td>');
            document.write(n_array[i]);
            document.write('</td>');
          }

        }
      </script>
  </tr>
  <tr>
      <script>
        for (var i=0; i<10; i++){
          var j = (i+1)*2;
          var k = j-1;
          if (c_array[i] == undefined) {

          } else {
            if (c_array[i] == 1) {


            document.write('<td>');
            document.write("<div id=\"btn_group"+i+"\">");
            document.write("<button id=\"btn"+j+"\" class=\"animation_test\" >CHECK</button>");
            document.write("<button id=\"btn"+k+"\" class=\"animation_test hide\">");document.write(f_array[i]);document.write("</button>");
            document.write("<input type=\"checkbox\" class=\"hide\"/>");
            document.write("</div>");
            document.write('</td>');
          } else {
            document.write('<td>');
            document.write("<div id=\"btn_group"+i+"\">");
            document.write("<button id=\"btn"+k+"\" class=\"animation_test\">");document.write(f_array[i]);document.write("</button>");
            document.write("<button id=\"btn"+j+"\" class=\"animation_test hide\" >CHECK</button>");
            document.write("<input type=\"checkbox\" class=\"hide\"/>");
            document.write("</div>");
            document.write('</td>');
          }
          }

}
</script>
<tr>
    <script>
      for (var i=10; i<20; i++){
        var j = (i+1)*2;
        var k = j-1;
        if (n_array[i] == undefined) {

        } else {
          document.write('<td>');
          document.write(n_array[i]);
          document.write('</td>');
        }
      }
    </script>
</tr>
<tr>
    <script>
      for (var i=10; i<20; i++){
        var j = (i+1)*2;
        var k = j-1;
        if (c_array[i] == undefined) {

        } else {
          if (c_array[i] == 1) {


          document.write('<td>');
          document.write("<div id=\"btn_group"+i+"\">");
          document.write("<button id=\"btn"+j+"\" class=\"animation_test\" >CHECK</button>");
          document.write("<button id=\"btn"+k+"\" class=\"animation_test hide\">");document.write(f_array[i]);document.write("</button>");
          document.write("<input type=\"checkbox\" class=\"hide\"/>");
          document.write("</div>");
          document.write('</td>');
        } else {
          document.write('<td>');
          document.write("<div id=\"btn_group"+i+"\">");
          document.write("<button id=\"btn"+k+"\" class=\"animation_test\">");document.write(f_array[i]);document.write("</button>");
          document.write("<button id=\"btn"+j+"\" class=\"animation_test hide\" >CHECK</button>");
          document.write("<input type=\"checkbox\" class=\"hide\"/>");
          document.write("</div>");
          document.write('</td>');
        }
        }
}
</script>
<tr>
    <script>
      for (var i=20; i<30; i++){
        var j = (i+1)*2;
        var k = j-1;
        if (n_array[i] == undefined) {

        } else {
          document.write('<td>');
          document.write(n_array[i]);
          document.write('</td>');
        }
      }
    </script>
</tr>
<tr>
    <script>
      for (var i=20; i<30; i++){
        var j = (i+1)*2;
        var k = j-1;
        if (c_array[i] == undefined) {

        } else {
          if (c_array[i] == 1) {


          document.write('<td>');
          document.write("<div id=\"btn_group"+i+"\">");
          document.write("<button id=\"btn"+j+"\" class=\"animation_test\" >CHECK</button>");
          document.write("<button id=\"btn"+k+"\" class=\"animation_test hide\">");document.write(f_array[i]);document.write("</button>");
          document.write("<input type=\"checkbox\" class=\"hide\"/>");
          document.write("</div>");
          document.write('</td>');
        } else {
          document.write('<td>');
          document.write("<div id=\"btn_group"+i+"\">");
          document.write("<button id=\"btn"+k+"\" class=\"animation_test\">");document.write(f_array[i]);document.write("</button>");
          document.write("<button id=\"btn"+j+"\" class=\"animation_test hide\" >CHECK</button>");
          document.write("<input type=\"checkbox\" class=\"hide\"/>");
          document.write("</div>");
          document.write('</td>');
        }
        }
}
</script>
<script>
if (c_array[0] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[0];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn1').click(function () {
        if (this.id == 'btn1') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group0").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[0];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn2').click(function () {
        if (this.id == 'btn2') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group0").simpleToggleBtn();
}
if (c_array[1] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[1];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn3').click(function () {
        if (this.id == 'btn3') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group1").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[1];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn4').click(function () {
        if (this.id == 'btn4') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group1").simpleToggleBtn();
}
if (c_array[2] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[2];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn5').click(function () {
        if (this.id == 'btn5') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group2").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[2];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn6').click(function () {
        if (this.id == 'btn6') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group2").simpleToggleBtn();
}
if (c_array[3] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[3];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn7').click(function () {
        if (this.id == 'btn7') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group3").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[3];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn8').click(function () {
        if (this.id == 'btn8') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group3").simpleToggleBtn();
}
if (c_array[4] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[4];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn9').click(function () {
        if (this.id == 'btn9') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group4").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[4];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn10').click(function () {
        if (this.id == 'btn10') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group4").simpleToggleBtn();
}
if (c_array[5] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[5];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn11').click(function () {
        if (this.id == 'btn11') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group5").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[5];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn12').click(function () {
        if (this.id == 'btn12') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group5").simpleToggleBtn();
}
if (c_array[6] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[6];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn13').click(function () {
        if (this.id == 'btn13') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group6").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[6];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn14').click(function () {
        if (this.id == 'btn14') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group6").simpleToggleBtn();
}
if (c_array[7] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[7];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn15').click(function () {
        if (this.id == 'btn15') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group7").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[7];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn16').click(function () {
        if (this.id == 'btn16') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group7").simpleToggleBtn();
}
if (c_array[8] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[8];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn17').click(function () {
        if (this.id == 'btn17') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group8").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[8];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn18').click(function () {
        if (this.id == 'btn18') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group8").simpleToggleBtn();
}
if (c_array[9] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[9];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn19').click(function () {
        if (this.id == 'btn19') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group9").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[9];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn20').click(function () {
        if (this.id == 'btn20') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group9").simpleToggleBtn();
}
if (c_array[10] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[9];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn21').click(function () {
        if (this.id == 'btn21') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group10").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[10];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn22').click(function () {
        if (this.id == 'btn22') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group10").simpleToggleBtn();
}
if (c_array[11] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[11];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn23').click(function () {
        if (this.id == 'btn23') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group11").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[11];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn24').click(function () {
        if (this.id == 'btn24') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group11").simpleToggleBtn();
}
if (c_array[12] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[12];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn25').click(function () {
        if (this.id == 'btn25') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group12").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[12];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn26').click(function () {
        if (this.id == 'btn26') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group12").simpleToggleBtn();
}
if (c_array[13] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[13];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn27').click(function () {
        if (this.id == 'btn27') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group13").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[13];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn28').click(function () {
        if (this.id == 'btn28') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group13").simpleToggleBtn();
}
if (c_array[14] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[14];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn29').click(function () {
        if (this.id == 'btn29') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group14").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[14];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn30').click(function () {
        if (this.id == 'btn30') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group14").simpleToggleBtn();
}
if (c_array[15] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[15];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn31').click(function () {
        if (this.id == 'btn31') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group15").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[15];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn32').click(function () {
        if (this.id == 'btn32') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group15").simpleToggleBtn();
}
if (c_array[16] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[16];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn33').click(function () {
        if (this.id == 'btn33') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group16").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[16];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn34').click(function () {
        if (this.id == 'btn34') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group16").simpleToggleBtn();
}
if (c_array[17] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[17];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn35').click(function () {
        if (this.id == 'btn35') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group17").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[17];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn36').click(function () {
        if (this.id == 'btn36') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group17").simpleToggleBtn();
}
if (c_array[18] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[18];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn37').click(function () {
        if (this.id == 'btn37') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group18").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[18];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn38').click(function () {
        if (this.id == 'btn38') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group18").simpleToggleBtn();
}
if (c_array[19] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[19];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn39').click(function () {
        if (this.id == 'btn39') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group19").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[19];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn40').click(function () {
        if (this.id == 'btn40') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group19").simpleToggleBtn();
}
if (c_array[20] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[20];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn41').click(function () {
        if (this.id == 'btn41') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group20").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[20];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn42').click(function () {
        if (this.id == 'btn42') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group20").simpleToggleBtn();
}
if (c_array[21] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[21];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn43').click(function () {
        if (this.id == 'btn43') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group21").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[21];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn44').click(function () {
        if (this.id == 'btn44') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group21").simpleToggleBtn();
}
if (c_array[22] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[22];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn45').click(function () {
        if (this.id == 'btn45') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group22").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[22];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn46').click(function () {
        if (this.id == 'btn46') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group22").simpleToggleBtn();
}
if (c_array[23] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[23];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn47').click(function () {
        if (this.id == 'btn47') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group23").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[23];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn48').click(function () {
        if (this.id == 'btn48') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group23").simpleToggleBtn();
}
if (c_array[24] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[24];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn49').click(function () {
        if (this.id == 'btn49') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group24").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[24];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn50').click(function () {
        if (this.id == 'btn50') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group24").simpleToggleBtn();
}
if (c_array[25] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[25];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn51').click(function () {
        if (this.id == 'btn51') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group25").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[25];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn52').click(function () {
        if (this.id == 'btn52') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group25").simpleToggleBtn();
}
if (c_array[26] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[26];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn53').click(function () {
        if (this.id == 'btn53') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group26").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[26];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn54').click(function () {
        if (this.id == 'btn54') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group26").simpleToggleBtn();
}
if (c_array[27] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[27];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn55').click(function () {
        if (this.id == 'btn55') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group27").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[27];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn56').click(function () {
        if (this.id == 'btn56') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group27").simpleToggleBtn();
}
if (c_array[28] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[28];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn57').click(function () {
        if (this.id == 'btn57') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group28").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[28];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn58').click(function () {
        if (this.id == 'btn58') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group28").simpleToggleBtn();
}
if (c_array[29] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[29];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn59').click(function () {
        if (this.id == 'btn59') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group29").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[29];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn60').click(function () {
        if (this.id == 'btn60') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group29").simpleToggleBtn();
}
if (c_array[30] == 1) {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[30];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "cancel.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn61').click(function () {
        if (this.id == 'btn61') {
          $.ajax({
          url: "insert.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group30").simpleToggleBtn();
} else {
  (function ($) {
  $.fn.simpleToggleBtn = function () {

  var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
      checkBox = $("input:checkbox");

  btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
      $(this).addClass("hide");
      $(this).siblings("button").removeClass("hide");
      // 첫번째 버튼 기준으로 input 요소 체크!
      $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

      var insert = p_array[30];
      $('.get_value').each(function(){
      if($(this).is(":checked"))
      {
      insert.push($(this).val());
      }
      });
      insert = insert.toString();
      $.ajax({
      url: "insert.php",
      method: "POST",
      data:{insert:insert},
      success:function(data){
      $('#result').html(data);
      }
      });
      $('#btn62').click(function () {
        if (this.id == 'btn62') {
          $.ajax({
          url: "cancel.php",
          method: "POST",
          data:{insert:insert},
          success:function(data){
          $('#result').html(data);
          }
          });
        }
      });
  });
  }
  }(jQuery));

  // 실행
  $("#btn_group30").simpleToggleBtn();
}
</script>
  </tr>
</table>


<?php

/*    for($i=0;$i<196;$i++){
        $sql = "SELECT * from $td WHERE pname='$i'";
        $result = mysqli_query($conn, $sql);
        // 예외처리 구간
        if($i == 13 || $i == 181)   echo "</br>";
        if($i == 6 || $i == 13 || $i == 76 || $i == 83 || $i == 174 || $i == 181){
            echo "</br>";
            continue;
        }

        if($i < 83 && $i >75)   continue;
        if($i > 185)    continue;


        //DB처리 구간
        while($row = $result->fetch_assoc()) {
            $c1 = "$row[id]";
            $c2 = "$row[name]";
        }
        echo "$c1 $c2  ";
        if(($i % 7) == 6)   echo "</br>";
        if(($i % 14) == 13) echo "</br>";

    }*/
?>
</body>
<footer>
  <div id="foot">
    <a href="http://야자타임.com/information/index.html"><p id="fopp">이용약관</p></a>
    <p id="fop">LSU(Let's Start Up) 부산광역시 부산진구 백양관문로 105-70       부장: 안창영    차장 : 최성민     부원: 박동훈, 정연우, 임지환, 강규빈, 박찬호     객원 : 조현우</p>
   </div>
</footer>
</html>
