@extends('frontend.index')
@push('styles')
    @include('components.admin.form.ckeditor_style')
@endpush
@push('main')
    <section class="relative">

        <!-- Background image -->
        <div class="box-content absolute inset-0 pt-16 h-128">
            <img class="absolute inset-0 object-cover w-full h-full opacity-25"
                src="{{ asset('storage/' . $data->image) }}" width="1440" height="577" alt="About" />
            <div class="absolute inset-0 bg-gradient-to-t from-white dark:from-gray-900" aria-hidden="true"></div>
        </div>

        <div class="relative max-w-6xl px-4 mx-auto sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-20">
                <div class="max-w-3xl mx-auto">

                    <article>

                        <!-- Article header -->
                        <header class="mb-8">
                            <!-- Title and excerpt -->
                            <div class="text-center md:text-left">
                                <h1 class="mb-4 h1 font-red-hat-display" data-aos="fade-down">{{ $data->title }}</h1>
                                <p class="text-xl text-gray-600 dark:text-gray-400" data-aos="fade-down"
                                    data-aos-delay="150">{{ $data->excerpt }}</p>
                            </div>
                            <!-- Article meta -->
                            <div class="mt-5 md:flex md:items-center md:justify-between">
                                <!-- Author meta -->
                                <div class="flex items-center justify-center" data-aos="fade-down" data-aos-delay="300">
                                    <div>
                                        <span
                                            class="text-gray-600 dark:text-gray-400">{{ $data->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <hr class="w-5 h-px pt-px mb-8 bg-gray-400 border-0 dark:bg-gray-500" data-aos="fade-down"
                            data-aos-delay="450" />

                        <!-- Article content -->
                        <div class="text-lg text-gray-600 dark:text-gray-400 ck-content" data-aos="fade-up"
                            data-aos-delay="450">
                            {!! $data->description !!}
                        </div>

                        <!-- Article footer -->
                        <footer class="pt-10">
                            <!-- Newsletter module -->
                            @livewire('frontend.newsletter')
                        </footer>

                    </article>

                </div>

            </div>
        </div>
    </section>
    <aside>
        <div class="relative max-w-6xl px-4 mx-auto sm:px-6">
            <div class="pb-12 md:pb-20">
                <div class="max-w-3xl mx-auto">

                    <h4 class="mb-8 h4 font-red-hat-display">Related Blogs</h4>

                    <!-- Articles container -->
                    <div class="grid gap-4 sm:gap-6 sm:grid-cols-2" data-aos-id-relposts>

                        <!-- 1st article -->
                        @foreach ($related_blogs as $item)
                            <article class="relative p-6 text-white group" data-aos="fade-down"
                                data-aos-anchor="[data-aos-id-relposts]">
                                <figure>
                                    <img class="absolute inset-0 object-cover w-full h-full transition duration-700 ease-out opacity-50 group-hover:opacity-75"
                                        src="{{ $item->image }}" width="372" height="182" alt="Related post 01" />
                                    <div class="absolute inset-0 transition duration-700 ease-out bg-teal-500 opacity-75 group-hover:opacity-50"
                                        aria-hidden="true"></div>
                                </figure>
                                <div class="relative flex flex-col h-full">
                                    <header class="grow">
                                        <a class="hover:underline" href="{{ route('single-blog', [$item->id]) }}">
                                            <h3 class="mb-2 text-lg font-bold tracking-tight font-red-hat-display">
                                                {{ $item->title }}
                                            </h3>
                                            <p class="" data-aos="fade-down" data-aos-delay="150">
                                                {{ $item->excerpt }}</p>
                                        </a>
                                        <div class="text-sm opacity-80">{{ $item->created_at->diffForHumans() }}</div>
                                    </header>
                                </div>
                            </article>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </aside>
@endpush
@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script>
        window.addEventListener('load', function() {
            document.querySelectorAll('oembed[url]').forEach(element => {
                // get just the code for this youtube video from the url
                let vCode = element.attributes.url.value.split('?v=')[1];
                // paste some BS5 embed code in place of the Figure tag
                element.parentElement.outerHTML = `
    <div class="aspect-w-16 aspect-h-9">
        <iframe src="https://www.youtube.com/embed/${vCode}?rel=0" width="800" height="450" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>`;
            });
        })
    </script>
    <script>
        window.addEventListener('load', function() {
            document.querySelectorAll('p > a').forEach(element => {
                // get just the code for this youtube video from the url
                let href = element.attributes.href.value;
                let text = element.innerHTML;
                // paste some BS5 embed code in place of the Figure tag
                element.parentElement.outerHTML =
                    `
                <p class="m-2 text-center"><a class="ml-6 text-white capitalize bg-teal-500 btn-sm hover:bg-teal-400" href="${href}">${text}</a></p>`;
            });
        })
    </script>
@endpush
