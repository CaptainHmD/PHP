<h1>Hello</h1>
<?php
/* -------- Output & Comments ------- */

//! outputs 

echo 123,' hello ',10.3;
echo "</br>";  //just new line
print 123;
echo "</br>";  //just new line
print_r([1,3,4]);
echo "</br>";  //just new line
var_dump('Hello');
echo "</br>";  //just new line
var_export('Hello');
//*

echo "</br>";
//! Data types & variables

$name = 'Hamad';
$age = 21;
$has_kids=false;
echo $age;
echo "</br>";
echo $name;
echo "</br>";
echo $name . ' age '. $age;
echo "</br>"; 
echo "$name age $age";
//?
echo "</br>";
echo '5+5= '.'5'+'5';
define('gender','male');//const variable
echo "</br>";
echo gender; //without $

//*

//! arrays
echo "</br>";

//simple array
$array = [1,2,3,4];
$array2 = array(1,2,3,4);
print_r($array2);

echo "</br>";


//Associative array
$assoArray = [
  1=>'h',
  2=>'a',
  3=>'m',
  4=>'a',
  5=>'d'
];

print_r($assoArray);
echo "</br>";

//*

//! Conditionals
?>

