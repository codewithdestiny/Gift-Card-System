<?php
$conn = new mysqli("localhost:3306", "crypbwsn_cryptotrost", "Abcd@1234!now", "crypbwsn_cryptotrost");

if($conn){
    return true;
}else{
    echo "Not connected".$conn->error;
}
?>