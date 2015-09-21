<!DOCTYPE html>
<html>

  <link rel="stylesheet" href="stylesheet.css" type="text/css">
  <link rel="icon" href="favicon.png" type="image/png">
  <title> Ramen CU </title>

  <body>

    <center>
      <div class="errythang">
        <img src="pig.png" alt="pig" class="logoo">
        <p> <a href="mailto:ramencolumbia@gmail.com" target="_top">ramencolumbia@gmail.com</a></p>
      </div>
    <center>

    <?php
      if (!empty($_SERVER['HTTP_CLIENT_IP'])) { $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n"; }
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n"; }
      else { $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n"; }
      $file = 'visits.txt';
      $fp = fopen($file, 'a');
      fwrite($fp, date("l jS \of F Y h:i:s A") . "\t" . $ipaddress);
      fclose($fp);
      mail('souren@papazian.info', 'Visit', date("l jS \of F Y h:i:s A") . "\t" . $ipaddress);
    ?>

  </body>

</html>
