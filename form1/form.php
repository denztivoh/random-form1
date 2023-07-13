<!DOCTYPE html>
<html>
<head>
  <title>My Form</title>
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
  <?php
  // Check if the form is submitted
  if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];

    // Process the form data (you can add database insertion or other operations here)
    // ...

    // Display a success message
    echo "Form submitted successfully!";
  }
  ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required><br><br>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
      <option value="">Select</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select><br><br>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" cols="30"></textarea><br><br>

    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
