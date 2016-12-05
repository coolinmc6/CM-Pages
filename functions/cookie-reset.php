<?php

setcookie('count', '1', time() - 3600, "/");

header('Location: /index.php');