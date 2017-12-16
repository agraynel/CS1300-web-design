<!-- yc2329, Yi Chen -->

<!DOCTYPE html>
 <html>
 <head>
   <meta charset="UTF-8">
   <title>Contact</title>
   <link rel="stylesheet" href="styles/all.css" type="text/css">
 </head>
 <body>
   <div>
    <ul id="navi">
      <li><a title="Home" href="index.html">Home</a></li>
      <li><a title="About" href="#">About</a></li>
      <li><a title="Products" href="#">Products</a></li>
      <li><a title="Services" href="#">Services</a></li>
      <li><a title="Contact" href="contact.php">Contact</a></li>
    </ul>
  </div>
  <div class = "main_container">
    <div class = "header">
      <h1>Contact</h1>
    </div>
    <form id = "form" name = "form" class="form" method="post" action="contact.php" novalidate>
      <h2>Email: </h2>
      <input type="email" id="userEmail" name="userEmail" placeholder="Your Email" required>
      <input type="submit" name="submit" value="Submit">
    </form>
    <div class = "footer">
      <p>© Agraynel Chen 2017 for Info 1300 final exam</p>
    </div>
  </div>
</body>
</html>
