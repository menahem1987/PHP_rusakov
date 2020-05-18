<?php
echo $token = uniqid("");
mkdir($token);
file_put_contents($token.'.txt', $token);
rmdir($token);
?>
