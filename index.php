<!DOCTYPE html>
<html>
    <head>
        <title>Cam-Lock</title>
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

    </body>
</html>