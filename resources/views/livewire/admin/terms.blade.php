<x-admin.form-custom title='Updated Data'>
    <form wire:submit.prevent="submit">
        @csrf
        @wire('debounce.200ms')
        <x-admin.form.ckeditor id="bodyen" lang="EN" name="terms_description" label="Description" required />
        @endwire
        <div class="mt-3">
            <x-admin.submit-button>
                {{ __('Update') }}
            </x-admin.submit-button>
        </div>
    </form>
</x-admin.form-custom>
