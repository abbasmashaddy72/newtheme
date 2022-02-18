@extends('frontend.index')
@push('main')
    <section class="relative">

        <!-- Background image -->
        <div class="box-content absolute inset-0 pt-16 h-128">
            <img class="absolute inset-0 object-cover w-full h-full opacity-25" src="../images/hero-bg.jpg" width="1440"
                height="577" alt="About" />
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
                        <div class="text-lg text-gray-600 dark:text-gray-400" data-aos="fade-up" data-aos-delay="450">
                            {!! $data->description !!}
                        </div>

                        <!-- Article footer -->
                        <footer class="pt-10">
                            <!-- Newsletter module -->
                            <div class="px-8 py-8 text-center text-gray-100 bg-gray-800 dark md:py-12 md:px-12"
                                data-aos="fade-down">
                                <div class="mb-6 text-xl font-medium">Sign up to our newsletter for more articles like this.
                                </div>
                                <form>
                                    <div
                                        class="relative flex flex-col justify-center max-w-xs mx-auto sm:flex-row sm:max-w-sm sm:px-4">
                                        <input type="email" class="w-full px-4 py-2 mb-2 form-input sm:mb-0 sm:mr-2"
                                            placeholder="Your email" aria-label="Your email" />
                                        <a class="text-white bg-teal-500 btn-sm hover:bg-teal-400 shrink-0"
                                            href="#0">Subscribe</a>
                                        <svg class="absolute hidden -mt-3 sm:block left-full" width="42" height="44"
                                            viewBox="0 0 42 44" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path class="text-gray-600 fill-current"
                                                d="M6.226 39.073l9.71 2.172-.436 1.951-13.436-3.004-1.735-.388 1.232-1.281 9.545-9.923 1.441 1.387-6.898 7.171 7.737-2.329C25.946 29.254 34.831 17.909 40.043.71l1.914.58c-5.378 17.746-14.651 29.572-27.818 35.393l-.117.043-7.796 2.347z" />
                                        </svg>
                                    </div>
                                    <!-- Success message -->
                                    {{-- <p class="mt-2 text-sm opacity-80">Thanks for subscribing!</p> --}}
                                    <p class="mt-3 text-sm italic text-gray-400">No spam. No ads. Only great content.</p>
                                </form>
                            </div>
                        </footer>

                    </article>

                </div>

            </div>
        </div>
    </section>
@endpush
