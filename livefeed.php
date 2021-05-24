<?php
$output = shell_exec('ssh pi@192.168.2.38 gpio read 2');
shell_exec('logout');
//$log = shell_exec('tail -n 15 /home/pi/test1.txt');

if ($output == 0){
    echo "<br>Door Status: LOCKED<br>";
}

elseif ($output==1){
    //shell_exec('logout');
    echo "<br>Door Status: UNLOCKED<br>";
    //shell_exec('echo "Unlocked via Fingerprint @ `date` <br>" >> /home/pi/test1.txt');
    shell_exec('gpio write 2 1');
}

//echo "<br><div>$log</div><br>";
?>