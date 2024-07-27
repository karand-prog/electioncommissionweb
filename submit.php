<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $voterId = $_POST["voter-id"];
  $postalAddress = $_POST["postal-address"];
  $constitutionName = $_POST["constitution-name"];
  $mobileNumber = $_POST["mobile-number"];
  $email = $_POST["email"];
  $aadharNumber = $_POST["aadhar-number"];

  // Perform any further processing with the form data, e.g., storing in a database, sending an email, etc.
  // For demonstration purposes, we will simply display the submitted data:
  echo "Name: " . $name . "<br>";
  echo "Voter ID: " . $voterId . "<br>";
  echo "Postal Address: " . $postalAddress . "<br>";
  echo "Constitution Name: " . $constitutionName . "<br>";
  echo "Mobile Number: " . $mobileNumber . "<br>";
  echo "Email: " . $email . "<br>";
  echo "Aadhar Number: " . $aadharNumber . "<br>";
} else {
  echo "Invalid request!";
}
?>
