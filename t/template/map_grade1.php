<meta charset="utf-8">

<!-- 첫번째 줄부터 여덟번째 줄까지 -->
  <? for($a=0;$a<=15;$a+=2){ ?>
      <table id='map'>
        <tr>
        <?  for($i=$a*9;$i<=$a*9+8;$i++){
              echo "<td>${'n'.$i}</td>";
            }?>
        </tr>

        <tr>
              <?php
                for($j=$a*9;$j<=$a*9+8;$j++){
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
      <?  for($i=$a*9+9;$i<=$a*9+17;$i++){
            echo "<td>${'n'.$i}</td>";
          }?>
      </tr>

      <tr>
            <?php
              for($j=$a*9+9;$j<=$a*9+17;$j++){
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

<!-- 아홉번째 줄 -->
  <? for($a=16;$a<=17;$a+=2){ ?>
      <table id='map'>
        <tr>
        <?  for($i=$a*9;$i<=$a*9+3;$i++){
              echo "<td>${'n'.$i}</td>";
            }?>
        </tr>

        <tr>
              <?php
                for($j=$a*9;$j<=$a*9+3;$j++){
                      echo "<td>";
                      if(${'f'.$j}==null){
                        echo"<div id='btn_group".$j."'>"; ?>
                        <button id='btn<?=$j*2+1?>' class='animation_test' style='background-color:honeydew'  >　</button>
                        <?echo"</div>";
                        continue;
                      }
                      include ('/home/hosting_users/hyeonwoo2016/www/t/template/map_switch.php');
                }?>
      </tr>

      <tr>
      <?  for($i=$a*9+4;$i<=$a*9+7;$i++){
            echo "<td>${'n'.$i}</td>";
          }?>
      </tr>

      <tr>
            <?php
              for($j=$a*9+4;$j<=$a*9+7;$j++){
                    echo "<td>";
                    if(${'f'.$j}==null){
                      echo"<div id='btn_group".$j."'>"; ?>
                      <button id='btn<?=$j*2+1?>' class='animation_test' style='background-color:honeydew'  >　</button>
                      <?echo"</div>";
                      continue;
                    }
                    include ('/home/hosting_users/hyeonwoo2016/www/t/template/map_switch.php');
              }?>
    </tr>

    </table>
<? } ?>

<!-- 열번째 줄 -->

    <table id='map'>
      <tr>
      <?  for($i=152;$i<=157;$i++){
            echo "<td>${'n'.$i}</td>";
          }?>
      </tr>

      <tr>
            <?php
              for($j=152;$j<=157;$j++){
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

  <!-- 작은 정독실 중앙부 -->
  <table id='map'>
    <? for($a=158;$a<=205;$a+=8){ ?>
          <tr>
          <?  for($i=$a;$i<=$a+7;$i++){
                echo "<td>${'n'.$i}</td>";
              }?>
          </tr>

          <tr>
                <?php
                  for($j=$a;$j<=$a+7;$j++){
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
  <? } ?>
</table>

  <!-- 마지막 줄 -->

      <table id='map'>
        <tr>
        <?  for($i=206;$i<=208;$i++){
              echo "<td>${'n'.$i}</td>";
            }?>
        </tr>

        <tr>
              <?php
                for($j=206;$j<=208;$j++){
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
