<?php include("includes/header.php"); ?>
  <div class = "container">
    <h3>APPLICATION</h3>
    <form class="form_container">
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
      <br>
      <div class="form-group">
        <p>Class of <select name="contact">
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
        </select></p><br>
      </div>
      <br>
      <div class="form-group">
        <p>Please, briefly explain why you want to join us. Max 400 words</p>
        <textarea name="message" rows="20" cols="100" >Reasons...</textarea><br>
      </div>
      <div class="form-group">
        <p>Copy your resume below or provide a link to it.</p><br>
        <textarea name="message" rows="20" cols="100" >Resume...</textarea><br>
      </div>
      <div class="form-flex">
        <input type="radio" name="type" id="subscription" value="subscription">
        <label for="subscription">Please, click of you would like to subscribe to our e-mail list for information about future
        events, recruiting season etc. </label><br>
      </div>
      <div class="form-flex">
        <input class="button" value="SUBMIT" type="submit">
        <input class="button" value="RESET" type="reset">
      </div>
    </form>
  </div>
  <?php include("includes/footer.php"); ?>
