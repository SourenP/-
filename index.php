<!DOCTYPE html>
<html>
    <head>
      <title> souren </title>
        <link rel='stylesheet' type='text/css' href='stylesheet.css'/>
	      <link rel="shortcut icon" type="image/gif" href="./images/pig.gif"/>
    </head>
    <body class='section-1'>

      <?php include("menu.php"); ?>

      <div id='content'>
        <div class='container'>

          <p> Moukh and Noush </p>

          <div id='img-container'>
            <div><img src='./images/shouner.jpg'/><p>&nbsp;</p></div>
          </div>

        </div>
      </div>

      <?php
      date_default_timezone_set('America/New_York');
      if (!empty($_SERVER['HTTP_CLIENT_IP'])) { $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n"; }
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n"; }
      else { $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n"; }
      $file = 'visits.txt';
      $fp = fopen($file, 'a');
      fwrite($fp, date("m/d/y h:i:s A") . "\t" . $ipaddress);
      fclose($fp);
      ?>

    </body>
</html>
