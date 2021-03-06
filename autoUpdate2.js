window.addEventListener('load', function()
{
    var xhr = null;

    getXmlHttpRequestObject2 = function()
    {
        if(!xhr)
        {               
            // Create a new XMLHttpRequest object 
            xhr = new XMLHttpRequest();
        }
        return xhr;
    };

    updateLiveData2 = function()
    {
        var now = new Date();
        // Date string is appended as a query with live data 
        // for not to use the cached version 
        var url = 'livefeed2.php?' + now.getTime();
        xhr = getXmlHttpRequestObject2();
        xhr.onreadystatechange = evenHandler;
        // asynchronous requests
        xhr.open("GET", url, true);
        // Send the request over the network
        xhr.send(null);
    };

    updateLiveData2();

    function evenHandler()
    {
        // Check response is ready or not
        if(xhr.readyState == 4 && xhr.status == 200)
        {
            dataDiv = document.getElementById('liveData2');
            // Set current data text
            dataDiv.innerHTML = xhr.responseText;
            // Update the live data every 10 sec
            setTimeout(updateLiveData2(), 10000);
        }
    }
});