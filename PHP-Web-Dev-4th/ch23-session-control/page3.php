<?php 
session_start();

echo 'The content of $_SESSION[\'sess_var\'] is ' . $_SESSION['sess_var'];
echo "<br />";

session_destroy();

 ?>
<br>
<br>
 <p>Don't be worried, there is supposed to be an error.</p>