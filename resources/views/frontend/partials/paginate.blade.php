@if ($paginator->hasPages())
    <nav class="flex justify-center mt-12 sm:justify-between">
        @if ($paginator->onFirstPage())
            <a class="items-center hidden font-medium text-gray-400 sm:inline-flex dark:text-gray-500 disabled">
                <svg class="w-3 h-3 mt-px mr-2 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-current"
                        d="M5.091 11L0 5.909 5.091.818l.875.875-3.602 3.591h9.329v1.25H2.364l3.602 3.602z" />
                </svg>
                <span>Previous</span>
            </a>
        @else
            <a class="items-center hidden font-medium text-teal-500 sm:inline-flex hover:underline"
                href="{{ $paginator->previousPageUrl() }}">
                <svg class="w-3 h-3 mt-px mr-2 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-current"
                        d="M5.091 11L0 5.909 5.091.818l.875.875-3.602 3.591h9.329v1.25H2.364l3.602 3.602z" />
                </svg>
                <span>Previous</span>
            </a>
        @endif

        <ul class="flex">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="mx-1">
                        <a
                            class="inline-flex px-1 text-gray-600 transition duration-150 ease-in-out dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 disabled">{{ $element }}</a>
                    </li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="mx-1">
                                <a
                                    class="inline-flex px-1 text-teal-500 transition duration-150 ease-in-out border-b border-teal-500">{{ $page }}</a>
                            </li>
                        @else
                            <li class="mx-1">
                                <a class="inline-flex px-1 text-gray-600 transition duration-150 ease-in-out dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100"
                                    href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>

        @if ($paginator->hasMorePages())
            <a class="items-center hidden font-medium text-teal-500 sm:inline-flex hover:underline"
                href="{{ $paginator->nextPageUrl() }}">
                <span>Next</span>
                <svg class="w-3 h-3 mt-px ml-2 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-current"
                        d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                </svg>
            </a>
        @else
            <a class="items-center hidden font-medium text-gray-400 sm:inline-flex dark:text-gray-500 disabled">
                <span>Next</span>
                <svg class="w-3 h-3 mt-px ml-2 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-current"
                        d="M6.602 11l-.875-.864L9.33 6.534H0v-1.25h9.33L5.727 1.693l.875-.875 5.091 5.091z" />
                </svg>
            </a>
        @endif
    </nav>
@endif
