<?php include("includes/header.php");
/* Credit: code part from LAB 11*/
  $name = $_POST["name"];
  $email = $_POST["userEmail"];
  $phone = $_POST["phone"];
  $gender = $_POST["gender"];
  $job = $_POST["job"];
  $question = $_POST["question"];
  $answer = $_POST["optional_question"];
?>
  <div class="container">
    <div class = "content-box">
      <h1>Form Submitted</h1>

      <p>
        Thanks, <?php echo($name); ?>.
      </p>
      <p>
        I have received your message. Your message is: <?php echo($question); ?>.<br>
        Your gender is: <?php echo($gender); ?>.<br>
        Your job is: <?php echo($job); ?>.<br>
        The way you know my website is: <?php echo($answer); ?>.
      </p>
      <p>
        We will be contacting you by e-mail at <?php echo($email); ?> or by calling at <?php echo($phone); ?> soon!
      </p>

    </div>
  </div>
</body>

</html>
