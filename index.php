<?php require 'config.php';?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<script type="text/javascript" src="js/jquery.min.js"></script>

	<script type="text/javascript">

			$(document).ready(function(){

				var newIncr = 2;
				$("#more_comments").click(function(evt){
						 newIncr = newIncr + 2;

					$("#comments").load("load.php", 
					{newIncr: newIncr}

						); //end of load function

				})



			});

		

	</script>
</head>
<body>

	<div id='comments'>
<?php  
$qry = "SELECT * FROM `users_table` LIMIT 2";

$qry_result = mysqli_query($connection, $qry);

if(mysqli_num_rows($qry_result)>0):

	while ($row = mysqli_fetch_assoc($qry_result)) {
		
		echo '<b>'. $row['author']. '</b> <br/>';
	
		echo $row['msg'] .'<br/>';
	}

endif;
?>

	</div> <br/>

	<button class="btn btn-primary" id="more_comments">More Comment</button>


</body>
</html>