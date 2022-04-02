<x-admin.form-custom back='true' title='Updated Data'>
    <form wire:submit.prevent="submit">
        @csrf
        @wire('debounce.200ms')
        <x-form-textarea name="logo" label="Logo (32x32 in SVG)" type="text" />

        <x-form-input name="name" label="Name" type="text" />

        <x-form-input name="department" label="Department" type="text" />

        <x-form-textarea name="about" label="About" type="text" />

        <x-form-input name="top_action_button_text" label="Top Action Button Text" type="text" />

        <x-form-input name="top_action_button_link" label="Top Action Button Link" type="text" />

        <x-form-input name="bottom_action_button_text" label="Bottom Action Button Text" type="text" />

        <x-form-input name="bottom_action_button_link" label="Bottom Action Button Link" type="text" />

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

        <x-form-input name="embed_map_link"
            label="Embed Map Link(Directly from Google Maps Search, Share, Embed copy src link & paste)" type="text" />

        <x-form-input name="gr_api"
            label="Google Review API(Follow the Instructions from https://googlereviews.cws.net & paste the value of load_google_reviews from 2nd script)"
            type="text" />

        <x-form-input name="gr_count_api"
            label="Google Review Count API(Follow the Instructions from https://www.review-widget.net & paste the value of data-uuid from script)"
            type="text" />
        @endwire
        <div class="mt-3">
            <x-admin.submit-button>
                {{ __('Update') }}
            </x-admin.submit-button>
        </div>
    </form>
</x-admin.form-custom>
