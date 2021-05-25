<!DOCTYPE html>
<html>
    <head>
        <title>Open Lock</title>
    </head>
    <body>
        <?php
            //Output logic HIGH from Pi Zero pin.
            shell_exec('ssh pi@192.168.2.38 gpio write 3 1');
            //Timestamp to logs
            shell_exec('echo "Unlocked via Web @ `date` <br>" >> /home/pi/test1.txt');
            echo "<br>Opening the lock...<br>";
            //Buffer for propagation
            sleep(5);
            //Reset pin to LOW.
            shell_exec('ssh pi@192.168.2.38 gpio write 3 0');
        ?>
        <br>
        <!--Prompt to go back to main page-->
        <div>Go back to <a href="index.php">main</a> page.</div>
    </body>
</html>