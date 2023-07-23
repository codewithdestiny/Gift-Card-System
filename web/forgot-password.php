

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create account || Get started...</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../assets/css/style.css" media="all">
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/ajax.js"></script>
</head>
<body>

    <div class="md:h-screen w-full mx-aut md:grid grid-cols-12 gap-2 md:gap-5">
        <div class="col-span-6 md:mt-6 md:block hidden">
            <img src="../assets/img/sign-up.png" class="md:w-4/5 mx-auto">
        </div>
        <div class="col-span-6 md:px-16 md:pt-10 p-5">
            <fieldset class="md:mt-20">
                <legend class="text-xl md:text-3xl text-sky-900 w-fit mx-auto">
                    Reset Password
                </legend>

                <div class="relative mb-3 col-span-6 md:mt-6" data-te-input-wrapper-init>
                  <input
                    type="text"
                    class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="exampleFormControlInput1"
                    placeholder="Example label" />
                  <label
                    for="exampleFormControlInput1"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    >Email address
                  </label>
                </div>

                <button type="submit" class="bg-sky-600 md:mt-6 text-white hover:text-sky-300 py-2 px-5 rounded-full w-full">Reset Password</button>

                <div class="md:flex justify-evenly">
                    <div class="mt-6">
                        Don't have an account?
                        <a href="./register.php" class="text-blue-700">Register</a>
                    </div>
                <div class="mt-6">
                    or
                    <a href="./login.php" class="text-blue-700">Login</a>
                </div>
                </div>

            </fieldset>
        </div>
    </div>
    
</body>
</html>
