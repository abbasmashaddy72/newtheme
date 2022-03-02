<div x-data class="flex flex-col">
    <select x-ref="select" name="{{ $name }}"
        class="block w-full px-2 py-1 m-1 text-sm font-normal bg-white border rounded outline-none focus:border-blue-500 focus:shadow"
        wire:input="doBooleanFilter('{{ $index }}', $event.target.value)" x-on:input="$refs.select.value=''">
        <option value=""></option>
        <option value="0">{{ __('No') }}</option>
        <option value="1">{{ __('Yes') }}</option>
    </select>

    <div class="flex flex-wrap space-x-1 max-w-48">
        @isset($this->activeBooleanFilters[$index])
            @if ($this->activeBooleanFilters[$index] == 1)
                <button wire:click="removeBooleanFilter('{{ $index }}')"
                    class="flex items-center pl-1 m-1 space-x-1 text-xs tracking-wide text-white uppercase bg-gray-500 rounded-full hover:bg-red-600 focus:outline-none">
                    <span>{{ __('YES') }}</span>
                    <x-icons.x-circle />
                </button>
            @elseif(strlen($this->activeBooleanFilters[$index]) > 0)
                <button wire:click="removeBooleanFilter('{{ $index }}')"
                    class="flex items-center pl-1 m-1 space-x-1 text-xs tracking-wide text-white uppercase bg-gray-500 rounded-full hover:bg-red-600 focus:outline-none">
                    <span>{{ __('No') }}</span>
                    <x-icons.x-circle />
                </button>
            @endif
        @endisset
    </div>
</div>
