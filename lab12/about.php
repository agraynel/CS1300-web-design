<?php
session_start();
$email = $_SESSION['email'];
if ($email == "") {
  $emailText = "";
} else {
  $emailText = "User's email is " . $email . ".";
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Niteclub - About</title>

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
</head>

<body>
  <div class="mainContent">
    <?php include("includes/header.php"); ?>

    <div class="centerPane">
      <h1>About</h1>
      <p>
        If you have to ask about Niteclub, you clearly aren't cool enough to get into Niteclub.
      </p>
      <p>
        But to be fair, nobody is cool enough to get into Niteclub.
      </p>
      <p>
        <?php echo($emailText)?>
      </p>
    </div>
  </div>
</body>

</html>
