<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php  
		require_once('model/connect.php');
		if (isset($_GET['controller'])) 
		{
			switch ($_GET['controller']) 
			{
				case 'user':
					require_once('controllers/user.php');
					break;
				case 'blogs':
					include_once("controllers/blogs.php");
					break;
				case 'addUser':
					require_once('controllers/addUser.php');
					break;
				case 'updateUser':
					require_once('controllers/updateUser.php');
					break;
				case 'profileBlog':
					require_once('controllers/profileBlog.php');
					break;
					
				default:
					require_once('views/view.php');
					break;
			}
		}
		else
		{
			header('location: index.php?controller');
		}
	?>
</body>
</html>
