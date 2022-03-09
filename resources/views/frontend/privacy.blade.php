@extends('frontend.index')
@push('main')
    <section class="relative">
        <div class="max-w-6xl px-4 pt-16 mx-auto sm:px-6">
            <div class="pt-6 pb-12 md:pt-8 md:pb-20">

                <!-- Section header -->
                <div class="max-w-3xl pb-12 mx-auto text-center md:pb-20">
                    <h2 class="mb-4 h2 font-red-hat-display">Privacy & Policies</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400">Please Read Carefully</p>
                </div>

                {!! $data !!}

            </div>
        </div>
    </section>
@endpush
