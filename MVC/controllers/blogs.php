<?php
	$blogs=$conn->prepare("SELECT * FROM blog ORDER BY id DESC");
	$blogs->execute();
	$resultb = $blogs->fetchAll();
	include_once ('views/view.php');
?>

