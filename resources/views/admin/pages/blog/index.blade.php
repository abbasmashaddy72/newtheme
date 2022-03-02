<x-app-layout>
    <x-admin.table-card>
        <x-slot name="addbutton">
            <x-admin.a-button href="{{ route('blog.create') }}">Add</x-admin.a-button>
        </x-slot>
        <livewire:tables.blog-table>
    </x-admin.table-card>
</x-app-layout>
