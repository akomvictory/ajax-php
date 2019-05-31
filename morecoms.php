<?php
require 'config.php';

/*$increment = $_POST['newIncr'];



			$query = "SELECT * FROM `users_table` LIMIT $increment";

			$query_qry = mysqli_query($connection, $query);

			if(mysqli_num_rows($query_qry)>0){

				while ($row = mysqli_fetch_assoc($query_qry)) {
					echo '<b>'. $author = $row['author'] . '<br> </b>';

				

					echo $msg = $row['msg']. '<br/>';
				}
			}


*/

			$arrayName = array('victory', 'ben', 'loveth', 'kebt', 'queen', 'valentine', 'keneth');


			if(isset($_POST['user_name'])){
					$new_user_name = $_POST['user_name'];
 							echo "<select>";
					foreach ($arrayName as $value) {

						if(!empty($new_user_name)){
								
						if(strpos($value, $new_user_name)!==false){

									echo "<br/>";


								echo "<option>$value</option>";
								

						}

					}
						
					}

			}


		?>


