<?php
include "/var/www/lightshowpi/config.php";
$x = "sudo python ";
$y = "/py/synchronized_lights.py --file=";
$z = $x.$lightshowpihome.$y.$_GET["location"];

putenv("SYNCHRONIZED_LIGHTS_HOME=/lights");
system($z);
echo "<html><body><P>All done! <a href'/lightshowpi'>Go back home?</a></p></body></html>";
?>
