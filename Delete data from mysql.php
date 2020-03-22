<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Delete data from database</title>
</head>
<body>
		<?php
		$server='localhost';
		$username='root';
		$password='';
		$dbname='project';
		$link=mysqli_connect($server,$username,$password,$dbname);
		if(!$link)
		{
			die('faild to connect database:'.mysqli_connect_error());
		}
		$emp_id=$_POST['emp_id'];
		$emp_id=mysqli_real_escape_string($link,$emp_id);
		
		$sql="DELETE FROM employes WHERE id='$emp_id'";
		if(mysqli_query($link,$sql))
		{
			echo'your data delete successfully';
		}else{
			echo'faild to delete data from database:'.$sql.'<br/>'.mysqli_error($link);
		}
		mysqli_close($link);
		?>
		
		<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method='post'>
		<input type="text" name='emp_id' /><br/>
		<input type="submit" value='Delete' />
		</form>
		
		

	
</body>
</html>