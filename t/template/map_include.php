<script>
function resone(i){

          (function ($) {
          $.fn.simpleToggleBtn = function () {

          var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
              checkBox = $("input:checkbox");

          btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
              $(this).addClass("hide");
              $(this).siblings("button").removeClass("hide");
              // 첫번째 버튼 기준으로 input 요소 체크!
              $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

              var insert = i;
              $('.get_value').each(function(){
              if($(this).is(":checked"))
              {
              insert.push($(this).val());
              }
              });
              insert = insert.toString();
              $.ajax({
              url: "cancel.php?value=<?=$cha?>&grade=<?=$grade?>",
              method: "POST",
              data:{insert:insert},
              success:function(data){
              $('#result').html(data);
              }
              });
              // 편집한 부분
                var iplus = i*2+1;
                var vname = "#btn"+iplus;
                var btni = "btn"+iplus;
              // 편집 끝
              $(vname).click(function () {
                if (this.id == btni) {
                  $.ajax({
                  url: "insert.php?value=<?=$cha?>&grade=<?=$grade?>",
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
        var gname = "#btn_group"+i;
  // 실행
        $(gname).simpleToggleBtn();
      }

      function reszero(i){
                (function ($) {
            $.fn.simpleToggleBtn = function () {

                var btns = $(this).find("button"), // 버튼 그룹 내 버튼들;
                    checkBox = $("input:checkbox");

                btns.on("click", function () { // 버튼들 중 클릭한 버튼에 함수;
                    $(this).addClass("hide");
                    $(this).siblings("button").removeClass("hide");
                    // 첫번째 버튼 기준으로 input 요소 체크!
                    $(this).first().hasClass("hide") ? checkBox.attr("checked",true) : checkBox.attr("checked",false);

                    var insert = i;
                    $('.get_value').each(function(){
                    if($(this).is(":checked"))
                    {
                    insert.push($(this).val());
                    }
                    });
                    insert = insert.toString();

                    $.ajax({
                    url: "insert.php?value=<?=$cha?>&grade=<?=$grade?>",
                    method: "POST",
                    data:{insert:insert},
                    success:function(data){
                    $('#result').html(data);
                    }
                    });
                    var iplus = i*2+2;
                    var vname = "#btn"+iplus;
                    var btni = "btn"+iplus;
                    $(vname).click(function () {
                      if (this.id == btni) {
                        $.ajax({
                        url: "cancel.php?value=<?=$cha?>&grade=<?=$grade?>",
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
              var gname = "#btn_group"+i;
        // 실행
              $(gname).simpleToggleBtn();
      }
</script>
