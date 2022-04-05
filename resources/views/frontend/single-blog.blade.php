@extends('frontend.index')
@push('styles')
    @include('components.admin.form.ckeditor_style')
@endpush
@push('meta')
    @include('frontend.partials.meta', [
        'title' => $data->title,
        'description' => $data->excerpt,
        'image' => '//images.weserv.nl/?url=' . asset('storage/' . $data->image) . '&w=200&h=200',
        'keywords' => $data->tags,
    ])
@endpush
@push('main')
    <section class="relative">

        <div class="relative max-w-6xl px-4 mx-auto sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-20">
                <div class="max-w-3xl mx-auto">

                    <article>

                        <!-- Article header -->
                        <header class="mb-8">
                            <!-- Title and excerpt -->
                            <div class="text-center md:text-left">
                                <h1 class="mb-4 h1 font-red-hat-display" data-aos="fade-down">{{ $data->title }}</h1>
                                <p class="text-xl text-justify text-gray-600 sm:text-left dark:text-gray-400"
                                    data-aos="fade-down" data-aos-delay="150">{{ $data->excerpt }}</p>
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
