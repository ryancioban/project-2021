<!DOCTYPE html>
<html>
    <head>
        <title>Open Lock</title>
    </head>
    <body>
        <?php
            shell_exec('ssh pi@192.168.2.38 gpio write 3 1');
            shell_exec('echo "Unlocked via Web @ `date` <br>" >> /home/pi/test1.txt');
            echo "<br>Opening the lock...<br>";
            sleep(5);
            shell_exec('ssh pi@192.168.2.38 gpio write 3 0');
        ?>
        <div>Go back to<a href="index.php">main</a> page.</div>
    </body>
</html>