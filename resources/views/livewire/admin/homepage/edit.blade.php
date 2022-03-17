<x-admin.form-custom back='true' title='Updated Data'>
    <form wire:submit.prevent="submit">
        @csrf
        @wire('debounce.200ms')
        <x-form-textarea name="logo" label="Logo (32x32 in SVG)" type="text" />

        <x-form-input name="name" label="Name" type="text" />

        <x-form-input name="department" label="Department" type="text" />

        <x-form-textarea name="about" label="About" type="text" />

        <x-form-input name="action_button_text" label="Action Button Text" type="text" />

        <x-form-input name="action_button_link" label="Action Button Link" type="text" />

        <x-form-textarea name="why_points" label="Why Points (Separated with ';')" type="text" />

        <x-admin.form.single-upload name="hero_img" label="Right Image" />

        <x-form-input name="hero_video" label="Right PopUp Video" type="text" />

        <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
            {{ __('Descriptions') }}
        </h4>

        <x-form-textarea name="services_excerpt"
            label="Services Excerpt (This will be shown on both pages Home & Service Page)" type="text" />

        <x-form-textarea name="testimonials_excerpt" label="Testimonials Excerpt" type="text" />

        <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
            {{ __('Social Media Links') }}
        </h4>

        <x-form-input name="twitter" label="Twitter" type="text" />

        <x-form-input name="facebook" label="Facebook" type="text" />

        <x-form-input name="instagram" label="Instagram" type="text" />

        <x-form-input name="linkedin" label="Linkedin" type="text" />

        <x-form-input name="google_business" label="Google Business" type="text" />
        @endwire
        <div class="mt-3">
            <x-admin.submit-button>
                {{ __('Update') }}
            </x-admin.submit-button>
        </div>
    </form>
</x-admin.form-custom>
