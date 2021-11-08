<?php
session_start();
$_SESSION['login']=="";
$_SESSION['id']=="";
session_unset();
session_destroy();

setcookie("smart"," ", time()-(86400 *30),"/");
?>
<script language="javascript">
document.location="../../index.php";
</script>
