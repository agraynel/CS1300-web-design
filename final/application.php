<?php include("includes/header.php"); ?>
  <div class = "container">
    <h3>APPLICATION</h3>
    <form>
      First name:<br>
      <input type="text" name="firstname" placeholder="First name" required><br><br>
      Last name:<br>
      <input type="text" name="lastname" placeholder="Last name" required><br><br>
      E-mail:<br>
      <input type="email" id=“userEmail” name="E-mail" placeholder="E-mail" required>
      <br>
      <br>
      <p>Class of <select name="contact">
          <option value="2018">2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
      </select></p>
    <p>Please, briefly explain why you want to join us. Max 400 words</p>
      <textarea name="message" rows="30" cols="70" >Text...</textarea>
      <br><br>
      <p>Copy your resume below or provide a link to it.</p>
      <textarea name="message" rows="30" cols="70" >Resume...</textarea>
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
