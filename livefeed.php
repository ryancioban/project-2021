<?php
    //Reads the logical signals from the uC
    $output = shell_exec('ssh pi@192.168.2.38 gpio read 2');

    if ($output == 0){
        echo "<br>Door Status: LOCKED<br>";
    }

    elseif ($output==1){
        echo "<br>Door Status: UNLOCKED<br>";
        shell_exec('gpio write 2 1'); //Flag System
    }
?>