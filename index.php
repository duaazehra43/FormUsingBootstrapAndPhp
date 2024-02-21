<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa; /* Light gray background */
      font-family: Arial, sans-serif;
    }
    .container {
      background-color: #fff; /* White background for the form container */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow effect */
    }
    h2 {
      color: #007bff; /* Blue heading */
    }
    label {
      font-weight: bold;
    }
    /* Style for the submit button */
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0056b3; /* Darker blue on hover */
      border-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Registration Form</h2>
    <form id="registrationForm" action="process.php" method="POST" onsubmit="return validateForm()">
      <div class="form-group">
        <label for="firstName">First Name:</label>
        <input type="text" class="form-control" id="firstName" name="firstName" required>
      </div>
      <div class="form-group">
        <label for="lastName">Last Name:</label>
        <input type="text" class="form-control" id="lastName" name="lastName" required>
      </div>
      <div class="form-group">
        <label>Gender:</label><br>
        <div class="form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
          <label class="form-check-label" for="male">Male</label>
        </div> 
        <div class="form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
          <label class="form-check-label" for="female">Female</label>
        </div>
      </div>
      <div class="form-group">
        <label for="country">Country:</label>
        <select class="form-control" id="country" name="country" required>
          <option value="">Select Country</option>
          <option value="Pakistan">Pakistan</option>
          <option value="India">Iran</option>
          <option value="china">Iraq</option>
          <option value="Afghanistan">Afghanistan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
      </div>
      <div class="form-group">
        <label>Favourite Color:</label><br>
        <div class="form-check-inline">
          <input class="form-check-input" type="checkbox" id="colorRed" name="favColor[]" value="red">
          <label class="form-check-label" for="colorRed">Red</label>
        </div>
        <div class="form-check-inline">
          <input class="form-check-input" type="checkbox" id="colorBlue" name="favColor[]" value="blue">
          <label class="form-check-label" for="colorBlue">Blue</label>
        </div>
        <div class="form-check-inline">
          <input class="form-check-input" type="checkbox" id="colorPink" name="favColor[]" value="pink">
          <label class="form-check-label" for="colorPink">Pink</label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>

  <script>
    function validateForm() {
      // Simple validation using DOM methods
      let firstName = document.getElementById('firstName').value;
      let lastName = document.getElementById('lastName').value;
      let genderMale = document.getElementById('male').checked;
      let genderFemale = document.getElementById('female').checked;
      let country = document.getElementById('country').value;
      let password = document.getElementById('password').value;
      let confirmPassword = document.getElementById('confirmPassword').value;
      let favColors = document.querySelectorAll('input[name="favColor[]"]:checked');

      
      if (firstName.trim() === '') {
        alert("Please enter your first name");
        return false;
      }

      if (lastName.trim() === '') {
        alert("Please enter your last name");
        return false;
      }

      if (!genderMale && !genderFemale) {
        alert("Please select your gender");
        return false;
      }

      if (country === '') {
        alert("Please select your country");
        return false;
      }

      if (password !== confirmPassword) {
        alert("Passwords do not match");
        return false;
      }

      if (favColors.length === 0) {
        alert("Please select at least one favorite color");
        return false;
      }

      return true;
    }
  </script>
</body>
</html>
