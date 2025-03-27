<?php
session_start();
session_destroy();
header("Location: home.php"); // Redirect naar de homepagina of een andere pagina
exit;
?>
