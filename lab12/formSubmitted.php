<?php
session_start();

$firstName = $_SESSION['fname'];
$lastName = $_SESSION['lname'];
$email = $_SESSION['email'];

unset($_SESSION['email']);

// combine the first and last name, with a space in the middle.
// In PHP the "." is like +, but for strings.
$fullName = $firstName . " " . $lastName;
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Niteclub - Home</title>

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
</head>

<body>
  <div class="mainContent">
    <?php include("includes/header.php"); ?>

    <div class="centerPane">
      <h1>Form Submitted</h1>

      <p>
        Thanks, <?php echo( htmlspecialchars($fullName) ); ?>.
      </p>
      <p>
        You are now signed up to hear all the news about Niteclub.
      </p>
      <p>
        We will be contacting you at <?php echo( htmlspecialchars($email) ); ?> soon!
      </p>

    </div>
  </div>
</body>

</html>
