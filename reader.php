<?php

/**
  * @multics panel v4.8 release 26-10-2021
  * @oscam, multics, iptv 3in1 panel
  * @developer: Muhammad Ashan (Xtream-Masters.com)
*/

include 'lines.php';

$time = date("h_A");

//here you need add your other readers after first reader.

$readers = "
[reader]
label                         = D2H_$time
description                   = 88
protocol                      = cccam
device                        = $server_port
user                          = $user
password                      = $pass
inactivitytimeout             = -1
keepalive                     = 1
cacheex_allow_request         = 1
caid                          = 0639
ident                         = 0639:000000
group                         = 1
saveemm-s                     = 1
saveemm-g                     = 1
cccversion                    = 2.3.0
cccreshare                    = 0
audisabled                    = 1



[reader]
label                         = D2H_ex_ashan
description                   = 88
protocol                      = cccam
device                        = 108.cline.tv,16666
user                          = 5875
password                      = 6543
inactivitytimeout             = -1
keepalive                     = 1
cacheex_allow_request         = 1
caid                          = 0639
ident                         = 0639:000000
group                         = 1
saveemm-s                     = 1
saveemm-g                     = 1
cccversion                    = 2.3.0
cccreshare                    = 0
audisabled                    = 1


";

//replace your oscam.server file location.
file_put_contents("/usr/local/etc/oscam.server", $readers);


//set your oscam ip and port then user and password to allow oscam access to this script for auto chnge readers each hour.

 $os_user = 'admin'; $os_pass = 'pass'; // replace oscam user,pass
 $url = 'http://lcoalhost:4444/userconfig.html?action=reloadreaders'; // replace your server ip and port.
 $data = [ $content, 'action' => 'reloadreaders' ];
 $dataos = http_build_query($data);
 $ch = curl_init();
 curl_setopt($ch,CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
 curl_setopt($ch, CURLOPT_AUTOREFERER, true);
 curl_setopt($ch, CURLOPT_TIMEOUT, 30);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
 curl_setopt($ch, CURLOPT_USERPWD, $os_user .':'. $os_pass);
 curl_setopt($ch,CURLOPT_POST, true);
 curl_setopt($ch,CURLOPT_POSTFIELDS, $dataos);
 $result = curl_exec($ch);
 
// happy sharing.
