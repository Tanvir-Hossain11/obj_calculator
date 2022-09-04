<?php


//if(isset($_POST['submit'])){
	
	
	
		
	$sub11=$_POST['sub_1'];
	$sub22=$_POST['sub_2'];
	 $sub33=$_POST['sub_3'];
	
     class Calculator
     {


       public $sub1=10;
        public $sub2=20;
        public $sub3=30;
         // property.............
        
         // methood.....................
     
         public function __construct($n1,$n2,$n3)
         {
             $this->sub1 = $n1;
             $this->sub2 = $n2;
             $this->sub3 = $n3;
         }
         function sum()
         //constructor use for print without echo
         {
             // for static= return $static::$numer1;
             return $this->sub1 + $this->sub2 + $this->sub3;
         }
     
        
     }
     $calculatorObject = new Calculator($sub11,$sub22,$sub33);
     //$calculatorObject = new Calculator();
     echo $calculatorObject->sum() . "<br>";
//}

?>