<?php
// Expire the cookies by setting the time in the past
setcookie("user_email", "", time() - 3600, "/", "", true, true);
setcookie("user_name", "", time() - 3600, "/", "", true, true);




header("Location: Login.html");
exit;
?>
