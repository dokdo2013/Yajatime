  <!-- 첫번째 줄부터 다섯번째 줄까지 -->
  <? for($a=0;$a<=8;$a+=2){ ?>
      <table id='map'>
        <tr>
        <?  for($i=$a*7;$i<=$a*7+6;$i++){
              echo "<td>${'n'.$i}</td>";
            }?>
        </tr>

        <tr>
              <?php
                for($j=$a*7;$j<=$a*7+6;$j++){
                      echo "<td>";
                      if(${'f'.$j}==null){
                        echo"<div id='btn_group".$j."'>"; ?>
                        <button id='btn<?=$j*2+1?>' class='animation_test' style='background-color:honeydew'  ></button>
                        <?echo"</div>";
                        continue;
                      }
                      include ('/home/hosting_users/hyeonwoo2016/www/t/template/map_switch.php');
                }?>
      </tr>

      <tr>
      <?  for($i=$a*7+7;$i<=$a*7+13;$i++){
            echo "<td>${'n'.$i}</td>";
          } ?>
      </tr>

      <tr>
            <?php
              for($j=$a*7+7;$j<=$a*7+13;$j++){
                    echo "<td>";
                    if(${'f'.$j}==null){
                      echo"<div id='btn_group".$j."'>"; ?>
                      <button id='btn<?=$j*2+1?>' class='animation_test' style='background-color:honeydew'  ></button>
                      <?echo"</div>";
                      continue;
                    }
                    include ('/home/hosting_users/hyeonwoo2016/www/t/template/map_switch.php');
              }?>
    </tr>

    </table>
<? } ?>

<!-- 여섯번째 줄 -->

    <table id='map'>
      <tr>
      <?  for($i=70;$i<=76;$i++){
            echo "<td>${'n'.$i}</td>";
          }?>
      </tr>

      <tr>
            <?php
              for($j=$a*7;$j<=$a*7+6;$j++){
                    echo "<td>";
                    if(${'f'.$j}==null){
                      echo"<div id='btn_group".$j."'>"; ?>
                      <button id='btn<?=$j*2+1?>' class='animation_test' style='background-color:honeydew'  ></button>
                      <?echo"</div>";
                      continue;
                    }
                    include ('/home/hosting_users/hyeonwoo2016/www/t/template/map_switch.php');
              }?>

    </tr>
  </table>

  <!-- 일곱번째 줄부터 열다섯번째 줄까지 -->
  <? for($a=11;$a<=26;$a+=2){ ?>
      <table id='map'>
        <tr>
        <?  for($i=$a*7;$i<=$a*7+6;$i++){
              echo "<td>${'n'.$i}</td>";
            }?>
        </tr>

        <tr>
              <?php
                for($j=$a*7;$j<=$a*7+6;$j++){
                      echo "<td>";
                      if(${'f'.$j}==null){
                        echo"<div id='btn_group".$j."'>"; ?>
                        <button id='btn<?=$j*2+1?>' class='animation_test' style='background-color:honeydew'  ></button>
                        <?echo"</div>";
                        continue;
                      }
                      include ('/home/hosting_users/hyeonwoo2016/www/t/template/map_switch.php');
                }?>
      </tr>

      <tr>
      <?  for($i=$a*7+7;$i<=$a*7+13;$i++){
            echo "<td>${'n'.$i}</td>";
          } ?>
      </tr>

      <tr>
            <?php
              for($j=$a*7+7;$j<=$a*7+13;$j++){
                    echo "<td>";
                    if(${'f'.$j}==null){
                      echo"<div id='btn_group".$j."'>"; ?>
                      <button id='btn<?=$j*2+1?>' class='animation_test' style='background-color:honeydew'  ></button>
                      <?echo"</div>";
                      continue;
                    }
                    include ('/home/hosting_users/hyeonwoo2016/www/t/template/map_switch.php');
              }?>
    </tr>

    </table>
<? } ?>
