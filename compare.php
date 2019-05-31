<?php require 'config.php';?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script type="text/javascript" src='js/jquery.min.js'></script>

<script type="text/javascript">


         $("input").keyup(function(){

         var search = ("input").val();

            if(search.length>0){
                $.post("suggestion.php",{sentdata:search}, function(data, status){

                    $("#result").html(data);
 

                });
            }
 
                            });


                       </script>

</head>


 

   <body>
    
    <input type="text" id='search' name="name">

    <p id='result' style="color: red;"></p>                    

</body>

</html>