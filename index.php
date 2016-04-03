<!DOCTYPE html>
<html>
    <head>
      <title> souren </title>
        <link rel='stylesheet' type='text/css' href='http://xn--eo8h.ws/stylesheet.css'/>
	      <link rel="shortcut icon" type="image/gif" href="http://xn--eo8h.ws/images/pig.gif"/>
        <script type="text/javascript">
          window.onload = function() {
            var favs = ["butt.gif",
                        "game.gif",
                        "shouner.jpg",
                        "win.png",
                        "wind.gif",
                        "mononoke.gif"]
            var rando = favs[Math.floor(Math.random() * favs.length)];
            document.getElementById("fav").src="http://xn--eo8h.ws/images/" + rando;
          }
        </script>
    </head>
    <body class='section-1'>

      <?php include("./menu.php"); ?>

      <div id='content'>
        <div class='container'>

          <p> So nice </p>

          <div id='img-container'>
            <div><img id="fav" src=''/><p>&nbsp;</p></div>
          </div>

        </div>
      </div>

      <?php
      date_default_timezone_set('America/New_York');
      if (!empty($_SERVER['HTTP_CLIENT_IP'])) { $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n"; }
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']; }
      else { $ipaddress = $_SERVER['REMOTE_ADDR']; }
      $details = json_decode(file_get_contents("http://ipinfo.io/{$ipaddress}/json"));
      $file = 'visits.txt';
      $fp = fopen($file, 'a');
      fwrite($fp, date("m/d/y h:i:s A") . "\t" . $ipaddress . "\t" . $details->hostname . "\t" . $details->country . "\t" . $details->city . "\r\n");
      fclose($fp);
      ?>

    </body>
</html>
