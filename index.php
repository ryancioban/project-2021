<!DOCTYPE html>
<html>
    <head>
        <title>Cam-Lock</title>
        <script type="text/javascript" src="autoUpdate.js"></script>
    </head>

    <body onload= "getDate();">
        <h1>Biometric Lock</h1>
        <h2>Camera Feed</h2>
        <br>

        <img src="http://pizero:8081/" alt="Camera is down :(">
        <br>
        <p>The time is : <span id="date"></span>.</p>


        <script type="text/javascript" language="javascript">

        function getDate() {
            document.getElementById('date').innerText = Date().toString();
        }

        </script>

        <div id="liveData">
            <p>Loading Data...</p>
        </div>

        <br>
        <div>Testing</div>
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
    </body>
</html>