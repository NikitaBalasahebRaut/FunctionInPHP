<?php

        function fun()
		{
		  echo "Hello World";
		  echo("<br>");
		}
		
		fun();       //calling function
		
		function add($num1,$num2)
		{
		   $sum = $num1+$num2;
		   echo "sum of two numbers is : $sum";
		   echo("<br>");
		}
		
		add(10,20);
		
		function addFive($num)
		{
		  $num += 5;
		}
		
		function addSix(&$num)
		{
		   $num += 6;
		}
		
		$orignum = 10;
		
		addFive($orignum);
		
		echo "orignal value is $orignum <br />";
		
		addSix($orignum);
		
		echo "orignal value is $orignum <br />";
		
		function addFunction1($num1,$num2)
		{
		  $sum = $num1+$num2;
		  return $sum;
		}
		
		$return_value = addFunction1(10,20);
		echo "returned value from the function : $return_value";
		echo("<br>");
		
		function gun($param = 10)
		{
		  print $param;
		}
		
		gun(20);
		gun();
		
		echo("<br>");
		
		
		  //Dynamic Function Calls
          function demofun()
          {
            echo "Hello<br />";
          }
		 
         $function_holder = "demofun";
         $function_holder();
         
         //Anonymous Functions
         $AnonymousAdd = create_function('$a,$b','return ($a+$b);');
		 echo $AnonymousAdd(10,20);
         echo("<br>");
?>
		