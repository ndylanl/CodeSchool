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
                <span class="self-center text-2xl font-semibold whitespace-nowrap">CodeSchool</span>
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
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">About</a>
                    </li>
                    <li>
                        <a href="#services"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Services</a>
                    </li>
                    <li>
                        <a href="#contact"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Contact</a>
                    </li>
                    <li>
                        <a href="#signup"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Sign
                            Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- this is the masthead/ about section --}}
    <section id="about" class="bg-gray-50 md:mt-14">
        <div class="flex flex-col-reverse md:grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 md:h-screen md:-mt-64">
            <div class="mr-auto place-self-center lg:col-span-7 md:mt-64">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">
                    UC Coding School</h1>
                <p class="max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl">
                    Our mission is to inspire young minds, 
                    foster creativity, and empower children 
                    with essential programming skills that 
                    will shape their future in the digital world.
                </p>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center bg-blue-300 border border-white rounded-lg hover:bg-blue-200 focus:ring-4 focus:ring-gray-100">
                    Sign Up
                </a>
            </div>
            <div class="order-1 md:order-2 md:mt-96 lg:col-span-5 lg:flex mt-24">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
            </div>
        </div>
    </section>

    {{-- this is the service section --}}
    <section id="services">
        <div class="mx-auto md:mt-8">
            {{-- this is the two information panels --}}
            <section class="">
                <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                    <img class="w-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup.svg" alt="dashboard image">
                    <div class="mt-4 md:mt-0">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Gaming Course with Scratch (5 days @ 4 hours for JH or SH)</h2>
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
            <section class="">
                <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                    <div class="mt-4 md:mt-0">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Embarking on Data Science journey with Python (5 days @ 4 hours for SH)</h2>
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
                    <img class="w-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup.svg" alt="dashboard image">
                </div>
            </section>
        </div>
        {{-- this is 2 x 3 section --}}
        <section>
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 md:text-center md:mt-8">
                <div class="max-w-screen-md mb-8 lg:mb-16 md:mx-auto">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Designed for
                        business teams like yours</h2>
                    <p class="text-gray-700 sm:text-xl">Here at Flowbite we focus on markets where
                        technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
                </div>
                <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                    <div>
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold">Marketing</h3>
                        <p class="text-gray-800">Plan it, create it, launch it. Collaborate
                            seamlessly with all the organization and hit your marketing goals every month with our
                            marketing plan.</p>
                    </div>
                    <div>
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold">Legal</h3>
                        <p class="text-gray-800">Protect your organization, devices and stay
                            compliant with our structured workflows and custom permissions made for you.</p>
                    </div>
                    <div>
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                                <path
                                    d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold">Business Automation</h3>
                        <p class="text-gray-800">Auto-assign tasks, send Slack messages, and much
                            more. Now power up with hundreds of new templates to help you get started.</p>
                    </div>
                    <div>
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold">Finance</h3>
                        <p class="text-gray-800">Audit-proof software built for critical financial
                            operations like month-end close and quarterly budgeting.</p>
                    </div>
                    <div>
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold">Enterprise Design</h3>
                        <p class="text-gray-800">Craft beautiful, delightful experiences for both
                            marketing and product with real cross-company collaboration.</p>
                    </div>
                    <div>
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold">Operations</h3>
                        <p class="text-gray-800">Keep your company’s lights on with customizable,
                            iterative, and structured workflows built for all efficient teams and individual.</p>
                    </div>
                </div>
            </div>
        </section>
    </section>
    {{-- this is carousel/ contact section --}}
    <section id="contact" class="">
        <div class="md:flex justify-center hidden">
            <div id="default-carousel" class="relative w-full mx-5 lg:mx-24 md:mx-8" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative md:h-[60vh] overflow-hidden rounded-lg">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="w-full h-full flex flex-col md:flex-row justify-between p-10">
                            <div class="w-full lg:w-1/2 mr-4">
                                <img src="/img/pos1.jpg" alt=""
                                    class="h-full w-auto shadow-lg border border-blue-100 mx-auto">
                            </div>
                            <div class="w-full lg:w-1/2 relative p-4">
                                <h4 class="text-3xl font-bold">test</h4>
                                <p class="mt-4 md:mt-16 ">test</p>
                                <button
                                    class="lg:absolute lg:bottom-1 mt-2 md:mt-5 text-gray-800 bg-blue-400 hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">See
                                    More</button>
                            </div>
                        </div>
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="w-full h-full flex flex-col md:flex-row justify-between p-10">
                            <div class="w-full lg:w-1/2 mr-4">
                                <img src="/img/pos3.jpg" alt=""
                                    class="h-full w-auto shadow-lg border border-blue-100 mx-auto">
                            </div>
                            <div class="w-full lg:w-1/2 relative p-4">
                                <h4 class="text-3xl font-bold">test</h4>
                                <p class="mt-4 md:mt-16 ">test</p>
                                <button
                                    class="lg:absolute lg:bottom-1 mt-2 md:mt-5 text-gray-800 bg-blue-400 hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">See
                                    More</button>
                            </div>
                        </div>
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="w-full h-full flex flex-col md:flex-row justify-between p-10">
                            <div class="w-full lg:w-1/2 mr-4">
                                <img src="/img/pos6.jpg" alt=""
                                    class="h-full w-auto shadow-lg border border-blue-100 mx-auto">
                            </div>
                            <div class="w-full lg:w-1/2 relative p-4">
                                <h4 class="text-3xl font-bold">test</h4>
                                <p class="mt-4 md:mt-16 ">test</p>
                                <button
                                    class="lg:absolute lg:bottom-1 mt-2 md:mt-5 text-gray-800 bg-blue-400 hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">See
                                    More</button>
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
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-gray-900">Start your free trial today</h2>
                <p class="mb-6 font-light text-gray-700md:text-lg">Try Flowbite Platform for 30 days. No credit card required.</p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScSbNCE1c8-vWctNc-T-2SBK1faFoCNObtEgs66dEtdZ4j5lQ/viewform?pli=1" class="text-gray-900 bg-blue-400 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">Free trial for 30 days</a>
            </div>
            <img src="/img/qr.png" alt="qr" class="h-64 mx-auto">
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
