<?php
  session_start();

  if ($_SESSION["loggedIn"] != true)
  {
    header("Location: index.html");
  }
?>

<html>

  <head>
    <title>Vader's Emporium | Admin</title>
    <link rel="stylesheet" type="text/css" href="emporium.css">
  </head>

  <body>
    <div id="container">
      <?php include "header.php";?>
      <?php
      #Open the file
      $fp = fopen("users.csv", "r");

      while (!feof($fp))
      {
        #Get the next line from the file
        $loginLine = fgetcsv($fp, 1024);

        #Check username
        if ($_SESSION["username"] == $loginLine[0])
        {
          ##Display the user's information
          echo("<p>Username - ".$_SESSION['username']."</p>");
          echo("<p>Password - ".$loginLine[1]."</p>");
          echo("<p>Name - ".$loginLine[2]."</p>");
          echo("<p>Email address - ".$loginLine[3]."</p>");
          echo("<p>Address - ".$loginLine[4]."</p>");
        }

      }
       ?>

       <br />
       <br />
       <form name="changeInfo" action="processChange.php" method="post">
         <table>
           <tr>
             <td><label for="password">Password: </label></td>
             <td><input type="password" name="password" value="" ></td>
           </tr>
           <tr>
             <td><label for="name">Name: </label></td>
             <td><input type="text" name="name" value="" ></td>
           </tr>
           <tr>
             <td><label for="email">Email Address: </label></td>
             <td><input type="text" name="email" value="" placeholder="email@domain.com" ></td>
           </tr>
           <tr>
             <td><label for="address">Physical Address: </label></td>
             <td><input type="text" name="address" value="" placeholder="# Street; City; State"></td>
           </tr>
           <tr>
             <td id="sub" colspan="2"><input type="submit"></td>
           </tr>
       </table>
    </div>
  </body>


</html>
