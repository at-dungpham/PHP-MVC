<?php
	$id=$_GET['id'];
	$updateUser = $conn->prepare("SELECT * FROM user WHERE id=$id");
	$updateUser->execute();
	$resultUd = $updateUser->fetch();
	include_once 'views/view.php';
	if ($_POST['updateUser'])
	{
		$id = $_POST['id'];
		$full_name = $_POST['full_name'];
		$email = $_POST['email'];
		$rank = $_POST['rank'];
		$is_active = $_POST['is_active'];

		try {
			$addUser = $conn->prepare('UPDATE user SET full_name = :full_name, email = :email, rank = :rank, is_active = :is_active WHERE id =:id');
			$addUser->bindParam(':id',$id);
			$addUser->bindParam(':full_name',$full_name);
			$addUser->bindParam(':email',$email);
			$addUser->bindParam(':rank',$rank);
			$addUser->bindParam(':is_active',$is_active);

			$addUser->execute();
			header('location: index.php?controller=user');
		} catch (Exception $e) {
			echo 'problem adduser' . $e->getMessage();
			exit();
		}
	}
 ?>