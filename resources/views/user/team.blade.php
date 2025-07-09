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
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Members</th>
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
                            <td class="px-6 py-4">
                                <div class="flex flex-wrap gap-2 mb-2">
                                    @foreach ($team->players as $player)
                                        <div class="flex items-center bg-gray-100 rounded-full px-3 py-1 cursor-pointer hover:bg-gray-200">
                                            <a href="{{ route('players.edit', $player->id) }}" class="mr-2">{{ $player->name }}</a>
                                            <span class="mr-2">{{ $player->name }}</span>
                                            <span
                                                class="text-xs bg-blue-500 text-white rounded-full px-2 py-0.5">#{{ $player->pivot->jersey_number }}</span>
                                            @if ($player->pivot->is_captain)
                                                <span
                                                    class="text-xs bg-yellow-500 text-white rounded-full px-2 py-0.5 ml-1">C</span>
                                            @elseif($player->pivot->is_vice_captain)
                                                <span
                                                    class="text-xs bg-gray-500 text-white rounded-full px-2 py-0.5 ml-1">VC</span>
                                            @endif
                                            <button onclick="removeMember({{ $team->id }}, {{ $player->id }})"
                                                class="ml-2 text-red-500 hover:text-red-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="flex gap-2 mt-2">
                                    <select id="member_select_{{ $team->id }}" class="member-select w-full" multiple
                                        style="width: 200px;">
                                        <option></option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    <input type="number" id="jersey_number_{{ $team->id }}" placeholder="Jersey #"
                                        class="border rounded px-2 py-1 w-20">

                                    <div class="flex items-center space-x-2">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" id="is_captain_{{ $team->id }}"
                                                class="form-checkbox">
                                            <span class="ml-2">Captain</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" id="is_vice_captain_{{ $team->id }}"
                                                class="form-checkbox">
                                            <span class="ml-2">Vice</span>
                                        </label>
                                    </div>

                                    <button onclick="addMember({{ $team->id }})"
                                        class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">
                                        Add
                                    </button>
                                </div>
                            </td>
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
                            <td colspan="7" class="px-6 py-4 text-center text-gray-500">No teams found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            @if ($teams->hasPages())
                <div class="px-4 py-3 flex items-center justify-between border-t border-gray-200">
                    <div class="text-sm text-gray-700">
                        Showing {{ $teams->firstItem() }} to {{ $teams->lastItem() }} of {{ $teams->total() }}
                        results
                    </div>
                    <div class="flex space-x-2">
                        @if ($teams->onFirstPage())
                            <span class="px-3 py-1 rounded border text-gray-400 cursor-not-allowed">Previous</span>
                        @else
                            <a href="{{ $teams->previousPageUrl() }}"
                                class="px-3 py-1 rounded border text-gray-700 hover:bg-gray-100">Previous</a>
                        @endif

                        @foreach ($teams->getUrlRange(1, $teams->lastPage()) as $page => $url)
                            @if ($page == $teams->currentPage())
                                <span
                                    class="px-3 py-1 rounded border bg-blue-500 text-white">{{ $page }}</span>
                            @else
                                <a href="{{ $url }}"
                                    class="px-3 py-1 rounded border text-gray-700 hover:bg-gray-100">{{ $page }}</a>
                            @endif
                        @endforeach

                        @if ($teams->hasMorePages())
                            <a href="{{ $teams->nextPageUrl() }}"
                                class="px-3 py-1 rounded border text-gray-700 hover:bg-gray-100">Next</a>
                        @else
                            <span class="px-3 py-1 rounded border text-gray-400 cursor-not-allowed">Next</span>
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
        // Initialize Select2 for all member selects
        document.addEventListener('DOMContentLoaded', function() {
            $('.member-select').select2({
                placeholder: "Select a member",
                allowClear: true
            });
        });

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

        document.getElementById('logo').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('logoPreviewImage').src = event.target.result;
                    document.getElementById('logoPreview').classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            }
        });

        function addMember(teamId) {
            const selectElement = document.getElementById(`member_select_${teamId}`);
            const selected_members = Array.from(selectElement.selectedOptions).map(opt => opt.value);
            const jerseyNumber = document.getElementById(`jersey_number_${teamId}`).value;
            const isCaptain = document.getElementById(`is_captain_${teamId}`).checked;
            const isViceCaptain = document.getElementById(`is_vice_captain_${teamId}`).checked;

            if (selected_members.length === 0 || !jerseyNumber) {
                alert('Please select at least one member and enter a jersey number');
                return;
            }

            // Track completed requests
            let completed = 0;
            let errors = 0;

            selected_members.forEach(memberId => {
                fetch(`/teams/${teamId}/members`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: JSON.stringify({
                            user_id: memberId,
                            jersey_number: jerseyNumber,
                            is_captain: isCaptain,
                            is_vice_captain: isViceCaptain
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        completed++;
                        if (!data.success) errors++;
                        if (completed === selected_members.length) {
                            if (errors > 0) {
                                alert(`${errors} member(s) failed to add`);
                            } else {
                                location.reload();
                            }
                        }
                    })
                    .catch(error => {
                        completed++;
                        errors++;
                        console.error('Error:', error);
                        if (completed === selected_members.length) {
                            alert(`${errors} member(s) failed to add`);
                        }
                    });
            });
        }

        function removeMember(teamId, userId) {
            if (!confirm('Are you sure you want to remove this member?')) {
                return;
            }

            fetch(`/teams/${teamId}/members/${userId}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert(data.message || 'Error removing member');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error removing member');
                });
        }
    </script>
</x-app-layout>
