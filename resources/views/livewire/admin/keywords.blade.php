<x-admin.form-custom back='true' title='Updated Data'>
    <form wire:submit.prevent="submit">
        @csrf
        @wire('debounce.200ms')
        <x-form-input name="about_keywords" label="About Keywords" type="text" />

        <x-form-input name="blogs_keywords" label="Blogs Keywords" type="text" />

        <x-form-input name="book_appointment_keywords" label="Book Appointment Keywords" type="text" />

        <x-form-input name="contact_us_keywords" label="Contact Us Keywords" type="text" />

        <x-form-input name="home_keywords" label="Home Keywords" type="text" />

        <x-form-input name="privacy_keywords" label="Privacy & Policies Keywords" type="text" />

        <x-form-input name="services_keywords" label="Services Keywords" type="text" />

        <x-form-input name="terms_keywords" label="Terms & Conditions Keywords" type="text" />
        @endwire
        <div class="mt-3">
            <x-admin.submit-button>
                {{ __('Update') }}
            </x-admin.submit-button>
        </div>
    </form>
</x-admin.form-custom>
