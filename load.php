<?php
require 'config.php';


$commentincr = $_POST['newIncr'];

$qry = "SELECT * FROM `users_table` LIMIT $commentincr";

$qry_result = mysqli_query($connection, $qry);

if(mysqli_num_rows($qry_result)>0):

while ($row = mysqli_fetch_assoc($qry_result)) {
		
		echo '<b>'. $row['author']. '</b> <br/>';
	
		echo $row['msg'] .'<br/>';


	}

endif;

?>
