<?php

session_start();

session_unset();

session_destroy();

echo "<script>alert('😕 Come Back Again'); window.location.href='signin.php'</script>";

?>