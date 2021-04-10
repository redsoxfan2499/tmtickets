@if(!empty($tickets))
    <table class="mt-4 min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Priority</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Impact</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Owner</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">View</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach($tickets as $ticket)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $ticket->title }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $ticket->status }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    @php
                    $category = $ticket->category;
                    $category = str_replace('_', ' ', $category);
                    echo $category;
                    @endphp
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $ticket->priority }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $ticket->impact }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $ticket->owner }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <a class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded"
                       href="/tickets/{{ $ticket->id }}">
                        View Ticket
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <div class="alert alert-warning">
        There are no tickets.
    </div>
@endif
