<div class=" md:w-4/5 mx-auto relative  container py-7 px-5 mx-auto gap-x-8 md:flex justify-between">
	<div class="w-44 flex justify-start z-0 relative text-xl md:text-3xl">
		<img src="./assets/img/icon-white.png" class="w-12">
	</div>

	<div class="md:hidden block absolute right-5 top-5 ">
		<button class="text-white showMenuBtn">
			<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
			  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
			</svg>
		</button>
	</div>


	<div id="allMenu" class="md:w-full md:block hidden menu-item md:relative absolute top-0 left-0 right-0 md:pl-0 pl-5 md:h-auto h-screen z-50 md:bg-inherit bg-sky-700">
		<div class="mt-6 md:hidden
		 block w-44 flex justify-start z-0 relative text-xl md:text-3xl">
			<img src="./assets/img/icon-white.png" class="w-12">
		</div>

		<button class="absolute hideMenuBtn md:hidden block top-5 right-5 w-fit h-fit border border-sky-500 text-white cursor-pointer p-2 rounded-lg">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
			  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
			</svg>
		</button>
		<ul class="md:flex text-white justify-evenly md:mt-0 mt-8 gap-x-5">
			<li class="md:my-0 my-3.5">
				<a href="./web/login.php" class="hover:text-blue-200">Redeem Gift Card</a>
			</li>
			<li class="md:my-0 my-3.5">
				<a href="./web/login.php" class="hover:text-blue-200">Exchange</a>
			</li>

			<li class="md:my-0 my-3.5">
				<a href="./web/login.php" class="hover:text-blue-200">STaking</a>
			</li>

			<li class="md:my-0 my-3.5">
				<a href="./web/register.php" class="hover:text-blue-200">Create account</a>
			</li>

		</ul>
	</div>
</div>