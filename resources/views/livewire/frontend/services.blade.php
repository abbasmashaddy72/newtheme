<div class="py-12 md:py-20">

    <!-- Section header -->
    <div class="max-w-3xl pb-12 mx-auto text-center md:pb-20">
        <h2 class="h2 font-red-hat-display">Services</h2>
        <p class="text-xl text-gray-600 dark:text-gray-400">{{ $services_excerpt }}</p>
    </div>

    <!-- Items -->
    <div class="grid max-w-xs gap-4 mx-auto sm:max-w-none md:max-w-xl lg:max-w-none sm:grid-cols-2 lg:gap-6 lg:grid-cols-4"
        data-aos-id-featbl>

        @foreach ($services as $item)
            <div class="relative duration-300 hover:bg-black hover:scale-105">
                <a href="{{ route('single-service', ['id' => $item->id]) }}">
                    <div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <h2 class="text-xl font-semibold text-white 5">{{ $item->title }}</h2>
                            <div
                                class="flex items-center mt-4 text-white cursor-pointer focus:outline-none focus:underline hover:text-gray-200 hover:underline">
                                <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="hover:opacity-50">
                        <img src="{{ asset('storage/' . $item->image . '') }}"
                            class="object-cover w-full rounded-lg h-96" alt="{{ $item->title }}" />
                    </div>
                </a>
            </div>
        @endforeach

    </div>

    {{ $services->links() }}

</div>
