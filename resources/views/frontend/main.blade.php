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
                        <h1 class="mb-4 font-extrabold h1 lg:text-6xl font-red-hat-display" data-aos="fade-down">Your
                            website, reimagined</h1>
                        <p class="text-xl text-gray-600 dark:text-gray-400" data-aos="fade-down" data-aos-delay="150">Our
                            landing page template works on all devices, so you only have to set it up once, and get
                            beautiful results forever.</p>
                        <!-- CTA form -->
                        <form class="mt-8" data-aos="fade-down" data-aos-delay="300">
                            <div class="flex flex-col justify-center max-w-sm mx-auto sm:flex-row sm:max-w-md md:mx-0">
                                <input type="tel" class="w-full mb-2 form-input sm:mb-0 sm:mr-2" placeholder="Phone number"
                                    aria-label="Phone number" />
                                <a class="text-white bg-teal-500 btn hover:bg-teal-400 shrink-0" href="#0">Request code</a>
                            </div>
                            <!-- Success message -->
                            <!-- <p class="mt-2 text-sm text-center opacity-75 md:text-left">Thanks for subscribing!</p> -->
                        </form>
                        <ul class="max-w-sm mx-auto mt-8 -mb-2 text-gray-600 sm:max-w-md md:max-w-none dark:text-gray-400"
                            data-aos="fade-down" data-aos-delay="450">
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 mr-2 text-teal-400 fill-current shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Lorem ipsum is placeholder text commonly.</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 mr-2 text-teal-400 fill-current shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Excepteur sint occaecat cupidatat.</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 mr-2 text-teal-400 fill-current shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Lorem ipsum is placeholder text commonly.</span>
                            </li>
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
                            <img class="absolute" src="../images/mockup-image-01.jpg" width="290" height="624"
                                style="max-width: 84.33%;" alt="Features illustration" />
                            <!-- iPhone mockup -->
                            <img class="relative h-auto max-w-full mx-auto pointer-events-none md:mr-0 md:max-w-none"
                                src="../images/iphone-mockup.png" width="344" height="674" alt="iPhone mockup"
                                aria-hidden="true" />
                            <!-- Play button -->
                            <a class="absolute transition duration-150 ease-in-out hover:opacity-75"
                                @click.prevent="modalExpanded = true" href="#0" aria-controls="modal">
                                <img src="../images/play-button.svg" width="96" height="96" alt="Play" />
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
                                    <iframe class="absolute w-full h-full" src="https://www.youtube.com/embed/qz4F1uMzihY"
                                        title="Video" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
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
                    <!-- 1st item -->
                    <div class="px-1 py-8 bg-white shadow-2xl dark:bg-gray-800" data-aos="fade-down"
                        data-aos-anchor="[data-aos-id-stats]">
                        <div class="mb-1 text-3xl font-extrabold tracking-tighter font-red-hat-display">2.4M</div>
                        <div class="text-gray-600 dark:text-gray-400">Days turn around</div>
                    </div>
                    <!-- 2nd item -->
                    <div class="px-1 py-8 bg-white shadow-2xl dark:bg-gray-800" data-aos="fade-down"
                        data-aos-anchor="[data-aos-id-stats]" data-aos-delay="100">
                        <div class="mb-1 text-3xl font-extrabold tracking-tighter font-red-hat-display">7M</div>
                        <div class="text-gray-600 dark:text-gray-400">Days turn around</div>
                    </div>
                    <!-- 3rd item -->
                    <div class="px-1 py-8 bg-white shadow-2xl dark:bg-gray-800" data-aos="fade-down"
                        data-aos-anchor="[data-aos-id-stats]" data-aos-delay="200">
                        <div class="mb-1 text-3xl font-extrabold tracking-tighter font-red-hat-display">7.4%</div>
                        <div class="text-gray-600 dark:text-gray-400">Days turn around</div>
                    </div>
                    <!-- 4th item -->
                    <div class="px-1 py-8 bg-white shadow-2xl dark:bg-gray-800" data-aos="fade-down"
                        data-aos-anchor="[data-aos-id-stats]" data-aos-delay="300">
                        <div class="mb-1 text-3xl font-extrabold tracking-tighter font-red-hat-display">49K</div>
                        <div class="text-gray-600 dark:text-gray-400">Days turn around</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="border-t border-transparent dark:border-gray-800">
        <div class="py-12 md:py-20">

            <div class="max-w-6xl px-4 mx-auto sm:px-6">

                <!-- Section header -->
                <div class="max-w-3xl pb-12 mx-auto text-center md:pb-16">
                    <h1 class="mb-4 h2 font-red-hat-display">From rough design files, to powerful products</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400">Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
                </div>

            </div>

            <!-- Carousel built with Swiper.js [https://swiperjs.com/] -->
            <!-- * Initialized in src/js/main.js -->
            <!-- * Custom styles in src/css/additional-styles/theme.scss -->
            <div class="carousel swiper-container">
                <div class="swiper-wrapper">
                    <!-- Carousel items -->
                    <div class="max-w-lg swiper-slide">
                        <img class="transition-opacity duration-300" src="../images/carousel-item-01.jpg" width="540"
                            height="460" alt="Carousel item 01" />
                        <div class="absolute inset-0 flex flex-col transition-opacity duration-300 translate-z-0">
                            <div class="flex grow">
                                <a class="inline-flex self-center mx-auto text-white bg-teal-500 btn-sm hover:bg-teal-400"
                                    href="#0">Learn more</a>
                            </div>
                            <div class="absolute bottom-0 right-0 p-6">
                                <a class="px-3 py-2 text-xs font-medium text-center text-white transition duration-150 ease-in-out bg-gray-900 bg-opacity-50 rounded-full hover:bg-opacity-100"
                                    href="#0">Creative Services</a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-lg swiper-slide">
                        <img class="transition-opacity duration-300" src="../images/carousel-item-02.jpg" width="540"
                            height="460" alt="Carousel item 02" />
                        <div class="absolute inset-0 flex flex-col transition-opacity duration-300 translate-z-0">
                            <div class="flex grow">
                                <a class="inline-flex self-center mx-auto text-white bg-teal-500 btn-sm hover:bg-teal-400"
                                    href="#0">Learn more</a>
                            </div>
                            <div class="absolute bottom-0 right-0 p-6">
                                <a class="px-3 py-2 text-xs font-medium text-center text-white transition duration-150 ease-in-out bg-gray-900 bg-opacity-50 rounded-full hover:bg-opacity-100"
                                    href="#0">Creative Services</a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-lg swiper-slide">
                        <img class="transition-opacity duration-300" src="../images/carousel-item-03.jpg" width="540"
                            height="460" alt="Carousel item 03" />
                        <div class="absolute inset-0 flex flex-col transition-opacity duration-300 translate-z-0">
                            <div class="flex grow">
                                <a class="inline-flex self-center mx-auto text-white bg-teal-500 btn-sm hover:bg-teal-400"
                                    href="#0">Learn more</a>
                            </div>
                            <div class="absolute bottom-0 right-0 p-6">
                                <a class="px-3 py-2 text-xs font-medium text-center text-white transition duration-150 ease-in-out bg-gray-900 bg-opacity-50 rounded-full hover:bg-opacity-100"
                                    href="#0">Creative Services</a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-lg swiper-slide">
                        <img class="transition-opacity duration-300" src="../images/carousel-item-04.jpg" width="540"
                            height="460" alt="Carousel item 04" />
                        <div class="absolute inset-0 flex flex-col transition-opacity duration-300 translate-z-0">
                            <div class="flex grow">
                                <a class="inline-flex self-center mx-auto text-white bg-teal-500 btn-sm hover:bg-teal-400"
                                    href="#0">Learn more</a>
                            </div>
                            <div class="absolute bottom-0 right-0 p-6">
                                <a class="px-3 py-2 text-xs font-medium text-center text-white transition duration-150 ease-in-out bg-gray-900 bg-opacity-50 rounded-full hover:bg-opacity-100"
                                    href="#0">Creative Services</a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-lg swiper-slide">
                        <img class="transition-opacity duration-300" src="../images/carousel-item-05.jpg" width="540"
                            height="460" alt="Carousel item 05" />
                        <div class="absolute inset-0 flex flex-col transition-opacity duration-300 translate-z-0">
                            <div class="flex grow">
                                <a class="inline-flex self-center mx-auto text-white bg-teal-500 btn-sm hover:bg-teal-400"
                                    href="#0">Learn more</a>
                            </div>
                            <div class="absolute bottom-0 right-0 p-6">
                                <a class="px-3 py-2 text-xs font-medium text-center text-white transition duration-150 ease-in-out bg-gray-900 bg-opacity-50 rounded-full hover:bg-opacity-100"
                                    href="#0">Creative Services</a>
                            </div>
                        </div>
                    </div>
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
    <section class="relative border-t border-transparent dark:border-gray-800">
        <!-- Background gradient -->
        <div class="absolute inset-0 pointer-events-none h-128 dark:opacity-25 bg-gradient-to-b from-gray-100 to-white dark:from-gray-800 dark:to-gray-900"
            aria-hidden="true"></div>
        <!-- End background gradient -->
        <div class="relative max-w-6xl px-4 mx-auto sm:px-6">
            <div class="py-12 md:py-20">

                <!-- Section header -->
                <div class="max-w-3xl pb-12 mx-auto text-center md:pb-16">
                    <h2 class="mb-4 h2 font-red-hat-display">Turn your ideas into reality in seconds</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400">Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
                </div>

                <!-- Section content -->
                <div x-data="{ category: '1' }">
                    <div class="grid gap-12 lg:grid-cols-3 lg:gap-6">

                        <!-- Category buttons -->
                        <div
                            class="flex flex-wrap justify-center -m-1 lg:col-span-1 lg:pr-16 lg:flex-col lg:justify-start lg:mx-0">
                            <button
                                class="flex items-center justify-center px-3 py-2 m-1 font-medium transition duration-150 ease-in-out bg-white rounded shadow lg:w-full hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 lg:justify-start lg:mx-0"
                                :class="{ 'bg-teal-500 hover:bg-teal-500 dark:bg-teal-600 dark:hover:bg-teal-600 dark:bg-opacity-25 dark:hover:bg-opacity-25': category === '1' }"
                                @click="category = '1'">
                                <svg class="w-4 h-4 mr-2 shrink-0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-current"
                                        :class="category === '1' ? 'text-teal-200 dark:text-teal-400' : 'text-teal-500 dark:text-gray-400'"
                                        d="M5 16H4a4 4 0 01-4-4v-1h2v1a2 2 0 002 2h1v2zM13 10h-1.586l-1.207-1.207L14.37 4.63a2.121 2.121 0 00-3-3L7.207 5.793 5.99 4.576 5.98 3.02 3.038.079 0 3.117 3 6h1.586l1.207 1.207L4 9l3 3 1.793-1.793L10 11.414V13l3.01 3.01 2.98-2.979L13 10z" />
                                </svg>
                                <span
                                    :class="category === '1' ? 'text-white dark:text-teal-400' : 'text-gray-600 dark:text-gray-300'">Getting
                                    Started</span>
                            </button>
                            <button
                                class="flex items-center justify-center px-3 py-2 m-1 font-medium transition duration-150 ease-in-out bg-white rounded shadow lg:w-full hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 lg:justify-start lg:mx-0"
                                :class="{ 'bg-teal-500 hover:bg-teal-500 dark:bg-teal-600 dark:hover:bg-teal-600 dark:bg-opacity-25 dark:hover:bg-opacity-25': category === '2' }"
                                @click="category = '2'">
                                <svg class="w-4 h-4 mr-2 shrink-0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-current"
                                        :class="category === '2' ? 'text-teal-200 dark:text-teal-400' : 'text-teal-500 dark:text-gray-400'"
                                        d="M8 3l4 4H4zM8 13L4 9h8zM1 0h14v2H1zM1 14h14v2H1z" />
                                </svg>
                                <span
                                    :class="category === '2' ? 'text-white dark:text-teal-400' : 'text-gray-600 dark:text-gray-300'">Collection
                                    list</span>
                            </button>
                            <button
                                class="flex items-center justify-center px-3 py-2 m-1 font-medium transition duration-150 ease-in-out bg-white rounded shadow lg:w-full hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 lg:justify-start lg:mx-0"
                                :class="{ 'bg-teal-500 hover:bg-teal-500 dark:bg-teal-600 dark:hover:bg-teal-600 dark:bg-opacity-25 dark:hover:bg-opacity-25': category === '3' }"
                                @click="category = '3'">
                                <svg class="w-4 h-4 mr-2 shrink-0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-current"
                                        :class="category === '3' ? 'text-teal-200 dark:text-teal-400' : 'text-teal-500 dark:text-gray-400'"
                                        d="M6 0H1a1 1 0 00-1 1v5a1 1 0 001 1h5a1 1 0 001-1V1a1 1 0 00-1-1zM5 5H2V2h3v3zM15 9h-5a1 1 0 00-1 1v5a1 1 0 001 1h5a1 1 0 001-1v-5a1 1 0 00-1-1zm-1 5h-3v-3h3v3zM6 9H1a1 1 0 00-1 1v5a1 1 0 001 1h5a1 1 0 001-1v-5a1 1 0 00-1-1zm-1 5H2v-3h3v3zM12.5 7a1 1 0 01-.707-.293l-2.5-2.5a1 1 0 010-1.414l2.5-2.5a1 1 0 011.414 0l2.5 2.5a1 1 0 010 1.414l-2.5 2.5A1 1 0 0112.5 7z" />
                                </svg>
                                <span
                                    :class="category === '3' ? 'text-white dark:text-teal-400' : 'text-gray-600 dark:text-gray-300'">Element
                                    Hierarchy</span>
                            </button>
                            <button
                                class="flex items-center justify-center px-3 py-2 m-1 font-medium transition duration-150 ease-in-out bg-white rounded shadow lg:w-full hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 lg:justify-start lg:mx-0"
                                :class="{ 'bg-teal-500 hover:bg-teal-500 dark:bg-teal-600 dark:hover:bg-teal-600 dark:bg-opacity-25 dark:hover:bg-opacity-25': category === '4' }"
                                @click="category = '4'">
                                <svg class="w-4 h-4 mr-2 shrink-0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-current"
                                        :class="category === '4' ? 'text-teal-200 dark:text-teal-400' : 'text-teal-500 dark:text-gray-400'"
                                        d="M15.4.6c-.84-.8-2.16-.8-3 0L8.7 4.3c.73.252 1.388.68 1.916 1.244.469.515.83 1.119 1.065 1.775L15.4 3.6c.8-.84.8-2.16 0-3zM4.937 6.9c-1.2 1.2-1.4 5.7-1.4 5.7s4.4-.4 5.6-1.5a2.987 2.987 0 000-4.2 2.9 2.9 0 00-4.2 0z" />
                                </svg>
                                <span
                                    :class="category === '4' ? 'text-white dark:text-teal-400' : 'text-gray-600 dark:text-gray-300'">Styling
                                    Basics</span>
                            </button>
                            <button
                                class="flex items-center justify-center px-3 py-2 m-1 font-medium transition duration-150 ease-in-out bg-white rounded shadow lg:w-full hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 lg:justify-start lg:mx-0"
                                :class="{ 'bg-teal-500 hover:bg-teal-500 dark:bg-teal-600 dark:hover:bg-teal-600 dark:bg-opacity-25 dark:hover:bg-opacity-25': category === '5' }"
                                @click="category = '5'">
                                <svg class="w-4 h-4 mr-2 shrink-0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-current"
                                        :class="category === '5' ? 'text-teal-200 dark:text-teal-400' : 'text-teal-500 dark:text-gray-400'"
                                        d="M11 16v-5h5V0H5v5H0v11h11zM2 7h7v7H2V7z" />
                                </svg>
                                <span
                                    :class="category === '5' ? 'text-white dark:text-teal-400' : 'text-gray-600 dark:text-gray-300'">Image
                                    Field</span>
                            </button>
                        </div>

                        <!-- Videos -->
                        <div class="max-w-sm mx-auto lg:col-span-2 md:max-w-3xl lg:max-w-none">
                            <div class="grid gap-6 md:grid-cols-2">
                                <div x-show="['1'].includes(category)">
                                    <div class="relative">
                                        <img class="w-full" src="../images/video-thumb.jpg" width="352"
                                            height="264" alt="Video thumbnail 01" />
                                        <div class="absolute inset-0 flex flex-col">
                                            <div class="flex items-center justify-center grow">
                                                <a class="transition duration-150 ease-in-out hover:opacity-75" href="#0">
                                                    <img src="../images/play-button.svg" width="72" height="72"
                                                        alt="Play icon" />
                                                </a>
                                            </div>
                                            <div
                                                class="bottom-0 flex items-center justify-between w-full px-6 py-3 bg-white opacity-90 dark:bg-gray-900">
                                                <a class="font-medium text-gray-900 dark:text-gray-400" href="#0">Using
                                                    index pages</a>
                                                <div
                                                    class="inline-flex px-3 py-1 text-xs font-medium text-white bg-gray-900 bg-opacity-50 rounded-full dark:text-teal-400 dark:bg-teal-600 dark:bg-opacity-25">
                                                    2 Min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="['1', '2'].includes(category)">
                                    <div class="relative flex items-center justify-center">
                                        <img class="w-full" src="../images/video-thumb.jpg" width="352"
                                            height="264" alt="Video thumbnail 01" />
                                        <div class="absolute inset-0 flex flex-col">
                                            <div class="flex items-center justify-center grow">
                                                <a class="transition duration-150 ease-in-out hover:opacity-75" href="#0">
                                                    <img src="../images/play-button.svg" width="72" height="72"
                                                        alt="Play icon" />
                                                </a>
                                            </div>
                                            <div
                                                class="bottom-0 flex items-center justify-between w-full px-6 py-3 bg-white opacity-90 dark:bg-gray-900">
                                                <a class="font-medium text-gray-900 dark:text-gray-400" href="#0">Working
                                                    with content</a>
                                                <div
                                                    class="inline-flex px-3 py-1 text-xs font-medium text-white bg-gray-900 bg-opacity-50 rounded-full dark:text-teal-400 dark:bg-teal-600 dark:bg-opacity-25">
                                                    4 Min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="['1', '3'].includes(category)">
                                    <div class="relative flex items-center justify-center shadow">
                                        <img class="w-full" src="../images/video-thumb.jpg" width="352"
                                            height="264" alt="Video thumbnail 01" />
                                        <div class="absolute inset-0 flex flex-col">
                                            <div class="flex items-center justify-center grow">
                                                <a class="transition duration-150 ease-in-out hover:opacity-75" href="#0">
                                                    <img src="../images/play-button.svg" width="72" height="72"
                                                        alt="Play icon" />
                                                </a>
                                            </div>
                                            <div
                                                class="bottom-0 flex items-center justify-between w-full px-6 py-3 bg-white opacity-90 dark:bg-gray-900">
                                                <a class="font-medium text-gray-900 dark:text-gray-400" href="#0">Using
                                                    cover pages</a>
                                                <div
                                                    class="inline-flex px-3 py-1 text-xs font-medium text-white bg-gray-900 bg-opacity-50 rounded-full dark:text-teal-400 dark:bg-teal-600 dark:bg-opacity-25">
                                                    7 Min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="['1', '4'].includes(category)">
                                    <div class="relative flex items-center justify-center shadow">
                                        <img class="w-full" src="../images/video-thumb.jpg" width="352"
                                            height="264" alt="Video thumbnail 01" />
                                        <div class="absolute inset-0 flex flex-col">
                                            <div class="flex items-center justify-center grow">
                                                <a class="transition duration-150 ease-in-out hover:opacity-75" href="#0">
                                                    <img src="../images/play-button.svg" width="72" height="72"
                                                        alt="Play icon" />
                                                </a>
                                            </div>
                                            <div
                                                class="bottom-0 flex items-center justify-between w-full px-6 py-3 bg-white opacity-90 dark:bg-gray-900">
                                                <a class="font-medium text-gray-900 dark:text-gray-400" href="#0">Intro to
                                                    the style model</a>
                                                <div
                                                    class="inline-flex px-3 py-1 text-xs font-medium text-white bg-gray-900 bg-opacity-50 rounded-full dark:text-teal-400 dark:bg-teal-600 dark:bg-opacity-25">
                                                    9 Min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="['2', '5'].includes(category)">
                                    <div class="relative flex items-center justify-center shadow">
                                        <img class="w-full" src="../images/video-thumb.jpg" width="352"
                                            height="264" alt="Video thumbnail 01" />
                                        <div class="absolute inset-0 flex flex-col">
                                            <div class="flex items-center justify-center grow">
                                                <a class="transition duration-150 ease-in-out hover:opacity-75" href="#0">
                                                    <img src="../images/play-button.svg" width="72" height="72"
                                                        alt="Play icon" />
                                                </a>
                                            </div>
                                            <div
                                                class="bottom-0 flex items-center justify-between w-full px-6 py-3 bg-white opacity-90 dark:bg-gray-900">
                                                <a class="font-medium text-gray-900 dark:text-gray-400" href="#0">Exploring
                                                    collections</a>
                                                <div
                                                    class="inline-flex px-3 py-1 text-xs font-medium text-white bg-gray-900 bg-opacity-50 rounded-full dark:text-teal-400 dark:bg-teal-600 dark:bg-opacity-25">
                                                    12 Min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="['2', '3'].includes(category)">
                                    <div class="relative flex items-center justify-center shadow">
                                        <img class="w-full" src="../images/video-thumb.jpg" width="352"
                                            height="264" alt="Video thumbnail 01" />
                                        <div class="absolute inset-0 flex flex-col">
                                            <div class="flex items-center justify-center grow">
                                                <a class="transition duration-150 ease-in-out hover:opacity-75" href="#0">
                                                    <img src="../images/play-button.svg" width="72" height="72"
                                                        alt="Play icon" />
                                                </a>
                                            </div>
                                            <div
                                                class="bottom-0 flex items-center justify-between w-full px-6 py-3 bg-white opacity-90 dark:bg-gray-900">
                                                <a class="font-medium text-gray-900 dark:text-gray-400"
                                                    href="#0">Understand hierarchy</a>
                                                <div
                                                    class="inline-flex px-3 py-1 text-xs font-medium text-white bg-gray-900 bg-opacity-50 rounded-full dark:text-teal-400 dark:bg-teal-600 dark:bg-opacity-25">
                                                    3 Min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="['2', '4'].includes(category)">
                                    <div class="relative flex items-center justify-center shadow">
                                        <img class="w-full" src="../images/video-thumb.jpg" width="352"
                                            height="264" alt="Video thumbnail 01" />
                                        <div class="absolute inset-0 flex flex-col">
                                            <div class="flex items-center justify-center grow">
                                                <a class="transition duration-150 ease-in-out hover:opacity-75" href="#0">
                                                    <img src="../images/play-button.svg" width="72" height="72"
                                                        alt="Play icon" />
                                                </a>
                                            </div>
                                            <div
                                                class="bottom-0 flex items-center justify-between w-full px-6 py-3 bg-white opacity-90 dark:bg-gray-900">
                                                <a class="font-medium text-gray-900 dark:text-gray-400"
                                                    href="#0">Customisations</a>
                                                <div
                                                    class="inline-flex px-3 py-1 text-xs font-medium text-white bg-gray-900 bg-opacity-50 rounded-full dark:text-teal-400 dark:bg-teal-600 dark:bg-opacity-25">
                                                    11 Min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="['3', '5'].includes(category)">
                                    <div class="relative flex items-center justify-center shadow">
                                        <img class="w-full" src="../images/video-thumb.jpg" width="352"
                                            height="264" alt="Video thumbnail 01" />
                                        <div class="absolute inset-0 flex flex-col">
                                            <div class="flex items-center justify-center grow">
                                                <a class="transition duration-150 ease-in-out hover:opacity-75" href="#0">
                                                    <img src="../images/play-button.svg" width="72" height="72"
                                                        alt="Play icon" />
                                                </a>
                                            </div>
                                            <div
                                                class="bottom-0 flex items-center justify-between w-full px-6 py-3 bg-white opacity-90 dark:bg-gray-900">
                                                <a class="font-medium text-gray-900 dark:text-gray-400" href="#0">Image
                                                    galleries</a>
                                                <div
                                                    class="inline-flex px-3 py-1 text-xs font-medium text-white bg-gray-900 bg-opacity-50 rounded-full dark:text-teal-400 dark:bg-teal-600 dark:bg-opacity-25">
                                                    6 Min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="['5'].includes(category)">
                                    <div class="relative flex items-center justify-center shadow">
                                        <img class="w-full" src="../images/video-thumb.jpg" width="352"
                                            height="264" alt="Video thumbnail 01" />
                                        <div class="absolute inset-0 flex flex-col">
                                            <div class="flex items-center justify-center grow">
                                                <a class="transition duration-150 ease-in-out hover:opacity-75" href="#0">
                                                    <img src="../images/play-button.svg" width="72" height="72"
                                                        alt="Play icon" />
                                                </a>
                                            </div>
                                            <div
                                                class="bottom-0 flex items-center justify-between w-full px-6 py-3 bg-white opacity-90 dark:bg-gray-900">
                                                <a class="font-medium text-gray-900 dark:text-gray-400" href="#0">Sorting
                                                    images</a>
                                                <div
                                                    class="inline-flex px-3 py-1 text-xs font-medium text-white bg-gray-900 bg-opacity-50 rounded-full dark:text-teal-400 dark:bg-teal-600 dark:bg-opacity-25">
                                                    4 Min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="['5'].includes(category)">
                                    <div class="relative flex items-center justify-center shadow">
                                        <img class="w-full" src="../images/video-thumb.jpg" width="352"
                                            height="264" alt="Video thumbnail 01" />
                                        <div class="absolute inset-0 flex flex-col">
                                            <div class="flex items-center justify-center grow">
                                                <a class="transition duration-150 ease-in-out hover:opacity-75" href="#0">
                                                    <img src="../images/play-button.svg" width="72" height="72"
                                                        alt="Play icon" />
                                                </a>
                                            </div>
                                            <div
                                                class="bottom-0 flex items-center justify-between w-full px-6 py-3 bg-white opacity-90 dark:bg-gray-900">
                                                <a class="font-medium text-gray-900 dark:text-gray-400"
                                                    href="#0">Filters</a>
                                                <div
                                                    class="inline-flex px-3 py-1 text-xs font-medium text-white bg-gray-900 bg-opacity-50 rounded-full dark:text-teal-400 dark:bg-teal-600 dark:bg-opacity-25">
                                                    9 Min</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
    <section class="relative">
        <div class="max-w-6xl px-4 mx-auto sm:px-6">
            <div class="py-12 border-t border-gray-200 md:py-20 dark:border-gray-800">

                <!-- Section header -->
                <div class="max-w-3xl pb-12 mx-auto text-center md:pb-20">
                    <h2 class="mb-4 h2 font-red-hat-display">Build and style every element to perfection</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400">Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
                </div>

                <!-- Glow illustration -->
                <svg class="absolute hidden mt-20 transform -translate-x-1/2 pointer-events-none left-1/2 lg:mt-40 -z-1 dark:opacity-20 md:block"
                    aria-hidden="true" width="854" height="509" viewBox="0 0 854 509" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <radialGradient cx="50%" cy="50%" fx="50%" fy="50%" r="39.386%" id="iphonesill__a">
                            <stop stop-color="#667EEA" offset="0%" />
                            <stop stop-color="#667EEA" stop-opacity="0" offset="100%" />
                        </radialGradient>
                        <radialGradient cx="50%" cy="50%" fx="50%" fy="50%" r="39.386%" id="iphonesill__b">
                            <stop stop-color="#9F7AEA" offset="0%" />
                            <stop stop-color="#9F7AEA" stop-opacity="0" offset="100%" />
                        </radialGradient>
                    </defs>
                    <g transform="translate(-64 -64)" fill="none" fill-rule="evenodd">
                        <circle fill-opacity=".64" fill="url(#iphonesill__a)" cx="300" cy="300" r="300" />
                        <circle fill-opacity=".72" fill="url(#iphonesill__b)" cx="729" cy="384" r="240" />
                    </g>
                </svg>

                <!-- Items -->
                <div class="grid items-start max-w-sm gap-12 mx-auto md:gap-x-6 lg:gap-x-12 md:grid-cols-3 md:max-w-none">

                    <!-- 1st item -->
                    <div class="relative flex flex-col items-center">
                        <!-- Line connecting (1) and (2) -->
                        <div aria-hidden="true"
                            class="absolute hidden h-px opacity-50 bg-gradient-to-r from-white via-teal-400 to-white dark:from-gray-900 dark:via-teal-400 dark:to-gray-900 md:block"
                            style="width:calc(100% - 48px);left:calc(50% + 48px);top:24px;">
                            <div class="absolute inset-0 border-t border-white border-dashed dark:border-gray-900"></div>
                        </div>
                        <!-- Number -->
                        <div
                            class="flex items-center justify-center w-12 h-12 mb-8 font-medium text-white bg-teal-400 rounded-full dark:bg-teal-600 dark:bg-opacity-25 dark:text-teal-400 lg:mb-12">
                            1</div>
                        <!-- Mobile mockup -->
                        <div class="relative inline-flex items-center justify-center">
                            <!-- Image inside mockup size: 290x624px (or 580x1248px for Retina devices) -->
                            <img class="absolute" src="../images/mockup-image-02.jpg" width="290" height="624"
                                style="max-width: 84.33%;" alt="App screen 02" />
                            <!-- iPhone mockup -->
                            <img class="relative h-auto max-w-full mx-auto pointer-events-none"
                                src="../images/iphone-mockup.png" width="344" height="674" alt="iPhone mockup"
                                aria-hidden="true" />
                        </div>
                    </div>

                    <!-- 2nd item -->
                    <div class="relative flex flex-col items-center">
                        <!-- Line connecting (2) and (3) -->
                        <div aria-hidden="true"
                            class="absolute hidden h-px opacity-50 bg-gradient-to-r from-white via-teal-400 to-white dark:from-gray-900 dark:via-teal-400 dark:to-gray-900 md:block"
                            style="width:calc(100% - 48px);left:calc(50% + 48px);top:24px;">
                            <div class="absolute inset-0 border-t border-white border-dashed dark:border-gray-900"></div>
                        </div>
                        <!-- Number -->
                        <div
                            class="flex items-center justify-center w-12 h-12 mb-8 font-medium text-white bg-teal-400 rounded-full dark:bg-teal-600 dark:bg-opacity-25 dark:text-teal-400 lg:mb-12">
                            2</div>
                        <!-- Mobile mockup -->
                        <div class="relative inline-flex items-center justify-center">
                            <!-- Image inside mockup size: 290x624px (or 580x1248px for Retina devices) -->
                            <img class="absolute" src="../images/mockup-image-03.jpg" width="290" height="624"
                                style="max-width: 84.33%;" alt="App screen 03" />
                            <!-- iPhone mockup -->
                            <img class="relative h-auto max-w-full mx-auto pointer-events-none"
                                src="../images/iphone-mockup.png" width="344" height="674" alt="iPhone mockup"
                                aria-hidden="true" />
                        </div>
                    </div>

                    <!-- 3rd item -->
                    <div class="relative flex flex-col items-center">
                        <div
                            class="flex items-center justify-center w-12 h-12 mb-8 font-medium text-white bg-teal-400 rounded-full dark:bg-teal-600 dark:bg-opacity-25 dark:text-teal-400 lg:mb-12">
                            3</div>
                        <!-- Mobile mockup -->
                        <div class="relative inline-flex items-center justify-center">
                            <!-- Image inside mockup size: 290x624px (or 580x1248px for Retina devices) -->
                            <img class="absolute" src="../images/mockup-image-04.jpg" width="290" height="624"
                                style="max-width: 84.33%;" alt="App screen 04" />
                            <!-- iPhone mockup -->
                            <img class="relative h-auto max-w-full mx-auto pointer-events-none"
                                src="../images/iphone-mockup.png" width="344" height="674" alt="iPhone mockup"
                                aria-hidden="true" />
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <section class="relative bg-gray-900 border-t border-transparent dark:border-gray-800">
        <!-- Background gradient (dark version only) -->
        <div class="absolute inset-0 hidden opacity-25 pointer-events-none bg-gradient-to-b from-gray-800 to-gray-900 dark:block"
            aria-hidden="true"></div>
        <!-- End background gradient (dark version only) -->
        <div class="relative max-w-6xl px-4 mx-auto sm:px-6">
            <div class="py-12 md:py-20">

                <!-- Section header -->
                <div class="max-w-3xl pb-12 mx-auto text-center">
                    <h2 class="mb-4 text-gray-100 h2 font-red-hat-display">Start building for free, then add a plan to go
                        live</h2>
                    <p class="text-xl text-gray-400">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit laborum — semper quis lectus nulla.</p>
                </div>

                <!-- Pricing tables -->
                <div
                    class="grid items-start max-w-xs gap-6 mx-auto sm:grid-cols-2 lg:grid-cols-4 sm:max-w-none md:max-w-2xl lg:max-w-none">

                    <!-- Pricing table 1 -->
                    <div class="flex flex-col h-full p-6 bg-white border-2 border-transparent shadow dark:bg-gray-800 dark:border-teal-500"
                        data-aos="fade-down">
                        <div class="pb-4 mb-4 grow">
                            <div class="flex items-center justify-between mb-1">
                                <div class="text-xl font-bold font-red-hat-display">Yearly</div>
                                <div
                                    class="inline-flex px-3 py-1 text-xs font-medium text-teal-600 bg-teal-200 rounded-full dark:text-teal-400 dark:bg-teal-600 dark:bg-opacity-25">
                                    -40%</div>
                            </div>
                            <div class="inline-flex items-baseline mb-2 font-red-hat-display">
                                <span class="text-gray-600 h4 dark:text-gray-400">$</span>
                                <span class="h3">27</span>
                                <span class="font-medium text-gray-500 dark:text-gray-400">/billed yearly</span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">— Lorem ipsum dolor amet sit consect adipiscing.
                            </div>
                        </div>
                        <div class="mt-24">
                            <a class="w-full text-white bg-teal-500 btn-sm hover:bg-teal-400" href="#0">Go Premium</a>
                        </div>
                    </div>

                    <!-- Pricing table 2 -->
                    <div class="flex flex-col h-full p-6 bg-white shadow dark:bg-gray-800" data-aos="fade-down"
                        data-aos-delay="150">
                        <div class="pb-4 mb-4 grow">
                            <div class="flex items-center justify-between mb-1">
                                <div class="text-xl font-bold font-red-hat-display">Monthly</div>
                            </div>
                            <div class="inline-flex items-baseline mb-2 font-red-hat-display">
                                <span class="text-gray-600 h4 dark:text-gray-400">$</span>
                                <span class="h3">47</span>
                                <span class="font-medium text-gray-500 dark:text-gray-400">/billed yearly</span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">— Lorem ipsum dolor amet sit consect adipiscing.
                            </div>
                        </div>
                        <div class="mt-24">
                            <a class="w-full text-white bg-purple-500 btn-sm hover:bg-purple-400 dark:text-teal-400 dark:bg-gray-700 dark:hover:bg-gray-600"
                                href="#0">Go Premium</a>
                        </div>
                    </div>

                    <!-- Pricing table 3 -->
                    <div class="flex flex-col h-full p-6 bg-white shadow dark:bg-gray-800" data-aos="fade-down"
                        data-aos-delay="300">
                        <div class="pb-4 mb-4 grow">
                            <div class="flex items-center justify-between mb-1">
                                <div class="text-xl font-bold font-red-hat-display">Lifetime</div>
                            </div>
                            <div class="inline-flex items-baseline mb-2 font-red-hat-display">
                                <span class="text-gray-600 h4 dark:text-gray-400">$</span>
                                <span class="h3">127</span>
                                <span class="font-medium text-gray-500 dark:text-gray-400">/one-time</span>
                            </div>
                            <div class="text-gray-500 dark:text-gray-400">— Lorem ipsum dolor amet sit consect adipiscing.
                            </div>
                        </div>
                        <div class="mt-24">
                            <a class="w-full text-white bg-purple-500 btn-sm hover:bg-purple-400 dark:text-teal-400 dark:bg-gray-700 dark:hover:bg-gray-600"
                                href="#0">Go Premium</a>
                        </div>
                    </div>

                    <!-- Pricing features -->
                    <div class="sm:order-first">
                        <div class="hidden text-right sm:block">
                            <svg class="inline-flex mb-3 mr-5 -mt-3" width="86" height="25"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="text-gray-600 fill-current"
                                    d="M80.959 10.448l-5.502-8.292 1.666-1.105 8.596 12.953-15.534.62-.08-1.999 9.944-.397-7.182-3.672C45.251-3.737 21.787 1.633 2.216 24.726L.69 23.435C20.836-.338 45.252-5.926 73.73 6.752l7.23 3.696z" />
                            </svg>
                        </div>
                        <div class="mt-4 mb-4 text-lg font-bold text-gray-100 font-red-hat-display sm:mt-0">All plans
                            include:</div>
                        <ul class="-mb-2 text-gray-400 grow">
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 mr-3 text-teal-500 fill-current shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Unlimited domains</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 mr-3 text-teal-500 fill-current shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Unlimited web pages</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 mr-3 text-teal-500 fill-current shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Conversion analytics</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 mr-3 text-teal-500 fill-current shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>A/B testing</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 mr-3 text-teal-500 fill-current shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Exclusive channels</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 mr-3 text-teal-500 fill-current shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Free resources</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 mr-3 text-teal-500 fill-current shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Landing page builder</span>
                            </li>
                            <li class="flex items-center mb-2">
                                <svg class="w-3 h-3 mr-3 text-teal-500 fill-current shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Smart forms and reports</span>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="max-w-6xl px-4 mx-auto sm:px-6">
            <div class="py-12 border-t border-transparent md:py-20 dark:border-gray-800">

                <!-- Testimonials -->
                <div
                    class="grid items-start max-w-sm mx-auto gap-x-8 gap-y-12 sm:grid-cols-2 lg:gap-12 sm:max-w-none md:max-w-2xl lg:max-w-none">

                    <!-- 1st testimonial -->
                    <div class="text-center">
                        <div class="relative inline-flex flex-col mb-4">
                            <img class="rounded-full" src="../images/testimonial-01.jpg" width="56" height="56"
                                alt="Testimonial 01" />
                            <svg class="absolute top-0 right-0 mt-1 -mr-8" width="27" height="12"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="text-purple-500 fill-current"
                                    d="M2.785 5.334C2.538 5.5-.2 2.944.011 2.646.826 1.483 2.183.836 3.62.5 5.064.158 6.582.117 7.92-.02c.017-.002.098.153.088.166-1.763 2.018-3.223 3.836-5.221 5.188zm3.676 6.519c-.862.184-1.937-3.403-1.07-3.711 3.422-1.22 7.078-1.671 10.728-1.766 3.655-.096 7.304.162 10.866.32.044.002.06.177.018.187-6.938 1.634-13.691 3.504-20.542 4.97z" />
                            </svg>
                        </div>
                        <blockquote class="text-xl text-gray-600 dark:text-gray-400">“ This is a great app and the value is
                            amazing. Since I purchased it I have been using it everyday! Highly recommend it. “</blockquote>
                        <div class="mt-2 font-bold font-red-hat-display">
                            <cite class="not-italic">—Andy Croll</cite>, <a
                                class="text-teal-500 transition duration-150 ease-in-out" href="#0">Appy.com</a>
                        </div>
                    </div>

                    <!-- 2nd testimonial -->
                    <div class="text-center">
                        <div class="relative inline-flex flex-col mb-4">
                            <img class="rounded-full" src="../images/testimonial-02.jpg" width="56" height="56"
                                alt="Testimonial 02" />
                            <svg class="absolute top-0 right-0 mt-1 -mr-8" width="27" height="12"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="text-purple-500 fill-current"
                                    d="M2.785 5.334C2.538 5.5-.2 2.944.011 2.646.826 1.483 2.183.836 3.62.5 5.064.158 6.582.117 7.92-.02c.017-.002.098.153.088.166-1.763 2.018-3.223 3.836-5.221 5.188zm3.676 6.519c-.862.184-1.937-3.403-1.07-3.711 3.422-1.22 7.078-1.671 10.728-1.766 3.655-.096 7.304.162 10.866.32.044.002.06.177.018.187-6.938 1.634-13.691 3.504-20.542 4.97z" />
                            </svg>
                        </div>
                        <blockquote class="text-xl text-gray-600 dark:text-gray-400">“ This is a great app and the value is
                            amazing. Since I purchased it I have been using it everyday! Highly recommend it. “</blockquote>
                        <div class="mt-2 font-bold font-red-hat-display">
                            <cite class="not-italic">—Patricia Lepisov</cite>, <a
                                class="text-teal-500 transition duration-150 ease-in-out" href="#0">Nobi Bank</a>
                        </div>
                    </div>

                    <!-- 3rd testimonial -->
                    <div class="text-center">
                        <div class="relative inline-flex flex-col mb-4">
                            <img class="rounded-full" src="../images/testimonial-03.jpg" width="56" height="56"
                                alt="Testimonial 03" />
                            <svg class="absolute top-0 right-0 mt-1 -mr-8" width="27" height="12"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="text-purple-500 fill-current"
                                    d="M2.785 5.334C2.538 5.5-.2 2.944.011 2.646.826 1.483 2.183.836 3.62.5 5.064.158 6.582.117 7.92-.02c.017-.002.098.153.088.166-1.763 2.018-3.223 3.836-5.221 5.188zm3.676 6.519c-.862.184-1.937-3.403-1.07-3.711 3.422-1.22 7.078-1.671 10.728-1.766 3.655-.096 7.304.162 10.866.32.044.002.06.177.018.187-6.938 1.634-13.691 3.504-20.542 4.97z" />
                            </svg>
                        </div>
                        <blockquote class="text-xl text-gray-600 dark:text-gray-400">“ This is a great app and the value is
                            amazing. Since I purchased it I have been using it everyday! Highly recommend it. “</blockquote>
                        <div class="mt-2 font-bold font-red-hat-display">
                            <cite class="not-italic">—Zhenya Ritz</cite>, <a
                                class="text-teal-500 transition duration-150 ease-in-out" href="#0">Sync</a>
                        </div>
                    </div>

                    <!-- 4th testimonial -->
                    <div class="text-center">
                        <div class="relative inline-flex flex-col mb-4">
                            <img class="rounded-full" src="../images/testimonial-04.jpg" width="56" height="56"
                                alt="Testimonial 04" />
                            <svg class="absolute top-0 right-0 mt-1 -mr-8" width="27" height="12"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="text-purple-500 fill-current"
                                    d="M2.785 5.334C2.538 5.5-.2 2.944.011 2.646.826 1.483 2.183.836 3.62.5 5.064.158 6.582.117 7.92-.02c.017-.002.098.153.088.166-1.763 2.018-3.223 3.836-5.221 5.188zm3.676 6.519c-.862.184-1.937-3.403-1.07-3.711 3.422-1.22 7.078-1.671 10.728-1.766 3.655-.096 7.304.162 10.866.32.044.002.06.177.018.187-6.938 1.634-13.691 3.504-20.542 4.97z" />
                            </svg>
                        </div>
                        <blockquote class="text-xl text-gray-600 dark:text-gray-400">“ This is a great app and the value is
                            amazing. Since I purchased it I have been using it everyday! Highly recommend it. “</blockquote>
                        <div class="mt-2 font-bold font-red-hat-display">
                            <cite class="not-italic">—Lisa Champ</cite>, <a
                                class="text-teal-500 transition duration-150 ease-in-out" href="#0">Appicu</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="max-w-6xl px-4 mx-auto sm:px-6">
            <div class="py-12 border-t border-gray-200 md:py-20 dark:border-gray-800">

                <!-- Section header -->
                <div class="max-w-3xl pb-12 mx-auto text-center md:pb-20">
                    <h2 class="h2 font-red-hat-display">Put clarity at the center of your website</h2>
                </div>

                <!-- Items -->
                <div class="grid max-w-xs gap-4 mx-auto sm:max-w-none md:max-w-xl lg:max-w-none sm:grid-cols-2 lg:gap-6 lg:grid-cols-4"
                    data-aos-id-featbl>

                    <!-- 1st item -->
                    <a class="flex flex-col p-5 text-white shadow-2xl group bg-gradient-to-tr from-teal-500 to-teal-400 dark:to-teal-500"
                        href="#0" data-aos="fade-down" data-aos-anchor="[data-aos-id-featbl]">
                        <svg class="w-8 h-8 mb-3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current"
                                d="M19 18.414l-4 4L9.586 17l.707-.707L12 14.586V8.414l-5-5L4.414 6l6.293 6.293-1.414 1.414L1.586 6 7 .586l7 7v5l8.463-8.463a3.828 3.828 0 115.414 5.414L21 16.414v6.172l5 5L28.586 25l-6.293-6.293 1.414-1.414L31.414 25 26 30.414l-7-7v-5zm-4 1.172L26.463 8.123a1.828 1.828 0 10-2.586-2.586L12.414 17 15 19.586zM11 30v2C4.925 32 0 27.075 0 21h2a9 9 0 009 9zm0-5v2a6 6 0 01-6-6h2a4 4 0 004 4z"
                                fill-rule="nonzero" />
                        </svg>
                        <div class="mb-1 text-xl font-extrabold tracking-tighter font-red-hat-display">Simpler Sharing
                        </div>
                        <div class="mb-4 grow opacity-80">Lorem ipsum dolor amet sit consect adipiscing.</div>
                        <svg class="self-end w-6 h-6 transition duration-150 ease-in-out transform -translate-x-2 group-hover:translate-x-0"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current"
                                d="M13 11V5.057L22.72 12 13 18.943V13H2v-2h11zm2 4.057L19.28 12 15 8.943v6.114z" />
                        </svg>
                    </a>

                    <!-- 2nd item -->
                    <a class="flex flex-col p-5 text-white shadow-2xl group bg-gradient-to-tr from-purple-500 to-purple-400 dark:to-purple-500"
                        href="#0" data-aos="fade-down" data-aos-anchor="[data-aos-id-featbl]" data-aos-delay="100">
                        <svg class="w-8 h-8 mb-3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current"
                                d="M20.796 20l-1.677 7.264a6 6 0 01-7.302 4.471L0 28.781V11.54l.35-.3 9.457-8.107a3.751 3.751 0 015.29 5.29L11.175 13H28.5a3.5 3.5 0 012.6 1.156c.663.736.984 1.72.878 2.74-.252 1.808-1.817 3.143-3.622 3.104h-7.56zM2 27.22l10.303 2.575a4 4 0 004.868-2.98L19.204 18h9.173c.812.018 1.508-.575 1.615-1.345A1.5 1.5 0 0028.5 15H11.173a2 2 0 01-1.517-3.3l3.922-4.577a1.755 1.755 0 00-.597-2.733 1.751 1.751 0 00-1.872.262L2 12.46v14.76zM28 .585L29.414 2 23 8.414 21.586 7 28 .586zm-8.272 6.627l-1.94-.485 1.484-5.94 1.94.484-1.484 5.94zm3.544 5l-.485-1.94 5.94-1.486.486 1.94-5.94 1.486z"
                                fill-rule="nonzero" />
                        </svg>
                        <div class="mb-1 text-xl font-extrabold tracking-tighter font-red-hat-display">Simpler Sharing
                        </div>
                        <div class="mb-4 grow opacity-80">Lorem ipsum dolor amet sit consect adipiscing.</div>
                        <svg class="self-end w-6 h-6 transition duration-150 ease-in-out transform -translate-x-2 group-hover:translate-x-0"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current"
                                d="M13 11V5.057L22.72 12 13 18.943V13H2v-2h11zm2 4.057L19.28 12 15 8.943v6.114z" />
                        </svg>
                    </a>

                    <!-- 3rd item -->
                    <a class="flex flex-col p-5 text-white shadow-2xl group bg-gradient-to-tr from-indigo-500 to-indigo-400 dark:to-indigo-500"
                        href="#0" data-aos="fade-down" data-aos-anchor="[data-aos-id-featbl]" data-aos-delay="200">
                        <svg class="w-8 h-8 mb-3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current"
                                d="M19 5.612V25a6 6 0 11-2-4.472V0h2v2.961A5.98 5.98 0 0023.497 5a8.476 8.476 0 018.444 9.474l-.253 2.13-1.469-1.563A6.472 6.472 0 0025.5 13c-1.842 0-3.634-.6-5.103-1.713l1.206-1.594A6.455 6.455 0 0025.5 11c1.557 0 3.068.428 4.376 1.217A6.475 6.475 0 0023.5 7 7.981 7.981 0 0119 5.612zM13 29a4 4 0 100-8 4 4 0 000 8zM0 5V3h14v2H0zm0 5V8h14v2H0zm0 5v-2h14v2H0z"
                                fill-rule="nonzero" />
                        </svg>
                        <div class="mb-1 text-xl font-extrabold tracking-tighter font-red-hat-display">Simpler Sharing
                        </div>
                        <div class="mb-4 grow opacity-80">Lorem ipsum dolor amet sit consect adipiscing.</div>
                        <svg class="self-end w-6 h-6 transition duration-150 ease-in-out transform -translate-x-2 group-hover:translate-x-0"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current"
                                d="M13 11V5.057L22.72 12 13 18.943V13H2v-2h11zm2 4.057L19.28 12 15 8.943v6.114z" />
                        </svg>
                    </a>

                    <!-- 4th item -->
                    <a class="flex flex-col p-5 text-white shadow-2xl group bg-gradient-to-tr from-pink-500 to-pink-400 dark:to-pink-500"
                        href="#0" data-aos="fade-down" data-aos-anchor="[data-aos-id-featbl]" data-aos-delay="300">
                        <svg class="w-8 h-8 mb-3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current"
                                d="M20.243 6.757l.707.707-1.414 1.414-.707-.707a4 4 0 00-5.658 0l-.707.707-1.414-1.414.707-.707a6 6 0 018.486 0zm3.535-3.535l.707.707-1.414 1.414-.707-.707a9 9 0 00-12.728 0l-.707.707L7.515 3.93l.707-.707c4.296-4.296 11.26-4.296 15.556 0zM9 17.212V16a7 7 0 00-7-7H1V7h1a9 9 0 019 9v.788l2.302 5.18L11 23.117V24a4 4 0 01-4 4H5v3H3v-5h4a2 2 0 002-2v-2.118l1.698-.85L9 17.213zm12-.424V16a9 9 0 019-9h1v2h-1a7 7 0 00-7 7v1.212l-1.698 3.82 1.698.85V24a2 2 0 002 2h4v5h-2v-3h-2a4 4 0 01-4-4v-.882l-2.302-1.15L21 16.787zM16 12a1 1 0 110-2 1 1 0 010 2z"
                                fill-rule="nonzero" />
                        </svg>
                        <div class="mb-1 text-xl font-extrabold tracking-tighter font-red-hat-display">Simpler Sharing
                        </div>
                        <div class="mb-4 grow opacity-80">Lorem ipsum dolor amet sit consect adipiscing.</div>
                        <svg class="self-end w-6 h-6 transition duration-150 ease-in-out transform -translate-x-2 group-hover:translate-x-0"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-current"
                                d="M13 11V5.057L22.72 12 13 18.943V13H2v-2h11zm2 4.057L19.28 12 15 8.943v6.114z" />
                        </svg>
                    </a>

                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="max-w-6xl px-4 mx-auto sm:px-6">

            <!-- CTA box -->
            <div class="relative px-8 py-10 bg-gray-800 dark md:py-16 md:px-12">

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

                <div class="relative flex flex-col items-center justify-between lg:flex-row">

                    <!-- CTA content -->
                    <div class="mb-6 text-center lg:mr-16 lg:mb-0 lg:text-left lg:w-1/2">
                        <h3 class="text-gray-100 h3 font-red-hat-display">Free until you’re ready to launch</h3>
                    </div>

                    <!-- CTA form -->
                    <form class="w-full lg:w-1/2">
                        <div class="flex flex-col justify-center max-w-xs mx-auto sm:flex-row sm:max-w-md lg:max-w-none">
                            <input type="tel" class="w-full mb-2 form-input sm:mb-0 sm:mr-2" placeholder="Phone number"
                                aria-label="Phone number" />
                            <a class="text-white bg-teal-500 btn hover:bg-teal-400 shrink-0" href="#0">Request code</a>
                        </div>
                        <!-- Success message -->
                        <!-- <p class="mt-2 text-sm text-center opacity-75 lg:text-left lg:absolute">Thanks for subscribing!</p> -->
                    </form>

                </div>

            </div>

        </div>
    </section>
@endpush
