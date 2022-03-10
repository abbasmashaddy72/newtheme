<x-admin.form-custom title='Updated Data'>
    <form wire:submit.prevent="submit">
        @csrf
        @wire('debounce.200ms')
        <x-form-input name="brief_heading" label="Brief Heading" type="text" />

        <x-form-input name="brief_excerpt" label="Brief Excerpt" type="text" />

        <x-form-input name="achievement_heading" label="Achievement Heading" type="text" />

        <x-form-input name="achievement_excerpt" label="Achievement Excerpt" type="text" />

        <x-form-input name="work_location_heading" label="Work Location Heading" type="text" />

        <x-form-input name="work_location_excerpt" label="Work Location Excerpt" type="text" />
        @endwire
        <div class="mt-3">
            <x-admin.submit-button>
                {{ __('Update') }}
            </x-admin.submit-button>
        </div>
    </form>
</x-admin.form-custom>
