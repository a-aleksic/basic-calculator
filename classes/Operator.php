<?php
   /**
    *
    */
   class Operator
   {
     public $aritmeticOperators;
     public $number1;
     public $number2;
     function __construct($aritmeticOperators,$number1,$number2)
     {
       //Creating a new values for the properties
       $this->operator = $aritmeticOperators;
       $this->number1 = $number1;
       $this->number2 = $number2;
     }

     //Running calculator metthod
     public function calculator()
     {
       switch ($this->operator) {
         case '0':
		 echo $this->number1. " "."+". " " .$this->number2." "."=". " "; 
         return $this->number1 + $this->number2;
		 
           break;
         case '1':
		 echo $this->number1. " "."-". " " .$this->number2." "."=". " ";
         return $this->number1 - $this->number2;
           break;
         case '2':
		 echo $this->number1. " "."*". " " .$this->number2." "."=". " ";
         return $this->number1 * $this->number2;
           break;
         case '3':
		 echo $this->number1. " "."/". " " .$this->number2." "."=". " ";
         return $this->number1 / $this->number2;
           break;

         default:
           echo "Error calculating";
           break;
       }
     }
   }

 ?>
