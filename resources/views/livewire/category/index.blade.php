@if(!empty($categories))
    <div>
        <table class="mt-4 min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Color</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Edit</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Delete</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($categories as $category)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $category->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="mx-2 p-3 rounded" style="background: {{ $category->color }}">{{ $category->color }}</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ url('categories/'.$category->id.'/edit ') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Edit Category
                        </a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button wire:click="deleteImpact({{ $category->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Delete Category
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@else
    <div class="alert alert-warning">
        There are no statuses.
    </div>
@endif
