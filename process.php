<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Processing...</title>
  </head>
  <body align="center">
    <?php

      $_email = $_POST["email"];
      $_username = $_POST["username"];
      $_password = $_POST["password"];

      if (!empty($_email) && !empty($_username) && !empty($_password))
      {
        echo "<h1>Redirecting...</h1>";
        echo "if our redirecting <br>mechinism does not <br>work, <a href=\"home.php\">click here...</a>";
        
      }
      else
      {
        echo "<a href=\"index.html\">Please register or login...</a>";
      }

    ?>
  </body>
</html>
