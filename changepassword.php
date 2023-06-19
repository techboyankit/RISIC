<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $currentPassword = $_POST["current-password"];
  $newPassword = $_POST["new-password"];
  $confirmPassword = $_POST["confirm-password"];

  // Perform validation
  // ... (you can add your own validation rules here)

  // If validation passes, proceed with password change logic
  if ($newPassword === $confirmPassword) {
    // TODO: Implement your password change logic here
    // Example: Update the password in your user database

    // Redirect to a success page
    header("Location: changepassword-success.php");
    exit();
  } else {
    // Passwords don't match
    $error = "Passwords do not match.";
  }
}
?>
