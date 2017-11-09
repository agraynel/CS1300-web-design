<?php include("includes/header.php");
/* Credit: code part from LAB 11*/
?>
  <div class="container">
    <h1>Contact me</h1>
    <div class = "content-box">
      <form id = "contact_form" name = "contact_form" class="content-box" method="post" action="formSubmitted.php" novalidate>
        <div class="labelAndInputHolder">
            <div class="labelHolder">
              <h4>Your Name:</h4>
            </div>
            <div class="inputHolder">
              <input id="name" name="name" placeholder="Your name" required>
            </div>
            <span class="errorContainer hiddenError" id="nameError">
              Your name is required.
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
              <input type="email" id="userEmail" name="userEmail" placeholder="Your Email" required>
            </div>
            <span class="errorContainer hiddenError" id="emailErrorNoEmail">
              Email required.
            </span>
            <span class="errorContainer hiddenError" id="emailErrorInvalEmail">
              Not a valid email address.
            </span>
          </div>
        <div class="labelAndInputHolder">
          <div class="labelHolder">
            <h4>Your phone number: </h4>
          </div>
          <div class="inputHolder">
            <input name="phone" id="phone" placeholder="206-484-9483" required pattern="[0-9]{3}[ -][0-9]{3}[ -][0-9]{4}"><br>
          </div>
          <span class="errorContainer hiddenError" id="phoneError">
            Please enter your phone number in the format xxx-xxx-xxxx.
          </span>
        </div>
        <div class="labelAndInputHolder">
          <h4>Please leave your message(300 characters limited):</h4>
          <textarea name="question" id="question" placeholder="Your message" required minlength="1" maxlength="300"></textarea><br>
          <span class="errorContainer hiddenError" id="messageError">
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
