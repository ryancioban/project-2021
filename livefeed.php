<br>
<div>Hello humans!</div>
<br>

<?php
$output = shell_exec('gpio read 2');

if (($output = `gpio read 2`) == 0){
                echo "<br>Switch is LOW!<br>";
            }

else if (($output = `gpio read 2`) == 1){
                echo "<br>Switch is HIGH!<br>";
            }
?>