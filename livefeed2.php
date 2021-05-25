<?php
    //Reads the "Flag" value from the other PHP code
    $output2 = shell_exec('gpio read 2');
    //Show recent logs
    $log = shell_exec('tail -n 15 /home/pi/test1.txt');
    //Show REAL time
    echo "The time is: ";
    echo date("D j F Y h:i:s A") . "<br><br>";
    //echo "Recent System Logs <br>";

    if ($output2 == 0){
        goto end; //No action needed here, just skip to end and display recent entries
    }

    elseif ($output2 == 1){
        sleep(10); //Buffer to offset time of the UNLOCK signal
        shell_exec('echo "Unlocked via Fingerprint @ `date` <br>" >> /home/pi/test1.txt'); //Timestamp log
        shell_exec('gpio write 2 0'); //Reset "Flag"
    }

    end:
    echo "<br><div>$log</div><br>";
?>