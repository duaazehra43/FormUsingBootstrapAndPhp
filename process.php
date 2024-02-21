<!-- process.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $gender = $_POST['gender'];
  $country = $_POST['country'];
  $password = $_POST['password'];
  $favColor = isset($_POST['favColor']) ? implode(', ', $_POST['favColor']) : '';

  
  echo "<h2>Registration Details:</h2>";
  echo "<p><strong>First Name:</strong> $firstName</p>";
  echo "<p><strong>Last Name:</strong> $lastName</p>";
  echo "<p><strong>Gender:</strong> $gender</p>";
  echo "<p><strong>Country:</strong> $country</p>";
  echo "<p><strong>Favourite Color:</strong> $favColor</p>";
}
?>
