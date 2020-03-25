<?php include 'config.php';
	




$comment_increment = $_POST['incr_num'];


$query = "SELECT * FROM `users_table` LIMIT $comment_increment";

$query_result = mysqli_query($connection, $query);

if(mysqli_num_rows($query_result)>0){
	while($row = mysqli_fetch_assoc($query_result)){

		echo '<h3>'.$row['author'] . '</h3> ';
		echo '<a>'.$row['msg'] . ' </a> <br/>';
	}
}




	?>