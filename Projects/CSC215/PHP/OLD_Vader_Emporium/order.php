<?php
  session_start();

  if ($_SESSION["loggedIn"] != true)
  {
    header("Location: index.html");
  }
?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="emporium.css">

    <script>
      function validate()
      {
        if (document.getElementById("saberQty").value == 0 && document.getElementById("rocketQty").value == 0
        && document.getElementById("flechetteQty").value == 0 && document.getElementById("fusionQty").value == 0)
          {
            alert("Please choose at least one item to place an order");
            return false;
          }

          return true;
      }
    </script>
  </head>

  <body>
    <div id="container">
      <?php include "header.php";?>
      <h3>Please fill out the form below to place your order</h3>
      <form name="Order" id="Order" onsubmit="return validate()" action="processOrder.php" method="post">
          <table>
              <tr>
                <td><span id="saber" name="orderItem" value="6000">Light Saber -- 6000Cr</td>
                <td><input style="text-align:right; width:75px;" type="number" min=0 id="saberQty" name="saberQty" value="0" /></span></td>
              </tr>
              <tr>
                <td><span id="rocket" name="orderItem" value="1200">Rocket Launcher -- 1200Cr</td>
                <td><input style="text-align:right; width:75px;" type="number" min=0 id="rocketQty" name="rocketQty" value="0" /></span></td>
              </tr>
              <tr>
                <td><span id="flechette" name="orderItem" value="2000">Flechette Gun -- 2000Cr</td>
                <td><input style="text-align:right; width:75px;" type="number" min=0 id="flechetteQty" name="flechetteQty" value="0" /></span></td>
              </tr>
              <tr>
                <td><span id="fusion" name="orderItem" value="800">Fusion Cutter -- 800Cr</td>
                <td><input style="text-align:right; width:75px;" type="number" min=0 id="fusionQty" name="fusionQty" value="0" /><span></td>
              </tr>
              <tr>
                <td id="sub" colspan="2"><input type="submit" value="Send Order" ></td>
              </tr>
          </table>
      </form>
    </div>
  </body>

</html>
