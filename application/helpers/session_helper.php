<?php
	function session() {
		session_start();
		return isset($_SESSION['pawprint']);
	}
?>
