<?php 
	require_once 'views/view.php';
	if ($_POST['addUser'])
	{
		$id = $_POST['id'];
		$full_name = $_POST['full_name'];
		$email = $_POST['email'];
		$rank = $_POST['rank'];
		$is_active = $_POST['is_active'];

		try {
			$addUser = $conn->prepare('INSERT INTO user (id, full_name, email, rank, is_active, created_at) values (?, ?, ?, ?, ?, now())');
			$addUser->bindParam(1,$id);
			$addUser->bindParam(2,$full_name);
			$addUser->bindParam(3,$email);
			$addUser->bindParam(4,$rank);
			$addUser->bindParam(5,$is_active);

			$addUser->execute();
			header('location: index.php?controller=user');
		} catch (Exception $e) {
			echo 'problem adduser' . $e->getMessage();
			exit();
		}
	}
 ?>