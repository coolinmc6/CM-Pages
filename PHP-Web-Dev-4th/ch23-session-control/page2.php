<?php 

session_start();

echo 'The content of $_SESSION[\'sess_var\'] is ' . $_SESSION['sess_var'] . '<br />';
echo "Notice how I didn't set the \$_SESSION variable in this page.";

unset($_SESSION['sess_var']);
 ?>
 <br>
 <a href="page1.php">Previous Page</a><br>
 <a href="page3.php">Next Page</a>