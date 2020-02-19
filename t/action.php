<?
   $grade=$_GET['grade'];
   $type=$_GET['type'];

include ('/home/hosting_users/hyeonwoo2016/www/t/template/t_header_hanna.php');

switch($type){
  case 'mch' :
      include ('/home/hosting_users/hyeonwoo2016/www/t/mch/mch.php');
      break;
  case 'chk' :
      include ('/home/hosting_users/hyeonwoo2016/www/t/chk/main.php');
      break;
  case 'sch' :
      include ('/home/hosting_users/hyeonwoo2016/www/t/sch/search.php');
      break;
}

include ('/home/hosting_users/hyeonwoo2016/www/template/pc_footer.php'); ?>
</html>
