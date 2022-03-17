<x-app-layout>
    <x-admin.table-card>
        <x-slot name="title">
            {{ __('Booked Appointments List') }}
        </x-slot>
        <livewire:tables.book-appointment-table>
    </x-admin.table-card>
</x-app-layout>
