<?php include("includes/header.php"); ?>
  <div class = "container">php
    <h3>  CONTACT US </h3>
    <form>
      <p>Select a contact<select name="contact">
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
      </select></p>
      First name:<br>
      <input type="text" name="firstname" placeholder="First name" required><br>
      Last name:<br>
      <input type="text" name="lastname" placeholder="Last name" required><br>
      E-mail:<br>
      <input type="email" id=“userEmail” name="E-mail" placeholder="E-mail" required>
      <br>
      <br><br>
      <textarea name="message" rows="30" cols="70" >Message...</textarea>
      <br><br>
      <input type="radio" name="type" id="subscription" value="subscription">
      <label for="subscription">Please, click of you would like to subscribe to our e-mail list for information about future
      events, recruiting season etc. </label>
      <br><br>
      <input type="submit">
      <input type="reset">
    </form>
  </div>
<?php include("includes/footer.php"); ?>
