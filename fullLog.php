<!DOCTYPE html>
<html>
    <head>
        <title>Cam-Lock Logs</title>
    </head>
    <body>
        <?php
            //Show full log history
            $history = shell_exec('cat /home/pi/door.log');
            echo "<br>$history<br>";
        ?>
    </body>
</html>