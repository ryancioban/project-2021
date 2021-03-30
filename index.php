<!DOCTYPE html>
<?php
    //Uncomment these lines for auto-refresh
    $page = $_SERVER['PHP_SELF'];
    $sec = "0.5";
?>
<html>
    <head>
        <title>Cam-Lock</title>
        <!--Auto-refresh page-->
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>

    <body>
        <h1>Biometric Lock</h1>
        <h2>Camera Feed</h2>
        <br>

        <img src="http://192.168.2.38:8081/" alt="Camera is down :(">

    </body>
</html>