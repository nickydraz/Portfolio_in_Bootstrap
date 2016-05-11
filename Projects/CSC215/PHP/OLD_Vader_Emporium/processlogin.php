<?php
  session_start();

  #Open the file
  $fp = fopen("users.csv", "r");
  #get the column header row
  $loginLine = fgetcsv($fp, 1024);

  while (!feof($fp))
  {
    #Get the next line from the file
    $loginLine = fgetcsv($fp, 1024);

    #Check username
    if ($_POST["username"] == $loginLine[0])
    {
      #Check password
      if ($_POST["password"] == $loginLine[1])
      {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["loggedIn"] = true;
        $_SESSION["name"] = $loginLine[2];
        $_SESSION["email"] = $loginLine[3];
        $_SESSION["address"] = $loginLine[4];
        header('Location: catalog.php');
      }
    }

  }
  if ($_SESSION["username"] == null)
  {
  echo("<script>alert('Incorrect username or password. Returning to log-in page; please try again');");
  echo("\ndocument.location = 'index.html'");
  echo("</script>");
  }

  fclose($fp);


?>
