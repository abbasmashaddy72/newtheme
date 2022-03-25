<x-app-layout>
    <x-admin.table-card>
        <x-slot name="title">
            {{ __('Dashboard') }}
        </x-slot>
        <div class="flex flex-wrap -m-4 text-center">
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        width="56" height="56" viewBox="0 0 256 256" xml:space="preserve" class="inline-block">
                        <g transform="translate(128 128) scale(0.72 0.72)" style="">
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)">
                                <path
                                    d="M 64.095 15.942 H 48.905 c -0.553 0 -1 -0.448 -1 -1 s 0.447 -1 1 -1 h 15.189 c 0.553 0 1 0.448 1 1 S 64.647 15.942 64.095 15.942 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 41.095 15.942 H 25.905 c -0.552 0 -1 -0.448 -1 -1 s 0.448 -1 1 -1 h 15.189 c 0.552 0 1 0.448 1 1 S 41.647 15.942 41.095 15.942 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 84.137 83.859 H 5.863 C 2.63 83.859 0 81.229 0 77.996 V 19.805 c 0 -3.233 2.63 -5.863 5.863 -5.863 h 12.231 c 0.552 0 1 0.448 1 1 s -0.448 1 -1 1 H 5.863 C 3.733 15.942 2 17.675 2 19.805 v 58.191 c 0 2.13 1.733 3.863 3.863 3.863 h 78.273 c 2.13 0 3.863 -1.733 3.863 -3.863 V 19.805 c 0 -2.13 -1.733 -3.863 -3.863 -3.863 H 71.905 c -0.553 0 -1 -0.448 -1 -1 s 0.447 -1 1 -1 h 12.231 c 3.233 0 5.863 2.63 5.863 5.863 v 58.191 C 90 81.229 87.37 83.859 84.137 83.859 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 22.293 51.252 h -8.587 c -1.442 0 -2.615 -1.173 -2.615 -2.615 V 40.05 c 0 -1.442 1.173 -2.616 2.615 -2.616 h 8.587 c 1.442 0 2.615 1.173 2.615 2.616 v 8.587 C 24.909 50.079 23.735 51.252 22.293 51.252 z M 13.707 39.434 c -0.339 0 -0.615 0.276 -0.615 0.616 v 8.587 c 0 0.339 0.276 0.615 0.615 0.615 h 8.587 c 0.339 0 0.615 -0.276 0.615 -0.615 V 40.05 c 0 -0.339 -0.276 -0.616 -0.615 -0.616 H 13.707 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 49.293 51.252 h -8.586 c -1.442 0 -2.615 -1.173 -2.615 -2.615 V 40.05 c 0 -1.442 1.173 -2.616 2.615 -2.616 h 8.586 c 1.442 0 2.616 1.173 2.616 2.616 v 8.587 C 51.909 50.079 50.735 51.252 49.293 51.252 z M 40.707 39.434 c -0.339 0 -0.615 0.276 -0.615 0.616 v 8.587 c 0 0.339 0.276 0.615 0.615 0.615 h 8.586 c 0.34 0 0.616 -0.276 0.616 -0.615 V 40.05 c 0 -0.339 -0.276 -0.616 -0.616 -0.616 H 40.707 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 76.293 51.252 h -8.586 c -1.442 0 -2.616 -1.173 -2.616 -2.615 V 40.05 c 0 -1.442 1.174 -2.616 2.616 -2.616 h 8.586 c 1.442 0 2.616 1.173 2.616 2.616 v 8.587 C 78.909 50.079 77.735 51.252 76.293 51.252 z M 67.707 39.434 c -0.34 0 -0.616 0.276 -0.616 0.616 v 8.587 c 0 0.339 0.276 0.615 0.616 0.615 h 8.586 c 0.34 0 0.616 -0.276 0.616 -0.615 V 40.05 c 0 -0.339 -0.276 -0.616 -0.616 -0.616 H 67.707 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 22.293 74.252 h -8.587 c -1.442 0 -2.615 -1.173 -2.615 -2.615 V 63.05 c 0 -1.442 1.173 -2.615 2.615 -2.615 h 8.587 c 1.442 0 2.615 1.173 2.615 2.615 v 8.587 C 24.909 73.079 23.735 74.252 22.293 74.252 z M 13.707 62.435 c -0.339 0 -0.615 0.276 -0.615 0.615 v 8.587 c 0 0.339 0.276 0.615 0.615 0.615 h 8.587 c 0.339 0 0.615 -0.276 0.615 -0.615 V 63.05 c 0 -0.339 -0.276 -0.615 -0.615 -0.615 H 13.707 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 76.293 74.252 h -8.586 c -1.442 0 -2.616 -1.173 -2.616 -2.615 V 63.05 c 0 -1.442 1.174 -2.615 2.616 -2.615 h 8.586 c 1.442 0 2.616 1.173 2.616 2.615 v 8.587 C 78.909 73.079 77.735 74.252 76.293 74.252 z M 67.707 62.435 c -0.34 0 -0.616 0.276 -0.616 0.615 v 8.587 c 0 0.339 0.276 0.615 0.616 0.615 h 8.586 c 0.34 0 0.616 -0.276 0.616 -0.615 V 63.05 c 0 -0.339 -0.276 -0.615 -0.616 -0.615 H 67.707 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 89 30.111 H 1 c -0.552 0 -1 -0.448 -1 -1 s 0.448 -1 1 -1 h 88 c 0.553 0 1 0.448 1 1 S 89.553 30.111 89 30.111 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 44.34 74.252 c -0.264 0 -0.519 -0.104 -0.707 -0.293 l -4.246 -4.246 c -0.391 -0.391 -0.391 -1.023 0 -1.414 s 1.023 -0.391 1.414 0 l 3.4 3.4 l 5.226 -7.51 c 0.314 -0.454 0.939 -0.566 1.393 -0.25 c 0.453 0.315 0.565 0.939 0.25 1.393 l -5.909 8.491 c -0.169 0.243 -0.438 0.398 -0.732 0.425 C 44.399 74.251 44.37 74.252 44.34 74.252 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 47.045 23.743 h -4.09 c -1.577 0 -2.86 -1.283 -2.86 -2.86 V 9.001 c 0 -1.577 1.283 -2.86 2.86 -2.86 h 4.09 c 1.577 0 2.86 1.283 2.86 2.86 v 11.882 C 49.905 22.46 48.622 23.743 47.045 23.743 z M 42.955 8.141 c -0.475 0 -0.86 0.386 -0.86 0.86 v 11.882 c 0 0.475 0.386 0.86 0.86 0.86 h 4.09 c 0.475 0 0.86 -0.386 0.86 -0.86 V 9.001 c 0 -0.475 -0.386 -0.86 -0.86 -0.86 H 42.955 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 70.045 23.743 h -4.09 c -1.577 0 -2.86 -1.283 -2.86 -2.86 V 9.001 c 0 -1.577 1.283 -2.86 2.86 -2.86 h 4.09 c 1.577 0 2.86 1.283 2.86 2.86 v 11.882 C 72.905 22.46 71.622 23.743 70.045 23.743 z M 65.955 8.141 c -0.475 0 -0.86 0.386 -0.86 0.86 v 11.882 c 0 0.475 0.386 0.86 0.86 0.86 h 4.09 c 0.475 0 0.86 -0.386 0.86 -0.86 V 9.001 c 0 -0.475 -0.386 -0.86 -0.86 -0.86 H 65.955 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 24.045 23.743 h -4.09 c -1.577 0 -2.86 -1.283 -2.86 -2.86 V 9.001 c 0 -1.577 1.283 -2.86 2.86 -2.86 h 4.09 c 1.577 0 2.86 1.283 2.86 2.86 v 11.882 C 26.905 22.46 25.622 23.743 24.045 23.743 z M 19.955 8.141 c -0.475 0 -0.86 0.386 -0.86 0.86 v 11.882 c 0 0.475 0.386 0.86 0.86 0.86 h 4.09 c 0.475 0 0.86 -0.386 0.86 -0.86 V 9.001 c 0 -0.475 -0.386 -0.86 -0.86 -0.86 H 19.955 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </g>
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">{{ $bookedAppointment }}</h2>
                    <p class="leading-relaxed">Booked Appointments</p>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        width="56" height="56" viewBox="0 0 256 256" xml:space="preserve" class="inline-block">
                        <g transform="translate(128 128) scale(0.72 0.72)" style="">
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)">
                                <path
                                    d="M 70.24 20.934 c 4.069 0 7.378 3.31 7.378 7.378 v 3.722 c 0 4.069 -3.31 7.378 -7.378 7.378 c -4.069 0 -7.378 -3.31 -7.378 -7.378 v -3.722 C 62.862 24.244 66.172 20.934 70.24 20.934 M 70.24 17.934 L 70.24 17.934 c -5.708 0 -10.379 4.67 -10.379 10.378 v 3.722 c 0 5.708 4.67 10.378 10.378 10.378 h 0 c 5.708 0 10.378 -4.67 10.378 -10.378 v -3.722 C 80.619 22.604 75.948 17.934 70.24 17.934 L 70.24 17.934 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 19.76 20.934 c 4.069 0 7.378 3.31 7.378 7.378 v 3.722 c 0 4.069 -3.31 7.378 -7.379 7.378 c -4.069 0 -7.378 -3.31 -7.378 -7.378 v -3.722 C 12.381 24.244 15.691 20.934 19.76 20.934 M 19.76 17.934 L 19.76 17.934 c -5.708 0 -10.379 4.67 -10.379 10.378 v 3.722 c 0 5.708 4.67 10.378 10.378 10.378 h 0 c 5.708 0 10.378 -4.67 10.378 -10.378 v -3.722 C 30.138 22.604 25.468 17.934 19.76 17.934 L 19.76 17.934 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 63.291 62.979 H 32.709 c -0.829 0 -1.5 -0.672 -1.5 -1.5 s 0.671 -1.5 1.5 -1.5 h 30.582 c 0.828 0 1.5 0.672 1.5 1.5 S 64.119 62.979 63.291 62.979 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 63.291 62.979 c -0.362 0 -0.726 -0.13 -1.014 -0.395 l -5.894 -5.404 c -0.61 -0.56 -0.651 -1.509 -0.092 -2.119 c 0.561 -0.609 1.509 -0.652 2.119 -0.092 l 5.894 5.404 c 0.61 0.56 0.651 1.509 0.092 2.119 C 64.101 62.815 63.696 62.979 63.291 62.979 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 57.397 68.384 c -0.405 0 -0.81 -0.164 -1.105 -0.486 c -0.56 -0.61 -0.519 -1.56 0.092 -2.119 l 5.894 -5.404 c 0.611 -0.559 1.56 -0.518 2.119 0.092 c 0.56 0.61 0.519 1.56 -0.092 2.119 l -5.894 5.404 C 58.123 68.253 57.76 68.384 57.397 68.384 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 57.291 52.979 H 26.709 c -0.829 0 -1.5 -0.672 -1.5 -1.5 s 0.671 -1.5 1.5 -1.5 h 30.582 c 0.828 0 1.5 0.672 1.5 1.5 S 58.119 52.979 57.291 52.979 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 26.71 52.979 c -0.406 0 -0.81 -0.164 -1.106 -0.486 c -0.56 -0.61 -0.519 -1.56 0.092 -2.119 l 5.894 -5.404 c 0.61 -0.56 1.559 -0.52 2.119 0.092 c 0.56 0.61 0.519 1.56 -0.092 2.119 l -5.894 5.404 C 27.435 52.849 27.072 52.979 26.71 52.979 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 32.603 58.384 c -0.362 0 -0.725 -0.13 -1.013 -0.395 l -5.894 -5.404 c -0.611 -0.56 -0.652 -1.509 -0.092 -2.119 c 0.56 -0.609 1.508 -0.652 2.119 -0.092 l 5.894 5.404 c 0.611 0.56 0.652 1.509 0.092 2.119 C 33.413 58.22 33.008 58.384 32.603 58.384 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 36.519 65.529 V 69.5 H 3 v -9.522 c 0 -6.251 4.457 -11.698 10.501 -13.015 c 1.986 0.869 4.087 1.308 6.259 1.308 c 1.718 0 3.388 -0.286 4.995 -0.831 l 3.224 -3.046 c -0.771 -0.238 -1.561 -0.434 -2.375 -0.556 c -1.756 0.909 -3.74 1.432 -5.844 1.432 s -4.088 -0.523 -5.844 -1.432 C 6.069 45.01 0 51.819 0 59.978 v 10.736 C 0 71.696 0.804 72.5 1.786 72.5 h 35.947 c 0.983 0 1.786 -0.804 1.786 -1.786 v -5.184 H 36.519 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 76.084 43.839 c -1.756 0.909 -3.74 1.432 -5.844 1.432 c -2.104 0 -4.088 -0.523 -5.844 -1.432 c -3.448 0.515 -6.552 2.119 -8.949 4.447 h 5.024 c 1.087 -0.595 2.262 -1.051 3.51 -1.323 c 1.986 0.869 4.087 1.308 6.259 1.308 s 4.273 -0.44 6.259 -1.308 C 82.543 48.28 87 53.727 87 59.978 V 69.5 H 53.481 v -3.971 h -3 v 5.184 c 0 0.983 0.804 1.786 1.786 1.786 h 35.947 c 0.983 0 1.786 -0.804 1.786 -1.786 V 59.978 C 90 51.819 83.931 45.01 76.084 43.839 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </g>
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">{{ $contactedUs }}</h2>
                    <p class="leading-relaxed">Contacted Us</p>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        width="56" height="56" viewBox="0 0 256 256" xml:space="preserve" class="inline-block">
                        <g transform="translate(128 128) scale(0.72 0.72)" style="">
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)">
                                <path
                                    d="M 25.658 45.595 h -8.62 c -0.374 0 -0.717 -0.209 -0.889 -0.542 s -0.143 -0.733 0.074 -1.038 l 7.863 -11.054 c 0.672 -0.945 0.768 -2.136 0.255 -3.186 c -0.492 -1.008 -1.442 -1.639 -2.543 -1.688 l -0.166 -0.004 c -1.982 0 -3.594 1.612 -3.594 3.594 c 0 0.552 -0.448 1 -1 1 s -1 -0.448 -1 -1 c 0 -3.084 2.51 -5.594 5.594 -5.594 c 0.087 0 0.173 0.002 0.259 0.006 c 1.84 0.083 3.43 1.134 4.247 2.81 c 0.826 1.693 0.664 3.694 -0.423 5.222 l -6.739 9.474 h 6.682 c 0.552 0 1 0.448 1 1 S 26.21 45.595 25.658 45.595 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 38.171 45.595 c -0.552 0 -1 -0.448 -1 -1 V 42.34 h -9.228 c -0.375 0 -0.718 -0.21 -0.89 -0.543 s -0.142 -0.735 0.077 -1.04 L 37.358 26.5 c 0.253 -0.353 0.704 -0.501 1.119 -0.369 c 0.414 0.133 0.694 0.518 0.694 0.952 V 40.34 h 2.274 c 0.552 0 1 0.448 1 1 s -0.448 1 -1 1 h -2.274 v 2.254 C 39.171 45.147 38.723 45.595 38.171 45.595 z M 29.891 40.34 h 7.28 V 30.192 L 29.891 40.34 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 57.091 63.917 c -0.172 0 -0.346 -0.044 -0.505 -0.138 c -0.477 -0.279 -0.636 -0.892 -0.356 -1.368 l 9.389 -16.006 h -8.526 c -0.553 0 -1 -0.448 -1 -1 s 0.447 -1 1 -1 h 10.272 c 0.358 0 0.689 0.192 0.868 0.503 c 0.178 0.311 0.176 0.694 -0.006 1.003 L 57.954 63.423 C 57.769 63.74 57.434 63.917 57.091 63.917 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 38.196 63.917 c -0.167 0 -0.335 -0.042 -0.491 -0.129 c -0.481 -0.272 -0.65 -0.882 -0.379 -1.363 l 20.243 -35.833 c 0.272 -0.481 0.881 -0.651 1.363 -0.379 c 0.48 0.271 0.65 0.882 0.379 1.362 L 39.068 63.409 C 38.884 63.734 38.545 63.917 38.196 63.917 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 42.202 87.201 C 18.932 87.201 0 68.27 0 45 C 0 21.73 18.932 2.798 42.202 2.798 S 84.403 21.73 84.403 45 c 0 0.552 -0.447 1 -1 1 s -1 -0.448 -1 -1 c 0 -22.167 -18.034 -40.202 -40.202 -40.202 S 2 22.833 2 45 c 0 22.167 18.034 40.201 40.202 40.201 c 14.232 0 27.541 -7.642 34.731 -19.942 c 0.278 -0.477 0.89 -0.637 1.368 -0.358 c 0.477 0.278 0.637 0.892 0.358 1.368 C 71.111 79.18 57.142 87.201 42.202 87.201 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 83.403 46 c -0.266 0 -0.52 -0.105 -0.707 -0.293 l -5.598 -5.597 c -0.391 -0.391 -0.391 -1.023 0 -1.414 s 1.023 -0.391 1.414 0 l 4.891 4.89 l 4.89 -4.89 c 0.391 -0.391 1.023 -0.391 1.414 0 s 0.391 1.023 0 1.414 l -5.597 5.597 C 83.923 45.895 83.669 46 83.403 46 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </g>
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">{{ $servicesCount }}</h2>
                    <p class="leading-relaxed">Total Services</p>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        width="56" height="56" viewBox="0 0 256 256" xml:space="preserve" class="inline-block">
                        <g transform="translate(128 128) scale(0.72 0.72)" style="">
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)">
                                <path
                                    d="M 76.887 60.444 h -4.415 c -0.828 0 -1.5 -0.672 -1.5 -1.5 s 0.672 -1.5 1.5 -1.5 h 4.415 C 82.463 57.444 87 52.907 87 47.331 c 0 -5.335 -4.179 -9.764 -9.514 -10.081 l -1.581 -0.094 l 0.18 -1.573 c 0.1 -0.872 0.147 -1.652 0.147 -2.385 c 0 -11.438 -9.305 -20.742 -20.742 -20.742 c -7.165 0 -13.729 3.641 -17.559 9.741 l -0.745 1.187 l -1.235 -0.663 c -2.294 -1.231 -4.889 -1.882 -7.502 -1.882 c -8.491 0 -15.457 6.65 -15.858 15.14 l -0.057 1.196 l -1.179 0.21 C 6.514 38.244 3 42.428 3 47.331 c 0 5.576 4.537 10.113 10.113 10.113 h 5.186 c 0.829 0 1.5 0.672 1.5 1.5 s -0.671 1.5 -1.5 1.5 h -5.186 C 5.883 60.444 0 54.562 0 47.331 c 0 -5.966 4.007 -11.109 9.683 -12.645 c 1.025 -9.537 9.057 -16.849 18.766 -16.849 c 2.649 0 5.282 0.563 7.693 1.637 c 4.46 -6.299 11.596 -10.019 19.349 -10.019 c 13.092 0 23.742 10.651 23.742 23.742 c 0 0.401 -0.013 0.813 -0.037 1.239 C 85.365 35.536 90 40.93 90 47.331 C 90 54.562 84.117 60.444 76.887 60.444 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 67.472 34.672 c -0.828 0 -1.5 -0.671 -1.5 -1.5 c 0 -5.779 -4.702 -10.481 -10.481 -10.481 c -0.828 0 -1.5 -0.671 -1.5 -1.5 s 0.672 -1.5 1.5 -1.5 c 7.434 0 13.481 6.048 13.481 13.481 C 68.972 34.001 68.3 34.672 67.472 34.672 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 21.859 37.381 c -0.024 0 -0.048 0 -0.072 -0.001 c -0.828 -0.04 -1.467 -0.742 -1.428 -1.569 c 0.205 -4.33 3.758 -7.721 8.089 -7.721 c 0.829 0 1.5 0.671 1.5 1.5 s -0.671 1.5 -1.5 1.5 c -2.727 0 -4.963 2.136 -5.092 4.862 C 23.319 36.755 22.655 37.381 21.859 37.381 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 66.796 45.324 c -0.373 -0.74 -1.276 -1.037 -2.015 -0.663 c -0.739 0.373 -1.036 1.275 -0.663 2.015 c 1.407 2.789 1.404 5.023 0.005 7.932 L 52.924 76.392 L 40.746 45.451 c -0.303 -0.771 -1.174 -1.149 -1.945 -0.847 c -0.771 0.304 -1.15 1.174 -0.847 1.946 l 6.198 15.746 l -7.247 14.095 L 24.728 45.451 c -0.304 -0.771 -1.175 -1.149 -1.945 -0.847 c -0.771 0.304 -1.15 1.174 -0.847 1.946 l 13.392 34.025 c 0.216 0.548 0.733 0.919 1.321 0.948 c 0.025 0.001 0.05 0.002 0.075 0.002 c 0.56 0 1.076 -0.313 1.333 -0.814 l 7.557 -14.698 l 5.732 14.563 c 0.216 0.548 0.732 0.919 1.32 0.948 c 0.025 0.001 0.051 0.002 0.075 0.002 c 0.561 0 1.076 -0.313 1.334 -0.814 l 12.732 -24.768 C 68.614 52.193 68.61 48.918 66.796 45.324 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </g>
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">{{ $blogsCount }}</h2>
                    <p class="leading-relaxed">Total Blogs</p>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        width="56" height="56" viewBox="0 0 256 256" xml:space="preserve" class="inline-block">
                        <g transform="translate(128 128) scale(0.72 0.72)" style="">
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)">
                                <path
                                    d="M 57.299 65.386 c -8.373 0 -16.748 -3.188 -23.123 -9.563 C 28 49.647 24.598 41.436 24.598 32.701 c 0 -8.734 3.402 -16.946 9.578 -23.123 C 40.353 3.401 48.564 0 57.299 0 c 8.735 0 16.947 3.401 23.123 9.578 C 86.599 15.754 90 23.966 90 32.701 c 0 8.735 -3.401 16.947 -9.578 23.123 l 0 0 l 0 0 C 74.047 62.198 65.673 65.386 57.299 65.386 z M 57.299 2 c -8.2 0 -15.91 3.193 -21.708 8.992 c -5.798 5.799 -8.992 13.508 -8.992 21.708 c 0 8.201 3.194 15.91 8.992 21.708 c 11.971 11.971 31.448 11.971 43.417 0 l 0 0 C 84.807 48.61 88 40.901 88 32.701 c 0 -8.2 -3.193 -15.91 -8.992 -21.708 S 65.5 2 57.299 2 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 9.542 89.995 c -2.444 0 -4.887 -0.93 -6.748 -2.79 c -3.721 -3.721 -3.721 -9.774 0 -13.495 l 21.204 -21.203 c 0.391 -0.391 1.023 -0.391 1.414 0 s 0.391 1.023 0 1.414 L 4.209 75.124 c -2.941 2.941 -2.941 7.726 0 10.667 c 2.94 2.941 7.726 2.942 10.667 0 l 21.204 -21.203 c 0.391 -0.391 1.023 -0.391 1.414 0 s 0.391 1.023 0 1.414 L 16.29 87.205 C 14.429 89.065 11.986 89.995 9.542 89.995 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 77.044 42.465 c -0.135 0 -0.272 -0.028 -0.404 -0.086 c -0.505 -0.224 -0.732 -0.815 -0.509 -1.32 c 2.879 -6.486 2.245 -13.888 -1.695 -19.801 c -0.307 -0.46 -0.182 -1.081 0.277 -1.387 c 0.46 -0.308 1.08 -0.182 1.387 0.277 c 4.322 6.486 5.018 14.606 1.859 21.722 C 77.793 42.244 77.428 42.465 77.044 42.465 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 37.554 42.466 c -0.383 0 -0.749 -0.222 -0.915 -0.595 c -2.585 -5.83 -2.585 -12.514 0 -18.34 c 4.592 -10.346 16.23 -15.725 27.064 -12.509 c 0.529 0.157 0.832 0.713 0.675 1.243 c -0.156 0.529 -0.712 0.833 -1.243 0.674 C 53.26 10.01 42.655 14.91 38.468 24.342 c -2.357 5.31 -2.357 11.403 0 16.718 c 0.224 0.505 -0.004 1.096 -0.509 1.319 C 37.827 42.438 37.689 42.466 37.554 42.466 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </g>
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">{{ $blogsViewSum }}</h2>
                    <p class="leading-relaxed">Total Blogs Viewed</p>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/4 sm:w-1/2">
                <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        width="56" height="56" viewBox="0 0 256 256" xml:space="preserve" class="inline-block">
                        <g transform="translate(128 128) scale(0.72 0.72)" style="">
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)">
                                <path
                                    d="M 50.755 19.668 c -0.159 0 -0.319 -0.038 -0.466 -0.115 L 45 16.772 l -5.29 2.781 c -0.337 0.177 -0.745 0.148 -1.054 -0.076 c -0.308 -0.224 -0.462 -0.603 -0.398 -0.979 l 1.01 -5.89 l -4.28 -4.172 c -0.273 -0.266 -0.371 -0.663 -0.253 -1.025 s 0.431 -0.626 0.808 -0.681 l 5.915 -0.859 l 2.644 -5.359 c 0.337 -0.683 1.458 -0.683 1.795 0 l 2.644 5.359 l 5.914 0.859 c 0.377 0.055 0.69 0.319 0.808 0.681 c 0.117 0.362 0.02 0.76 -0.253 1.026 l -4.28 4.172 l 1.01 5.89 c 0.064 0.375 -0.09 0.755 -0.398 0.979 C 51.168 19.604 50.962 19.668 50.755 19.668 z M 37.838 8.419 l 3.205 3.124 c 0.235 0.23 0.343 0.561 0.288 0.886 l -0.757 4.41 l 3.961 -2.083 c 0.291 -0.153 0.64 -0.153 0.931 0 l 3.961 2.083 l -0.756 -4.41 c -0.056 -0.324 0.052 -0.656 0.287 -0.886 l 3.205 -3.124 l -4.428 -0.643 c -0.326 -0.047 -0.608 -0.252 -0.753 -0.548 L 45 3.216 l -1.98 4.012 c -0.146 0.296 -0.427 0.5 -0.754 0.548 L 37.838 8.419 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 79.572 68.851 c 1.361 -1.002 2.245 -2.616 2.245 -4.432 v -0.897 c 0 -1.98 -1.051 -3.719 -2.625 -4.688 c 1.272 -1.008 2.09 -2.567 2.09 -4.313 v -0.897 c 0 -3.033 -2.468 -5.501 -5.503 -5.501 l -17.705 0.028 c 1.064 -11.168 0.059 -17.708 -3.147 -20.539 c -1.851 -1.633 -4.373 -2.048 -7.705 -1.274 l -0.737 0.171 l -0.036 0.755 c -0.464 9.738 -6.423 22.906 -12.256 24.679 v -0.652 c 0 -1.872 -1.652 -3.394 -3.682 -3.394 H 11.669 c -2.03 0 -3.682 1.522 -3.682 3.394 v 35.314 c 0 1.871 1.652 3.393 3.682 3.393 h 18.843 c 2.03 0 3.682 -1.522 3.682 -3.393 v -0.027 c 3.09 2.023 8.158 3.254 13.235 3.134 h 25.367 c 3.033 0 5.501 -2.467 5.501 -5.5 v -0.898 c 0 -1.339 -0.481 -2.568 -1.279 -3.523 c 2.797 -0.255 4.996 -2.614 4.996 -5.476 v -0.898 C 82.013 71.517 81.044 69.838 79.572 68.851 z M 80.012 74.316 c 0 1.93 -1.57 3.499 -3.5 3.499 h -3.717 H 68.31 c -0.553 0 -1.001 0.447 -1.001 1.001 c 0 0.553 0.447 1.001 1.001 1.001 h 4.486 c 1.93 0 3.5 1.57 3.5 3.5 v 0.898 c 0 1.93 -1.57 3.499 -3.5 3.499 H 47.403 c -5.582 0.149 -11.273 -1.511 -13.47 -3.929 l -1.741 -1.915 v 4.738 c 0 0.754 -0.769 1.392 -1.681 1.392 H 11.669 c -0.911 0 -1.681 -0.638 -1.681 -1.392 V 51.293 c 0 -0.755 0.769 -1.393 1.681 -1.393 h 18.843 c 0.911 0 1.681 0.638 1.681 1.393 v 1.844 v 1.06 v 16.449 c 0 0.553 0.448 1.001 1.001 1.001 c 0.553 0 1.001 -0.447 1.001 -1.001 V 53.999 c 7.351 -1.562 13.461 -16.045 14.206 -25.861 c 2.295 -0.41 3.998 -0.089 5.203 0.975 c 2.745 2.423 3.52 8.944 2.371 19.937 l -0.116 1.106 l 19.924 -0.032 c 1.93 0 3.5 1.57 3.5 3.5 v 0.897 c 0 1.93 -1.57 3.5 -3.5 3.5 H 68.31 c -0.553 0 -1.001 0.447 -1.001 1.001 c 0 0.553 0.447 1.001 1.001 1.001 h 7.472 h 0.535 c 1.93 0 3.5 1.57 3.5 3.5 v 0.897 c 0 1.93 -1.57 3.5 -3.5 3.5 H 68.31 c -0.553 0 -1.001 0.447 -1.001 1.001 c 0 0.553 0.447 1.001 1.001 1.001 h 8.007 h 0.195 c 1.93 0 3.5 1.569 3.5 3.499 V 74.316 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 21.38 83.291 c -2.803 0 -5.083 -2.28 -5.083 -5.083 c 0 -2.803 2.28 -5.084 5.083 -5.084 s 5.083 2.28 5.083 5.084 C 26.463 81.01 24.183 83.291 21.38 83.291 z M 21.38 75.125 c -1.7 0 -3.082 1.383 -3.082 3.083 c 0 1.699 1.383 3.082 3.082 3.082 c 1.699 0 3.082 -1.383 3.082 -3.082 C 24.462 76.508 23.079 75.125 21.38 75.125 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 73.88 29.304 c -0.159 0 -0.319 -0.038 -0.466 -0.115 l -5.289 -2.781 l -5.291 2.781 c -0.334 0.177 -0.744 0.148 -1.053 -0.076 c -0.308 -0.224 -0.462 -0.603 -0.398 -0.979 l 1.01 -5.89 l -4.28 -4.172 c -0.273 -0.266 -0.37 -0.663 -0.253 -1.025 c 0.118 -0.362 0.431 -0.626 0.808 -0.681 l 5.914 -0.859 l 2.645 -5.359 c 0.336 -0.683 1.458 -0.683 1.794 0 l 2.645 5.359 l 5.914 0.859 c 0.377 0.055 0.69 0.319 0.808 0.681 c 0.117 0.362 0.02 0.76 -0.253 1.026 l -4.28 4.172 l 1.01 5.89 c 0.064 0.375 -0.09 0.755 -0.398 0.979 C 74.293 29.239 74.087 29.304 73.88 29.304 z M 60.962 18.054 l 3.205 3.124 c 0.235 0.23 0.343 0.561 0.287 0.885 l -0.756 4.41 l 3.962 -2.083 c 0.291 -0.153 0.638 -0.153 0.931 0 l 3.96 2.083 l -0.756 -4.41 c -0.056 -0.324 0.052 -0.656 0.287 -0.886 l 3.205 -3.124 l -4.428 -0.643 c -0.326 -0.047 -0.608 -0.252 -0.753 -0.548 l -1.98 -4.012 l -1.98 4.012 c -0.146 0.296 -0.427 0.5 -0.753 0.548 L 60.962 18.054 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 28.594 29.304 c -0.159 0 -0.319 -0.038 -0.466 -0.115 l -5.29 -2.781 l -5.29 2.781 c -0.337 0.177 -0.745 0.148 -1.054 -0.076 c -0.308 -0.224 -0.462 -0.603 -0.398 -0.979 l 1.01 -5.89 l -4.28 -4.172 c -0.273 -0.266 -0.371 -0.663 -0.253 -1.025 c 0.118 -0.362 0.431 -0.626 0.808 -0.681 l 5.914 -0.859 l 2.645 -5.359 c 0.169 -0.341 0.516 -0.558 0.897 -0.558 l 0 0 c 0.381 0 0.729 0.216 0.897 0.558 l 2.644 5.359 l 5.915 0.859 c 0.377 0.055 0.69 0.319 0.808 0.681 c 0.118 0.362 0.02 0.76 -0.253 1.025 l -4.28 4.172 l 1.01 5.89 c 0.064 0.375 -0.09 0.755 -0.398 0.979 C 29.008 29.239 28.801 29.304 28.594 29.304 z M 22.839 24.277 c 0.16 0 0.32 0.038 0.466 0.115 l 3.961 2.083 l -0.757 -4.41 c -0.055 -0.324 0.052 -0.656 0.288 -0.886 l 3.205 -3.124 l -4.429 -0.643 c -0.326 -0.047 -0.608 -0.252 -0.754 -0.548 l -1.98 -4.013 l -1.981 4.013 c -0.146 0.296 -0.427 0.5 -0.753 0.548 l -4.429 0.643 l 3.205 3.124 c 0.235 0.23 0.343 0.561 0.288 0.886 l -0.757 4.41 l 3.961 -2.083 C 22.519 24.315 22.679 24.277 22.839 24.277 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(58,87,232); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </g>
                    </svg>
                    <h2 class="text-3xl font-medium text-gray-900 title-font">{{ $reviewsCount }}</h2>
                    <p class="leading-relaxed">Total Reviews</p>
                </div>
            </div>
        </div>
    </x-admin.table-card>
</x-app-layout>
