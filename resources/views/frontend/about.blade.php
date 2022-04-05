@extends('frontend.index')
@push('meta')
    @include('frontend.partials.meta', [
        'title' => 'About',
        'description' => $brief_excerpt,
        'keywords' => Helper::get_static_option('about_keywords'),
    ])
@endpush
@push('main')
    <section class="relative">
        <div class="max-w-6xl px-4 pt-16 mx-auto sm:px-6">
            <div class="pt-6 pb-12 md:pt-8 md:pb-20">

                <!-- Section header -->
                <div class="max-w-3xl pb-12 mx-auto text-center md:pb-20">
                    <h2 class="mb-4 h2 font-red-hat-display">{{ $brief_heading }}</h2>
                    <p class="text-xl text-justify text-gray-600 dark:text-gray-400">{{ $brief_excerpt }}</p>
                </div>

                <!-- Items -->
                <div
                    class="grid items-start max-w-sm grid-cols-2 gap-4 mx-auto gap-y-8 sm:gap-8 md:grid-cols-4 md:max-w-5xl">

                    <!-- 1st item -->
                    @foreach ($counts as $item)
                        <div class="relative flex flex-col items-center">
                            <div aria-hidden="true"
                                class="absolute h-0.5 bg-gradient-to-r from-white via-gray-300 to-white dark:from-gray-900 dark:via-gray-700 dark:to-gray-900 hidden md:block"
                                style="width:calc(100% - 96px);left:calc(50% + 64px);top:40px;"></div>
                            <div class="relative w-20 h-20 mb-3">
                                <div class="absolute inset-0 rounded-full opacity-30 bg-gradient-to-tr from-teal-500 -z-1"
                                    aria-hidden="true"></div>
                                {!! $item->count !!}
                            </div>
                            <div class="font-medium sm:text-lg dark:text-gray-300">{{ $item->title }}</div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="max-w-6xl px-4 mx-auto sm:px-6">
            <div class="py-12 border-t border-gray-200 md:py-20 dark:border-gray-800">

                <!-- Section header -->
                <div class="max-w-3xl pb-12 mx-auto text-center md:pb-20">
                    <h2 class="mb-4 h2 font-red-hat-display">{{ $achievement_heading }}</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400">{{ $achievement_excerpt }}</p>
                </div>

                <!-- Section content -->
                <div x-data="{ year: '{{ date('Y') }}' }">
                    <div class="flex items-start">

                        <!-- Timeline buttons -->
                        <div class="relative mr-4 sm:mr-12 lg:mr-32">
                            <div class="absolute inset-0 my-6 ml-16 pointer-events-none -z-1" aria-hidden="true">
                                <div class="absolute inset-0 w-0.5 h-full bg-gray-300 dark:bg-gray-700"></div>
                            </div>
                            @foreach ($achievements as $year => $item)
                                <button
                                    class="flex items-center justify-between w-20 py-3 pr-2 font-medium text-left text-gray-500 dark:text-gray-400"
                                    @click="year = '{{ $year }}'">
                                    <span class="block w-12 truncate">{{ $year }}</span>
                                    <span
                                        class="block w-3.5 h-3.5 bg-gray-400 dark:bg-gray-700 border-2 border-white dark:border-gray-900 rounded-full"
                                        :class="{ 'bg-teal-500 dark:bg-teal-500' : year === '{{ $year }}' }"></span>
                                </button>
                            @endforeach
                        </div>

                        <!-- 2020's articles -->
                        @foreach ($achievements as $year => $items)
                            <div class="grow" x-show="year === '{{ $year }}'">
                                <div class="grid gap-4 md:grid-cols-2 sm:gap-6">
                                    @foreach ($items as $item)
                                        <article class="flex flex-col p-6 bg-white shadow-2xl dark:bg-gray-800">
                                            <header>
                                                <h3 class="mb-1 h4 font-red-hat-display">
                                                    <a href="{{ $item->link }}">{{ $item->title }}</a>
                                                </h3>
                                            </header>
                                            <div class="text-gray-600 dark:text-gray-400 grow">
                                                <p>{{ $item->excerpt }}</p>
                                            </div>
                                            <a class="inline-flex items-center mt-2 font-medium text-teal-500 hover:underline"
                                                href="{{ $item->link }}">
                                                <span>Learn more</span>
                                                <svg class="w-3 h-3 mt-px ml-2 shrink-0" viewBox="0 0 12 12"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path class="fill-current"
                                                        d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                                                </svg>
                                            </a>
                                        </article>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="relative border-t border-gray-200 dark:border-gray-800">
        <!-- Background gradient -->
        <div class="absolute inset-0 opacity-25 pointer-events-none bg-gradient-to-b from-gray-100 to-white dark:from-gray-800 dark:to-gray-900"
            aria-hidden="true"></div>
        <!-- End background gradient -->
        @livewire('frontend.work-location')
    </section>
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
