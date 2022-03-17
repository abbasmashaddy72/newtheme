<x-app-layout>
    <x-admin.table-card>
        <x-slot name="title">
            {{ __('Contacted Us List') }}
        </x-slot>
        <livewire:tables.contact-us-table>
    </x-admin.table-card>
</x-app-layout>
