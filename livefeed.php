<br>
<div>Hello humans!</div>
<br>

<?php
$output = shell_exec('ssh pi@192.168.2.38 gpio read 2');

if ($output == 0){
    echo "<br>Switch is LOW!<br>";
}

else if ($output == 1){
    echo "<br>Switch is HIGH!<br>";
}
?>