<html>
  <head>

    <style>
      body {
        width: 100%;
        margin: 0 auto;
        text-align: center;
      }
    </style>

  </head>
  <body>
  <br />
  <br />
  <h2>Mysterious Web Service</h2>
  Login Validation: <?php
    if ($_POST["password"] == "Hawkeye")
    {
      echo "SUCCESS";
    }
    else
    {
      echo "Failed";
      echo "<br /><br />Please retry";
    }
  ?>
  <br />
  <br />
  <input type="button" onclick="window.location='index.html'" value="Return To Login Page">

  </body>
</html>
