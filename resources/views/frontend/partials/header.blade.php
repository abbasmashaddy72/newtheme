<header class="absolute z-30 w-full">
    <div class="max-w-6xl px-4 mx-auto sm:px-6">
        <div class="flex items-center justify-between h-20">

            <!-- Site branding -->
            <div class="mr-5 shrink-0">
                <!-- Logo -->
                @include('frontend.partials.logo')
            </div>

            @if (!Jenssegers\Agent\Facades\Agent::isMobile() || Jenssegers\Agent\Facades\Agent::isTablet())
                <!-- Desktop navigation -->
                <nav class="hidden md:flex md:grow">

                    <!-- Desktop menu links -->
                    <ul class="flex flex-wrap items-center font-medium grow">
                        <li>
                            <a class="flex items-center px-5 py-2 text-gray-600 transition duration-150 ease-in-out hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100"
                                href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a class="flex items-center px-5 py-2 text-gray-600 transition duration-150 ease-in-out hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100"
                                href="{{ route('services') }}">Services</a>
                        </li>
                        <li>
                            <a class="flex items-center px-5 py-2 text-gray-600 transition duration-150 ease-in-out hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100"
                                href="{{ route('blogs') }}">Blogs</a>
                        </li>
                        <li>
                            <a class="flex items-center px-5 py-2 text-gray-600 transition duration-150 ease-in-out hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100"
                                href="{{ route('about') }}">About</a>
                        </li>
                        <li>
                            <a class="flex items-center px-5 py-2 text-gray-600 transition duration-150 ease-in-out hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100"
                                href="{{ route('contact.us') }}">Contact Us</a>
                        </li>
                    </ul>

                    <!-- Desktop lights switch -->
                    <div class="flex flex-col justify-center ml-3 form-switch">
                        <input type="checkbox" name="light-switch" id="light-switch-desktop"
                            class="sr-only light-switch" />
                        <label class="relative" for="light-switch-desktop">
                            <span
                                class="relative z-10 shadow-sm bg-gradient-to-t from-gray-100 to-white dark:from-gray-800 dark:to-gray-700"
                                aria-hidden="true"></span>
                            <svg class="absolute inset-0" width="44" height="24" viewBox="0 0 44 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <g class="text-white fill-current" fill-rule="nonzero" opacity=".88">
                                    <path
                                        d="M32 8a.5.5 0 00.5-.5v-1a.5.5 0 10-1 0v1a.5.5 0 00.5.5zM35.182 9.318a.5.5 0 00.354-.147l.707-.707a.5.5 0 00-.707-.707l-.707.707a.5.5 0 00.353.854zM37.5 11.5h-1a.5.5 0 100 1h1a.5.5 0 100-1zM35.536 14.829a.5.5 0 00-.707.707l.707.707a.5.5 0 00.707-.707l-.707-.707zM32 16a.5.5 0 00-.5.5v1a.5.5 0 101 0v-1a.5.5 0 00-.5-.5zM28.464 14.829l-.707.707a.5.5 0 00.707.707l.707-.707a.5.5 0 00-.707-.707zM28 12a.5.5 0 00-.5-.5h-1a.5.5 0 100 1h1a.5.5 0 00.5-.5zM28.464 9.171a.5.5 0 00.707-.707l-.707-.707a.5.5 0 00-.707.707l.707.707z" />
                                    <circle cx="32" cy="12" r="3" />
                                    <circle fill-opacity=".4" cx="12" cy="12" r="6" />
                                    <circle fill-opacity=".88" cx="12" cy="12" r="3" />
                                </g>
                            </svg>
                            <span class="sr-only">Switch to light / dark version</span>
                        </label>
                    </div>

                    <!-- Desktop CTA on the right -->
                    <ul class="flex flex-wrap items-center justify-end">
                        <li>
                            <a class="ml-6 text-white bg-blue-500 btn-sm hover:bg-blue-300"
                                href="{{ route('book.appointment') }}">Book Appointment</a>
                        </li>
                    </ul>

                </nav>
            @endif

            @if (Jenssegers\Agent\Facades\Agent::isMobile() || Jenssegers\Agent\Facades\Agent::isTablet())
                <!-- Mobile menu -->
                <div class="inline-flex md:hidden" x-data="{ expanded: false }">

                    <!-- Mobile lights switch -->
                    <div class="form-switch flex flex-col justify-center mr-6 -mt-0.5">
                        <input type="checkbox" name="light-switch" id="light-switch-mobile"
                            class="sr-only light-switch" />
                        <label class="relative" for="light-switch-mobile">
                            <span
                                class="relative z-10 shadow-sm bg-gradient-to-t from-gray-100 to-white dark:from-gray-800 dark:to-gray-700"
                                aria-hidden="true"></span>
                            <svg class="absolute inset-0" width="44" height="24" viewBox="0 0 44 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <g class="text-white fill-current" fill-rule="nonzero" opacity=".88">
                                    <path
                                        d="M32 8a.5.5 0 00.5-.5v-1a.5.5 0 10-1 0v1a.5.5 0 00.5.5zM35.182 9.318a.5.5 0 00.354-.147l.707-.707a.5.5 0 00-.707-.707l-.707.707a.5.5 0 00.353.854zM37.5 11.5h-1a.5.5 0 100 1h1a.5.5 0 100-1zM35.536 14.829a.5.5 0 00-.707.707l.707.707a.5.5 0 00.707-.707l-.707-.707zM32 16a.5.5 0 00-.5.5v1a.5.5 0 101 0v-1a.5.5 0 00-.5-.5zM28.464 14.829l-.707.707a.5.5 0 00.707.707l.707-.707a.5.5 0 00-.707-.707zM28 12a.5.5 0 00-.5-.5h-1a.5.5 0 100 1h1a.5.5 0 00.5-.5zM28.464 9.171a.5.5 0 00.707-.707l-.707-.707a.5.5 0 00-.707.707l.707.707z" />
                                    <circle cx="32" cy="12" r="3" />
                                    <circle fill-opacity=".4" cx="12" cy="12" r="6" />
                                    <circle fill-opacity=".88" cx="12" cy="12" r="3" />
                                </g>
                            </svg>
                            <span class="sr-only">Switch to light / dark version</span>
                        </label>
                    </div>

                    <!-- Hamburger button -->
                    <button class="hamburger" :class="{ 'active': expanded }" @click.stop="expanded = !expanded"
                        aria-controls="mobile-nav" :aria-expanded="expanded">
                        <span class="sr-only">Menu</span>
                        <svg class="w-6 h-6 text-gray-900 transition duration-150 ease-in-out fill-current hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <rect y="4" width="24" height="2" rx="1" />
                            <rect y="11" width="24" height="2" rx="1" />
                            <rect y="18" width="24" height="2" rx="1" />
                        </svg>
                    </button>

                    <!-- Mobile navigation -->
                    <nav id="mobile-nav"
                        class="fixed top-0 left-0 z-20 w-full h-screen max-w-sm -ml-16 overflow-scroll bg-white shadow-lg dark:bg-gray-900 no-scrollbar"
                        @click.outside="expanded = false" @keydown.escape.window="expanded = false" x-show="expanded"
                        x-transition:enter="transition ease-out duration-200 transform"
                        x-transition:enter-start="opacity-0 -translate-x-full"
                        x-transition:enter-end="opacity-100 translate-x-0"
                        x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0" x-cloak>
                        <div class="py-6 pl-20 pr-4">
                            <!-- Logo -->
                            @include('frontend.partials.logo')
                            <!-- Links -->
                            <ul>
                                <li>
                                    <a class="flex py-2 text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100"
                                        href="{{ route('home') }}">Home</a>
                                </li>
                                <li>
                                    <a class="flex py-2 text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100"
                                        href="{{ route('services') }}">Services</a>
                                </li>
                                <li>
                                    <a class="flex py-2 text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100"
                                        href="{{ route('blogs') }}">Blogs</a>
                                </li>
                                <li>
                                    <a class="flex py-2 text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100"
                                        href="{{ route('about') }}">About</a>
                                </li>
                                <li>
                                    <a class="flex py-2 text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-gray-100"
                                        href="{{ route('contact.us') }}">Contact Us</a>
                                </li>
                                <li>
                                    <a class="ml-6 text-white bg-blue-500 btn-sm hover:bg-blue-300"
                                        href="{{ route('book.appointment') }}">Book Appointment</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
            @endif

        </div>
    </div>
</header>
