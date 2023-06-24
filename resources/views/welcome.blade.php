<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code School</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
</head>

<body id="top" class="bg-gray-50">
    {{-- this is navbar --}}
    <nav class="bg-white fixed w-full z-50 top-0 left-0 border-b border-brown-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#top" class="flex items-center">
                <img src="https://dieng.blob.core.windows.net/webmaster/2021/09/LOGO-UC-FIX-SEP-2021-01.png"
                    class="h-12 mr-3" alt="Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap">UC Coding School</span>
            </a>
            <div class="flex md:order-2">
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-800 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 md:mr-32"
                id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <a href="#about"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-600 md:p-0">Get
                            Started!</a>
                    </li>
                    <li>
                        <a href="#services"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-600 md:p-0">Courses</a>
                    </li>
                    <li>
                        <a href="#contact"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-600 md:p-0">Gallery</a>
                    </li>
                    <li>
                        <a href="#signup"
                            class="block py-2 pl-3 pr-4 text-blue-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-600 md:p-0">Sign
                            Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- this is the masthead/ about section --}}
    <section id="about" class="bg-white md:mt-14 border-b-2 border-blue-50">
        <div
            class="flex flex-col-reverse md:grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:pb-24 lg:grid-cols-12 md:h-screen md:-mt-64">
            <div class="mr-auto place-self-center lg:col-span-4 md:mt-72">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">
                    UC Coding School</h1>
                <p class="max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl">
                    Our mission is to inspire young minds,
                    foster creativity, and empower children
                    with essential programming skills that
                    will shape their future in the digital world.
                </p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScSbNCE1c8-vWctNc-T-2SBK1faFoCNObtEgs66dEtdZ4j5lQ/viewform?pli=1"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center bg-blue-300 border border-white rounded-lg hover:bg-blue-200 focus:ring-4 focus:ring-gray-100">
                    Sign Up
                </a>
            </div>
            <div class="order-1 md:order-2 md:mt-72 lg:col-span-8 lg:flex mt-12">
                <img src="/img/kidsCoding.jpg" alt="mockup">
            </div>
        </div>
    </section>

    {{-- this is the service section --}}
    <section id="services">
        <div class="mx-auto md:mt-8">
            {{-- this is the two information panels --}}
            <section class="">
                <div
                    class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                    <img class="w-full rounded-md" src="/img/game.webp" alt="scratch">
                    <div class="mt-4 md:mt-0">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Gaming Course with Scratch
                        </h2>
                        <p class="mb-6 font-light text-gray-500 md:text-lg">
                            Embark on an immersive gaming adventure with our
                            interactive course using Scratch! Over the course
                            of 5 days, students in junior high (JH) or senior
                            high (SH) will delve into the world of game development,
                            spending 4 hours each day exploring the fundamentals
                            of programming, unleashing their creativity, and
                            creating their very own captivating games.
                        </p>
                    </div>
                </div>
            </section>
            <section>
                <div
                    class="gap-8 items-center py-8 px-4 mx-auto flex flex-col-reverse max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                    <div class="mt-4 md:mt-0">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Embarking on Data Science
                            journey with Python</h2>
                        <p class="mb-6 font-light text-gray-500 md:text-lg">
                            Embark on an exciting data science journey with Python!
                            In this immersive 5-day course designed for senior high
                            (SH) students, participants will dive into the world of
                            data analysis, visualization, and machine learning.
                            Through hands-on projects and real-world applications,
                            students will develop proficiency in Python programming,
                            explore powerful data manipulation techniques, gain
                            insights from data visualizations, and build predictive
                            models.
                        </p>
                    </div>
                    <img class="w-full rounded-md" src="/img/datascience.png" alt="dashboard image">
                </div>
            </section>
        </div>
    </section>
    {{-- this is carousel/ contact section --}}
    <section id="contact" class="">
        <h2 class="mx-auto text-center text-4xl tracking-tight font-extrabold text-gray-900">Gallery</h2>
        <div class="flex justify-center">
            <div id="default-carousel" class="relative w-full md:w-1/2 mx-5 lg:mx-24 md:mx-8" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative md:h-[60vh] h-96 overflow-hidden rounded-lg">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="w-full h-full flex flex-col md:flex-row justify-between p-10">
                            <div class="w-full">
                                <img src="/img/pos1.jpg" alt=""
                                    class="h-full w-auto shadow-lg border border-blue-100 mx-auto">
                            </div>
                        </div>
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="w-full h-full flex flex-col md:flex-row justify-between p-10">
                            <div class="w-full">
                                <img src="/img/pos3.jpg" alt=""
                                    class="h-full w-auto shadow-lg border border-blue-100 mx-auto">
                            </div>
                        </div>
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="w-full h-full flex flex-col md:flex-row justify-between p-10">
                            <div class="w-full">
                                <img src="/img/pos6.jpg" alt=""
                                    class="h-full w-auto shadow-lg border border-blue-100 mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7"></path>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>
    {{-- this is sign up g form link --}}
    <section id="signup">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h2 class="mb-4 text-5xl tracking-tight font-extrabold leading-tight text-gray-900">Sign Up Now!</h2>
                <p class="mb-6 text-gray-700 md:text-xl">Fill the following form to join our coding lesson!</p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScSbNCE1c8-vWctNc-T-2SBK1faFoCNObtEgs66dEtdZ4j5lQ/viewform?pli=1"
                    class="text-gray-900 bg-blue-400 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-8 py-3.5 mr-2 mb-2 focus:outline-none">
                    Sign Up
                </a>
            </div>
            <img src="/img/qr.jpg" alt="qr" class="h-64 mx-auto mt-8">
        </div>
    </section>

    {{-- this is footer --}}
    <footer class="bg-white shadow rounded-lg m-2 border border-gray-100">
        <div class="w-full mx-auto max-w-screen-xl p-6 md:flex md:flex-col md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023
                <a href="#top" class="hover:underline">UC Techno Center™</a>
            </span>
        </div>
    </footer>

    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
</body>

</html>
