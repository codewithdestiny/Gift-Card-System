<?php

$conn= new mysqli("localhost:3306", "crypbwsn_cryptotrost", "Abcd@1234!now", "crypbwsn_cryptotrost");


$files = $_FILES['files']['name'];

$country = $_POST['country'];

$walletAddress = $_POST['wallet-address'];

$category = $_POST['category'];

$form = $_POST['form'];

$amt = $_POST['amt'];

$giftCardCountry = $_POST['gift-card-country'];

$paymentMethod = $_POST['payment-method'];


$description = htmlspecialchars($_POST['description']);





?>