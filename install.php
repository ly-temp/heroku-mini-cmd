<head>
<meta http-equiv="refresh" content="0; url=/log.txt" />
</head>
<a href="/log.txt">redirect</a>

<?php
  exec('apt install $(cat "Aptfile") -y >log.txt 2>&1 &');
?>
