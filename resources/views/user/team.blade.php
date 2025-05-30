<x-app-layout>
    <x-slot name="title">Team List</x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Team List</h2>
            <button onclick="openModal('create')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                Add New Team
            </button>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Logo
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Short
                            Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Group
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Owner
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($teams as $team)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($team->logo)
                                    <img src="{{ asset('storage/' . $team->logo) }}" alt="{{ $team->name }}"
                                        class="h-10 w-10 rounded-full">
                                @else
                                    <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center">
                                        <span class="text-gray-500 text-xs">No logo</span>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $team->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $team->short_name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $team->group->name ?? '-' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $team->owner->name ?? '-' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button onclick="openModal('edit', {{ $team->id }})"
                                    class="text-blue-500 hover:text-blue-700 mr-3">Edit</button>
                                <form action="{{ route('teams.destroy', $team->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500">No teams found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            @if ($teams->hasPages())
                <div class="px-4 py-3 flex items-center justify-between border-t border-gray-200">
                    <div class="text-sm text-gray-700">
                        Page {{ $teams->currentPage() }} of {{ $teams->lastPage() }}
                    </div>
                    <div class="flex space-x-2">
                        @if ($teams->onFirstPage())
                            <span class="px-3 py-1 rounded border text-gray-400 cursor-not-allowed">← Previous</span>
                        @else
                            <a href="{{ $teams->previousPageUrl() }}"
                                class="px-3 py-1 rounded border text-gray-700 hover:bg-gray-100">← Previous</a>
                        @endif
                        @if ($teams->hasMorePages())
                            <a href="{{ $teams->nextPageUrl() }}"
                                class="px-3 py-1 rounded border text-gray-700 hover:bg-gray-100">Next →</a>
                        @else
                            <span class="px-3 py-1 rounded border text-gray-400 cursor-not-allowed">Next →</span>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- Modal -->
    <div id="teamModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 id="modalTitle" class="text-xl font-bold"></h3>
                    <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form id="teamForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" id="formMethod" value="POST">
                    <input type="hidden" id="teamId" name="id" value="">

                    <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="short_name" class="block text-sm font-medium text-gray-700">Short Name</label>
                            <input type="text" id="short_name" name="short_name"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="logo" class="block text-sm font-medium text-gray-700">Logo</label>
                            <input type="file" id="logo" name="logo" class="mt-1 block w-full">
                            <div id="logoPreview" class="mt-2 hidden">
                                <img id="logoPreviewImage" class="h-20 w-20 rounded-full">
                            </div>
                        </div>

                        <div>
                            <label for="description"
                                class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea id="description" name="description" rows="3"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                        </div>

                        <div>
                            <label for="group_id" class="block text-sm font-medium text-gray-700">Group</label>
                            <select id="group_id" name="group_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="">Select Group</option>
                                @foreach ($groups as $group)
                                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="owner_id" class="block text-sm font-medium text-gray-700">Owner</label>
                            <select id="owner_id" name="owner_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="">Select Owner</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" onclick="closeModal()"
                            class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

  <script>
    function openModal(action, teamId = null) {
        const modal = document.getElementById('teamModal');
        const form = document.getElementById('teamForm');
        const modalTitle = document.getElementById('modalTitle');
        const logoPreview = document.getElementById('logoPreview');
        const logoPreviewImage = document.getElementById('logoPreviewImage');

        if (action === 'create') {
            modalTitle.textContent = 'Add New Team';
            form.action = "{{ route('teams.store') }}";
            document.getElementById('formMethod').value = "POST";
            form.reset();
            document.getElementById('logo').value = '';
            logoPreview.classList.add('hidden');
            modal.classList.remove('hidden');
        } else if (action === 'edit') {
            modalTitle.textContent = 'Edit Team';
            fetch(`/teams/${teamId}/edit`)
                .then(response => response.json())
                .then(team => {
                    document.getElementById('teamId').value = team.id;
                    document.getElementById('name').value = team.name;
                    document.getElementById('short_name').value = team.short_name;
                    document.getElementById('description').value = team.description || '';
                    document.getElementById('group_id').value = team.group_id;
                    document.getElementById('owner_id').value = team.owner_id;
                    document.getElementById('logo').value = '';

                    form.action = `/teams/${team.id}`;
                    document.getElementById('formMethod').value = "PUT";

                    if (team.logo) {
                        logoPreviewImage.src = "{{ asset('storage') }}/" + team.logo;
                        logoPreview.classList.remove('hidden');
                    } else {
                        logoPreview.classList.add('hidden');
                    }
                    modal.classList.remove('hidden');
                });
        }
    }

    function closeModal() {
        document.getElementById('teamModal').classList.add('hidden');
    }

    document.getElementById('logo').addEventListener('change', function (e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (event) {
                document.getElementById('logoPreviewImage').src = event.target.result;
                document.getElementById('logoPreview').classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    });
</script>
</x-app-layout>
