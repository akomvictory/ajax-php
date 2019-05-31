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



<br/> 

<div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>

          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>

</div>


</body>
</html>