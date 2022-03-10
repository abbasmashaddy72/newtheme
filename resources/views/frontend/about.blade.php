@extends('frontend.index')
@push('main')
    <section class="relative">
        <div class="max-w-6xl px-4 pt-16 mx-auto sm:px-6">
            <div class="pt-6 pb-12 md:pt-8 md:pb-20">

                <!-- Section header -->
                <div class="max-w-3xl pb-12 mx-auto text-center md:pb-20">
                    <h2 class="mb-4 h2 font-red-hat-display">{{ $brief_heading }}</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400">{{ $brief_excerpt }}</p>
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
        <div class="relative max-w-6xl px-4 mx-auto sm:px-6">
            <div class="py-12 md:py-20">

                <!-- Section header -->
                <div class="max-w-3xl pb-12 mx-auto text-center md:pb-20">
                    <h2 class="mb-4 h2 font-red-hat-display">{{ $work_location_heading }}</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400">{{ $work_location_excerpt }}</p>
                </div>

                <!-- Section content -->
                <div class="lg:flex lg:items-start lg:justify-between">

                    <!-- Job categories -->
                    <div class="max-w-xs mx-auto grow sm:max-w-lg md:max-w-3xl lg:mx-0 lg:order-1">
                        <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 sm:gap-6">
                            <!-- 1st job item -->
                            <a class="block group" href="#0">
                                <div class="relative h-0 pb-9/16 sm:pb-1/1">
                                    <img class="absolute inset-0 object-cover w-full h-full" src="../images/career-01.jpg"
                                        width="240" height="240" alt="Career 01" />
                                    <div class="absolute inset-0 opacity-75 bg-gradient-to-t from-gray-900"
                                        aria-hidden="true"></div>
                                    <div class="absolute bottom-0 left-0 right-0 m-4 text-center text-white">
                                        <h4 class="text-lg font-bold tracking-tight break-words font-red-hat-display">
                                            Development</h4>
                                        <div class="text-sm italic opacity-70">4 Positions</div>
                                    </div>
                                </div>
                            </a>
                            <!-- 2nd job item -->
                            <a class="block group" href="#0">
                                <div class="relative h-0 pb-9/16 sm:pb-1/1">
                                    <img class="absolute inset-0 object-cover w-full h-full" src="../images/career-02.jpg"
                                        width="240" height="240" alt="Career 02" />
                                    <div class="absolute inset-0 opacity-75 bg-gradient-to-t from-gray-900"
                                        aria-hidden="true"></div>
                                    <div class="absolute bottom-0 left-0 right-0 m-4 text-center text-white">
                                        <h4 class="text-lg font-bold tracking-tight break-words font-red-hat-display">
                                            Product & Design</h4>
                                        <div class="text-sm italic opacity-70">10 Positions</div>
                                    </div>
                                </div>
                            </a>
                            <!-- 3rd job item -->
                            <a class="block group" href="#0">
                                <div class="relative h-0 pb-9/16 sm:pb-1/1">
                                    <img class="absolute inset-0 object-cover w-full h-full" src="../images/career-03.jpg"
                                        width="240" height="240" alt="Career 03" />
                                    <div class="absolute inset-0 opacity-75 bg-gradient-to-t from-gray-900"
                                        aria-hidden="true"></div>
                                    <div class="absolute bottom-0 left-0 right-0 m-4 text-center text-white">
                                        <h4 class="text-lg font-bold tracking-tight break-words font-red-hat-display">
                                            Marketing</h4>
                                        <div class="text-sm italic opacity-70">2 Positions</div>
                                    </div>
                                </div>
                            </a>
                            <!-- 4th job item -->
                            <a class="block group" href="#0">
                                <div class="relative h-0 pb-9/16 sm:pb-1/1">
                                    <img class="absolute inset-0 object-cover w-full h-full" src="../images/career-04.jpg"
                                        width="240" height="240" alt="Career 04" />
                                    <div class="absolute inset-0 opacity-75 bg-gradient-to-t from-gray-900"
                                        aria-hidden="true"></div>
                                    <div class="absolute bottom-0 left-0 right-0 m-4 text-center text-white">
                                        <h4 class="text-lg font-bold tracking-tight break-words font-red-hat-display">Data
                                            Science</h4>
                                        <div class="text-sm italic opacity-70">4 Positions</div>
                                    </div>
                                </div>
                            </a>
                            <!-- 5th job item -->
                            <a class="block group" href="#0">
                                <div class="relative h-0 pb-9/16 sm:pb-1/1">
                                    <img class="absolute inset-0 object-cover w-full h-full" src="../images/career-05.jpg"
                                        width="240" height="240" alt="Career 05" />
                                    <div class="absolute inset-0 opacity-75 bg-gradient-to-t from-gray-900"
                                        aria-hidden="true"></div>
                                    <div class="absolute bottom-0 left-0 right-0 m-4 text-center text-white">
                                        <h4 class="text-lg font-bold tracking-tight break-words font-red-hat-display">
                                            Internal Systems</h4>
                                        <div class="text-sm italic opacity-70">0 Positions</div>
                                    </div>
                                </div>
                            </a>
                            <!-- 6th job item -->
                            <a class="block group" href="#0">
                                <div class="relative h-0 pb-9/16 sm:pb-1/1">
                                    <img class="absolute inset-0 object-cover w-full h-full" src="../images/career-06.jpg"
                                        width="240" height="240" alt="Career 06" />
                                    <div class="absolute inset-0 opacity-75 bg-gradient-to-t from-gray-900"
                                        aria-hidden="true"></div>
                                    <div class="absolute bottom-0 left-0 right-0 m-4 text-center text-white">
                                        <h4 class="text-lg font-bold tracking-tight break-words font-red-hat-display">
                                            Administrative</h4>
                                        <div class="text-sm italic opacity-70">0 Positions</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Locations links -->
                    <div class="max-w-lg mx-auto mt-8 lg:w-64 lg:mt-0 lg:ml-0 lg:mr-6">
                        <h3 class="mb-4 text-lg font-bold tracking-tight text-center lg:text-left">Locations</h3>
                        <ul
                            class="flex flex-wrap justify-center -mx-3 -my-1 font-medium lg:flex-col lg:justify-start lg:mx-0">
                            <li class="px-3 py-1 lg:px-0">
                                <a class="flex items-center text-teal-500" href="#0">
                                    <svg class="w-4 h-4 mr-3 text-gray-400 fill-current shrink-0 dark:text-gray-500"
                                        viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.3 8.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zM7.3 14.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zM.3 9.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0z" />
                                    </svg>
                                    <span>All locations (44)</span>
                                </a>
                            </li>
                            <li class="px-3 py-1 lg:px-0">
                                <a class="flex items-center text-gray-600 dark:text-gray-400 hover:text-teal-500" href="#0">
                                    <svg class="w-4 h-4 mr-3 text-gray-400 fill-current shrink-0 dark:text-gray-500"
                                        viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.3 8.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zM7.3 14.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zM.3 9.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0z" />
                                    </svg>
                                    <span>London, UK (14)</span>
                                </a>
                            </li>
                            <li class="px-3 py-1 lg:px-0">
                                <a class="flex items-center text-gray-600 dark:text-gray-400 hover:text-teal-500" href="#0">
                                    <svg class="w-4 h-4 mr-3 text-gray-400 fill-current shrink-0 dark:text-gray-500"
                                        viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.3 8.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zM7.3 14.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zM.3 9.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0z" />
                                    </svg>
                                    <span>Milan, Italy (22)</span>
                                </a>
                            </li>
                            <li class="px-3 py-1 lg:px-0">
                                <a class="flex items-center text-gray-600 dark:text-gray-400 hover:text-teal-500" href="#0">
                                    <svg class="w-4 h-4 mr-3 text-gray-400 fill-current shrink-0 dark:text-gray-500"
                                        viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.3 8.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zM7.3 14.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zM.3 9.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0z" />
                                    </svg>
                                    <span>New York, NYC (4)</span>
                                </a>
                            </li>
                            <li class="px-3 py-1 lg:px-0">
                                <a class="flex items-center text-gray-600 dark:text-gray-400 hover:text-teal-500"
                                    href="#0">
                                    <svg class="w-4 h-4 mr-3 text-gray-400 fill-current shrink-0 dark:text-gray-500"
                                        viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.3 8.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zM7.3 14.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0zM.3 9.7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-7 7c-.4.4-1 .4-1.4 0z" />
                                    </svg>
                                    <span>Berlin, DE (12)</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
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
