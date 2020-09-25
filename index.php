<!--Just a simple OOP Calculator
    CREATED by ALEKSA ALEKSIC -->

<?php

require "config.php";


//Start welcome.php
$html = new Welcome(); //Instance created
$html->header();
$html->body();


$arr = array( "I can calculate everything but not the number of moments in a second.",
               "Calculation never made a hero.",
               "Common sense is calculation applied to life.",
			   "Take the risk or lose the chance.",
			   "Whan one loves, one does not calculate.",
			   "I never calculate. That is why those who do, calculate so much less accurately than I.",
			   "Mathematicians stand on each other's shoulders.",
			   "God does arithmetic."
			   ); 
  
// Use array_rand function to returns random key 
$key = array_rand($arr); 
  
// Display the random array element 
echo '<p class="font-italic">' . $arr[$key] .'</p>';
echo '</h3>';
echo '</div>'; //Closing one of tag from Function body in file Welcome.php
 
echo '<div class="header p-2 mt-2 mb-4  bg-blue border">';
echo '<h1 id="screen" class="bg-info text-center text-dark font-weight-bold">';
  if(isset($_POST['submit'])){
	  $aritmeticOperators = $_POST["aritmeticOperators"];
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
	 $answer = new Operator($aritmeticOperators,$number1,$number2);
	 if (is_numeric($number1) && is_numeric($number2)) {
         echo $answer->calculator();
         } else {
        echo '<h5 class="error" style="color:red;";>You have an error. Try to think like a Gauss!</h5>';
          }
     
}
echo '</h1>';
echo '</div>'; //Closing last tag from Function body in file Welcome.php

  
 

$aritmeticOperators = array("+","-","*","/"); //Important... FormHelper!

$form = new FormHelper("POST", ' ');
$form->open_tag();
echo '<div class="form-row align-items-center">';
echo '<div class="col-md-7 mb-3">';

$form->input('number','number1','','First number','form-control');
echo '</div>';
echo '<div class="col-md-2 mb-3">';
$form->select($aritmeticOperators,"aritmeticOperators",4,'form-control');

echo '</div>';
echo '<div class="col-md-5 mb-3">';
$form->input('number','number2','','Secend number','form-control');

echo '</div>';
echo '<div class="col-md-4 mb-3">';
$form->input('submit','submit','Calculate','','form-control btn btn-primary');
$form->close_tag();
echo '</div>';
echo '</div>';


$footer = new Welcome(); //Instance created // End of Welcome.php
$footer->footer();

?>