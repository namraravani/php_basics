<?php
$name = "Namra";

while($name == "Namra")
{
    echo "The Entered username is correct.";
    break;
}

echo "<br>";

$no = 1;

while($no <= 2)
{
    echo "Entered number " . $no . "is less than or equal to 2";
    echo "<br>";
    $no++;
}

echo "<br>";

// do while loop
do 
{
  echo "The number is: $no <br>";
  $no++;
} while ($no <= 5);

echo "<br>";

// for loop
for ($x = 0; $x <= 10; $x++) 
{
    echo "The number is: $x <br>";
}

echo "<br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

// $car_info = array("toyota"=>2000000,"suzuki"=>1000000,"hyundai"=>5000000)

// foreach($car_info as $x => $val)
// {
//     echo "$x = $val<br>";
// }

$age = array("namra"=>"19", "hiren"=>"20", "rushabh"=>"21");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}





// array
$fruit = array("apple","banana","mango");
echo $fruit[1];

//multidimensional array

$cars = array(array("BMW","VOLVO","mercedes"),array("toyota","skoda","kia"),array("hyundai","suzuki","honda"));

echo "<br>";


echo $cars[0][0]." , ".$cars[0][1]." , ".$cars[0][2].".<br>";
echo $cars[1][0]." , ".$cars[1][1]." , ".$cars[1][2].".<br>";
echo $cars[2][0]." , ".$cars[2][1]." , ".$cars[2][2].".<br>";

?>