<?php
// Stores the name of the class for hidden error messages
$HIDDEN_ERROR_CLASS = "hiddenError";

// when the user submits a form
$submit = $_REQUEST["submit"];
if (isset($submit)) {
  // log to the PHP console
  error_log("user submitted form");

  // Handle first name
  $firstName = $_REQUEST["firstName"];
  // if the first name field is not empty:
  if ( !empty($firstName) ) {
    // the first name is valid
    $fnameValid = true;
  } else {
    // the first name is not valid
    $fnameValid = false;
  }

  // Handle last name
  $lastName = $_REQUEST["lastName"];
  if ( !empty($lastName) ) {
    $lnameValid = true;
  } else {
    $lnameValid = false;
  }

  // Handle email
  $email = $_REQUEST["userEmail"];
  if ( !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ) {
    $emailValid = true;
  } else {
    $emailValid = false;
  }

  // the form is valid if the first name (and last name and email) is valid.
  $formValid = $fnameValid && $lnameValid && $emailValid;

  // if valid, allow submission
  if ($formValid) {
    // create session to pass values to redirected page
    session_start();
    $_SESSION['fname'] = $firstName;
    $_SESSION['lname'] = $lastName;
    $_SESSION['email'] = $email;

    // redirect to formSubmitted.php
    header("Location: formSubmitted.php");
    return;
  }
} else {
  // log to the PHP console
  error_log("no form submitted");

  // no form submitted
  $fnameValid = true;
  $lnameValid = true;
  $emailValid = true;
}
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
      <h1>Home</h1>

      <h2>Niteclub Isn't Just a Club - It's an Experience</h2>
      <p>
        If you live to party, you won't want to miss Niteclub.
      </p>

      <h2>Sign up for early access now!</h2>

      <form method="post" action="index.php" id="mainForm" novalidate>

        <div class="labelAndInputHolder">
          <div class="labelHolder">
            <label for="firstName">First Name: </label>
          </div>
          <div class="inputHolder">
            <input id="firstName" name="firstName" placeholder="First name" value="<?php echo($firstName);?>" required>
          </div>
          <span class="errorContainer <?php if ($fnameValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="fnameError">
            First name is required.
          </span>
        </div>

        <div class="labelAndInputHolder">
          <div class="labelHolder">
            <label for="lastName">Last Name: </label>
          </div>
          <div class="inputHolder">
            <input id="lastName" name="lastName" placeholder="Last name" value="<?php echo($lastName);?>" required>
          </div>
          <span class="errorContainer <?php if ($lnameValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="lnameError">
            Last name is required.
          </span>
        </div>

        <div class="labelAndInputHolder">
          <div class="labelHolder">
            <label for="userEmail">Email: </label>
          </div>
          <div class="inputHolder">
            <input type="email" id="userEmail" name="userEmail" placeholder="Your Email" value="<?php echo($email);?>" required>
          </div>
          <span class="errorContainer <?php if ($emailValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="emailErrorNoEmail">
            Valid email required.
          </span>
        </div>

        <div>
          <button type="submit" name="submit" class="submit">Submit</button>
        </div>

      </form>

    </div>
  </div>
</body>

</html>
