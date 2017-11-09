<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Niteclub - Home</title>

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">

  <!-- Load jQuery -->
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <!-- Load validation -->
  <script src="scripts/clientValidation.js" type="text/javascript"></script>
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

      <form method="post" action="formSubmitted.php" id="mainForm">

        <div class="labelAndInputHolder">
          <div class="labelHolder">
            <label for="firstName">First Name: </label>
          </div>
          <div class="inputHolder">
            <input id="firstName" name="firstName" placeholder="First name">
          </div>
          <!-- this error message is hidden by default -->
          <span class="errorContainer hiddenError" id="fnameError">
            First name is required.
          </span>
        </div>

        <div class="labelAndInputHolder">
          <div class="labelHolder">
            <label for="lastName">Last Name: </label>
          </div>
          <div class="inputHolder">
            <input id="lastName" name="lastName" placeholder="Last name">
          </div>
        </div>

        <div class="labelAndInputHolder">
          <div class="labelHolder">
            <label for="lastName">Email: </label>
          </div>
          <div class="inputHolder">
            <input id="userEmail" name="userEmail" placeholder="Your Email">
          </div>
        </div>

        <div>
          <button type="submit" class="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
