<x-app-layout>
    <x-slot name="title">User List</x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">User List</h2>
            <button onclick="openModal('create')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                Add New User
            </button>
        </div>

        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Employee ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($users as $user)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->emp_id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->contact->phone ?? '-' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button onclick="openModal('edit', {{ $user->id }})"
                                    class="text-blue-500 hover:text-blue-700 mr-3">Edit</button>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">No users found</td>
                        </tr>
                    @endforelse


                </tbody>
            </table>
            <div>
                @if ($users->hasPages())
                    <div class="px-4 py-3 flex items-center justify-between border-t border-gray-200">
                        <!-- Simple page info -->
                        <div class="text-sm text-gray-700">
                            Page {{ $users->currentPage() }} of {{ $users->lastPage() }}
                        </div>

                        <!-- Page navigation -->
                        <div class="flex space-x-2">
                            @if ($users->onFirstPage())
                                <span class="px-3 py-1 rounded border text-gray-400 cursor-not-allowed">←
                                    Previous</span>
                            @else
                                <a href="{{ $users->previousPageUrl() }}"
                                    class="px-3 py-1 rounded border text-gray-700 hover:bg-gray-100">← Previous</a>
                            @endif

                            @if ($users->hasMorePages())
                                <a href="{{ $users->nextPageUrl() }}"
                                    class="px-3 py-1 rounded border text-gray-700 hover:bg-gray-100">Next →</a>
                            @else
                                <span class="px-3 py-1 rounded border text-gray-400 cursor-not-allowed">Next →</span>
                            @endif
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div id="userModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
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

                <form id="userForm" method="POST">
                    @csrf
                    <input type="hidden" id="formMethod" name="_method" value="POST">
                    <input type="hidden" id="userId" name="id" value="">

                    <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="emp_id" class="block text-sm font-medium text-gray-700">Employee ID</label>
                            <input type="text" id="emp_id" name="emp_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div id="passwordField">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <input type="password" id="password" name="password"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                            <input type="text" id="phone" name="phone"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                            <input type="text" id="address" name="address"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="d_o_j" class="block text-sm font-medium text-gray-700">Date of
                                Joining</label>
                            <input type="date" id="d_o_j" name="d_o_j"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                            <input type="number" id="age" name="age"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                            <input type="text" id="city" name="city"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select id="status" name="status"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
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
        function openModal(action, userId = null) {
            const modal = document.getElementById('userModal');
            const form = document.getElementById('userForm');
            const modalTitle = document.getElementById('modalTitle');
            const passwordField = document.getElementById('passwordField');

            if (action === 'create') {
                modalTitle.textContent = 'Add New User';
                form.action = "{{ route('users.store') }}";
                form.method = "POST";
                document.getElementById('formMethod').value = "POST";
                passwordField.style.display = 'block';
                form.reset();
            } else if (action === 'edit' && userId) {
                modalTitle.textContent = 'Edit User';
                passwordField.style.display = 'none';

                fetch(`/users/${userId}/edit`)
                    .then(response => response.json())
                    .then(user => {
                        document.getElementById('userId').value = user.id;
                        document.getElementById('name').value = user.name;
                        document.getElementById('email').value = user.email;
                        document.getElementById('emp_id').value = user.emp_id;

                        if (user.contact) {
                            document.getElementById('phone').value = user.contact.phone || '';
                            document.getElementById('address').value = user.contact.address || '';
                            document.getElementById('d_o_j').value = user.contact.d_o_j || '';
                            document.getElementById('age').value = user.contact.age || '';
                            document.getElementById('city').value = user.contact.city || '';
                            document.getElementById('status').value = user.contact.status || 'active';
                        }

                        form.action = `/users/${user.id}`;
                        document.getElementById('formMethod').value = "PUT";
                    });
            }

            modal.classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('userModal').classList.add('hidden');
        }
    </script>
</x-app-layout>
