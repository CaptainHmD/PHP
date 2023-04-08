<h1>Hello</h1>
<?php
/* -------- Output & Comments ------- */

//! outputs 

echo 123, ' hello ', 10.3;
echo "<br>";  //just new line
print 123;
echo "<br>";  //just new line
print_r([1, 3, 4]);
echo "<br>";  //just new line
var_dump('Hello');
echo "<br>";  //just new line
var_export('Hello');
//*

echo "<br>";
//! Data types & variables

$name = 'Hamad';
$age = 21;
$has_kids = false;
echo $age;
echo "<br>";
echo $name;
echo "<br>";
echo $name . ' age ' . $age;
echo "<br>";
echo "$name age $age";
//?
echo "<br>";
echo '5+5= ' . '5' + '5';
define('gender', 'male'); //const variable
echo "<br>";
echo gender; //without $

//*

//! arrays
echo "<br>";

//simple array
$array = [1, 2, 3, 4];
$array2 = array(1, 2, 3, 4);
print_r($array2);

echo "<br>";


//Associative array
$assoArray = [
  1 => 'h',
  2 => 'a',
  3 => 'm',
  4 => 'a',
  5 => 'd'
];

print_r($assoArray);
echo "<br>";

//*

//! Conditionals

//$age = 21;

if ($age >= 18) {
  echo 'his age is ' . $age . ', not underage';
  echo "<br>";
}
$time = date("D"); //D day  M month ......
echo $time;
echo "<br>";
if (empty($array)) {
  echo 'empty';
}else{
  echo'not empty';
}
echo "<br>";
echo empty($array) ? 'empty' : 'not empty'; //same as above
echo "<br>";

//*


//! loops

//for loop
echo 'for loop <br>';
for($i=0;$i<count($array2);$i++){
  echo $array2[$i];
  echo "<br>";
}

//$array2 = array(1, 2, 3, 4);
echo 'forEach loop <br>';

foreach($array2 as $element){
  echo $element;
  echo "<br>";
}
//*

//! functions

function test($d=727){
  global $y;// like var
  $i=2;
  $y=727;
  echo $i . '<br>';
}
echo $y; // if we run the function before it will print the value
test();

//normal function
 $normalSum = function($num1,$num2){
  return $num1+$num2;
};// ; wtf is this!

// echo $normalSum(2,3);

//arrow function
$arrowSum = fn($num1,$num2) => $num1+$num2;







 
?>