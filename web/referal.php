<?php
require("./backend-logic.php");
$updateInstance = new UpdateDb();

if($_SERVER['REQUEST_METHOD'] == "POST"){
     $updateInstance->submitReferral();
}
?>

<script>
     $(function(e){
     $("#submit").click(function(e){
          e.preventDefaul();
     })
})
</script>
<div class="dashboard-panel h-44 w-full">
     <div class="bg-gray-200/70 w-full md:flex justify-between">
          <p class="py-2.5 px-5 ">Referrals</p>
          <div class="py-2.5 px-5">
               <button>Earn $15 with your Daily Rate of Returns, when you refer a friend</button>
          </div>
     </div>

     <form method="post" class="md:w-4/5 rounded-b-3xl mx-auto md:p-10 p-6 bg-sky-700" action="<?= htmlspecialchars_decode($_SERVER['PHP_SELF']);?>">
          <fieldset>
               <legend class="text-sky-100 text-xl md:text-2xl">Referrals Form</legend>
               <p class="text-sky-300">Help us credit your referee by entering his/her email</p>

               <?php
                
                if(empty($updateInstance->error)){
                  ?>
                  <div class="bg-green-600 py-2.5 px-3 rounded text-white">
                    <?=$updateInstance->success?>
                  </div><?php
                }else{?>
                  <div class="bg-red-600 py-2.5 px-3 rounded text-white">
                    <?=$updateInstance->error?>
                  </div><?php
                }
                ?>

               <div class="relative mb-3 col-span-6 md:mt-6" data-te-input-wrapper-init>
               <input
                    type="email"
                    required
                    name="ref-email"
                    class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="exampleFormControlInput1"
                    placeholder="Example label" />
                  <label
                    for="exampleFormControlInput1"
                    class="pointer-events-none text-white absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >Email address
                  </label>
                </div>
                <button id="submit" type="submit" class="bg-sky-600 md:mt-6 text-white hover:text-sky-300 py-2 px-5 rounded-full w-full">Submit</button>


          </fieldset>
     </form>
</div>