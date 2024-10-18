<?php
//1.Binary to decimal conversion
echo bindec('101'). "<br>";

//2.decimal to binary conversion
echo decbin('5') . "<br>";
//3.pow() function
echo pow(2, 3). "<br>";
//4.PHP function to copy string without using strcpy function
function copyString($string){
    $copyStr ="";
    for($i=0 ; $i< strlen( $string); $i++){
        $copyStr .= $string[$i];
    }
    return "copied string is ". $copyStr . "<br>";
}
$str = "saurav";
echo copyString($str);
//5.program to check if character is valid or not
$ch = "gg";
if(ctype_alpha($ch)){
    echo "character is valid";
}else{
    echo "character is not valid";
}

//Arrays 


// Create an array
$fruits = array("apple", "banana", "orange", "mango");

// Accessing elements
echo "First fruit: " . $fruits[0] . "\n"; // Output: First fruit: apple
echo "<br>";
// Adding elements
array_push($fruits, "grapes");
echo "Fruits after adding grapes: ";
echo "<br>";
print_r($fruits); // Output: Fruits after adding grapes: Array ( [0] => apple [1] => banana [2] => orange [3] => mango [4] => grapes )

echo "<br>";
// Removing elements
$removedFruit = array_pop($fruits);
echo "\nRemoved fruit: " . $removedFruit . "\n";  // Output: Removed fruit: grapes
echo "<br>";

// Sorting
sort($fruits);
echo "Fruits sorted alphabetically: ";
print_r($fruits); // Output: Fruits sorted alphabetically: Array ( [0] => apple [1] => banana [2] => mango [3] => orange )

echo "<br>";
// Searching
$key = array_search("banana", $fruits);
if ($key !== false) {
    echo "\nBanana found at index: " . $key . "\n"; // Output: Banana found at index: 1
}
echo "<br>";
echo "<br>";

// Counting elements
$fruitCounts = array_count_values($fruits);
echo "Number of times each fruit appears: ";
print_r($fruitCounts); // Output: Number of times each fruit appears: Array ( [apple] => 1 [banana] => 1 [mango] => 1 [orange] => 1 )

echo "<br>";

?>
