<?php
	session_destroy();
	unset($_SESSION);
	echo "<script>location.href='main.php';</script>";
?>