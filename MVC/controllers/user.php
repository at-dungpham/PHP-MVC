<?php
	$user=$conn->prepare("SELECT * FROM user");
	$user->execute();
	$resultu = $user->fetchAll();
	include_once ('views/view.php');
?>