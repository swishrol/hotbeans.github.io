<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars($_POST['fname']);
    $mname = htmlspecialchars($_POST['mname']);
    $lname = htmlspecialchars($_POST['lname']);
    $phoneno = htmlspecialchars($_POST['phoneno']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['psw']);
    $pswrepeat = htmlspecialchars($_POST['psw-repeat']);

    // Check if passwords match (basic validation)
    if ($password !== $pswrepeat) {
        echo "<h2 style='color:red;'>Passwords do not match.</h2>";
        exit;
    }

    // Display user info (for testing purposes only — DO NOT DO THIS in production)
    echo "<h1>Registration Successful!</h1>";
    echo "<p><strong>First Name:</strong> $fname</p>";
    echo "<p><strong>Middle Name:</strong> $mname</p>";
    echo "<p><strong>Last Name:</strong> $lname</p>";
    echo "<p><strong>Phone Number:</strong> $phoneno</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    // Do NOT show passwords in real applications!
} else {
    echo "<h2>No data received.</h2>";
}
?>
