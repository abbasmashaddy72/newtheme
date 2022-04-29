@extends('frontend.index')
@push('meta')
    @include('frontend.partials.meta', [
        'title' => 'Services',
        'description' => 'These are Some the Services Provided by Dr. Ayesha Khaliq',
        'keywords' => Helper::get_static_option('services_keywords'),
    ])
@endpush
@push('main')
    <section class="relative">
        <div class="max-w-6xl px-4 pt-16 mx-auto sm:px-6">

            @if (Jenssegers\Agent\Facades\Agent::isMobile() || Jenssegers\Agent\Facades\Agent::isTablet())
                <div class="flex flex-wrap items-center justify-end mt-2">
                    <a class="ml-6 text-right text-white bg-blue-500 btn-sm hover:bg-blue-300"
                        href="{{ route('book.appointment') }}">Book
                        Appointment</a>
                </div>
            @endif

            @livewire('frontend.services')
        </div>
    </section>
@endpush
