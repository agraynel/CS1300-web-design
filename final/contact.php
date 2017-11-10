<?php include("includes/header.php"); ?>
  <div class = "container">php
    <h3>CONTACT US</h3>
    <form class="form_container">
      <div class="form-group">
        <p>Select a contact:</p>
          <select name="contact">
            <optgroup label="About the club">
              <option value="General Inquiry">General Inquiry</option>
              <option value="Recruiting">Editorial</option>
              <option value="Feedback">Feedback</option>
            </optgroup>
            <optgroup label="About Events">
              <option value="Guess Speaker">Advertising</option>
              <option value="Networking">Other types of business</option>
              <option value="Education Seminars">Other types of business</option>
            </optgroup>
        </select><br>
      </div>
      <div class="form-group">
        <p>First name:</p>
        <input type="text" name="firstname" placeholder="First name" required><br>
        <span class="errorContainer hiddenError" id="nameError">
          Your first name is required.
        </span>
      </div>
      <div class="form-group">
        <p>Last name:</p>
        <input type="text" name="lastname" placeholder="Last name" required><br>
        <span class="errorContainer hiddenError" id="nameError">
          Your last name is required.
        </span>
      </div>
      <div class="form-group">
        <p>E-mail:</p>
        <input type="email" id=“userEmail” name="E-mail" placeholder="E-mail" required><br>
        <span class="errorContainer hiddenError" id="nameError">
          Your e-mail is required.
        </span>
      </div>
      <div class="form-group">
        <p>Please leave a message:</p>
        <textarea name="message" rows="20" cols="100" >Message...</textarea><br>
        <span class="errorContainer hiddenError" id="nameError">
          Your message is required.
        </span>
      </div>
      <div class="form-flex">
        <input type="radio" name="type" id="subscription" value="subscription">
        <p>Please, click of you would like to subscribe to our e-mail list for information about future
        events, recruiting season etc. </p><br>
      </div>
      <div class="form-flex">
        <input class="button" value="SUBMIT" type="submit">
        <input class="button" value="RESET" type="reset">
      </div>
    </form>
  </div>
<?php include("includes/footer.php"); ?>
