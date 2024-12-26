<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My To-Do App</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://example.com/assets/img/background.svg" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3376 43.1124 12.3059 43.0856 12.2724 43.0651L5.61786 38.5085L5.61276 38.5064L5.60526 38.5034C5.54874 38.4711 5.48955 38.4459 5.42913 38.4266C5.39118 38.4129 5.3526 38.3988 5.3144 38.3841C5.29533 38.3766 5.27626 38.3694 5.25731 38.3621L1.00504 36.0705L1.99677 9.83281Z" fill="currentColor"></path></svg>
                        </div>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                        {{-- <div class="space-x-2 text-center sm:flex sm:justify-center lg:col-start-3 lg:justify-end">
                            <a href="#features" class="inline-block font-semibold text-black dark:text-white hover:text-[#FF2D20]">Features</a>
                            <a href="#how-it-works" class="inline-block font-semibold text-black dark:text-white hover:text-[#FF2D20]">How it Works</a>
                            <a href="#contact" class="inline-block font-semibold text-black dark:text-white hover:text-[#FF2D20]">Contact</a>
                        </div> --}}
                    </header>

                    <!-- Main Content -->
                    <main class="text-center py-10">
                        <h1 class="text-5xl font-extrabold text-black dark:text-white">
                            Welcome to My To-Do App
                        </h1>
                        <p class="mt-4 text-xl text-gray-700 dark:text-gray-300">
                            Manage your tasks easily and efficiently. Organize your daily activities and never miss a deadline.
                        </p>
                    </main>

                    <!-- Features Section -->
                    <section id="features" class="py-16">
                        <h2 class="text-3xl font-semibold text-black dark:text-white">Features</h2>
                        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                            <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-semibold">Task Management</h3>
                                <p class="mt-2 text-gray-600 dark:text-gray-300">Create, update, and delete tasks with ease. Stay organized with task categories.</p>
                            </div>
                            <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-semibold">Deadline Reminders</h3>
                                <p class="mt-2 text-gray-600 dark:text-gray-300">Get notified when tasks are due. Set deadlines and reminders for each task.</p>
                            </div>
                            <div class="bg-white dark:bg-zinc-800 p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-semibold">Priority Sorting</h3>
                                <p class="mt-2 text-gray-600 dark:text-gray-300">Sort tasks by priority level to focus on what matters most.</p>
                            </div>
                        </div>
                    </section>

                    <!-- How It Works Section -->
                    <section id="how-it-works" class="bg-gray-100 py-16">
                        <h2 class="text-3xl font-semibold text-black dark:text-white">How It Works</h2>
                        <p class="mt-6 text-gray-700 dark:text-gray-300">
                            To start using the To-Do App, simply create an account, add your tasks, and start organizing. You'll receive reminders to ensure you're always on track!
                        </p>
                    </section>

                    <!-- Contact Section -->
                    <section id="contact" class="py-16">
                        <h2 class="text-3xl font-semibold text-black dark:text-white">Contact Us</h2>
                        <p class="mt-6 text-gray-700 dark:text-gray-300">
                            Have any questions or feedback? <a href="mailto:dhivyarajagopal90@gmail.com" class="text-[#FF2D20]">Email us</a> anytime!
                        </p>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>
