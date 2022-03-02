<x-admin.form-custom>
    <form wire:submit.prevent="submit">
        @csrf
        <x-admin.form.review />
        <div class="mt-3">
            <x-admin.submit-button>
                {{ __('Save') }}
            </x-admin.submit-button>
        </div>
    </form>
</x-admin.form-custom>
