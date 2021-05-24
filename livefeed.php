<?php
$output = shell_exec('ssh pi@192.168.2.38 gpio read 2');
$log = shell_exec('tail -n 15 /home/pi/test1.txt');
//echo date ('H:i:s');
//$buf = 1;

if ($output == 0){
    echo "<br>Door Status: LOCKED<br>";
    $buf = 0;
}

elseif ($output == 1 && $buf == 0){
    echo "<br>Door Status: UNLOCKED<br>";
    shell_exec('echo "Unlocked via Fingerprint @ `date` <br>" >> /home/pi/test1.txt');
    //echo "<div>$comm</div>";
    $buf = 1;
}

else {
    echo "<br>Door Status: UNLOCKED<br>";
}

//echo "<div>$comm</div>";
echo "<br><div>$buf</div><br>";
echo "<br><div>$log</div><br>";

?>