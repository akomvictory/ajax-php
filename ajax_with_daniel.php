<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script type="text/javascript" src="js/jquery.min.js"></script>

	<script type="text/javascript">
		
		$(document).ready(function(evt){

			$(".btn").click(function(){
				$(".read").load("text_vals.php", {
					name: "victory",
				     last: "kekung",
				       class: "upper"}, function(evt){

				       } //end of load callback function

				       );   //end load function
			});

			$(".btn").click(function(){
				$(".read").load("text_vals.php", {
					name: "victory",
				     last: "kekung",
				       class: "upper"}, function(evt){

				       } //end of load callback function

				       );   //end load function
			});
		})
	</script>
</head>
<body>

	<div> <em class="read">SOME RANDOM TEXT</em></div><br/>

	<p class="btn">Click</p><br/><br/>
	<p class="like">LIKE</p>

</body>
</html>