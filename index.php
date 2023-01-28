<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<html>
<p>kdm ah thork ><</p>
</html>
