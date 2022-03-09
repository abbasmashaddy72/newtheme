<div class="grid items-start gap-12 sm:grid-cols-2 sm:gap-x-6 md:gap-y-8">

    <!-- 1st article -->
    @foreach ($blogs as $item)
        <article class="flex flex-col h-full">
            <header>
                <a class="block mb-4" href="{{ route('single-blog', [$item->id]) }}">
                    <figure class="relative h-0 pb-9/16">
                        <img class="absolute inset-0 object-cover w-full h-full"
                            src="{{ asset('storage/' . $item->image) }}" width="352" height="198" alt="News 01" />
                    </figure>
                </a>
                <a class="hover:underline" href="{{ route('single-blog', [$item->id]) }}">
                    <h3 class="mb-2 h4 font-red-hat-display">
                        {{ $item->title }}
                    </h3>
                </a>
            </header>
            <p class="text-gray-600 dark:text-gray-400 grow">{{ $item->excerpt }}</p>
            <footer class="flex items-center mt-4">
                <div class="text-sm text-gray-500">
                    <span class="text-gray-500">{{ $item->created_at->diffForHumans() }}</span>
                </div>
            </footer>
        </article>
    @endforeach

    {{ $blogs->links() }}
</div>
