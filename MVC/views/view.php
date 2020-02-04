
<a href="index.php?controller=user">user</a>
<a href="index.php?controller=blogs">blog</a>
<br>
<?php
	$ctl=$_GET['controller'];

	if ($ctl=='user' && empty($_GET['id'])) {
		echo '<a href="index.php?controller=addUser">add user</a><br>';
		foreach ($resultu as $item){
			$id = $item['id'];
	        echo $item['id'] . ' - '. $item['full_name'] . ' - ';
	 ?>
	        <a href="index.php?controller=user&id=<?php echo $id ?>">update user</a><br>
	        <br>
	 <?php
	    }	        
	}

	elseif ($ctl=='blogs' && empty($_GET['id'])) {
		foreach ($resultb as $item){
			$id = $item['id'];
        	echo $item['id'] . ' - '. $item['title'] . ' - ';
	 ?>
	        <a href="index.php?controller=blogs&id=<?php echo $id ?>">update blog</a><br>
	        <br>
	 <?php
   		}
	}

	elseif ($ctl=='addUser') {
		?>
		<form method="POST" action="index.php?controller=addUser">
			<label>id</label>
			<input type="text" name="id"><br>
			<label>full_name</label>
			<input type="text" name="full_name"><br>
			<label>email</label>
			<input type="text" name="email"><br>
			<label>rank</label>
			<input type="text" name="rank"><br>
			<label>is_active</label>
			<input type="text" name="is_active"><br>
			<input type="submit" value="submit" name="addUser">									
		</form>
		<?php
	}

	if (($ctl=='user' || $ctl == 'updateUser') && $_GET['id']){
		require_once 'controllers/updateUser.php';
		$id = $_GET['id'];
		?>
		<form method="POST" action="index.php?controller=updateUser&id=<?php echo $id ?>">
			<label>id</label>
			<input type="text" name="id" value="<?php echo $resultUd['id'] ?>"><br>
			<label>full_name</label>
			<input type="text" name="full_name" value="<?php echo $resultUd['full_name'] ?>"><br>
			<label>email</label>
			<input type="text" name="email" value="<?php echo $resultUd['email'] ?>"><br>
			<label>rank</label>
			<input type="text" name="rank" value="<?php echo $resultUd['rank'] ?>"><br>
			<label>is_active</label>
			<input type="text" name="is_active" value="<?php echo $resultUd['is_active'] ?>"><br>
			<input type="submit" value="submit" name="updateUser">								
		</form>
		<?php		
	}

	if (($ctl=='blogs' || $ctl == 'profileBlog') && $_GET['id']){
		require_once 'controllers/profileBlog.php';
		$id = $_GET['id'];
		?>
		<form method="POST" action="index.php?controller=profileBlog&id=<?php echo $id ?>">
			<label>id :<?php echo $resultpb['id']; ?></label><br>
			<label>category_id :<?php echo $resultpb['category_id']; ?></label><br>
			<label>user_id :<?php echo $resultpb['user_id']; ?></label><br>
			<label>title :<?php echo $resultpb['title']; ?></label><br>
			<label>view :<?php echo $resultpb['view']; ?></label><br>
			<label>is_active :<?php echo $resultpb['is_active']; ?></label><br>
			<label>content :<?php echo $resultpb['content']; ?></label><br>
			<label>create_at :<?php echo $resultpb['create_at']; ?></label><br>
			<label>update_at :<?php echo $resultpb['update_at']; ?></label><br>
			<br>
			<label>user create</label><br>
			<label>id :<?php echo $resultpu['id']; ?></label><br>
			<label>full_name :<?php echo $resultpu['full_name']; ?></label><br>
			<label>email :<?php echo $resultpu['email']; ?></label><br>
			<label>rank :<?php echo $resultpu['rank']; ?></label><br>
			<label>is_active :<?php echo $resultpu['is_active']; ?></label><br>							
		</form>
		<?php		
	}
 ?>