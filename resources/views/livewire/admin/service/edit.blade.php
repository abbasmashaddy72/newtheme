<x-admin.form-custom>
    <form wire:submit.prevent="submit">
        @csrf
        <x-admin.form.service />
        <div class="mt-3">
            <x-admin.submit-button>
                {{ __('Update') }}
            </x-admin.submit-button>
        </div>
    </form>
</x-admin.form-custom>
