<?php include 'config.php';?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>

</head>
<body>

	


	<?php

if(isset($_POST['input_variable']) && !empty($_POST['input_variable'])){

	$author = $_POST['input_variable'];

$query = "SELECT *  FROM `users_table`  where `author` like '$author%'";

$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result)>0){

	while ($row = mysqli_fetch_assoc($result)) {

		echo $row['author'] . '<br/>';
		
	}
}


}
?>
</body>
</html>