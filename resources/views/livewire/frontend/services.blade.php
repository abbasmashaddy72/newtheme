<div class="py-12 md:py-20">

    <!-- Section header -->
    <div class="max-w-3xl pb-12 mx-auto text-center md:pb-20">
        <h2 class="h2 font-red-hat-display">Services</h2>
    </div>

    <!-- Items -->
    <div class="grid max-w-xs gap-4 mx-auto sm:max-w-none md:max-w-xl lg:max-w-none sm:grid-cols-2 lg:gap-6 lg:grid-cols-4"
        data-aos-id-featbl>

        <!-- 1st item -->
        @php
            $colors = ['from-teal-500 to-teal-400 dark:to-teal-500', 'from-purple-500 to-purple-400 dark:to-purple-500', 'from-indigo-500 to-indigo-400 dark:to-indigo-500', 'from-pink-500 to-pink-400 dark:to-pink-500'];
        @endphp
        @foreach ($services as $item)
            <a class="flex flex-col p-5 text-white shadow-2xl group bg-gradient-to-tr {{ $colors[array_rand($colors)] }}"
                href="{{ route('single-service', ['id' => $item->id]) }}">
                {!! $item->icon !!}
                <div class="mb-1 text-xl font-extrabold tracking-tighter font-red-hat-display">
                    {{ $item->title }}
                </div>
                <div class="mb-4 grow opacity-80">{{ $item->excerpt }}</div>
                <svg class="self-end w-6 h-6 transition duration-150 ease-in-out transform -translate-x-2 group-hover:translate-x-0"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-current"
                        d="M13 11V5.057L22.72 12 13 18.943V13H2v-2h11zm2 4.057L19.28 12 15 8.943v6.114z" />
                </svg>
            </a>
        @endforeach

    </div>

    {{-- {!! $services->links('frontend.partials.paginate') !!} --}}
    {{ $services->links() }}

</div>
