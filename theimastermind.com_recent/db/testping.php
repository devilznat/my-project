<?php
function pingAddress($ip) {
$pingresult = exec("/bin/ping -n 3 $ip", $outcome, $status);
if (0 == $status) {
$status = "alive";
} else {
$status = "dead";
}
echo "The IP address, $ip, is ".$status;
}

pingAddress("119.81.15.43");

?>