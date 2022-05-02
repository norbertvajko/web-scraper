<?php

$hello ="Hello ";
//echo PHP_VERSION; //version of php
//echo PHP_INT_MAX; // print max int
//echo PHP_FLOAT_MAX * 2;  // prints INF
$firstName = "Vajko";
$lastName ="Norbert";

echo $hello .' '. $firstName .' '. $lastName .'<br />'; //concatenate

//constants   -> don't need dollarsign $ / can't change the value
//define('firstNAME','Vajko');
//echo firstNAME;

//check if constant has defined
//echo defined('firstNAME'); //1 if true

//magic constants   //their value can change
//echo __LINE__; //value of the line number where is used
//echo __FILE__;  //file path

//VARIABLES Variables
//$firstname = 'Vajko';
//$$firstname = "Vajkoa";
//echo $firstname , $firstname;

// DATA TYPES

//# 4 Scalar Types
//    # bool      ->  true 1 / false nothing
//    $completed = true;
//    # int       ->   1,2,3,0,-5 (no decimal)
//    $score = 75;
//    # float     -> 1.5, 0.005, -15.9
//    $price = 8.80;
//    # string    ->  "Hello World"
//    $name = "Iphone 12";
//
//    echo $completed . '<br />';
//    echo $score . '<br />';
//    echo $price . '<br />';
//    echo $name . '<br />';
//
////    echo gettype($completed); //see type of variable
//    var_dump(price ) ; //see type of variable and value



# 4 Compound Types
    # array
//    $companies = [1 , 2 , 3 ,0.5 , 'A' , 'b' , true];
////    echo $companies;
//    print_r($companies);
    # object

    # callable
    # iterate

# 2 Special Types
    #resource
    #null


//FUNCTIONS
//function sum($x,$y) {
//    return $x + $y;
//}
//
//echo '<br />';
//echo sum(2,3);

// ARRAYS
//$myArray = ['PHP' , 'JAVA' , 'Python'];
//echo $myArray[2]; //prints 3rd item
//$myArray[3] = "C++"; //change item in array
//echo $myArray[3];
//print_r($myArray); // print all items in the array
//array_push($myArray , 'C++' , 'Javascript' , 'Ruby'); //push elements
//$myArray = [
//    'php' => "Version 8.3",
//    'JAVA' => "Version 6.3",
//    'Python' => "Version 9.2"
//];
//$myArray['C++'] = "Version 7.7"; //push element to array
//Print like an array

$creator = 'Rasmus Lerdorf';
$extension = '.php';
$website = 'www.php.net';
$isOpenSource = true;

$myArray = [
  'php' => [
      'creator' => $creator,
      'extension' => $extension,
      'website' => $website,
      'isOpenSource' => true,
      'versions' => [
          ['version' => 3.9 , 'releaseDate' => 'Oct 5, 2020'],
          ['version' => 4.0 , 'releaseDate' => 'Jan 5, 2021']
      ]
  ],
    'Python' => [
    'creator' => 'Guido Van Rossum',
    'extension' => '.py',
    'website' => 'www.python.org',
    'isOpenSource' => true,
    'versions' =>[
        ['version' => 8.8 , 'releaseDate' => 'March 5, 2021'],
        ['version' => 8.9 , 'releaseDate' => 'Sep 11, 2021'],
        ['version' => 9.0 , 'releaseDate' => 'Feb 15, 2022']
    ]
]
];

echo '<pre>';
print_r($myArray);
echo '</pre>';
echo '<br/>';
//echo count($myArray); // number of items in the array


echo " if / else" . '<br/>';
$score = 85;
echo "Score: " .' '. $score . '<br/>';
if ($score >= 90) {
    echo 'Good';
}
elseif ($score >=80) {
    echo 'Decent';
}
elseif ($score >=60) {
    echo 'Fair';
}

echo '<br/>';
//
//echo "Loops -> WHILE / DO-WHILE / FOR / FOREACH" . '</br>';
//echo "WHILE" . '<br/>';
//$i = 5;
//while ($i <= 10) {
//    echo $i++ . ' ' ;
//}
//while (true) {
//    if ($i <=10) {
//        break;
//    }
//    echo $i++;
//}
//
//echo "DO WHILE" .'<br/>';
//do {
//    echo $i++;
//} while ($i <10);
//echo "FOR" .'<br/>';
//for ($i =0; $i < 15; $i++) {
//    echo $i . ' ';
//}
echo '<br/>';
echo "FOREACH" .'<br/>';
//$programingLanguages = ['php' , 'Java' , 'Javascript' , 'C++' , 'C#' , 'Python'];
//foreach($programingLanguages as $key => $language) {
//    echo $key . ':' . $language . '<br/>';
//}

$user = [
    'name' => 'Norbi',
    'email'=> 'vajkonorbert@yahoo.com',
    'skills' => [
        'php',
        'java',
        'c++'
    ]
];

foreach($user as $key => $value) {
    echo $key . ': ' . json_encode($value) . '<br/>';
}

echo '<br/>';
echo "SWITCH" . '<br/>';

$paymentStatus = 2;

switch ($paymentStatus) {
    case 1:
        echo "Paid";
        break;
    case 2:
        echo 'Payment declined';
        break;
    case 0:
        echo 'Invalid Payment Status';
        break;
    default:
        echo "Unknown Payment Status";
}
echo '<br/>';

//echo "MATCH" . '<br/>';
//$paymentStatusDisplay = match($paymentStatus) {
//    1 => 'Paid',
//    2 => 'Payment declined',
//    0 => 'Invalid Payment Status',
//};
