<?php

// My next HTML program
echo "<html>";
echo "<body>";
echo "<h1>Hello!</h1>";

echo "My second PHP program!";

// This is a variable : we store the string into the variable
$lineTxt = "This is list item ";

echo "<ul>";

// This loop executes 50 times ... 
for( $i=0; $i < 50; $i++ ) {
	// echo with " marks echo
	echo "<li>$lineTxt $i</li>";
}

echo "</ul>";

echo "</body>";
echo "</html>";

?>