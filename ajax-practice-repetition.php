<?php include 'config.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>

	<script type="text/javascript">
		
		$("Document").ready(function(){

			var incr_num = 2;

			$("#moreComment").click(function(){

				incr_num = incr_num + 2;

				$(".commentDiv").load('comment.php', {incr_num: incr_num});


			});


			$('#textField').keyup(function(){
				var input_variable = $('#textField').val();

				$(".display_result").load("search.php", {input_variable: input_variable});



			})


		});



	</script>


</head>


<body>



<br/><br/>
<div class="container">

<div class="commentDiv">

	<?php



$query = "SELECT * FROM `users_table` LIMIT 2";

$query_result = mysqli_query($connection, $query);

if(mysqli_num_rows($query_result)>0){
	while($row = mysqli_fetch_assoc($query_result)){

		echo '<h3>'.$row['author'] . '</h3> ';
		echo '<a>'.$row['msg'] . ' </a> <br/>';
	}
}




	?>
	</div> 

	<br/><br/>

	<button class="btn btn-primary" id="moreComment">ADD MORE COMMENTS</button>
<br/><br/>

<input type="text" name="text_field" id="textField"><br/>

<span class="display_result"></span>

</div>


</body>
</html>