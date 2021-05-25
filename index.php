<!DOCTYPE html>
<html>
    <head>
        <title>Cam-Lock</title>
        <!--Import AutoUpdater scripts-->
        <script type="text/javascript" src="autoUpdate.js"></script>
        <script type="text/javascript" src="autoUpdate2.js"></script>
        <!--<script type="text/javascript" src="OpenTheDoor.js"></script>-->
    </head>

    <body>
        <h1>Biometric Lock</h1>
        <h2>Camera Feed</h2>
        <br>

        <!--Get remote camera source as an image-->
        <img src="http://65.94.43.3:8081/" alt="Camera is down :(">
        <br>

        <!--<br>
        <button onclick="control()">Open the Lock!</button>
        <br>-->

        <br>
        <form method="post" action="OpenDoor.php" target=" _blank">
            <div><input class="button" type="submit" value="Open the Lock!">
        </form>
        <br>

        <!--Load door status-->
        <div id="liveData">
            <p>Loading Data...</p>
        </div>

        <!--Prompt to display complete logs-->
        <br>
        <form method="post" action="fullLog.php" target=" _blank">
            <div><input class="button" type="submit" value="Access Full Logs">
        </form>
        <br>
        
        <!--Load recent system logs-->
        <br>
        <h3>Recent System Logs</h3>
        <div id="liveData2">
            <p>Loading Data...</p>
        </div>
    </body>
</html>