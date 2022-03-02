<x-app-layout>
    <x-admin.table-card>
        <x-slot name="addbutton">
            <x-admin.a-button href="{{ route('review.create') }}">Add</x-admin.a-button>
        </x-slot>
        <livewire:tables.review-table>
    </x-admin.table-card>
</x-app-layout>
