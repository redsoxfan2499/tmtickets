@if(!empty($impacts))
<div>
    <table class="mt-4 min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Delete</th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach($impacts as $impact)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $impact->name }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <button wire:click="deleteImpact({{ $impact->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Delete Impact
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@else
    <div class="alert alert-warning">
        There are no impacts.
    </div>
@endif
