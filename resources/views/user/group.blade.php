<x-app-layout>
    <x-slot name="title">Group List</x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Group List</h2>
            <button onclick="openModal('create')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                Add New Group
            </button>
        </div>

        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
        @endif

        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($groups as $group)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">{{ $group->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($group->status == 1)
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                @else
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Inactive</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button onclick="openModal('edit', {{ $group->id }})" class="text-blue-500 hover:text-blue-700 mr-3">Edit</button>
                                <form action="{{ route('groups.destroy', $group->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-6 py-4 text-center text-gray-500">No groups found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            @if ($groups->hasPages())
            <div class="px-4 py-3 flex items-center justify-between border-t border-gray-200">
                <div class="text-sm text-gray-700">
                    Page {{ $groups->currentPage() }} of {{ $groups->lastPage() }}
                </div>
                <div class="flex space-x-2">
                    @if ($groups->onFirstPage())
                        <span class="px-3 py-1 rounded border text-gray-400 cursor-not-allowed">← Previous</span>
                    @else
                        <a href="{{ $groups->previousPageUrl() }}" class="px-3 py-1 rounded border text-gray-700 hover:bg-gray-100">← Previous</a>
                    @endif
                    @if ($groups->hasMorePages())
                        <a href="{{ $groups->nextPageUrl() }}" class="px-3 py-1 rounded border text-gray-700 hover:bg-gray-100">Next →</a>
                    @else
                        <span class="px-3 py-1 rounded border text-gray-400 cursor-not-allowed">Next →</span>
                    @endif
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- Modal -->
    <div id="groupModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 id="modalTitle" class="text-xl font-bold"></h3>
                    <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form id="groupForm" method="POST">
                    @csrf
                    <input type="hidden" id="formMethod" name="_method" value="POST">
                    <input type="hidden" id="groupId" name="id" value="">

                    <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select id="status" name="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="1">Active</option>
                                <option value="9">Inactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" onclick="closeModal()" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openModal(action, groupId = null) {
            const modal = document.getElementById('groupModal');
            const form = document.getElementById('groupForm');
            const modalTitle = document.getElementById('modalTitle');

            if (action === 'create') {
                modalTitle.textContent = 'Add New Group';
                form.action = "{{ route('groups.store') }}";
                document.getElementById('formMethod').value = "POST";
                form.reset();
                modal.classList.remove('hidden');
            } else if (action === 'edit' && groupId) {
                modalTitle.textContent = 'Edit Group';

                fetch(`/groups/${groupId}/edit`)
                    .then(response => response.json())
                    .then(group => {
                        document.getElementById('groupId').value = group.id;
                        document.getElementById('name').value = group.name;
                        document.getElementById('status').value = group.status;

                        form.action = `/groups/${group.id}`;
                        document.getElementById('formMethod').value = "PUT";
                        modal.classList.remove('hidden');
                    });
            }
        }

        function closeModal() {
            document.getElementById('groupModal').classList.add('hidden');
        }
    </script>
</x-app-layout>
