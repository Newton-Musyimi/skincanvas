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
            <!-- resources/views/livewire/store.blade.php -->
            <div class="bg-white">
                <header class="absolute inset-x-0 top-0 z-50">
                    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                        <div class="flex lg:flex-1">
                            <a href="#" class="-m-1.5 p-1.5">
                                <span class="sr-only">Skin Canvas</span>
                                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
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
                    <!-- Mobile menu, show/hide based on menu open state. -->
                    <div class="lg:hidden" role="dialog" aria-modal="true">
                        <!-- Background backdrop, show/hide based on slide-over state. -->
                        <div class="fixed inset-0 z-50"></div>
                        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                            <div class="flex items-center justify-between">
                                <a href="#" class="-m-1.5 p-1.5">
                                    <span class="sr-only">Skin Canvas</span>
                                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                                </a>
                                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                                    <span class="sr-only">Close menu</span>
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="mt-6 flow-root">
                                <div class="-my-6 divide-y divide-gray-500/10">
                                    <div class="space-y-2 py-6">
                                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Product</a>
                                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                                    </div>
                                    <div class="py-6">
                                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="relative isolate px-6 pt-14 lg:px-8">
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                            <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                                Discover our featured tattoo designs. <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Shop now <span aria-hidden="true">&rarr;</span></a>
                            </div>
                        </div>
                        <div class="text-center">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Explore Unique Tattoo Designs</h1>
                            <p class="mt-6 text-lg leading-8 text-gray-600">Find the perfect tattoo design from our curated collection of artistic creations.</p>
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

                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Featured Tattoo Designs</h2>

                    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                        <!-- Design Card 1 -->
                        <div class="group relative">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                <img src="{{ asset('designs/content-pixie-bLWaYQlfaZ0-unsplash.jpg') }}" alt="Celestial Harmony" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Celestial Harmony
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">Sun, Moon, and Eye</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">$50</p>
                            </div>
                        </div>

                        <!-- Design Card 2 -->
                        <div class="group relative">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                <img src="{{ asset('designs/matheus-frade-bWoig_hZxIU-unsplash.jpg') }}" alt="Geometric Arrow" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Geometric Arrow
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">Direction and Focus</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">$40</p>
                            </div>
                        </div>

                        <!-- Design Card 3 -->
                        <div class="group relative">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                <img src="{{ asset('designs/raspopova-marina-Rfp27flla_I-unsplash.jpg') }}" alt="Floral Elegance" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Floral Elegance
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">Blooming Flowers</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">$60</p>
                            </div>
                        </div>

                        <!-- Design Card 4 -->
                        <div class="group relative">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                <img src="{{ asset('designs/sincerely-media-AO17FV322ys-unsplash.jpg') }}" alt="Abstract Geometry" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Abstract Geometry
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">Modern Art</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">$45</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </body>
</html>
    
