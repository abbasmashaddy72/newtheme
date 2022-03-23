@extends('frontend.index')
@push('main')
    <section class="relative">
        <div class="max-w-6xl px-4 pt-16 mx-auto sm:px-6">

            @if (Jenssegers\Agent\Facades\Agent::isMobile() || Jenssegers\Agent\Facades\Agent::isTablet())
                <div class="flex flex-wrap items-center justify-end mt-2">
                    <a class="ml-6 text-right text-white bg-teal-500 btn-sm hover:bg-teal-400"
                        href="{{ route('book.appointment') }}">Book
                        Appointment</a>
                </div>
            @endif

            @livewire('frontend.services')
        </div>
    </section>
@endpush
