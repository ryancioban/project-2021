<?php
$output = shell_exec('ssh pi@192.168.2.38 gpio read 2');
$log = shell_exec('tail -n 15 /home/pi/test1.txt');
//echo date ('H:i:s');
if ($output == 0){
    echo "<br>Door Status: LOCKED<br>";
}

else if ($output == 1){
    echo "<br>Door Status: UNLOCKED<br>";
    $comm = shell_exec('echo "Unlocked via Fingerprint @ `date` <br>" >> /home/pi/test1.txt');
    sleep(10);
}

echo "<div>$comm</div>";
echo "<br><div>$log</div><br>";
?>