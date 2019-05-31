
<?php 

require 'config.php';

$NewLimit = $_POST['NewLimit'];

			$query = "SELECT * FROM `users_table` LIMIT $NewLimit";

			$result = mysqli_query($connection, $query);

			if(mysqli_num_rows($result)>0){

				while ($row = mysqli_fetch_assoc($result)) {
				  echo '<p>';

				  echo $row['author'];

				  echo "<br/>";

				  echo $row['msg'];

				  echo "<br/>";


				}


			}
			
				?>