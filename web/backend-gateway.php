<?php
if(!$_SESSION['id']){

    header("location: login.php?success=You've logged out");

}
?>