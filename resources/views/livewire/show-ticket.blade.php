<div>
    <div>
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
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $ticket->title }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ optional($ticket->status)->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ optional($ticket->category)->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ optional($ticket->priority)->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ optional($ticket->impact)->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ optional($ticket->staff)->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="/tickets/{{ $ticket->id }}/edit" class="btn btn-warning bt-sm">View Ticket</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="mt-4 min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Staff</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Owner</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $ticket->comments[0]->comment_body }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $ticket->comments[0]->comment_body }}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
