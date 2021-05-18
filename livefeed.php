<?php
$output = shell_exec('ssh pi@192.168.2.38 gpio read 2');

if ($output == 0){
    echo "<br>Door Status: LOCKED<br>";
}

else if ($output == 1){
    echo "<br>Door Status: UNLOCKED<br>";
}
?>