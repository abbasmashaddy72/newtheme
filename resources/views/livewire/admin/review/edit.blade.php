<x-admin.form-custom back='true'>
    <form wire:submit.prevent="submit">
        @csrf
        <x-admin.form.review />
        <div class="mt-3">
            <x-admin.submit-button>
                {{ __('Update') }}
            </x-admin.submit-button>
        </div>
    </form>
</x-admin.form-custom>
