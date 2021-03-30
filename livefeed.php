<br>
<div>Hello humans!</div>
<br>

<?php
$output = `ssh pi@pizero gpio read 2`;

if (($output = `ssh pi@pizero gpio read 2`) == 0){
    echo "<br>Switch is LOW!<br>";
}

else if (($output = `ssh pi@pizero gpio read 2`) == 1){
    echo "<br>Switch is HIGH!<br>";
}
?>