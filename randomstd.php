
	<?php
		ini_set('display_errors', 1);
		error_reporting(~0);
		if($_POST["name"] == "one")
		{
			$serverName = "localhost";
			$userName = "topspinp_fn";
			$userPassword = "102404320184320";
			$dbName = "topspinp_fn";

			$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
			mysqli_set_charset($conn,"utf8");
			$sql = "SELECT * FROM student where status = '0' order by rand() limit 1 ";
			$query = mysqli_query($conn,$sql);
			if (!$query) {
				printf("Error: %s\n", $conn->error);
				exit();
			}

			$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
			echo $result["std_id"];
			// $std = $result["std_id"];
			// $sqls = "UPDATE student SET status = '1' WHERE std_id = '$std'";
			// mysqli_query($conn,$sqls);
			mysqli_close($conn);

		}
	?>
