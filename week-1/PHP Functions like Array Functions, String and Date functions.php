<?php
// Array Functions
$fruits = array("apple", "banana", "cherry");

// Count the number of elements in the array
$count = count($fruits);
echo "Number of fruits: " . $count . "<br>";

// Add an element to the end of the array
array_push($fruits, "date");

// Remove and return the last element of the array
$lastFruit = array_pop($fruits);
echo "Last fruit: " . $lastFruit . "<br>";

// Remove and return the first element of the array
$firstFruit = array_shift($fruits);
echo "First fruit: " . $firstFruit . "<br>";

// Add an element to the beginning of the array
array_unshift($fruits, "apricot");

// Merge two arrays into a single array
$moreFruits = array("grape", "kiwi");
$allFruits = array_merge($fruits, $moreFruits);

// Extract a slice of the array
$slice = array_slice($allFruits, 1, 3);

// Search for a specific value in the array
$searchKey = array_search("cherry", $allFruits);
echo "Index of 'cherry': " . $searchKey . "<br>";

// Check if a specified key exists in the array
$keyExists = array_key_exists(2, $allFruits);
echo "Key 2 exists: " . ($keyExists ? "Yes" : "No") . "<br>";


// String Functions
$name = "John Doe";

// Get the length of the string
$length = strlen($name);
echo "Length of name: " . $length . "<br>";

// Convert the string to lowercase
$lowercaseName = strtolower($name);
echo "Lowercase name: " . $lowercaseName . "<br>";

// Convert the string to uppercase
$uppercaseName = strtoupper($name);
echo "Uppercase name: " . $uppercaseName . "<br>";

// Replace occurrences of a substring in the string
$newName = str_replace("John", "Jane", $name);
echo "New name: " . $newName . "<br>";

// Find the position of the first occurrence of a substring
$position = strpos($name, "Doe");
echo "Position of 'Doe': " . $position . "<br>";

// Get a substring from the string
$substring = substr($name, 5, 3);
echo "Substring: " . $substring . "<br>";

// Remove whitespace or other characters from the beginning and end of the string
$trimmedName = trim($name);
echo "Trimmed name: " . $trimmedName . "<br>";

// Split the string into an array based on a delimiter
$splitName = explode(" ", $name);
echo "Split name: " . print_r($splitName, true) . "<br>";

// Join array elements into a string using a delimiter
$joinedName = implode("-", $splitName);
echo "Joined name: " . $joinedName . "<br>";


// Date Functions
$currentDate = date("Y-m-d");

// Get the current Unix timestamp
$timestamp = time();
echo "Current timestamp: " . $timestamp . "<br>";

// Parse a date string and return a Unix timestamp
$customDate = "2023-05-20";
$customTimestamp = strtotime($customDate);
echo "Custom timestamp: " . $customTimestamp . "<br>";

// Create a DateTime object
$dateObject = date_create($currentDate);

// Format the date object into a string
$formattedDate = date_format($dateObject, 'F j, Y');
echo "Formatted date: " . $formattedDate . "<br>";

// Get the difference between two dates as a DateInterval object
$futureDate = date_create("2023-06-01");
$interval = date_diff($dateObject, $futureDate);
echo "Difference: " . $interval->format('%R%a days') . "<br>";

// Add a specified interval to a date
date_add($dateObject, date_interval_create_from_date_string('1 month'));
$newDate = date_format($dateObject, 'Y-m-d');
echo "New date: " . $newDate . "<br>";

// Subtract a specified interval from a date
date_sub($dateObject, date_interval_create_from_date_string('10 days'));
$newDate = date_format($dateObject, 'Y-m-d');
echo "New date: " . $newDate . "<br>";
?>