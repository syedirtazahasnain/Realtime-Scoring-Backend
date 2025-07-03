<x-app-layout>
    <x-slot name="title">Player Categories</x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Player Categories</h1>
            <div class="flex space-x-4">
                <button onclick="openBulkUpdateModal()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                    Bulk Update
                </button>
                <a href="{{ route('players.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
                    + Add Player
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            @foreach($categories as $category => $players)
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold capitalize">{{ $category }}</h2>
                        <span class="text-sm bg-gray-200 px-2 py-1 rounded-full">{{ count($players) }}</span>
                    </div>

                    <div class="space-y-3 player-list" data-category="{{ $category }}">
                        @foreach($players as $player)
                            <div class="player-card p-3 border rounded hover:bg-gray-50 cursor-move"
                                 draggable="true"
                                 data-player-id="{{ $player->id }}">
                                <div class="flex items-center space-x-3">
                                    <img src="{{ $player->playerProfile->photo ? asset('storage/'.$player->playerProfile->photo) : asset('images/default-player.png') }}"
                                         alt="{{ $player->name }}"
                                         class="w-10 h-10 rounded-full object-cover">
                                    <div>
                                        <div class="font-medium">{{ $player->name }}</div>
                                        <div class="text-sm text-gray-600 capitalize">
                                            {{ $player->playerProfile->playing_role }} | {{ $player->emp_id }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Bulk Update Modal -->
    <div id="bulkUpdateModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold">Bulk Update Players</h3>
                    <button onclick="closeBulkUpdateModal()" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form id="bulkUpdateForm" method="POST" action="{{ route('player-categories.bulk-update') }}">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <label for="bulk_category" class="block text-sm font-medium text-gray-700">Category</label>
                            <select id="bulk_category" name="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                <option value="platinum">Platinum</option>
                                <option value="diamond">Diamond</option>
                                <option value="gold">Gold</option>
                                <option value="silver">Silver</option>
                                <option value="bronze">Bronze</option>
                            </select>
                        </div>

                        <div>
                            <label for="bulk_playing_role" class="block text-sm font-medium text-gray-700">Playing Role</label>
                            <select id="bulk_playing_role" name="playing_role" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                <option value="batter">Batter</option>
                                <option value="bowler">Bowler</option>
                                <option value="all-rounder">All-rounder</option>
                                <option value="wicket-keeper">Wicket Keeper</option>
                            </select>
                        </div>

                        <input type="hidden" name="player_ids" id="bulk_player_ids">
                    </div>

                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" onclick="closeBulkUpdateModal()" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                            Update Players
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Drag and Drop functionality
        document.addEventListener('DOMContentLoaded', function() {
            const playerCards = document.querySelectorAll('.player-card');
            const categoryLists = document.querySelectorAll('.player-list');
            let draggedPlayer = null;

            // Drag events for player cards
            playerCards.forEach(card => {
                card.addEventListener('dragstart', function() {
                    draggedPlayer = this;
                    setTimeout(() => {
                        this.style.opacity = '0.4';
                    }, 0);
                });

                card.addEventListener('dragend', function() {
                    this.style.opacity = '1';
                });
            });

            // Drop events for category lists
            categoryLists.forEach(list => {
                list.addEventListener('dragover', function(e) {
                    e.preventDefault();
                    this.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
                });

                list.addEventListener('dragleave', function() {
                    this.style.backgroundColor = '';
                });

                list.addEventListener('drop', function(e) {
                    e.preventDefault();
                    this.style.backgroundColor = '';

                    if (draggedPlayer) {
                        const newCategory = this.dataset.category;
                        const playerId = draggedPlayer.dataset.playerId;

                        // Update UI immediately
                        this.appendChild(draggedPlayer);

                        // Send AJAX request to update category
                        fetch('{{ route("player-categories.update") }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'X-Requested-With': 'XMLHttpRequest'
                            },
                            body: JSON.stringify({
                                player_id: playerId,
                                category: newCategory
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (!data.success) {
                                alert('Failed to update player category');
                                // Revert UI if update failed
                                const originalList = document.querySelector(`.player-list[data-category="${draggedPlayer.dataset.originalCategory}"]`);
                                originalList.appendChild(draggedPlayer);
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('Error updating player category');
                        });
                    }
                });
            });

            // Store original category on drag start
            document.addEventListener('dragstart', function(e) {
                if (e.target.classList.contains('player-card')) {
                    const list = e.target.closest('.player-list');
                    e.target.dataset.originalCategory = list.dataset.category;
                }
            });
        });

        // Bulk update modal functions
        function openBulkUpdateModal() {
            document.getElementById('bulkUpdateModal').classList.remove('hidden');
        }

        function closeBulkUpdateModal() {
            document.getElementById('bulkUpdateModal').classList.add('hidden');
        }

        function setSelectedPlayers(playerIds) {
            document.getElementById('bulk_player_ids').value = playerIds.join(',');
            openBulkUpdateModal();
        }
    </script>
</x-app-layout>
