<?php
//$output = shell_exec('ssh pi@192.168.2.38 gpio read 2');
$output2 = shell_exec('gpio read 2');
$log = shell_exec('tail -n 15 /home/pi/test1.txt');

if ($output2 == 0){
    //goto end;
    echo "nothing here";
}

elseif ($output2 == 1){
    //echo "<br>Door Status: UNLOCKED<br>";
    shell_exec('echo "Unlocked via Fingerprint @ `date` <br>" >> /home/pi/test1.txt');
    shell_exec('gpio write 2 0');
}

end:
echo "<br><div>$log</div><br>";
//sleep(5);
?>