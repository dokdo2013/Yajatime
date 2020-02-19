<? $grade=$_GET['grade']; ?>
<? include ('/home/hosting_users/hyeonwoo2016/www/t/template/t_header_hanna.php'); ?>
    <body id="mainbd">
         <table id="notice">
           <tr>
             <td>
               <?php $today = date("Y.m.d"); echo "$today"; ?>
             </td>
             <td style="width: 20%"></td>
             <td>
               접속자  :  <?=$_SESSION['name']?>
             </td>
           </tr>
         </table>
      <div id="mainbt">
        <a href="action.php?type=mch&grade=<?=$grade?>"><div style="margin-left: 17.8%; width: 29%; height: 55%; background-color: #F5F5F5; float:left;">
          <p style="font-size: 3em; font-style: bold; margin-top: 5%; margin-left: 5%; margin-right: 5%; color:#008000">정독실<br>관리</p>
          <p style="font-size: 1em; margin-top: 60%; margin-left: 10%; margin-right: 10%">정독실 좌석표에 접속하려면 "정독실관리" 버튼을 눌러주세요</p>
        </div></a>

        <a href="action.php?type=sch&grade=<?=$grade?>"><div style="margin-left: 6%; width: 29%; height: 55%; margin-right:17.8%; background-color: #F5F5F5; float:left;">
          <p style="font-size: 3em; font-style: bold; margin-top: 5%; margin-left: 5%; margin-right: 5%; color:#008000">이석일지<br>다시보기</p>
          <p style="font-size: 1em; margin-top: 60%; margin-left: 10%; margin-right: 10%">과거 이석 현황을 보시려면 "이석일지 다시보기" 버튼을 눌러주세요</p>
        </div></a>
        </div>
    </body>
    <? include ('/home/hosting_users/hyeonwoo2016/www/template/pc_footer.php'); ?>
</html>
