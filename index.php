<pre>
<?php
  $cmd = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "?", 1)+1);
  echo $cmd;
?>
</pre><br>
<a href="/log.txt">cmd</a>
