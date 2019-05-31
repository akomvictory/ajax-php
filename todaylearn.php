<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script type="text/javascript" src="js/jquery.min.js">
		
	</script>

	<script type="text/javascript">

		$(document).ready(function(evt){

			$(".input_field").keyup(function(){

				var user_name = $(".input_field").val();

				$(".testa").load("morecoms.php", {user_name: user_name},
					
					);


			});


		});
		
</script>
</head>
<body><br/><br/>

<?php

$a_array = array("a" => "abc", "a" => "abc", "b" => "babc", "c" => "cabc", 4);

echo count(array_sum($a_array));



class Foo
{
    
    
    public function bar() {
      $bar = 'property';
    }
}

$obj = new Foo();
echo $obj->bar
?>

<br/><br/><br/>


<input type="text" class="input_field" name="input_field">
	<span class="testa"></span>


	<br/><br/><br/>

<?php


$arrayNumbers= array(2,3,3,3,3, 4, 5, 6, 7, 8, 9, 10);

foreach ($arrayNumbers as $oddNumber) {

	 if($oddNumber % 2==1){

	 	//echo $oddNumber;



	 	
}
}




		class test{

			static public function getNew(){

				return new static;


			}


		}

		class child extends test{


		}

$obj1 = new test();
$obj2 = $obj1;

$obj3 = test::getNew();
var_dump($obj3 instanceof child);




			for($muiltiplier =1; $muiltiplier<=12; $muiltiplier++){

				$increment_number =  1;

				$increment_number ++;
				  echo $muiltiplier * $increment_number;  "<br/>"; 

				  echo "<br/>";

				
				



			}



if(preg_match('/p{2,}/', 'aj p2pp66pppgl')){
	echo 'found';
}
		

class names {

protected $setName ='4533';

function __construct(){
		echo 'my name is';
	}






	}



class v extends names {
function bvn(){
		return 'your bvn is'. $this->setName;
	}
}





	
class param {

public static $name = 'foo';

	 function arg(){

	 	return self::$name;

	 }
}
	
	echo param::$name;
$bn  = new v;

echo $bn->bvn();

if(date('D')=='F'){

try {
      $error = 'Always throw this error';
      throw new Exception($error);
     
   }catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage();
   }
   
}
?><br/><br/><br/><br/>
<br/><br/>

an object is an instance of a specific data structure defined inside of a class, that related a particular method or property

variable found inside of a class are deemed as attribute.

a class in which another class inherit properties and method can be refereed to parent or super class

a class that inherit properties and method from another class can be refereed to subclass or child class

</body>
</html>