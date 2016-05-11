<?php

  session_start();

  if ($_SESSION["loggedIn"] != true)
  {
    header("Location: index.html");
  }

  $orderString = "**** BEGIN ORDER ****\n";
  $orderTotal = 0;

  if ($_POST["saberQty"] > 0)
  {
    $orderString .= "Light Saber x".$_POST["saberQty"]."\n";
    $orderTotal += 6000 * $_POST["saberQty"];
  }
  if ($_POST["rocketQty"] > 0)
  {
    $orderString .= "Rocket Launcher x".$_POST["rocketQty"]."\n";
    $orderTotal += 1200 * $_POST["rocketQty"];
  }
  if ($_POST["flechetteQty"] > 0)
  {
    $orderString .= "Flechette Gun x".$_POST["flechetteQty"]."\n";
    $orderTotal += 2000 * $_POST["flechetteQty"];
  }
  if ($_POST["fusionQty"] > 0)
  {
    $orderString .= "Fusion Cutter x".$_POST["fusionQty"]."\n";
    $orderTotal += 800 * $_POST["fusionQty"];
  }


  $fp = fopen("orders.txt", "a");

  $mydate=getdate(date("U"));
  $orderString .= "Total is: ".$orderTotal."Cr. \nOrder placed by ".$_SESSION["username"]." on ".$mydate[weekday].", ".$mydate[month].
  " ".$mydate[mday]." ".$mydate[year].".\n**** END ORDER ****\n";
  fputs($fp, $orderString);

  fclose($fp);

  mail($_SESSION["email"], "Your Recent Purchase From Darth Vader's Emporium", $orderString);

  echo("<title>Vader's Emporium | Processing Order</title>");
  echo("<script>alert('Your order has been submitted. We will begin processing your order soon')
  \nwindow.location = 'catalog.php'
  \n</script>");


 ?>
