<div class="w-full pb-8">
    <div class="flex flex-col overflow-hidden bg-white rounded-lg shadow-lg ">
        <div class="flex flex-wrap justify-between p-6 pb-0">
            <div class="header-title">
                <h4 class="mb-2 text-2xl font-medium card-title" wire:ignore>
                    {{ $title }}
                </h4>
            </div>
            <div class="card-action">
                <x-admin.a-button href="{{ url()->previous() }}">Back</x-admin.a-button>
            </div>
        </div>
        <div class="flex-auto p-6">
            <div class="flex-auto p-0">
                <div class="mt-6 overflow-x-auto">
                    <table id="basic-table" class="min-w-full overflow-hidden">
                        <thead>
                            <tr class="bg-gray-100 border-none">
                                @php
                                    $headers = explode(',', $header);
                                @endphp
                                @foreach ($headers as $header)
                                    <th class="px-6 py-4 text-left text-gray-500 whitespace-nowrap">{{ $header }}
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($data as $key => $value)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap ">{{ $value->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <h6 class="text-base font-medium">{{ $value->count }}</h6>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <h6 class="text-base font-medium">{{ $value->title }}</h6>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
