<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">

  <title>PHP Test Page</title>
</head>

<body>
  <header>
    <h1>PHP Test Page</h1>
    <h2>My PHP Version: <?php echo phpversion(); ?></h2>
  </header>

  <!-- Report information about this computer's PHP installation -->
  <?php
  echo phpinfo(INFO_GENERAL);
  ?>
</body>
</html>
