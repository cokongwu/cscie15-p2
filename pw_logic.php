<?php
    $result = " ";
    $symbols = "~!@#$%^&*";
    for($i=1; $i<= $_POST["amount"]; $i++){    //add specified # of words
	$result = $result . "newword";
	if( $i < $_POST["amount"]){
	    $result = $result . "-";
	}
    }
    if(isset($_POST["number"])){    //if checked, append a number 
        $result = $result . rand(0, 9);
    }
    if(isset($_POST["symbol"])){    //if checked, append a symbol
        $sym = rand(0, 8);
	$result = $result . $symbols[$sym];
    }
  

