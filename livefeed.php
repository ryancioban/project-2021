<?php
$output = shell_exec('ssh pi@192.168.2.38 gpio read 2');
$log = shell_exec('tail -n 15 /home/pi/test1.txt');
//echo date ('H:i:s');
//$buf = 1;

/*if ($output == 0){
    echo "<br>Door Status: LOCKED<br>";
    $buf = 0;
}*/

if ($output == 1){
    echo "<br>Door Status: UNLOCKED<br>";
    for ($buf = 0; $buf < 2; $buf++){
        if ($buf == 1){
            break;
        }
    $comm = shell_exec('echo "Unlocked via Fingerprint @ `date` <br>" >> /home/pi/test1.txt');
    echo "<div>$comm</div>";
    }
}

else {
//if ($output == 0){
    echo "<br>Door Status: LOCKED<br>";
}

//echo "<div>$comm</div>";
echo "<br><div>$buf</div><br>";
echo "<br><div>$log</div><br>";

?>