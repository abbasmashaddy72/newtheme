<div class="relative max-w-6xl px-4 mx-auto sm:px-6">
    <div class="py-12 md:py-20">

        <!-- Section header -->
        <div class="max-w-3xl pb-12 mx-auto text-center md:pb-20">
            <h2 class="mb-4 h2 font-red-hat-display">{{ $work_location_heading }}</h2>
            <p class="text-xl text-gray-600 dark:text-gray-400">{{ $work_location_excerpt }}</p>
        </div>

        <!-- Section content -->
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-2">
                @foreach ($works as $item)
                    <div class="relative h-0 pb-9/16 sm:pb-1/1">
                        <img class="absolute inset-0 object-cover w-full h-full" src="{{ $item->image }}" width="240"
                            height="240" alt="Career 03" />
                        <div class="absolute inset-0 opacity-75 bg-gradient-to-t from-gray-900 via-gray-700"
                            aria-hidden="true">
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 m-4 text-center text-white">
                            <h4 class="text-2xl font-bold tracking-tight break-words font-red-hat-display">
                                {{ $item->name }}</h4>
                            <h4 class="text-xl font-bold tracking-tight break-words font-red-hat-display">
                                {{ $item->location }}</h4>
                            <div class="text-xl italic opacity-70">{{ $item->timing }}</div>
                            <div class="text-xl italic opacity-70">{{ $item->days }}</div>
                            <a class="text-xl italic opacity-70"
                                href="tel:{{ $item->contact_number }}">{{ $item->contact_number }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
