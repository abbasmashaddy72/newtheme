<div class="w-full pb-8">
    <div class="grid grid-flow-col gap-3">
        <x-admin.achievements-table title="All Achievements List" header="Id,Year,Title" :data='$data' />
        @if ($updateMode)
            <x-admin.form-custom title='Edit Data'>
                <form wire:submit.prevent="update">
                    @csrf
                    @wire('debounce.200ms')
                    <x-form-input name="selected_id" type="hidden" />
                    <x-form-input name="year" label="Year" type="number" />
                    <x-form-input name="title" label="Title" type="text" />
                    <x-form-textarea name="excerpt" label="Excerpt" type="text" />
                    <x-form-input name="link" label="link" type="text" />
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
                    <x-form-input name="year" label="Year" type="number" />
                    <x-form-input name="title" label="Title" type="text" />
                    <x-form-textarea name="excerpt" label="Excerpt" type="text" />
                    <x-form-input name="link" label="link" type="text" />
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
