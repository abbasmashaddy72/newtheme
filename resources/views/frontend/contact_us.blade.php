@extends('frontend.index')
@push('meta')
    @include('frontend.partials.meta', [
        'title' => 'Contact Us',
        'description' => 'Contact Dr Ayesha Khaliq',
        'keywords' => Helper::get_static_option('contact_us_keywords'),
    ])
@endpush
@push('main')
    <section class="relative">
        <div class="max-w-6xl px-4 pt-16 mx-auto sm:px-6">
            <div class="pt-6 pb-12 md:pt-8 md:pb-20">

                <!-- Section header -->
                <div class="max-w-3xl pb-12 mx-auto text-center md:pb-20">
                    <h2 class="mb-4 h2 font-red-hat-display">Contact Us</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400">Please use this web form to get in touch with us.
                        Just fill in the boxes and press the 'Send' button when you are ready. Please make sure you have
                        correctly typed your email address or our reply will not find its way back to you!</p>
                </div>

                <!-- Contact form -->
                @livewire('frontend.contact-us-form')

            </div>
        </div>
    </section>
@endpush
