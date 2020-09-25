<?php


class Welcome  {
	
	public function header(){
		echo '<!DOCTYPE html>';
        echo '<html lang="en" dir="ltr">';
        echo '<head>';
        echo '<meta charset="utf-8">';
        echo '<title> OOP PHP Calculator</title>';    
        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">';   
        echo '</head>';
        
	}
	
	 
	public function body(){
		
		echo '<body>';
		echo '<div class="container">';
        echo '<div class="header p-5 bg-blue bg-primary mt-2 mb-2 rounded-sm text-white">';
        echo '<h1 class="text-center">OOP PHP Calculator</h1>';
        echo "</div>";
		echo '<div  class="header p-2 bg-blue border border-primary mt-2 mb-2 rounded-sm text-white">';
        echo '<h3  class="text-center text-dark font-weight-bold">';
       
		
	}
	
	public function footer(){
		
		// Footer 
		echo '<footer class="footer fixed-bottom container";>';
        echo '<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">';

         //Copyright
        echo '<div class="footer-copyright text-center py-3">OOP PHP Calculator created in September 2020:';
        echo '<a href="#"> by Aleksa Aleksic</a>';
        echo '</div>';      
        echo '</footer>';
		echo '</footer>';
		echo '</body>';
		echo '</html>';
         
		
       
		
	}
	
}

?>