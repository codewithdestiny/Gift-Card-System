<?php
@session_start();
session_unset();
session_destroy();

header("location: login.php?success=You've logged out");
?>