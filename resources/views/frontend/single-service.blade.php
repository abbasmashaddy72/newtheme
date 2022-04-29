@extends('frontend.index')
@push('styles')
    @include('components.admin.form.ckeditor_style')
@endpush
@push('meta')
    @include('frontend.partials.meta', [
        'title' => $data->title,
        'description' => $data->excerpt,
        'image' => '//images.weserv.nl/?url=' . asset('storage/' . $data->image) . '&w=200&h=200',
        'keywords' => $data->keywords,
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
                            <h1 class="mb-4 text-center h2 font-red-hat-display" data-aos="fade-down">
                                {{ $data->title }}</h1>
                            <p class="text-xl text-justify text-gray-600 sm:text-left dark:text-gray-400"
                                data-aos="fade-down" data-aos-delay="150">{{ $data->excerpt }}</p>
                        </header>

                        <!-- Article content -->
                        <div class="text-lg text-gray-600 dark:text-gray-400 ck-content" data-aos="fade-up"
                            data-aos-delay="450">
                            {!! $data->description !!}
                        </div>

                    </article>

                </div>

            </div>
        </div>
    </section>

    <div class="text-center font-red-hat-display h2">Reviews</div>
    @livewire('frontend.testimonials', ['service_id' => $data->id])
    @include('frontend.partials.g-reviews')
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
                <p class="m-2 text-center"><a class="ml-6 text-white capitalize bg-blue-500 btn-sm hover:bg-blue-300" href="${href}">${text}</a></p>`;
            });
        })
    </script>
@endpush
