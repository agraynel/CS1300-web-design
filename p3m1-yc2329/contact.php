<?php include("includes/header.php"); ?>
  <div class="container">
    <h1>Contact me</h1>
    <form id = "contact_form" name = "contact_form" class="content-box" action="submit.php" method="POST">
      <div class="content">
        <h4>Your name:</h4>
        <input type="text" id="name" name="name" placeholder="Your name"><br>
        <p id="name_error_message" class="errorMessage"></p>
      </div>
      <div class="content">
        <h4>Your gender:</h4>
				<input type="radio" name="gender-select" value = "null" checked /> <p>I don't wish to answer</p>
				<input type="radio" name="gender-select" value = "female" /> <p>Female</p>
				<input type="radio" name="gender-select" value = "male" /> <p>Male</p>
			</div>
      <div class="content">
        <h4>Your job:</h4>
        <select name="job-select" id="job-select" class="select">
  				<option value="student">Student</option>
  				<option value="hr">HR</option>
  				<option value="swe">Software Engineer</option>
          <option value="others">Others</option>
  			</select>
      </div>
      <div class="content">
        <h4>Your e-mail address:</h4>
        <input type="text" name="email" id="email" placeholder="yc2329@cornell.edu"><br>
        <p id="email_error_message" class="errorMessage"></p>
      </div>
      <div class="content">
        <h4>Your phone number:</h4>
        <input type="text" name="phone" id="email" placeholder="2064849483"><br>
        <h3 id="phone_error_message" class="errorMessage"></h3>
      </div>
      <div class="content">
        <h4>Please leave your message(300 characters limited):</h4>
        <textarea name="question" id="question" placeholder="Your message"></textarea><br>
        <h3 id="question_error_message" class="errorMessage"></h3>
      </div>
      <div class="content">
        <h4>How did you find my homepage(100 characters limited):</h4>
        <textarea name="optional-question" id="optional-question" placeholder="Linkedin, Github, resume, etc.."></textarea><br>
        <h3 id="option_error_message" class="errorMessage"></h3>
      </div>
      <div class="content">
        <input type="submit" name="submit" value="Submit">
      </div>
    </form>
    <h3 id="error_message" class="errorMessage"></h3>
  </div>
<?php include("includes/footer.php"); ?>
