<!DOCTYPE html>
<html>
    <head>
        <title>Cam-Lock</title>
        <script type="text/javascript" src="autoUpdate.js"></script>
        <script type="text/javascript" src="autoUpdate2.js"></script>
    </head>

    <body onload= "getDate();">
        <h1>Biometric Lock</h1>
        <h2>Camera Feed</h2>
        <br>

        <img src="http://65.94.43.3:8081/" alt="Camera is down :(">
        <br>

        <div id="liveData">
            <p>Loading Data...</p>
        </div>

        <form method="post" action="fullLog.php">
            <div><input class="button" type="submit" value="Access Full Logs">
        </form>
        
        <br>
        <div id="liveData2">
            <p>Loading Data...</p>
        </div>


    </body>
</html>