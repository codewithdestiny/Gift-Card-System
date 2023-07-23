
<?php
session_start();
require("./backend-gateway.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $files = $_FILES['files']['name'];

    foreach ($files as $key => $value) {
        echo $value;
    }

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard || CryptoTrost</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css" media="all">
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/ajax.js"></script>
	  <link rel="icon" type="image/jpeg" href="../assets/img/icon.jpeg">

<script>
$(function(e){
    $(".btnMenu").click(function(){
        $("#dashboard").toggle(1500);
      })

})
</script>
</head>
<body>

	<div >
		<div class="md:grid grid-cols-12 w-full md:gap-0">
			<div class="col-span-2 relative md:h-screen md:p-0 px-5 py-5 bg-sky-700">
				<ul class="md:mt-7 md:ml-8">
					<div class="md:mb-10 ">
						<a href="index.php">
							<img src="../assets/img/icon-white.png" class="w-12">
						</a>
					</div>
					<button class="btnMenu text-sky-300 absolute top-5 right-5 md:hidden block">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
						</svg>
					</button>
					<div id="dashboard" class="md:block hidden md:relative fixed top-12 left-0 right-0 z-50 md:bg-inherit bg-sky-700 md:p-0 p-8">
					<li class="flex justify-start hover:text-sky-300 transition-all text-sky-200 my-4 gap-2">
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-list-nested" viewBox="0 0 16 16">
							  <path fill-rule="evenodd" d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5z"/>
							</svg>
						</span>
						<a href="index.php?tab=user-dashboard.php">Dashboard</a>
					</li>
					<li class="flex justify-start hover:text-sky-300 transition-all text-sky-200 my-6 gap-2">
						<span>
						<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
						  <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
						  <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
						</svg>
						</span>
						<a href="./index.php?tab=crypto-deposit.php">Deposit</a>
					</li>
					<li class="flex justify-start hover:text-sky-300 transition-all text-sky-200 my-6 gap-2">
						<span>
						<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-gift" viewBox="0 0 16 16">
						  <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z"/>
						</svg>
						</span>
						<a href="./index.php?tab=gift-card.php">Gift Cards</a>
					</li>
					<li class="flex justify-start hover:text-sky-300 transition-all text-sky-200 my-6 gap-2">
						<span>
						<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-currency-exchange" viewBox="0 0 16 16">
						  <path d="M0 5a5.002 5.002 0 0 0 4.027 4.905 6.46 6.46 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05c0-.046 0-.093.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.46 3.46 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98c-.003.046-.003.097-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5zm16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0zm-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787H8.25zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674l.077.018z"/>
						</svg>
						</span>
						<a href="./index.php?tab=crypto-exchange.php">Crypto Exchanges</a>
					</li>

					<li class="flex justify-start hover:text-sky-300 transition-all text-sky-200 my-6 gap-2">
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
							  <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
							  <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
							</svg>
						</span>
						<a href="./index.php?tab=user-settings.php">Settings</a>
					</li>

					<li class="flex justify-start hover:text-sky-300 transition-all text-sky-200 my-6 gap-2">
						<span>
						<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
						  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
						  <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
						</svg>
						</span>
						<a href="mailto:support@cryptotrost.com">Helps & Support</a>
					</li>

					<li class="flex justify-start hover:text-sky-300 transition-all text-sky-200 my-6 gap-2">
						<span>
						<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
						  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
						  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
						</svg>
						</span>
						<a href="logger.php">Logout</a>
					</li>
					</div>
				</ul>

				<div class="md:absolute md:block hidden px-2 border-t border-sky-600/90 py-5 bottom-0 left-0 right-0">
					<div class="flex justify-evenly">
						<a href="./index.php?tab=user-profile.php" class="text-sky-200 hover:text-sky-300 transition-all">
							<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
							  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
							  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
							</svg>
						</a>
						<a href="./index.php?tab=general-announcement.php" class="text-sky-200 hover:text-sky-300 transition-all">
							<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16">
							  <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z"/>
							</svg>
						</a>

						<a href="./index.php?tab=user-notification.php" class="text-sky-200 hover:text-sky-300 transition-all">
							<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
							  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
							</svg>
						</a>
						<a href="./index.php?tab=referal.php" class="text-sky-200 hover:text-sky-300 transition-all">
							<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
							  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
							</svg>
						</a>


					</div>
				</div>
			</div>

<div class="dashboard-panel w-full bg-sky-300 col-span-10 ">
     <form action="<?=html_entity_decode($_SERVER['PHP_SELF'])?>" method="post" id="form-gift-card" enctype="multipart/form-data">

<?php

// $conn= new mysqli("localhost:3306", "crypbwsn_cryptotrost", "Abcd@1234!now", "crypbwsn_cryptotrost");
$conn= new mysqli("localhost", "root", "", "cryptotrost");

$sel = $conn->query("SELECT * FROM gift_card_form GROUP BY category_id");

?>
    <div id="result" class="text-xl md:text-2xl mt-6 mb-4 px-5">Redeem Gift Card</div>
<div class="md:grid grid-cols-12 gap-3 md:gap-8 md:p-10 p-5">
    <div class="col-span-3">
        <label class="block">
        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
            Category
        </span>
        <select  name="category" id="category" required class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
            <option value="" disabled selected >Select Category</option>
            <?php
            while($row = $sel->fetch_assoc()){
                ?>
                <option value="<?=$row['category_id']?>"><?=$row['category_id']?></option>
                <?php
            }
            ?>
        </select>
        </label>
    </div>
    <div class="col-span-3">
        <label class="block">
        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
            Form
        </span>
        <select  name="form" id="gift-card-form-select" required class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
            <option value="" disabled selected >All Forms</option>
            <option value="1"  >Physical</option>
            <option value="0" >Ecode</option>
            
        </select>
        </label>
    </div>
    <div class="col-span-3">
        <label class="block">
        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
            Country:
        </span>
        <select name="country" required class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
            <option value="" selected >All countries</option>
            <?php
            $sql = $conn->query("SELECT country_name FROM gift_card_country");
            while($row = $sql->fetch_assoc()){
                ?>
                <option value="<?=$row['country_name']?>"><?=$row['country_name']?></option>
                <?php
            }
            ?>
        </select>
        </label>
    </div>
    <div class="col-span-3">
        <label class="block">
        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
            Gift Card
        </span>
        <select type="text" name="gift-card-country" id="country" required class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
            <option value="" selected >Gift Card</option>
        </select>
        </label>
    </div>
    
</div>
<div class="md:grid grid-cols-12 gap-3 md:gap-8 md:px-10 px-5">
    <div class="col-span-3">
        <label class="block">
        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
            Amount
        </span>
        <input type="number" name="amt" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Amount" />
        </label>
    </div>
    <div class="col-span-3">
        <label class="block relative">
        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
            File Upload
        </span>
        <input type="file" name="files[]" multiple class="file:bg-sky-100 mt-1 file:px-3 file:py-2 bg-white file:border  file:border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="you@example.com" />
            <span class="absolute top-9 text-gray-500 right-3">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
            </svg>
            </span>
        </label>
        <small class="text-gray-700">You can upload multiples gift card of the same types (Desktop: Hold CTRL + select Files)</small>
    </div>
    <div class="col-span-3">
        <label class="block">
        <span class="after:content-['*'] relative after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
            Payment Method
            
            <p class="absolute left-28 top-0.5" title="Select how you want to be paid.">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
            </p>
        </span>
        <select name="payment-method" required class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
            <option value="" selected >Select Payment</option>
            <option value="btc" >Bitcoin</option>
            <option value="usdt" selected >USDT</option>
        </select>
        </label>
    </div>
    <div class="col-span-3">
        <label class="block relative">
        <span class="after:content-['*'] relative after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
            Promo code
            <p class="absolute left-28 top-0.5" title="To enable promo, enter the code">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
            </p>
        </span>
        <input name="promo-code" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
        </label>
    </div>
    
</div>
<div class="md:grid grid-cols-12 gap-3 md:gap-8 md:px-10 px-5">
    
    <div class="col-span-3">
        <label class="block">
        <span class="after:content-['*'] relative after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
            Description (optional)
            
            <p class="absolute left-40 top-0.5" title="Elaborate more if necessary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
            </p>
        </span>
        <textarea required name="description" class="mt-1 resize-none px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"></textarea>
        </label>
    </div>
    <div class="col-span-3">
        <label class="block">
        <span class="after:content-['*'] relative after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
            Wallet Address
            <p class="absolute left-40 top-0.5" title="Enter your payment method wallet address">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
            </p>
        </span>
        <textarea  type="text" required name="wallet-address" class="mt-1 resize-none px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"></textarea>
        </label>
    </div>
    <div class="col-span-3">
        <label class="block">
        <span class="after:content-['*'] relative after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
            Total Amount
            <p class="absolute left-40 top-0.5" title="Enter your payment method wallet address">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </svg>
            </p>
        </span>
        <textarea  type="number" required name="total-cost" class="mt-1 resize-none px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"></textarea>
        </label>
    </div>

    <div class="col-span-3 md:mt-5">
        <button id="submitBtn" name="submit-gift-card" class="py-2.5 px-5 rounded-lg text-white bg-sky-700 w-full">Submit</button>
    </div>
    
</div>
</form>
</div>
		</div>
	</div>

</body>
</html>

