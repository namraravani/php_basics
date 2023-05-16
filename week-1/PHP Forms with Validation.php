<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation</title>
</head>
<body>

<?php
// Define variables and set to empty values
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name this conditional statement is used tom validate name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // Check if name contains only letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) { // this are the validate conditions that i have used to validate name.
            $nameErr = "Only letters and white space allowed";
        }
    }

    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate message
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
    }
}

// Helper function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Contact Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error"><?php echo $nameErr; ?></span>
    <br><br>
    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $emailErr; ?></span>
    <br><br>
    <label>Message:</label>
    <textarea name="message" rows="5" cols="40"><?php echo $message; ?></textarea>
    <span class="error"><?php echo $messageErr; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
// Display submitted data if there are no errors
if (isset($_POST["submit"]) && empty($nameErr) && empty($emailErr) && empty($messageErr)) {
   echo "congratulations! Your data input is correct..!";
}
?>

</body>
</html>
