<?php
$output = shell_exec('cd /home/netwons/Desktop;ls');

// Display the list of all file
// and directory
echo "<pre>$output</pre>";
echo "<br>------------------------------<br>";
echo  shell_exec('nmap 217.77.110.69 2>&1');


?>
