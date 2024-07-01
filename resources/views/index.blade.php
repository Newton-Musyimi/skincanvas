<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Skin Canvas</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <main class="mt-6">
            <div class="bg-white">
                <header class="absolute inset-x-0 top-0 z-50">
                    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                        <div class="flex lg:flex-1">
                            <a href="#" class="-m-1.5 p-1.5">
                                <span class="sr-only">Skin Canvas</span>
                                Skin Canvas
                            </a>
                        </div>
                        <div class="flex lg:hidden">
                            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                                <span class="sr-only">Open main menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </button>
                        </div>
                        <div class="hidden lg:flex lg:gap-x-12">
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Product</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
                        </div>
                        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </nav>
                </header>

                <div class="relative isolate px-6 pt-14 lg:px-8">
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                        <div class="text-center">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Welcome to Skin Canvas</h1>
                            <p class="mt-6 text-lg leading-8 text-gray-600">Discover and license unique tattoo designs created by talented artists from around the world.</p>
                            <div class="mt-10 flex items-center justify-center gap-x-6">
                                <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                </div>

                <!-- Featured Designs Section -->
                <section class="py-16 bg-gray-50">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="text-center">
                            <h2 class="text-3xl font-extrabold text-gray-900">Featured Designs</h2>
                            <p class="mt-4 text-lg leading-6 text-gray-600">Explore some of the most popular tattoo designs on Skin Canvas.</p>
                        </div>
                        <div class="mt-12 grid gap-8 lg:grid-cols-3">
                            <!-- Example Design Card -->
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <img class="h-40 w-full object-cover mb-6 rounded-md" src="designs\content-pixie-bLWaYQlfaZ0-unsplash.jpg" alt="Design 1">
                                <h3 class="text-xl font-semibold mb-2">Celestial Harmony</h3>
                                <p class="text-gray-600">This minimalist tattoo design features a sun, crescent moon, and all-seeing eye, symbolizing the balance and interconnectedness of cosmic elements. Perfect for those seeking a simple yet profound piece of body art that represents enlightenment, intuition, and harmony</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <img class="h-40 w-full object-cover mb-6 rounded-md" src="designs\matheus-frade-bWoig_hZxIU-unsplash.jpg" alt="Design 2">
                                <h3 class="text-xl font-semibold mb-2">Geometric Arrow</h3>
                                <p class="text-gray-600">This tattoo design features a sleek and modern geometric arrow, symbolizing direction, focus, and progress. With its clean lines and intricate details, it makes a bold statement for those who embrace the journey of life and the pursuit of their goals. Ideal for placement on the forearm or wrist</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <img class="h-40 w-full object-cover mb-6 rounded-md" src="designs\raspopova-marina-Rfp27flla_I-unsplash.jpg" alt="Design 3">
                                <h3 class="text-xl font-semibold mb-2">Floral Elegance</h3>
                                <p class="text-gray-600">This beautiful floral tattoo features a detailed arrangement of blooming flowers with delicate leaves and dotted accents. It embodies grace and femininity, making it a perfect choice for those who appreciate the beauty of nature and want to showcase a timeless and elegant piece of art on their skin. Ideal for placement on the thigh or hip</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Featured Artists Section -->
                <section class="py-16 bg-white">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="text-center">
                            <h2 class="text-3xl font-extrabold text-gray-900">Featured Artists</h2>
                            <p class="mt-4 text-lg leading-6 text-gray-600">Meet some of the talented artists who contribute to Skin Canvas.</p>
                        </div>
                        <div class="mt-12 grid gap-8 lg:grid-cols-3">
                            <!-- Example Artist Card -->
                            <div class="bg-gray-50 p-6 rounded-lg shadow-lg">
                                <img class="h-40 w-full object-cover mb-6 rounded-full mx-auto" src="artists\donovan-silva-dwWq7AFvy9A-unsplash.jpg" alt="Artist 1">
                                <h3 class="text-xl font-semibold mb-2">Artist Name</h3>
                                <p class="text-gray-600">Brief bio of the artist.</p>
                            </div>
                            <div class="bg-gray-50 p-6 rounded-lg shadow-lg">
                                <img class="h-40 w-full object-cover mb-6 rounded-full mx-auto" src="artists\jordan-marchand-7ilGcLNBhEo-unsplash.jpg" alt="Artist 2">
                                <h3 class="text-xl font-semibold mb-2">Artist Name</h3>
                                <p class="text-gray-600">Brief bio of the artist.</p>
                            </div>
                            <div class="bg-gray-50 p-6 rounded-lg shadow-lg">
                                <img class="h-40 w-full object-cover mb-6 rounded-full mx-auto" src="artists\luka-sonado-77kzE4r-oM0-unsplash.jpg" alt="Artist 3">
                                <h3 class="text-xl font-semibold mb-2">Artist Name</h3>
                                <p class="text-gray-600">Brief bio of the artist.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Footer -->
                <footer class="bg-gray-900 text-white py-12">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-bold">Skin Canvas</h3>
                                <p class="mt-2 text-gray-400">Bringing art to your skin.</p>
                            </div>
                            <div class="space-x-6">
                                <a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a>
                                <a href="#" class="text-gray-400 hover:text-white">Terms of Service</a>
                                <a href="#" class="text-gray-400 hover:text-white">Contact Us</a>
                            </div>
                        </div>
                        <div class="mt-8 text-center text-gray-400">
                            &copy; 2024 Skin Canvas. All rights reserved.
                        </div>
                    </div>
                </footer>
            </div>
        </main>
    </body>
</html>
