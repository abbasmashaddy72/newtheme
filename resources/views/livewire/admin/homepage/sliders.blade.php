<div class="w-full pb-8">
    <div class="grid grid-flow-col gap-3">
        <x-admin.basic-table title="Sliders's List" header="Id,Image" :data='$data' />
        <x-admin.form-custom title='Upload Data'>
            <form wire:submit.prevent="submit">
                @csrf
                @wire('debounce.200ms')
                <x-admin.form.single-upload name="image" label="Image" />
                @endwire
                <div class="mt-3">
                    <x-admin.submit-button>
                        {{ __('Save') }}
                    </x-admin.submit-button>
                </div>
            </form>
        </x-admin.form-custom>
    </div>
</div>
