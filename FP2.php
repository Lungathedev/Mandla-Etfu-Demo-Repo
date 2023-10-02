<html>
<form action="FP.php" method="post" id="form">
<input type="hidden" name="auth" value="" id="auth">
</form>
<script>
function auth(){
let auth = localStorage.getItem('AC');
document.getElementById("auth").value = auth ;
}
function submit(){
document.getElementById("form").submit();
}
auth();
submit();
</script>
</html>
