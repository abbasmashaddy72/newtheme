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
                            @livewire('frontend.newsletter')
                        </footer>

                    </article>

                </div>

            </div>
        </div>
    </section>
@endpush
