@extends('frontend.index')
@push('main')
    <section class="relative">
        <div class="max-w-6xl px-4 pt-16 mx-auto sm:px-6">
            @livewire('frontend.services')
        </div>
    </section>
@endpush
