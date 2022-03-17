<div class="w-full pb-8">
    <div class="grid grid-flow-col gap-3">
        <x-admin.works-table title="All Achievements List" header="Id,Name,Contact Number" :data='$data' />
        @if ($updateMode)
            <x-admin.form-custom title='Edit Data'>
                <form wire:submit.prevent="update">
                    @csrf
                    @wire('debounce.200ms')
                    <x-form-input name="selected_id" type="hidden" />
                    <x-admin.form.single-upload name="image" label="Image" />
                    <x-form-input name="name" label="Name" type="text" />
                    <x-form-input name="location" label="Location" type="text" />
                    <x-form-input name="timing" label="Timing" type="text" />
                    <x-form-input name="days" label="Days (Separated by ,)" type="text" />
                    <x-form-input name="contact_number" label="Contact Number" type="number" />
                    @endwire
                    <div class="mt-3">
                        <x-admin.submit-button>
                            {{ __('Update') }}
                        </x-admin.submit-button>
                    </div>
                </form>
            </x-admin.form-custom>
        @else
            <x-admin.form-custom title='Add Data'>
                <form wire:submit.prevent="store">
                    @csrf
                    @wire('debounce.200ms')
                    <x-admin.form.single-upload name="image" label="Image" />
                    <x-form-input name="name" label="Name" type="text" />
                    <x-form-input name="location" label="Location" type="text" />
                    <x-form-input name="timing" label="Timing" type="text" />
                    <x-form-input name="days" label="Days (Separated by ,)" type="text" />
                    <x-form-input name="contact_number" label="Contact Number" type="number" />
                    @endwire
                    <div class="mt-3">
                        <x-admin.submit-button>
                            {{ __('Save') }}
                        </x-admin.submit-button>
                    </div>
                </form>
            </x-admin.form-custom>
        @endif
    </div>
</div>
