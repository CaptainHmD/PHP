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
$array.
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

//! Array Functions

 
echo "<br> Array functions <br> ";

$names =["hamad","ibrahim","ahmed"];

// get length
echo 'length of names: '. count($names);
echo '<br>';
//! search by value and get boolean value
$res=in_array('ahmed',$names);
echo $res . '<br>';

//! add to array at the end
$names[]="name added"; 
print_r($names);
// array_push($array,"hi0","hi"); //you can add infinite at the end
// array_unshift($names,"1","2","3");//you can add infinite at the beginning 
echo '<br>';
//! remove from arrays

$values=array_pop($names); // remove from the end
$values=array_shift($names);// remove at the begins
unset($names[1]);// unset() destroys the specified variables.
print_r($names);
echo '<br>';

//! merge arrays 
$mergedArray=  array_merge($array,$array2);
$mergedArray= [...$array,...$array2];

//!array_combine
$keys = [1,2,3,4];
$colors=["green","blue","yellow","red"];
$tempArray = array_combine($keys,$colors);// take values in array one as a key for values in array2
echo '<br>';
print_r($tempArray);
echo '<br>';

$flipped= array_flip($tempArray);// swap arrays and values
print_r($flipped);
echo '<br>';

//! fill array with numbers

$arrayOfNumbers = range(4,7); //The range() function creates an array containing a range of elements
print_r($arrayOfNumbers);
echo '<br>';

//! map
$newNumbersPlusOne = array_map(function($number){ // array map like js, the first parameter is the function with any name for the values, and the second is the array name
  return "<br>" . $number. ' + 1: '.$number+1;
},$arrayOfNumbers);

//arrow fn
$newNumbersPlusOne = array_map(fn($number)=>"<br> {$number} + 1 = ".$number+1,$arrayOfNumbers);

print_r($newNumbersPlusOne);
echo '<br>';

//!filter
$lessThan6 = array_filter($arrayOfNumbers,function($value){
  return $value < 6;
});

//arrow fn
$lessThan6 = array_filter($arrayOfNumbers,fn($value)=> $value < 6);

print_r($lessThan6);
echo "<br>";
//! reduce 

$sum = array_reduce($lessThan6,fn($previousValue,$currentValue)=>$previousValue+$currentValue);

echo $sum . '<br>';

 
?>