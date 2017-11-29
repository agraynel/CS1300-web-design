<?php session_start();
/* Credit: code part from LAB 12*/

  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
  $phone = $_SESSION['phone'];
  $question = $_SESSION['question'];
  $optional_question = $_SESSION['optional_question'];
  $gender = $_SESSION['gender'];
  $job = $_SESSION['job'];

  unset($_SESSION['email']);
  unset($_SESSION['name']);
  unset($_SESSION['phone']);
  unset($_SESSION['optional_question']);
  unset($_SESSION['question']);

  include("includes/header.php");

?>
  <div class="container">
    <div class = "content-box">
      <h1>Form Submitted</h1>

      <p>
        Thanks, <?php echo($name); ?>.
      </p>
      <p>
        I have received your message. Your message is: <?php echo( htmlspecialchars($question)); ?>.<br>
        Your gender is: <?php echo(htmlspecialchars($gender)); ?>.<br>
        Your job is: <?php echo(htmlspecialchars($job)); ?>.<br>
        The way you know my website is(optional): <?php echo(htmlspecialchars($optional_question)); ?>.
      </p>
      <p>
        We will be contacting you by e-mail at <?php echo(htmlspecialchars($email)); ?> or by calling at <?php echo(htmlspecialchars($phone)); ?> soon!
      </p>

    </div>
  </div>
</body>

</html>
