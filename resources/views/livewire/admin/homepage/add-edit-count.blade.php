<div class="w-full pb-8">
    <div class="grid grid-flow-col gap-3">
        <x-admin.basic-table title="Count's List" header="Id,Count,Title" :data='$data' />
        <x-admin.form-custom title='Updated Data'>
            <form wire:submit.prevent="submit">
                @csrf
                @wire('debounce.200ms')
                <x-form-input name="count.0" label="Count" type="number" />

                <x-form-input name="title.0" label="Title" type="text" />

                @foreach ($inputs as $key => $value)
                    <div class="p-2 mt-2 border-2 border-indigo-600 border-solid rounded-lg">
                        <x-form-input name="count.{{ $value }}" label="Count" type="number" />

                        <x-form-input name="title.{{ $value }}" label="Title" type="text" />
                        <button wire:click.prevent="remove({{ $key }})"
                            class="inline-block p-2 px-6 py-2 mt-2 text-base font-normal text-center text-white transition-all duration-500 ease-in-out bg-red-500 border border-red-500 rounded shadow-md hover:shadow-xl hover:bg-red-600 hover:text-white">
                            Remove</button>
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
</div>
