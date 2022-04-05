@extends('frontend.index')
@push('meta')
    @include('frontend.partials.meta', [
        'title' => 'Blogs',
        'description' => 'These are the Blogs Written by Dr Ayesha Khaliq',
        'keywords' => Helper::get_static_option('blogs_keywords'),
    ])
@endpush
@push('main')
    <section class="relative">

        <div class="relative max-w-6xl px-4 mx-auto sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-16">

                @if (Jenssegers\Agent\Facades\Agent::isMobile() || Jenssegers\Agent\Facades\Agent::isTablet())
                    <div class="flex flex-wrap items-center justify-end mb-4">
                        <a class="ml-6 text-right text-white bg-teal-500 btn-sm hover:bg-teal-400"
                            href="{{ route('book.appointment') }}">Book
                            Appointment</a>
                    </div>
                @endif

                <!-- Featured article -->
                <div class="max-w-3xl" data-aos="fade-down">
                    <article>
                        <header>
                            <!-- Title and excerpt -->
                            <div class="text-center md:text-left">
                                <a href="{{ route('single-blog', ['id' => $top_one->id]) }}">
                                    <h1 class="mb-4 h1 font-red-hat-display">{{ $top_one->title }}</h1>
                                </a>
                                <p class="text-xl text-gray-600 dark:text-gray-400">{{ $top_one->excerpt }}</p>
                            </div>
                            <!-- Article meta -->
                            <div class="mt-5 md:flex md:items-center md:justify-between">
                                <!-- Author meta -->
                                <div class="flex items-center justify-center">
                                    <div>
                                        <span
                                            class="text-gray-600 dark:text-gray-400">{{ $top_one->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                            </div>
                        </header>
                    </article>
                </div>

            </div>
        </div>

    </section>
    <section>
        <div class="max-w-6xl px-4 mx-auto sm:px-6">
            <div class="pb-12 md:pb-16">

                <div class="grid gap-4 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4" data-aos-id-featposts>

                    @php
                        $colors = ['bg-teal-500', 'bg-purple-500', 'bg-indigo-500', 'bg-pink-500'];
                    @endphp
                    <!-- 1st article -->
                    @foreach ($next_top_four as $item)
                        <article class="relative px-6 py-4 group sm:py-8" data-aos="fade-up"
                            data-aos-anchor="[data-aos-id-featposts]" data-aos-delay="100">
                            <figure>
                                <img class="absolute inset-0 object-cover w-full h-full transition duration-700 ease-out opacity-50 group-hover:opacity-75"
                                    src="{{ asset('storage/' . $item->image) }}" width="258" height="154"
                                    alt="Related post 03" />
                                <div class="absolute inset-0 transition duration-700 ease-out {{ $colors[array_rand($colors)] }} opacity-75 group-hover:opacity-50"
                                    aria-hidden="true"></div>
                            </figure>
                            <div class="relative flex flex-col h-full text-white">
                                <header class="grow">
                                    <a class="hover:underline" href="{{ route('single-blog', ['id' => $item->id]) }}">
                                        <h3 class="mb-2 text-lg font-bold tracking-tight font-red-hat-display">
                                            {{ $item->title }}
                                        </h3>
                                    </a>
                                </header>
                                <footer>
                                    <div class="text-sm opacity-80">{{ $item->created_at->diffForHumans() }}</div>
                                </footer>
                            </div>
                        </article>
                    @endforeach

                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="max-w-6xl px-4 mx-auto sm:px-6">
            <div class="pb-12 md:pb-20">
                <div class="lg:flex lg:justify-between">

                    <!-- Main content -->
                    <div class="lg:grow" data-aos="fade-down" data-aos-delay="200">

                        <!-- Section title -->
                        <h4 class="mb-8 h3 font-red-hat-display">Latest</h4>

                        @livewire('frontend.blogs')

                    </div>

                    <!-- Sidebar -->
                    <aside class="relative mt-12 lg:mt-0 lg:w-64 lg:ml-16 lg:shrink-0" data-aos="fade-down"
                        data-aos-delay="400">

                        <!-- Popular posts -->
                        <div class="mb-8">
                            <h4 class="mb-5 h4 font-red-hat-display">Popular</h4>
                            <ul class="-my-3">
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($distinct_top_five as $item)
                                    <li class="flex py-3 border-b border-gray-200 dark:border-gray-800">
                                        <div
                                            class="w-12 mt-1 text-gray-400 h4 font-red-hat-display dark:text-gray-600 shrink-0">
                                            {{ '0' . $i++ }}</div>
                                        <article>
                                            <a class="hover:underline"
                                                href="{{ route('single-blog', ['id' => $item->id]) }}">
                                                <h3 class="mb-1 font-bold tracking-tight font-red-hat-display">
                                                    {{ $item->title }}
                                                </h3>
                                            </a>
                                            <div class="text-sm text-gray-500"><span
                                                    class="text-gray-500">{{ $item->created_at->diffForHumans() }}</span>
                                            </div>
                                        </article>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </aside>

                </div>
            </div>
        </div>
    </section>
@endpush
