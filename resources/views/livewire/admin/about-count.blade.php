<div>
    <x-admin.basic-table title="Achievements Brief List" header="Id,SVG,Title" :data='$data' />

    <x-admin.form-custom title='Updated Data'>
        <form wire:submit.prevent="submit">
            @csrf
            @wire('debounce.200ms')
            <x-form-textarea name="count.0" label="SVG" type="text" />

            <x-form-input name="title.0" label="Title" type="text" />

            @foreach ($inputs as $key => $value)
                <x-form-textarea name="count.{{ $value }}" label="SVG" type="text" />

                <x-form-input name="title.{{ $value }}" label="Title" type="text" />
                <div class="col-md-2">
                    <button class="btn btn-danger btn-sm"
                        wire:click.prevent="remove({{ $key }})">Remove</button>
                </div>
            @endforeach

            @endwire
            <div class="mt-3">
                <button wire:click.prevent="add({{ $i }})"
                    class="inline-block p-2 px-6 py-2 text-base font-normal text-center text-white transition-all duration-500 ease-in-out bg-blue-500 border border-blue-500 rounded shadow-md hover:shadow-md hover:bg-blue-600 hover:text-white">Add</button>
                <x-admin.submit-button>
                    {{ __('Save') }}
                </x-admin.submit-button>
            </div>
        </form>
    </x-admin.form-custom>
</div>
