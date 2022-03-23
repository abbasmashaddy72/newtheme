<div class="relative z-40 px-8 py-20 xl:px-20 2xl:mx-auto 2xl:container">

    @foreach ($testimonials as $item)
        <div x-data="{ modalExpanded{{ str_replace(' ', '', $item->name) }}: false }">
            <div class="relative flex overflow-hidden rounded shadow-lg" style="transform: translateX(0%)">
                <div class="mt-14 md:flex">
                    <div class="relative lg:w-1/2 sm:w-96 xl:h-96 h-80">
                        <img src="{{ asset('storage/' . $item->image . '') }}" alt="image of profile"
                            class="flex-shrink-0 object-cover w-full h-full rounded shadow-lg object-fit" />
                        <div
                            class="absolute top-0 right-0 items-center justify-center hidden w-32 h-32 -mr-16 bg-indigo-100 rounded-full md:flex -mt-14">
                            <a class="absolute transition duration-150 ease-in-out cursor-pointer hover:opacity-75"
                                @click.prevent="modalExpanded{{ str_replace(' ', '', $item->name) }} = true"
                                aria-controls="modal">
                                <img src="{{ asset('svg/play-button.svg') }}" width="96" height="96" alt="Play" />
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between mt-4 md:w-1/3 lg:w-1/3 xl:ml-32 md:ml-20 md:mt-0">
                        <div>
                            <h1 class="text-2xl font-semibold text-gray-800 xl:leading-loose dark:text-white ">
                                {{ $item->name }}</h1>
                            <p class="mt-4 text-base font-medium leading-6 text-gray-600 dark:text-gray-200 ">
                                {{ $item->message }}</p>
                        </div>
                        <div class="mt-8 md:mt-0">
                            <div class="flex items-center pb-4 text-sm text-gray-600">
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
                            <p class="mt-2 mb-4 text-base leading-4 text-gray-600 dark:text-gray-200 ">
                                {{ $item->service->title }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal backdrop -->
            <div class="fixed inset-0 z-50 transition-opacity bg-black bg-opacity-75"
                x-show="modalExpanded{{ str_replace(' ', '', $item->name) }}"
                x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-out duration-100"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak>
            </div>

            <!-- Modal dialog -->
            <div id="modal"
                class="fixed inset-0 z-50 flex items-center justify-center px-4 overflow-hidden transform sm:px-6"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline"
                x-show="modalExpanded{{ str_replace(' ', '', $item->name) }}"
                x-transition:enter="transition ease-in-out duration-200"
                x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in-out duration-200"
                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-8"
                x-cloak>
                <div class="w-full max-w-6xl max-h-full overflow-auto bg-white"
                    @click.outside="modalExpanded{{ str_replace(' ', '', $item->name) }} = false"
                    @keydown.escape.window="modalExpanded{{ str_replace(' ', '', $item->name) }} = false">
                    <div class="relative pb-9/16">
                        <iframe class="absolute w-full h-full"
                            src="https://www.youtube.com/embed/{{ $item->video_url }}" title="Video"
                            webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="mt-5">
        {{ $testimonials->links() }}
    </div>

    <div id="cws_google_reviews" class="mt-8"></div>
</div>
@push('scripts')
    <script>
        function load_google_reviews(place) {

            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == XMLHttpRequest.DONE) { // XMLHttpRequest.DONE == 4
                    if (xmlhttp.status == 200) {
                        document.getElementById("cws_google_reviews").innerHTML = xmlhttp.responseText;

                        document.getElementById("powered_by_cws").style.cssText = "; display:block !important;";
                    } else if (xmlhttp.status == 400) {
                        document.getElementById("cws_google_reviews").innerHTML(
                            '<p>There was an error processing your reviews.<br /><small>[code: 400]</small></p>');
                    } else {
                        document.getElementById("cws_google_reviews").innerHTML(
                            '<p>Unknown error occured.<br /><small>[code: 600]</small></p>');
                    }
                }
            };

            xmlhttp.open("POST", "https://googlereviews.cws.net/display-reviews.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("place=" + place);
        }
    </script>

    <script>
        var gr_api = "{{ $gr_api }}";
        load_google_reviews(gr_api);
    </script>
@endpush
