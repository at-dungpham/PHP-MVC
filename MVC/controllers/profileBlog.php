<?php 
	$id=$_GET['id'];
	$profileBlog = $conn->prepare("SELECT * FROM blog WHERE id=$id");
	$profileBlog->execute();
	$resultpb = $profileBlog->fetch();

	$user_id = $resultpb['user_id'];
	$profileUser = $conn->prepare("SELECT * FROM user WHERE id=$user_id");
	$profileUser->execute();
	$resultpu = $profileUser->fetch();
	include_once 'views/view.php';

 ?>