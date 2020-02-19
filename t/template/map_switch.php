<?
switch(${'f'.$j}){
    case '멀티실' :
        if (${'c'.$j} == 1): ?>
          <div id='btn_group<?=$j?>'>
              <button id='btn<?=$j*2+2?>' class='animation_test'>CHECK</button>
              <button id='btn<?=$j*2+1?>' class='animation_test hide' style='background-color:#e0621f'><?=${'f'.$j}?></button>
              <input type='checkbox' class='hide'/>
              </div>
              <script> resone(<?=$j?>); </script>
              <?php else: ?>
              <div id='btn_group<?=$j?>'>
              <button id='btn<?=$j*2+1?>' class='animation_test' style='background-color:#e0621f'><?=${'f'.$j}?></button>
              <button id='btn<?=$j*2+2?>' class='animation_test hide'>CHECK</button>
              <input type='checkbox' class='hide'/>
              </div>
              <script> reszero(<?=$j?>); </script>
            <?php endif;
            echo "</td>";
            break;
    case '동아리실1' :
        if (${'c'.$j} == 1): ?>
            <div id='btn_group<?=$j?>'>
                <button id='btn<?=$j*2+2?>' class='animation_test'>CHECK</button>
                <button id='btn<?=$j*2+1?>' class='animation_test hide' style='background-color:#8e16ba'><?=${'f'.$j}?></button>
                <input type='checkbox' class='hide'/>
                </div>
                <script> resone(<?=$j?>); </script>
                <?php else: ?>
                <div id='btn_group<?=$j?>'>
                <button id='btn<?=$j*2+1?>' class='animation_test' style='background-color:#8e16ba'><?=${'f'.$j}?></button>
                <button id='btn<?=$j*2+2?>' class='animation_test hide'>CHECK</button>
                <input type='checkbox' class='hide'/>
              </div>
              <script> reszero(<?=$j?>); </script>
            <?php endif;
            echo "</td>";
            break;
    case '동아리실2' :
        if (${'c'.$j} == 1): ?>
            <div id='btn_group<?=$j?>'>
                <button id='btn<?=$j*2+2?>' class='animation_test'>CHECK</button>
                <button id='btn<?=$j*2+1?>' class='animation_test hide' style='background-color:#8e16ba'><?=${'f'.$j}?></button>
                <input type='checkbox' class='hide'/>
                </div>
                <script> resone(<?=$j?>); </script>
                <?php else: ?>
                <div id='btn_group<?=$j?>'>
                <button id='btn<?=$j*2+1?>' class='animation_test' style='background-color:#8e16ba'><?=${'f'.$j}?></button>
                <button id='btn<?=$j*2+2?>' class='animation_test hide'>CHECK</button>
                <input type='checkbox' class='hide'/>
              </div>
              <script> reszero(<?=$j?>); </script>
            <?php endif;
            echo "</td>";
            break;
    case '원탁1' :
        if (${'c'.$j} == 1): ?>
            <div id='btn_group<?=$j?>'>
                <button id='btn<?=$j*2+2?>' class='animation_test'>CHECK</button>
                <button id='btn<?=$j*2+1?>' class='animation_test hide' style='background-color:#8e16ba'><?=${'f'.$j}?></button>
                <input type='checkbox' class='hide'/>
                </div>
                <script> resone(<?=$j?>); </script>
                <?php else: ?>
                <div id='btn_group<?=$j?>'>
                <button id='btn<?=$j*2+1?>' class='animation_test' style='background-color:#8e16ba'><?=${'f'.$j}?></button>
                <button id='btn<?=$j*2+2?>' class='animation_test hide'>CHECK</button>
                <input type='checkbox' class='hide'/>
              </div>
              <script> reszero(<?=$j?>); </script>
            <?php endif;
            echo "</td>";
            break;
    case '원탁2' :
        if (${'c'.$j} == 1): ?>
            <div id='btn_group<?=$j?>'>
                <button id='btn<?=$j*2+2?>' class='animation_test'>CHECK</button>
                <button id='btn<?=$j*2+1?>' class='animation_test hide' style='background-color:#8e16ba'><?=${'f'.$j}?></button>
                <input type='checkbox' class='hide'/>
                </div>
                <script> resone(<?=$j?>); </script>
                <?php else: ?>
                <div id='btn_group<?=$j?>'>
                <button id='btn<?=$j*2+1?>' class='animation_test' style='background-color:#8e16ba'><?=${'f'.$j}?></button>
                <button id='btn<?=$j*2+2?>' class='animation_test hide'>CHECK</button>
                <input type='checkbox' class='hide'/>
              </div>
              <script> reszero(<?=$j?>); </script>
            <?php endif;
            echo "</td>";
            break;
    case '외출' :
        if (${'c'.$j} == 1): ?>
            <div id='btn_group<?=$j?>'>
                <button id='btn<?=$j*2+2?>' class='animation_test'>CHECK</button>
                <button id='btn<?=$j*2+1?>' class='animation_test hide' style='background-color:#078414'><?=${'f'.$j}?></button>
                <input type='checkbox' class='hide'/>
                </div>
                <script> resone(<?=$j?>); </script>
                <?php else: ?>
                <div id='btn_group<?=$j?>'>
                <button id='btn<?=$j*2+1?>' class='animation_test' style='background-color:#078414'><?=${'f'.$j}?></button>
                <button id='btn<?=$j*2+2?>' class='animation_test hide'>CHECK</button>
                <input type='checkbox' class='hide'/>
              </div>
              <script> reszero(<?=$j?>); </script>
            <?php endif;
            echo "</td>";
            break;
    case '귀가' :
        if (${'c'.$j} == 1): ?>
            <div id='btn_group<?=$j?>'>
                <button id='btn<?=$j*2+2?>' class='animation_test'>CHECK</button>
                <button id='btn<?=$j*2+1?>' class='animation_test hide' style='background-color:#078414'><?=${'f'.$j}?></button>
                <input type='checkbox' class='hide'/>
                </div>
                <script> resone(<?=$j?>); </script>
                <?php else: ?>
                <div id='btn_group<?=$j?>'>
                <button id='btn<?=$j*2+1?>' class='animation_test' style='background-color:#078414'><?=${'f'.$j}?></button>
                <button id='btn<?=$j*2+2?>' class='animation_test hide'>CHECK</button>
                <input type='checkbox' class='hide'/>
              </div>
              <script> reszero(<?=$j?>); </script>
            <?php endif;
            echo "</td>";
            break;
    case '정독실':
              if (${'c'.$j} == 1): ?>
                  <div id='btn_group<?=$j?>'>
                  <button id='btn<?=$j*2+2?>' class='animation_test'>CHECK</button>
                  <button id='btn<?=$j*2+1?>' class='animation_test hide'><?=${'f'.$j}?></button>
                  <input type='checkbox' class='hide'/>
                </div>
              <script> resone(<?=$j?>); </script>
            <?php else: ?>
                  <div id='btn_group<?=$j?>'>
                  <button id='btn<?=$j*2+1?>' class='animation_test'><?=${'f'.$j}?></button>
                  <button id='btn<?=$j*2+2?>' class='animation_test hide'>CHECK</button>
                  <input type='checkbox' class='hide'/>
                  </div>
              <script> reszero(<?=$j?>); </script>
            <?php endif;
            echo "</td>";
            break;
    default:
    if (${'c'.$j} == 1): ?>
        <div id='btn_group<?=$j?>'>
            <button id='btn<?=$j*2+2?>' class='animation_test'>CHECK</button>
            <button id='btn<?=$j*2+1?>' class='animation_test hide' style='background-color:#005596'><?=${'f'.$j}?></button>
            <input type='checkbox' class='hide'/>
            </div>
            <script> resone(<?=$j?>); </script>
            <?php else: ?>
            <div id='btn_group<?=$j?>'>
            <button id='btn<?=$j*2+1?>' class='animation_test' style='background-color:#005596'><?=${'f'.$j}?></button>
            <button id='btn<?=$j*2+2?>' class='animation_test hide'>CHECK</button>
            <input type='checkbox' class='hide'/>
          </div>
          <script> reszero(<?=$j?>); </script>
        <?php endif;
        echo "</td>";
        break;
      }?>
