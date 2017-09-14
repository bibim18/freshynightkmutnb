<?php
	if(isset($_POST["name"]))
	{
			$serverName = "localhost";
			$userName = "topspinp_fn";
			$userPassword = "102404320184320";
			$dbName = "topspinp_fn";

		$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
		$name = $_POST["name"];
		echo $name;
		$sqls = "UPDATE student SET status = '1' WHERE std_id = '$name'";
		mysqli_query($conn,$sqls);
	}
?>