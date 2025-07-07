<x-app-layout>
    <x-slot name="title">Player Categories</x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Player Categories</h1>
            <div class="flex space-x-4">
                @if(auth()->check() && auth()->user()->isAdmin())
                    <button onclick="openBulkUpdateModal()"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                        Bulk Update
                    </button>
                @endif
                @if(auth()->check() && auth()->user()->isAdmin())
                    <a href="{{ route('players.create') }}"
                        class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
                        + Add Player
                    </a>
                @endif
            </div>
        </div>

        <!-- Global Search -->
        <div class="mb-6 relative">
            <input type="text" id="globalPlayerSearch" placeholder="Search players..."
                class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <div id="searchResults" class="absolute z-10 w-full mt-1 bg-white border rounded-lg shadow-lg max-h-60 overflow-y-auto hidden">
            </div>
        </div>

        <!-- Uncategorized Players Panel -->
        <div class="bg-white rounded-lg shadow p-4 mb-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold">Available Players</h2>
                <span class="text-sm bg-gray-200 px-2 py-1 rounded-full">{{ count($uncategorizedPlayers) }}</span>
            </div>

            <div class="space-y-3 player-list min-h-20" data-category="uncategorized">
                @foreach ($uncategorizedPlayers as $player)
                    <div class="player-card p-3 border rounded hover:bg-gray-50 cursor-move"
                        draggable="{{ auth()->check() && auth()->user()->isAdmin() ? 'true' : 'false' }}"
                        data-player-id="{{ $player->id }}">
                        <div class="flex items-center space-x-3">
                            <img src="{{ $player->playerProfile->photo ? asset('storage/' . $player->playerProfile->photo) : asset('images/default-player.png') }}"
                                alt="{{ $player->name }}" class="w-10 h-10 rounded-full object-cover">
                            <div>
                                <div class="font-medium">{{ $player->name }}</div>
                                <div class="text-sm text-gray-600 capitalize">
                                    {{ $player->playerProfile->playing_role ?? 'N/A' }} | {{ $player->emp_id }}
                                </div>
                            </div>
                            @if(auth()->check() && auth()->user()->isAdmin())
                                <div class="ml-auto">
                                    <a href="{{ route('players.edit', $player->id) }}" class="text-blue-500 hover:text-blue-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Categories -->
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            @foreach ($categories as $category => $players)
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold capitalize">{{ $category }}</h2>
                        <span class="text-sm bg-gray-200 px-2 py-1 rounded-full">{{ count($players) }}</span>
                    </div>

                    <div class="space-y-3 player-list min-h-20" data-category="{{ $category }}">
                        @foreach ($players as $player)
                            <div class="player-card p-3 border rounded hover:bg-gray-50 cursor-move"
                                draggable="{{ auth()->check() && auth()->user()->isAdmin() ? 'true' : 'false' }}"
                                data-player-id="{{ $player->id }}">
                                <div class="flex items-center space-x-3">
                                    <img src="{{ $player->playerProfile->photo ? asset('storage/' . $player->playerProfile->photo) : asset('images/default-player.png') }}"
                                        alt="{{ $player->name }}" class="w-10 h-10 rounded-full object-cover">
                                    <div>
                                        <div class="font-medium">{{ $player->name }}</div>
                                        <div class="text-sm text-gray-600 capitalize">
                                            {{ $player->playerProfile->playing_role ?? 'N/A' }} | {{ $player->emp_id }}
                                        </div>
                                    </div>
                                    @if(auth()->check() && auth()->user()->isAdmin())
                                        <div class="ml-auto">
                                            <a href="{{ route('players.edit', $player->id) }}" class="text-blue-500 hover:text-blue-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                </svg>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Bulk Update Modal -->
    @if(auth()->check() && auth()->user()->isAdmin())
        <div id="bulkUpdateModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
            <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold">Bulk Update Players</h3>
                        <button onclick="closeBulkUpdateModal()" class="text-gray-500 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <form id="bulkUpdateForm" method="POST" action="{{ route('player-categories.bulk-update') }}">
                        @csrf
                        <div class="space-y-4">
                            <div>
                                <label for="bulk_category" class="block text-sm font-medium text-gray-700">Category</label>
                                <select id="bulk_category" name="category"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <option value="platinum">Platinum</option>
                                    <option value="diamond">Diamond</option>
                                    <option value="gold">Gold</option>
                                    <option value="silver">Silver</option>
                                    <option value="emerging">Emerging</option>
                                </select>
                            </div>

                            <div>
                                <label for="bulk_playing_role" class="block text-sm font-medium text-gray-700">Playing
                                    Role</label>
                                <select id="bulk_playing_role" name="playing_role"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <option value="batsman">Batsman</option>
                                    <option value="bowler">Bowler</option>
                                    <option value="all_rounder">All-rounder</option>
                                    <option value="wicket_keeper">Wicket Keeper</option>
                                </select>
                            </div>

                            <input type="hidden" name="player_ids" id="bulk_player_ids">
                        </div>

                        <div class="mt-6 flex justify-end space-x-3">
                            <button type="button" onclick="closeBulkUpdateModal()"
                                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">
                                Cancel
                            </button>
                            <button type="submit"
                                class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                                Update Players
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

    <script>
        // Drag and Drop functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Only initialize drag and drop if user is admin
            @if(auth()->check() && auth()->user()->isAdmin())
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

                    list.addEventListener('dragenter', function(e) {
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
                            const originalCategory = draggedPlayer.dataset.originalCategory;

                            // Don't allow moving from uncategorized to uncategorized
                            if (originalCategory === 'uncategorized' && newCategory === 'uncategorized') {
                                return;
                            }

                            // Update UI immediately
                            if (newCategory !== 'uncategorized') {
                                this.appendChild(draggedPlayer);
                            }

                            // Update counters
                            updateCategoryCounters(originalCategory, newCategory);

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
                                        category: newCategory == 'uncategorized' ? null : newCategory
                                    })
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (!data.success) {
                                        alert('Failed to update player category');
                                        // Revert UI if update failed
                                        const originalList = document.querySelector(
                                            `.player-list[data-category="${originalCategory}"]`
                                            );
                                        if (originalList) {
                                            originalList.appendChild(draggedPlayer);
                                            // Revert counters if update failed
                                            updateCategoryCounters(newCategory,
                                                originalCategory);
                                        }
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                    alert('Error updating player category');
                                    // Revert counters on error
                                    const originalList = document.querySelector(
                                        `.player-list[data-category="${originalCategory}"]`);
                                    if (originalList) {
                                        originalList.appendChild(draggedPlayer);
                                        updateCategoryCounters(newCategory, originalCategory);
                                    }
                                });
                        }
                    });

                    // Function to update category counters
                    function updateCategoryCounters(fromCategory, toCategory) {
                        // Decrement the "from" category counter if not uncategorized
                        if (fromCategory !== 'uncategorized') {
                            const fromCounterElement = document.querySelector(
                                    `.player-list[data-category="${fromCategory}"]`)
                                .closest('div.bg-white')
                                .querySelector('span.bg-gray-200');

                            if (fromCounterElement) {
                                const currentCount = parseInt(fromCounterElement.textContent);
                                fromCounterElement.textContent = Math.max(0, currentCount - 1);
                            }
                        }

                        // Increment the "to" category counter if not uncategorized
                        if (toCategory !== 'uncategorized') {
                            const toCounterElement = document.querySelector(
                                    `.player-list[data-category="${toCategory}"]`)
                                .closest('div.bg-white')
                                .querySelector('span.bg-gray-200');

                            if (toCounterElement) {
                                const currentCount = parseInt(toCounterElement.textContent);
                                toCounterElement.textContent = currentCount + 1;
                            }
                        }

                        // Update uncategorized counter
                        const uncategorizedCounter = document.querySelector(
                                '.player-list[data-category="uncategorized"]')
                            .closest('div.bg-white')
                            .querySelector('span.bg-gray-200');

                        if (uncategorizedCounter) {
                            const uncategorizedList = document.querySelector(
                                '.player-list[data-category="uncategorized"]');
                            const count = uncategorizedList.querySelectorAll('.player-card').length;
                            uncategorizedCounter.textContent = count;
                        }
                    }
                });

                // Store original category on drag start
                document.addEventListener('dragstart', function(e) {
                    if (e.target.classList.contains('player-card')) {
                        const list = e.target.closest('.player-list');
                        e.target.dataset.originalCategory = list.dataset.category;
                    }
                });
            @else
                // For non-admin users, disable drag events
                document.querySelectorAll('.player-card').forEach(card => {
                    card.addEventListener('dragstart', function(e) {
                        e.preventDefault();
                    });
                });
            @endif
        });

        // Global player search functionality
        const searchInput = document.getElementById('globalPlayerSearch');
        const searchResults = document.getElementById('searchResults');

        searchInput.addEventListener('input', debounce(function() {
            const query = this.value.trim();

            if (query.length < 2) {
                searchResults.classList.add('hidden');
                return;
            }

            fetch('{{ route('players.search') }}?query=' + encodeURIComponent(query))
                .then(response => response.json())
                .then(data => {
                    if (data.length > 0) {
                        searchResults.innerHTML = '';
                        data.forEach(player => {
                            const playerElement = document.createElement('div');
                            playerElement.className = 'p-3 hover:bg-gray-100 cursor-pointer border-b';
                            playerElement.innerHTML = `
                                <div class="flex items-center space-x-3">
                                    <img src="${player.photo_url || '{{ asset('images/default-player.png') }}'}"
                                         alt="${player.name}"
                                         class="w-8 h-8 rounded-full object-cover">
                                    <div>
                                        <div class="font-medium">${player.name}</div>
                                        <div class="text-xs text-gray-600 capitalize">
                                            ${player.playing_role || 'N/A'} | ${player.emp_id} | ${player.category || 'Uncategorized'}
                                        </div>
                                    </div>
                                </div>
                            `;
                            playerElement.addEventListener('click', function() {
                                // Scroll to and highlight the player
                                const playerCard = document.querySelector(
                                    `.player-card[data-player-id="${player.id}"]`
                                );
                                if (playerCard) {
                                    playerCard.scrollIntoView({
                                        behavior: 'smooth',
                                        block: 'center'
                                    });
                                    playerCard.classList.add('bg-yellow-100');
                                    setTimeout(() => {
                                        playerCard.classList.remove('bg-yellow-100');
                                    }, 2000);
                                }
                                searchResults.classList.add('hidden');
                                searchInput.value = '';
                            });
                            searchResults.appendChild(playerElement);
                        });
                        searchResults.classList.remove('hidden');
                    } else {
                        searchResults.innerHTML =
                            '<div class="p-3 text-gray-500">No players found</div>';
                        searchResults.classList.remove('hidden');
                    }
                })
                .catch(error => {
                    console.error('Search error:', error);
                    searchResults.innerHTML =
                        '<div class="p-3 text-gray-500">Error searching players</div>';
                    searchResults.classList.remove('hidden');
                });
        }, 300));

        // Debounce function to limit how often the search is performed
        function debounce(func, wait) {
            let timeout;
            return function() {
                const context = this, args = arguments;
                clearTimeout(timeout);
                timeout = setTimeout(() => {
                    func.apply(context, args);
                }, wait);
            };
        }

        // Close search results when clicking outside
        document.addEventListener('click', function(e) {
            if (!searchInput.contains(e.target)) {
                searchResults.classList.add('hidden');
            }
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
