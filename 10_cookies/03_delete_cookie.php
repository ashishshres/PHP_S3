<?php
// Delete the cookie "username"
setcookie("username", "", time() - 3600);
print "Cookie deleted";
