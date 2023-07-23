<?php

// $conn= new mysqli("localhost:3306", "crypbwsn_cryptotrost", "Abcd@1234!now", "crypbwsn_cryptotrost");

$conn= new mysqli("localhost", "root", "", "cryptotrost");

$search = htmlspecialchars($_GET['search']);
$searchCategory = htmlspecialchars($_GET['categorySearch']);

$sel = $conn->query("SELECT form_type FROM gift_card_form WHERE category_id ='$searchCategory' AND  is_physical ='$search' ");

while($row = $sel->fetch_assoc()){
    echo "<option value=".$row['form_type'].">".$row['form_type']."</option>";
}


?>