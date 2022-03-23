@extends('frontend.index')
@push('styles')
    @include('components.admin.form.ckeditor_style')
@endpush
@push('main')
    <section class="relative">

        <!-- Background image -->
        <div class="box-content absolute inset-0 pt-16 h-128">
            <img class="absolute inset-0 object-cover w-full h-full opacity-25"
                src="{{ asset('storage/' . $data->image) }}" width="1440" height="577" alt="{{ $data->title }}" />
            <div class="absolute inset-0 bg-gradient-to-t from-white dark:from-gray-900" aria-hidden="true"></div>
        </div>

        <div class="relative max-w-6xl px-4 mx-auto sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-20">
                <div class="max-w-3xl mx-auto">

                    <article>

                        <!-- Article header -->
                        <header class="mb-8">
                            <!-- Title and excerpt -->
                            <div class="text-center md:text-left">
                                <h1 class="mb-4 h1 font-red-hat-display" data-aos="fade-down">{{ $data->title }}</h1>
                                <p class="text-xl text-gray-600 dark:text-gray-400" data-aos="fade-down"
                                    data-aos-delay="150">{{ $data->excerpt }}</p>
                            </div>
                        </header>

                        <!-- Article content -->
                        <div class="text-lg text-gray-600 dark:text-gray-400 ck-content" data-aos="fade-up"
                            data-aos-delay="450">
                            {!! $data->description !!}
                        </div>

                        <!-- Article footer -->
                        <footer class="pt-10">
                            <!-- Newsletter module -->
                            @livewire('frontend.newsletter')
                        </footer>

                    </article>

                </div>

            </div>
        </div>
    </section>

    <!-- Testimonials -->
    @if ($data->reviews->count() > 0)
        <section class="border-t border-transparent dark:border-gray-800">
            <div class="py-12 md:py-20">

                <div class="max-w-6xl px-4 mx-auto sm:px-6">

                    <!-- Section header -->
                    <div class="max-w-3xl pb-12 mx-auto text-center md:pb-16">
                        <h1 class="mb-4 h2 font-red-hat-display">Patient Reviews</h1>
                    </div>

                </div>

                <!-- Carousel built with Swiper.js [https://swiperjs.com/] -->
                <!-- * Initialized in src/js/main.js -->
                <!-- * Custom styles in src/css/additional-styles/theme.scss -->
                <div class="carousel swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Carousel items -->
                        @foreach ($data->reviews as $item)
                            <div class="w-full p-4 rounded-lg sm:w-1/2 md:w-1/2 xl:w-1/4 swiper-slide">
                                <a href=""
                                    class="block overflow-hidden rounded-lg shadow-md c-card hover:shadow-xl dark:border-white dark:border-2">
                                    <div class="relative pb-48 overflow-hidden">
                                        <img class="absolute inset-0 object-cover w-full h-full"
                                            src="{{ asset('storage/' . $item->image . '') }}" alt="">
                                    </div>
                                    <div class="p-4">
                                        <span
                                            class="inline-block px-2 py-1 text-xs font-semibold leading-none tracking-wide text-orange-800 uppercase bg-orange-200 rounded-full">{{ $item->service->title }}</span>
                                        <h2 class="mt-2 mb-2 font-bold">{{ $item->name }}</h2>
                                        <p class="text-sm">{{ $item->message }}</p>
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
    @endif
@endpush
@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script>
        window.addEventListener('load', function() {
            document.querySelectorAll('oembed[url]').forEach(element => {
                // get just the code for this youtube video from the url
                let vCode = element.attributes.url.value.split('?v=')[1];
                // paste some BS5 embed code in place of the Figure tag
                element.parentElement.outerHTML = `
    <div class="ratio ratio-16x9">
        <iframe src="https://www.youtube.com/embed/${vCode}?rel=0" width="800" height="450" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>`;
            });
        })
    </script>
    <script>
        window.addEventListener('load', function() {
            document.querySelectorAll('p > a').forEach(element => {
                // get just the code for this youtube video from the url
                let href = element.attributes.href.value;
                let text = element.innerHTML;
                // paste some BS5 embed code in place of the Figure tag
                element.parentElement.outerHTML =
                    `
                <p class="m-2 text-center"><a class="ml-6 text-white bg-teal-500 btn-sm hover:bg-teal-400" href="${href}">${text}</a></p>`;
            });
        })
    </script>
@endpush
