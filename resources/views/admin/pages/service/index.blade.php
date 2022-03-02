<x-app-layout>
    <x-admin.table-card>
        <x-slot name="addbutton">
            <x-admin.a-button href="{{ route('service.create') }}">Add</x-admin.a-button>
        </x-slot>
        <livewire:tables.service-table>
    </x-admin.table-card>
</x-app-layout>
