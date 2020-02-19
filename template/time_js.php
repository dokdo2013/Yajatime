<script>
var hour = new Date().getHours();
var min = new Date().getMinutes();
if (hour > 7 & hour < 18) {

} else if (hour == 18 && min<45) {

} else {
    //alert ('이용 가능 시간은 오전 8시부터 오후 6시 45분 까지 입니다');
    //location.href="/index.php";
}
</script>
