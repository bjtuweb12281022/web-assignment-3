<?php
setcookie("mycookie_name", "", time()-3600);
setcookie("count", "", time()-3600);

header("Location: index.php");
?>
