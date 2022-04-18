@extends('frontend.index')
@push('meta')
    @include('frontend.partials.meta', [
        'image' => '//images.weserv.nl/?url=' . asset('storage/' . $hero_img) . '&w=200&h=200',
        'keywords' => Helper::get_static_option('home_keywords'),
    ])
@endpush
@push('styles')
    <link href="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css" rel="stylesheet">
@endpush
@push('scripts')
    <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
@endpush
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
    <section>
        <div class="max-w-6xl px-4 mx-auto sm:px-6">
            <div class="pt-32 md:pt-40">
                <div x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: 0,
                })" class="relative flex mx-auto flex-">
                    <div class="absolute inset-y-0 left-0 z-10 flex items-center">
                        <button @click="swiper.slidePrev()"
                            class="flex items-center justify-center w-10 h-10 -ml-2 bg-white rounded-full shadow lg:-ml-4 focus:outline-none">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 chevron-left">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="swiper-container" x-ref="container">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach ($slider_images as $item)
                                <div class="p-4 swiper-slide">
                                    <div class="flex flex-col overflow-hidden rounded shadow">
                                        <div class="flex-shrink-0">
                                            <img class="object-cover w-full h-4/5"
                                                src="{{ url('storage/' . $item->image) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="absolute inset-y-0 right-0 z-10 flex items-center">
                        <button @click="swiper.slideNext()"
                            class="flex items-center justify-center w-10 h-10 -mr-2 bg-white rounded-full shadow lg:-mr-4 focus:outline-none">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 chevron-right">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page sections -->
    <section>
        <div class="max-w-6xl px-4 mx-auto sm:px-6">
            <div class="pt-32 pb-10 md:pt-40 md:pb-16">

                <!-- Hero content -->
                <div class="items-center md:grid md:grid-cols-12 md:gap-12 lg:gap-20">

                    <!-- Content -->
                    <div class="mb-8 text-left md:col-span-7 lg:col-span-7 md:mb-0">
                        <h1 class="mb-4 font-extrabold h2 lg:text-5xl font-red-hat-display" data-aos="fade-down">
                            Dr. {{ $name }}</h1>
                        <h2 class="mb-4 font-extrabold h4 lg:text-3xl font-red-hat-display" data-aos="fade-down">
                            {{ $department }}</h2>
                        <p class="text-xl text-justify text-gray-600 sm:text-left dark:text-gray-400" data-aos="fade-down"
                            data-aos-delay="150">
                            {{ $about }}</p>
                        <div class="flex flex-col justify-center max-w-sm mx-auto mt-8 sm:flex-row sm:max-w-md md:mx-0"
                            data-aos="fade-down" data-aos-delay="300">
                            <a class="text-white bg-teal-500 btn hover:bg-teal-400 shrink-0"
                                href="{{ $top_action_button_link }}">{{ $top_action_button_text }}</a>
                        </div>
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
                            <!-- Image inside mockup size: 290x624px (or 580x1248px for >Retina devices) -->
                            {{-- <img class="absolute" src="{{ asset('images/mockup-image-01.jpg') }}" width="290"
                                height="624" style="max-width: 84.33%;" alt="Features illustration" /> --}}
                            <!-- iPhone mockup -->
                            <img class="relative h-auto max-w-full mx-auto pointer-events-none rounded-xl md:mr-0 md:max-w-none"
                                src="{{ asset('storage/' . $hero_img) }}" width="344" height="674"
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

    <!-- Work Locations -->
    <section class="relative border-t border-gray-200 dark:border-gray-800">
        <!-- Background gradient -->
        <div class="absolute inset-0 opacity-25 pointer-events-none bg-gradient-to-b from-gray-100 to-white dark:from-gray-800 dark:to-gray-900"
            aria-hidden="true"></div>
        <!-- End background gradient -->
        @livewire('frontend.work-location')
    </section>

    <!-- Services -->
    <section class="relative">
        <div class="max-w-6xl px-4 pt-16 mx-auto sm:px-6">
            @livewire('frontend.services')
        </div>
    </section>

    <!-- Testimonials -->
    <section class="border-t border-transparent dark:border-gray-800">
        <div class="py-12 md:py-12">

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
            @livewire('frontend.testimonials')
            @include('frontend.partials.g-reviews')

        </div>
    </section>

    <section class="border-t border-transparent dark:border-gray-800">
        <div class="max-w-6xl px-4 mx-auto sm:px-6">

            <!-- Section header -->
            <div class="max-w-3xl pb-12 mx-auto text-center">
                <a class="text-white bg-teal-500 btn hover:bg-teal-400 shrink-0"
                    href="{{ $bottom_action_button_link }}">{{ $bottom_action_button_text }}</a>
            </div>

        </div>
    </section>
@endpush
