<?php

	$minAge = 21;
	
	if(isset($_POST['submit'])){
		
		if(strlen($_POST['mm'])==1)
		$month = '0'.$_POST['mm'];
		else 
		$month = $_POST['mm'];
		$agevar = $_POST['yy'].'/'.$month.'/'.$_POST['dd'];
		
	  $age = strtotime($agevar);

	  $twentyone = strtotime("-" . $minAge . " years");

	  if($age && $twentyone && $age <= $twentyone){

	     header("Location: http://www.youtube.com/")

	  }

	  else{

	    header("Location: http://www.google.com/")

	  }

	}

	?>