@extends('frontend.index')
@push('main')
    <!-- Page illustration -->
    <div class="relative h-0 max-w-6xl mx-auto pointer-events-none -z-1" aria-hidden="true">
        <svg class="absolute top-0 right-0 -mr-16 transform translate-x-1/2 dark:opacity-40" width="800" height="502"
            fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="400" cy="102" r="400" fill="url(#heroglow_paint0_radial)" fill-opacity=".6" />
            <circle cx="209" cy="289" r="170" fill="url(#heroglow_paint1_radial)" fill-opacity=".4" />
            <defs>
                <radialGradient id="heroglow_paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                    gradientTransform="rotate(90 149 251) scale(315.089)">
                    <stop stop-color="#3ABAB4" />
                    <stop offset="1" stop-color="#3ABAB4" stop-opacity=".01" />
                </radialGradient>
                <radialGradient id="heroglow_paint1_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                    gradientTransform="rotate(90 -40 249) scale(133.913)">
                    <stop stop-color="#667EEA" />
                    <stop offset="1" stop-color="#667EEA" stop-opacity=".01" />
                </radialGradient>
            </defs>
        </svg>
    </div>
    <!-- Page sections -->
    <section>
        <div class="max-w-6xl px-4 mx-auto sm:px-6">
            <div class="pt-32 pb-10 md:pt-40 md:pb-16">

                <!-- Hero content -->
                <div class="items-center md:grid md:grid-cols-12 md:gap-12 lg:gap-20">

                    <!-- Content -->
                    <div class="mb-8 text-center md:col-span-7 lg:col-span-7 md:mb-0 md:text-left">
                        <h1 class="mb-4 font-extrabold h1 lg:text-5xl font-red-hat-display" data-aos="fade-down">
                            Dr. {{ $name }}</h1>
                        <h2 class="mb-4 font-extrabold h2 lg:text-3xl font-red-hat-display" data-aos="fade-down">
                            {{ $department }}</h2>
                        <p class="text-xl text-gray-600 dark:text-gray-400" data-aos="fade-down" data-aos-delay="150">
                            {{ $about }}</p>
                        <div class="flex flex-col justify-center max-w-sm mx-auto mt-8 sm:flex-row sm:max-w-md md:mx-0"
                            data-aos="fade-down" data-aos-delay="300">
                            <a class="text-white bg-teal-500 btn hover:bg-teal-400 shrink-0" href="#0">Book
                                Appointment</a>
                        </div>
                        </form>
                        <ul class="max-w-sm mx-auto mt-8 -mb-2 text-gray-600 sm:max-w-md md:max-w-none dark:text-gray-400"
                            data-aos="fade-down" data-aos-delay="450">
                            <div class="mb-2 text-xl font-bold font-red-hat-display">Why Doctor {{ $name }}?</div>
                            @foreach ($why_points as $item)
                                <li class="flex items-center mb-2">
                                    <svg class="w-3 h-3 mr-2 text-teal-400 fill-current shrink-0" viewBox="0 0 12 12"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Mobile mockup -->
                    <div class="text-center md:col-span-5 lg:col-span-5 md:text-right" x-data="{ modalExpanded: false }"
                        data-aos="fade-up" data-aos-delay="450">
                        <div class="relative inline-flex items-center justify-center">
                            <!-- Glow illustration -->
                            <svg class="absolute mt-32 mr-12 pointer-events-none -z-1 dark:opacity-40" aria-hidden="true"
                                width="678" height="634" viewBox="0 0 678 634" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="240" cy="394" r="240" fill="url(#piphoneill_paint0_radial)" fill-opacity=".4" />
                                <circle cx="438" cy="240" r="240" fill="url(#piphoneill_paint1_radial)" fill-opacity=".6" />
                                <defs>
                                    <radialGradient id="piphoneill_paint0_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="rotate(90 -77 317) scale(189.054)">
                                        <stop stop-color="#667EEA" />
                                        <stop offset="1" stop-color="#667EEA" stop-opacity=".01" />
                                    </radialGradient>
                                    <radialGradient id="piphoneill_paint1_radial" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse" gradientTransform="rotate(90 99 339) scale(189.054)">
                                        <stop stop-color="#9F7AEA" />
                                        <stop offset="1" stop-color="#9F7AEA" stop-opacity=".01" />
                                    </radialGradient>
                                </defs>
                            </svg>
                            <!-- Image inside mockup size: 290x624px (or 580x1248px for Retina devices) -->
                            {{-- <img class="absolute" src="{{ asset('images/mockup-image-01.jpg') }}" width="290"
                                height="624" style="max-width: 84.33%;" alt="Features illustration" /> --}}
                            <!-- iPhone mockup -->
                            <img class="relative h-auto max-w-full mx-auto pointer-events-none rounded-xl md:mr-0 md:max-w-none"
                                src="{{ asset('images/' . $hero_img . '') }}" width="344" height="674"
                                alt="{{ $name }}" aria-hidden="true" />
                            <!-- Play button -->
                            <a class="absolute transition duration-150 ease-in-out cursor-pointer hover:opacity-75"
                                @click.prevent="modalExpanded = true" aria-controls="modal">
                                <img src="{{ asset('svg/play-button.svg') }}" width="96" height="96" alt="Play" />
                            </a>
                        </div>

                        <!-- Modal backdrop -->
                        <div class="fixed inset-0 z-50 transition-opacity bg-black bg-opacity-75" x-show="modalExpanded"
                            x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-out duration-100"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" aria-hidden="true"
                            x-cloak></div>

                        <!-- Modal dialog -->
                        <div id="modal"
                            class="fixed inset-0 z-50 flex items-center justify-center px-4 overflow-hidden transform sm:px-6"
                            role="dialog" aria-modal="true" aria-labelledby="modal-headline" x-show="modalExpanded"
                            x-transition:enter="transition ease-in-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-8"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in-out duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-8" x-cloak>
                            <div class="w-full max-w-6xl max-h-full overflow-auto bg-white"
                                @click.outside="modalExpanded = false" @keydown.escape.window="modalExpanded = false">
                                <div class="relative pb-9/16">
                                    <iframe class="absolute w-full h-full"
                                        src="https://www.youtube.com/embed/{{ $hero_video }}" title="Video"
                                        webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="relative">
        <!-- Background gradient (light version only) -->
        <div class="absolute bottom-0 left-0 right-0 pointer-events-none h-128 bg-gradient-to-t from-gray-100 to-white -z-10 dark:hidden"
            aria-hidden="true"></div>
        <!-- End background gradient (light version only) -->
        <div class="relative max-w-6xl px-4 mx-auto sm:px-6">
            <div class="pb-12 md:pb-20">
                <div class="grid grid-cols-2 gap-4 text-center lg:gap-6 md:grid-cols-4" data-aos-id-stats>
                    <!-- Single item -->
                    @foreach ($counts as $item)
                        <div class="px-1 py-8 bg-white shadow-2xl dark:bg-gray-800" data-aos="fade-down"
                            data-aos-anchor="[data-aos-id-stats]">
                            <div class="mb-1 text-3xl font-extrabold tracking-tighter font-red-hat-display">
                                {{ $item->count }}</div>
                            <div class="text-gray-600 dark:text-gray-400">{{ $item->title }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="relative">
        <div class="max-w-6xl px-4 pt-16 mx-auto sm:px-6">
            @livewire('frontend.services')
        </div>
    </section>

    <!-- Testimonials -->
    <section class="border-t border-transparent dark:border-gray-800">
        <div class="py-12 md:py-20">

            <div class="max-w-6xl px-4 mx-auto sm:px-6">

                <!-- Section header -->
                <div class="max-w-3xl pb-12 mx-auto text-center md:pb-16">
                    <h1 class="mb-4 h2 font-red-hat-display">Testimonials</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400">{{ $testimonials_excerpt }}</p>
                </div>

            </div>

            <!-- Carousel built with Swiper.js [https://swiperjs.com/] -->
            <!-- * Initialized in src/js/main.js -->
            <!-- * Custom styles in src/css/additional-styles/theme.scss -->
            <div class="carousel swiper-container">
                <div class="swiper-wrapper">
                    <!-- Carousel items -->
                    @foreach ($testimonials as $item)
                        <div class="w-full p-4 rounded-lg sm:w-1/2 md:w-1/2 xl:w-1/4 swiper-slide">
                            <a href=""
                                class="block overflow-hidden rounded-lg shadow-md c-card hover:shadow-xl dark:border-white dark:border-2">
                                <div class="relative pb-48 overflow-hidden">
                                    <img class="absolute inset-0 object-cover w-full h-full"
                                        src="https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                                        alt="">
                                </div>
                                <div class="p-4">
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-semibold leading-none tracking-wide text-orange-800 uppercase bg-orange-200 rounded-full">{{ $item->service->title }}</span>
                                    <h2 class="mt-2 mb-2 font-bold">{{ $item->name }}</h2>
                                    <p class="text-sm">{{ $item->review }}</p>
                                </div>
                                <div class="p-4 text-xs text-gray-700 border-t border-b">
                                    <span class="flex items-center mb-1 dark:text-gray-100">
                                        <i class="mr-2 text-gray-900 far fa-clock fa-fw dark:text-gray-100"></i>
                                        {{ $item->created_at->diffForHumans() }}
                                    </span>
                                </div>
                                <div class="flex items-center p-4 text-sm text-gray-600">
                                    @for ($i = 1; $i <= $item->stars; $i++)
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 text-yellow-500 fill-current">
                                            <path
                                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                            </path>
                                        </svg>
                                    @endfor
                                    @for ($i = 1; $i <= 5 - $item->stars; $i++)
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 text-gray-400 fill-current dark:text-gray-100">
                                            <path
                                                d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                            </path>
                                        </svg>
                                    @endfor
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Arrows -->
            <div class="max-w-6xl px-4 mx-auto sm:px-6">
                <div class="flex items-center justify-between mt-12 md:mt-16">
                    <button
                        class="box-content relative z-20 flex items-center justify-center w-12 h-12 p-1 transition duration-150 ease-in-out bg-teal-500 shadow-xl carousel-prev group hover:bg-teal-400 dark:bg-gray-800 dark:hover:bg-teal-500 dark:hover:bg-opacity-25">
                        <span class="sr-only">Previous</span>
                        <svg class="w-4 h-4 text-white transition duration-150 ease-in-out fill-current dark:text-gray-400 group-hover:text-white dark:group-hover:text-teal-500"
                            viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.7 14.7l1.4-1.4L3.8 9H16V7H3.8l4.3-4.3-1.4-1.4L0 8z" />
                        </svg>
                    </button>
                    <button
                        class="box-content relative z-20 flex items-center justify-center w-12 h-12 p-1 transition duration-150 ease-in-out bg-teal-500 shadow-xl carousel-next group hover:bg-teal-400 dark:bg-gray-800 dark:hover:bg-teal-500 dark:hover:bg-opacity-25">
                        <span class="sr-only">Next</span>
                        <svg class="w-4 h-4 text-white transition duration-150 ease-in-out fill-current dark:text-gray-400 group-hover:text-white dark:group-hover:text-teal-500"
                            viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.3 14.7l-1.4-1.4L12.2 9H0V7h12.2L7.9 2.7l1.4-1.4L16 8z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </section>

    <!-- Sign Up -->
    <section>
        <div class="max-w-6xl px-4 mx-auto sm:px-6">

            <!-- CTA box -->
            <div class="relative bg-gray-800 dark">

                <!-- Background illustration -->
                <div class="absolute inset-0 left-auto pointer-events-none" aria-hidden="true">
                    <svg class="h-full" width="400" height="232" viewBox="0 0 400 232"
                        xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <radialGradient cx="50%" cy="50%" fx="50%" fy="50%" r="39.386%" id="box-gr-a">
                                <stop stop-color="#667EEA" offset="0%" />
                                <stop stop-color="#667EEA" stop-opacity="0" offset="100%" />
                            </radialGradient>
                            <radialGradient cx="50%" cy="50%" fx="50%" fy="50%" r="39.386%" id="box-gr-b">
                                <stop stop-color="#3ABAB4" offset="0%" />
                                <stop stop-color="#3ABAB4" stop-opacity="0" offset="100%" />
                            </radialGradient>
                        </defs>
                        <g transform="translate(-85 -369)" fill="none" fill-rule="evenodd">
                            <circle fill-opacity=".16" fill="url(#box-gr-a)" cx="413" cy="688" r="240" />
                            <circle fill-opacity=".24" fill="url(#box-gr-b)" cx="400" cy="400" r="400" />
                        </g>
                    </svg>
                </div>

                @livewire('frontend.newsletter')

            </div>

        </div>
    </section>
@endpush
