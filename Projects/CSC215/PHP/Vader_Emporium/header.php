
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
    <style>
    #menu-bar {
      width: 100%;
      margin: 0px 0px 0px 0px;
      padding: 6px 6px 4px 6px;
      height: 40px;
      line-height: 100%;
      border-radius: 0px;
      -webkit-border-radius: 0px;
      -moz-border-radius: 0px;
      box-shadow: 0px 0px 0px #666666;
      -webkit-box-shadow: 0px 0px 0px #666666;
      -moz-box-shadow: 0px 0px 0px #666666;
      background: #BF0202;
      border: solid 0px #6D6D6D;
      position:relative;
      z-index:999;
    }
    #menu-bar li {
      margin: 0px 6px 6px 6px;
      padding: 6px 6px 0px 6px;
      float: left;
      position: relative;
      list-style: none;
    }
    #menu-bar a {
      font-weight: bold;
      font-family: 'Audiowide', cursive;
      font-style: normal;
      font-size: 14px;
      color: #E7E5E5;
      text-decoration: none;
      display: block;
      padding: 6px 20px 6px 20px;
      margin: 0;
      margin-bottom: 6px;
      border-radius: 18px;
      -webkit-border-radius: 18px;
      -moz-border-radius: 18px;
      text-shadow: 2px 2px 3px #000000;
    }
    #menu-bar li ul li a {
      margin: 0;
    }
    #menu-bar .active a, #menu-bar li:hover > a {
      background: #F7F7F7;
      color: #000000;
      -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .2);
      -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .2);
      box-shadow: 0 1px 1px rgba(0, 0, 0, .2);
      text-shadow: 2px 2px 3px #FFFFFF;
    }
    #menu-bar ul li:hover a, #menu-bar li:hover li a {
      background: none;
      border: none;
      color: #666;
      -box-shadow: none;
      -webkit-box-shadow: none;
      -moz-box-shadow: none;
    }
    #menu-bar ul a:hover {
      background: #0399D4 !important;
      background: linear-gradient(top,  #04ACEC,  #0186BA) !important;
      background: -ms-linear-gradient(top,  #04ACEC,  #0186BA) !important;
      background: -webkit-gradient(linear, left top, left bottom, from(#04ACEC), to(#0186BA)) !important;
      background: -moz-linear-gradient(top,  #04ACEC,  #0186BA) !important;
      color: #FFFFFF !important;
      border-radius: 0;
      -webkit-border-radius: 0;
      -moz-border-radius: 0;
      text-shadow: 2px 2px 3px #FFFFFF;
    }
    #menu-bar li:hover > ul {
      display: block;
    }
    #menu-bar ul {
      background: #DDDDDD;
      background: linear-gradient(top,  #FFFFFF,  #CFCFCF);
      background: -ms-linear-gradient(top,  #FFFFFF,  #CFCFCF);
      background: -webkit-gradient(linear, left top, left bottom, from(#FFFFFF), to(#CFCFCF));
      background: -moz-linear-gradient(top,  #FFFFFF,  #CFCFCF);
      display: none;
      margin: 0;
      padding: 0;
      width: 185px;
      position: absolute;
      top: 36px;
      left: 0;
      border: solid 1px #B4B4B4;
      border-radius: 10px;
      -webkit-border-radius: 10px;
      -moz-border-radius: 10px;
      -webkit-box-shadow: 2px 2px 3px #222222;
      -moz-box-shadow: 2px 2px 3px #222222;
      box-shadow: 2px 2px 3px #222222;
    }
    #menu-bar ul li {
      float: none;
      margin: 0;
      padding: 0;
    }
    #menu-bar ul a {
      padding:10px 0px 10px 15px;
      color:#424242 !important;
      font-size:12px;
      font-style:normal;
      font-family: 'Audiowide', cursive;
      font-weight: normal;
      text-shadow: 2px 2px 3px #FFFFFF;
    }
    #menu-bar ul li:first-child > a {
      border-top-left-radius: 10px;
      -webkit-border-top-left-radius: 10px;
      -moz-border-radius-topleft: 10px;
      border-top-right-radius: 10px;
      -webkit-border-top-right-radius: 10px;
      -moz-border-radius-topright: 10px;
    }
    #menu-bar ul li:last-child > a {
      border-bottom-left-radius: 10px;
      -webkit-border-bottom-left-radius: 10px;
      -moz-border-radius-bottomleft: 10px;
      border-bottom-right-radius: 10px;
      -webkit-border-bottom-right-radius: 10px;
      -moz-border-radius-bottomright: 10px;
    }
    #menu-bar:after {
      content: ".";
      display: block;
      clear: both;
      visibility: hidden;
      line-height: 0;
      height: 0;
    }
    #menu-bar {
      display: inline-block;
    }
      html[xmlns] #menu-bar {
      display: block;
    }
    * html #menu-bar {
      height: 1%;
    }
    </style>
  </head>
  <body>
    <h2>Darth Vader's Weapon Emporium</h2>
    <ul id="menu-bar">
      <li><a href = "catalog.php">Catalog</a></li>
      <li><a href="admin.php">Admin</a></li>
      <li><a href="order.php">Orders</a></li>
      <li><a href="comments.php">Comments</a></li>
      <?php
        if ($_SESSION['isEmployee'])
        {
          echo "<li><a href='info.php'>Employee Portal</a></li>";
        }
       ?>
      <li><a href="logout.php">Log-Out</a></li>
    </ul>
  </body>

</html>