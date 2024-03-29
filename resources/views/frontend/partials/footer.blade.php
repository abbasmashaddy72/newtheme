<footer class="relative">
    <div class="max-w-6xl px-4 mx-auto sm:px-6">
        <div class="py-12 -mt-px border-t border-gray-200 md:py-16 dark:border-gray-800">

            <!-- Footer illustration -->
            <div class="pointer-events-none -z-1" aria-hidden="true">
                <svg class="absolute bottom-0 left-0 ml-24 transform -translate-x-1/2 dark:opacity-40" width="800"
                    height="264" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="400" cy="400" r="400" fill="url(#footerglow_paint0_radial)" fill-opacity=".4" />
                    <defs>
                        <radialGradient id="footerglow_paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="rotate(90 0 400) scale(315.089)">
                            <stop stop-color="#3ABAB4" />
                            <stop offset="1" stop-color="#3ABAB4" stop-opacity=".01" />
                        </radialGradient>
                    </defs>
                </svg>
            </div>

            <!-- Top area: Blocks -->
            <div class="grid gap-8 mb-8 md:grid-cols-12 lg:gap-20 md:mb-12">

                <!-- 1st block -->
                <div class="md:col-span-2 lg:col-span-3">
                    <!-- Logo -->
                    @include('frontend.partials.logo')
                </div>

                <!-- 2nd, 3rd, 4th and 5th blocks -->
                <div class="grid grid-cols-2 gap-4 md:col-span-10 lg:col-span-9 md:grid-cols-4">

                    <!-- 2nd block -->
                    <div class="text-sm">
                        <h6 class="mb-2 font-medium uppercase">UseFull Links</h6>
                        <ul>
                            <li class="mb-1">
                                <a class="text-gray-600 transition duration-150 ease-in-out dark:text-gray-400 hover:underline"
                                    href="{{ route('about') }}">About</a>
                            </li>
                            <li class="mb-1">
                                <a class="text-gray-600 transition duration-150 ease-in-out dark:text-gray-400 hover:underline"
                                    href="{{ route('services') }}">Services</a>
                            </li>
                            <li class="mb-1">
                                <a class="text-gray-600 transition duration-150 ease-in-out dark:text-gray-400 hover:underline"
                                    href="{{ route('blogs') }}">Blogs</a>
                            </li>
                            <li class="mb-1">
                                <a class="text-gray-600 transition duration-150 ease-in-out dark:text-gray-400 hover:underline"
                                    href="{{ route('book.appointment') }}">Book Appointment</a>
                            </li>
                            <li class="mb-1">
                                <a class="text-gray-600 transition duration-150 ease-in-out dark:text-gray-400 hover:underline"
                                    href="{{ route('contact.us') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>

                    <!-- 3rd block -->
                    @if (!Jenssegers\Agent\Facades\Agent::isMobile() || Jenssegers\Agent\Facades\Agent::isTablet())
                        <div>
                        @else
                            <div class="aspect-w-16 aspect-h-9">
                    @endif
                    <iframe src="{{ $embed_map_link }}" width="600" height="200" style="border:0;" allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>

        </div>

    </div>

    <!-- Bottom area -->
    <div class="pb-4 md:flex md:items-center md:justify-between">

        <!-- Social links -->
        <ul class="flex mb-4 md:order-2 md:ml-4 md:mb-0">
            {{-- Twitter --}}
            <li>
                <a class="flex items-center justify-center text-white transition duration-150 ease-in-out bg-blue-500 rounded-full dark:text-teal-500 dark:bg-gray-800 hover:underline hover:bg-teal-600"
                    href="{{ $twitter }}" aria-label="Twitter">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24 11.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H8c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z" />
                    </svg>
                </a>
            </li>
            {{-- FaceBook --}}
            <li class="ml-4">
                <a class="flex items-center justify-center text-white transition duration-150 ease-in-out bg-blue-500 rounded-full dark:text-teal-500 dark:bg-gray-800 hover:underline hover:bg-teal-600"
                    href="{{ $facebook }}" aria-label="Facebook">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.023 24L14 17h-3v-3h3v-2c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V14H21l-1 3h-2.72v7h-3.257z" />
                    </svg>
                </a>
            </li>
            {{-- Instagram --}}
            <li class="ml-4">
                <a class="flex items-center justify-center text-white transition duration-150 ease-in-out bg-blue-500 rounded-full dark:text-teal-500 dark:bg-gray-800 hover:underline hover:bg-teal-600"
                    href="{{ $instagram }}" aria-label="Instagram">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20.145" cy="11.892" r="1" />
                        <path
                            d="M16 20c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2z" />
                        <path
                            d="M20 24h-8c-2.056 0-4-1.944-4-4v-8c0-2.056 1.944-4 4-4h8c2.056 0 4 1.944 4 4v8c0 2.056-1.944 4-4 4zm-8-14c-.935 0-2 1.065-2 2v8c0 .953 1.047 2 2 2h8c.935 0 2-1.065 2-2v-8c0-.935-1.065-2-2-2h-8z" />
                    </svg>
                </a>
            </li>
            {{-- LinkIdInn --}}
            <li class="ml-4">
                <a class="flex items-center justify-center text-white transition duration-150 ease-in-out bg-blue-500 rounded-full dark:text-teal-500 dark:bg-gray-800 hover:underline hover:bg-teal-600"
                    href="{{ $linkedin }}" aria-label="Linkedin">
                    <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M23.3 8H8.7c-.4 0-.7.3-.7.7v14.7c0 .3.3.6.7.6h14.7c.4 0 .7-.3.7-.7V8.7c-.1-.4-.4-.7-.8-.7zM12.7 21.6h-2.3V14h2.4v7.6h-.1zM11.6 13c-.8 0-1.4-.7-1.4-1.4 0-.8.6-1.4 1.4-1.4.8 0 1.4.6 1.4 1.4-.1.7-.7 1.4-1.4 1.4zm10 8.6h-2.4v-3.7c0-.9 0-2-1.2-2s-1.4 1-1.4 2v3.8h-2.4V14h2.3v1c.3-.6 1.1-1.2 2.2-1.2 2.4 0 2.8 1.6 2.8 3.6v4.2h.1z" />
                    </svg>
                </a>
            </li>
            {{-- Google Business --}}
            <li class="ml-4">
                <a class="flex items-center justify-center text-white transition duration-150 ease-in-out bg-blue-500 rounded-full dark:text-teal-500 dark:bg-gray-800 hover:underline hover:bg-teal-600"
                    href="{{ $google_business }}" aria-label="Google My Business">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 fill-current" viewBox="-1 -1 32 32">
                        <path
                            d="M 15.003906 3 C 8.3749062 3 3 8.373 3 15 C 3 21.627 8.3749062 27 15.003906 27 C 25.013906 27 27.269078 17.707 26.330078 13 L 25 13 L 22.732422 13 L 15 13 L 15 17 L 22.738281 17 C 21.848702 20.448251 18.725955 23 15 23 C 10.582 23 7 19.418 7 15 C 7 10.582 10.582 7 15 7 C 17.009 7 18.839141 7.74575 20.244141 8.96875 L 23.085938 6.1289062 C 20.951937 4.1849063 18.116906 3 15.003906 3 z">
                        </path>
                    </svg>
                </a>
            </li>
        </ul>

        <!-- Middle links -->
        <div class="mb-2 text-sm text-gray-700 md:order-1 md:mb-0">
            <a class="text-gray-600 transition duration-150 ease-in-out dark:text-gray-400 hover:underline"
                href="{{ route('terms') }}">Terms</a> · <a
                class="text-gray-600 transition duration-150 ease-in-out dark:text-gray-400 hover:underline"
                href="{{ route('privacy') }}">Privacy Policy</a>
        </div>

        <!-- Copyrights note -->
        <div class="mr-4 text-sm text-gray-600 dark:text-gray-400">&copy; {{ date('Y') }} UMDAA. All rights
            reserved.</div>

    </div>
</footer>
