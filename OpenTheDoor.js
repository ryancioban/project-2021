function control(){
    shell_exec('ssh pi@192.168.2.38 gpio write 3 1');
    shell_exec('echo "Unlocked via Web @ `date` <br>" >> /home/pi/test1.txt');

    //setTimeout(function(){
       // shell_exec('ssh pi@192.168.2.38 gpio write 3 0');
   // }, 4000);
}