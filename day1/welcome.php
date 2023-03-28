<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$passwd = $_POST["passwd"];
$region = $_POST["region"];
$address = $_POST["address"];
$gender = $_POST["gender"];
$skills = $_POST["skills"];
$track = $_POST["Track"];
$salute;

if ($gender == "male")
  $salute = "Mr. ";
else if ($gender == "female")
  $salute = "Mrs. ";
else
  $salute = "Mr. ";

echo "<h1>Thanks {$salute}{$first_name} {$last_name}</h1><br>";
print("<h3>Please Review your information:- </h3><br>");
print("<b>Name: </b> $first_name $last_name<br>");
print("<b>Address: </b> $address<br>");
if (isset($skills)) {
  print("<b>Skills: </b>");
  print("<ul>");
  foreach ($skills as $value) {
    echo "<li>$value</li>";
  }
  print("</ul>");
}

print("<b>Department: </b> $track");
