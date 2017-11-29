<?php session_start();

/* Credit: code part from LAB 11 and 12*/

// Stores the name of the class for hidden error messages
$HIDDEN_ERROR_CLASS = "hiddenError";

// when the user submits a form
$submit = $_REQUEST["submit"];
if (isset($submit)) {
  // log to the PHP console
  error_log("user submitted form");

  // Handle first name
  $name = $_REQUEST["name"];
  // if the first name field is not empty:
  if ( !empty($name) ) {
    // the first name is valid
    $nameValid = true;
  } else {
    // the first name is not valid
    $nameValid = false;
  }

  // Handle email
  $email = $_REQUEST["userEmail"];
  if ( !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ) {
    $emailValid = true;
  } else {
    $emailValid = false;
  }

  // Handle phone
  $phone = $_REQUEST["phone"];
  if ( !empty($phone) && (preg_match("/^[0-9]{3}[ -][0-9]{3}[ -][0-9]{4}$/", $phone)) ) {
    $phoneValid = true;
  } else {
    $phoneValid = false;
  }

  // Handle answer
  $question = $_REQUEST["question"];
  if ( !empty($question) && (strlen($question) >= 1) && (strlen($question) <= 300) ) {
    $questionValid = true;
  } else {
    $questionValid = false;
  }

  $optional_question = $_REQUEST["optional_question"];

  // the form is valid if the name, email, phone, answer is valid.
  $formValid = $nameValid && $emailValid && $phoneValid && $questionValid;

  // if valid, allow submission
  if ($formValid) {
    // create session to pass values to redirected page
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    $_SESSION['question'] = $question;
    $_SESSION['optional_question'] = $optional_question;

    $gender = $_POST["gender"];
    $job = $_POST["job"];

    $_SESSION['gender'] = $gender;
    $_SESSION['job'] = $job;
    // redirect to formSubmitted.php
    header("Location: formSubmitted.php");
    return;
  }
} else {
  // log to the PHP console
  error_log("no form submitted");

  // no form submitted
  $nameValid = true;
  $emailValid = true;
  $phoneValid = true;
  $answerValid = true;
}
  include("includes/header.php");
?>
  <div class="container">
    <h1>Contact me</h1>
    <div class = "content-box">
      <form id = "contact_form" name = "server_side_contact_form" class="content-box" method="post" novalidate>
        <!-- action="formSubmitted.php"  -->
        <div class="labelAndInputHolder">
            <div class="labelHolder">
              <h4>Your Name:</h4>
            </div>
            <div class="inputHolder">
              <input id="name" name="name" placeholder="Your name" value="<?php echo($name);?>" required>
            </div>
            <span class="errorContainer hiddenError" id="nameError">
              Your name is required.
            </span>
            <span class="errorContainer <?php if ($nameValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="nameError">
              Your name should be valid!
            </span>
          </div>
        <div class="labelAndInputHolder">
          <div class="labelHolder">
            <h4>Your gender:</h4>
          </div>
          <div class="selection">
    				<input type="radio" id="gender" name="gender" value = "N/A" checked /> <p>I don't wish to answer</p>
    				<input type="radio" id="gender" name="gender" value = "female" /> <p>Female</p>
    				<input type="radio" id="gender" name="gender" value = "male" /> <p>Male</p>\
          </div>
  			</div>
        <div class="labelAndInputHolder">
          <div class="labelHolder">
            <h4>Your job:</h4>
          </div>
          <select name="job" id="job" class="select">
    				<option value="student">Student</option>
    				<option value="hr">HR</option>
    				<option value="swe">Software Engineer</option>
            <option value="others">Others</option>
    			</select>
        </div>
        <div class="labelAndInputHolder">
            <div class="labelHolder">
              <h4>Email: </h4>
            </div>
            <div class="inputHolder">
              <input type="email" id="userEmail" name="userEmail" placeholder="Your Email" value="<?php echo($email);?>" required>
            </div>
            <span class="errorContainer hiddenError" id="emailErrorNoEmail">
              Email required.
            </span>
            <span class="errorContainer hiddenError" id="emailErrorInvalEmail">
              Your valid email address is required.
            </span>
            <span class="errorContainer <?php if ($emailValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="emailErrorNoEmail">
              Valid email address is required.
            </span>
          </div>
        <div class="labelAndInputHolder">
          <div class="labelHolder">
            <h4>Your phone number: </h4>
          </div>
          <div class="inputHolder">
            <input name="phone" id="phone" placeholder="206-484-9483" value="<?php echo($phone);?>" required pattern="[0-9]{3}[ -][0-9]{3}[ -][0-9]{4}"><br>
          </div>
          <span class="errorContainer hiddenError" id="phoneError">
            Please enter your phone number in the format xxx-xxx-xxxx.
          </span>
          <span class="errorContainer <?php if ($phoneValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="phoneError">
            Please enter your phone number in the format xxx-xxx-xxxx.
          </span>
        </div>
        <div class="labelAndInputHolder">
          <h4>Please leave your message(300 characters limited):</h4>
          <textarea name="question" id="question" placeholder="Your message" required minlength="1" maxlength="300"></textarea><br>
          <span class="errorContainer hiddenError" id="messageError">
            Your message should be within 1 ~ 300 characters.
          </span>
          <span class="errorContainer <?php if ($answerValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="messageError">
          Your message should be within 1 ~ 300 characters.
          </span>
        </div>
        <div class="labelAndInputHolder">
          <h4>How did you find my homepage(optional):</h4>
          <textarea name="optional_question" id="optional_question" placeholder="Linkedin, Github, resume, etc.."></textarea><br>
        </div>
        <div class="labelAndInputHolder">
          <input type="submit" name="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
<?php include("includes/footer.php"); ?>
