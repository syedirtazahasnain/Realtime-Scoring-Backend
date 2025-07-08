<x-app-layout>
    @section('title', 'Player Categories')

    <style>
        .searchBG {
            background: #000 !important;
            color: #fff !important;
        }

        .player-cat div {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .player-cat div::-webkit-scrollbar {
            display: none;
        }
    </style>
    <!-- Header Section -->
    <div class="relative">
        <div class="md:h-[300px] h-[200px] flex flex-col gap-[15px] justify-center relative items-center">
            <img src="{{ asset('storage/matches/bg1.png') }}" alt=""
                class="h-[300px]  absolute left-0 right-0 bottom-0 w-full object-cover overflow-hidden">
            <h2
                class="text-[18px] md:text-[30px] xl:text-[40px] 2xl:text-[50px] font-monti font-bold relative text-white">
                Player Categories
            </h2>
            <div class="flex space-x-4 relative z-20">
                @if (auth()->check() && auth()->user()->isAdmin())
                    <button onclick="openBulkUpdateModal()"
                        class="block text-center text-white text-[10px] 2xl:text-[14px] xl:text-[12px] font-sans px-[20px] py-[5px] md:py-[10px] text-nowrap bg-[#00aeef] font-medium hover:bg-[#094AB7] transition-colors duration-200">
                        Bulk Update
                    </button>
                @endif
                @if (auth()->check() && auth()->user()->isAdmin())
                    <a href="{{ route('players.create') }}"
                        class="block text-center text-[#000] hover:text-[#fff] hover:no-underline text-[10px] 2xl:text-[14px] xl:text-[12px] font-sans px-[20px] py-[5px] md:py-[10px] text-nowrap bg-[#fff] font-medium hover:bg-[#00aeef] transition-colors duration-200">
                        + Add Player
                    </a>
                @endif
            </div>
        </div>
    </div>

    <div class="relative col-md-10 mx-auto">
        <div class="my-[40px] xl:my-[80px]">
            <!-- Uncategorized Players Panel -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-[18px] lg:text-[22px] xl:text-[24px] font-semibold">Available Players - <span
                        class="font-normal text-[15px] lg:text-[17px] xl:text-[20px]">Uncategorized</span></h2>
                <div class="flex justify-between items-center gap-[10px]">
                    <div class="w-[30px] h-[30px] flex items-center justify-center rounded-full bg-[#000]">
                        <p class="text-sm text-[#fff] m-0 leading-none font-medium">
                            {{ count($uncategorizedPlayers) }}
                        </p>
                    </div>
                    <!-- Global Search -->
                    <div class="relative">
                        <input type="text" id="globalPlayerSearch" placeholder="Search players..."
                            class="w-full lg:w-[350px] p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <div id="searchResults"
                            class="absolute z-10 w-full mt-1 bg-white border rounded-lg shadow-lg overflow-y-auto hidden">
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="bg-white border-[#000]/30 py-[10px] xl:py-[15px] pr-[10px] h-[40vh] overflow-auto mb-[20px] xl:mb-[40px]">
                <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-[5px] player-list"
                    data-category="uncategorized">
                    @foreach ($uncategorizedPlayers as $player)
                        <div class="player-card relative bg-[#000]/10 px-[10px] py-[5px] rounded-[10px] cursor-move"
                            draggable="{{ auth()->check() && auth()->user()->isAdmin() ? 'true' : 'false' }}"
                            data-player-id="{{ $player->id }}">
                            <div class="flex items-center space-x-2">
                                <img src="{{ $player->playerProfile->photo ? asset('storage/' . $player->playerProfile->photo) : asset('images/home/batter-avat.png') }}"
                                    alt="{{ $player->name }}" class="w-[30px] h-[30px] rounded-full object-cover">
                                <div>
                                    <div class="font-medium text-[13px] xl:text-[14px]">{{ $player->name }}</div>
                                    <div class="text-xs capitalize">
                                        {{ $player->playerProfile->playing_role ?? 'N/A' }} | {{ $player->emp_id }}
                                    </div>
                                </div>
                                @if (auth()->check() && auth()->user()->isAdmin())
                                    <div class="absolute top-[5px] right-[5px]">
                                        <a href="{{ route('players.edit', $player->id) }}"
                                            class="text-blue-500 hover:text-blue-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                            </svg>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-[10px] mx-auto player-cat">
                @php
                    $bgColors = [
                        'platinum' => 'bg-[#4F46E5] text-[#fff]',
                        'diamond' => 'bg-[#00aeef] text-[#fff]',
                        'gold' => 'bg-[#FACC15] text-[#000]',
                        'silver' => 'bg-[#D1D5DB] text-[#000]',
                        'emerging' => 'bg-[#000] text-[#fff]',
                    ];
                @endphp
                @foreach ($categories as $category => $players)
                    <div
                        class="bg-white rounded-[10px] py-[10px] xl:py-[15px] px-[15px] xl:px-[20px] h-[250px] lg:h-[350px] overflow-auto border-2 border-[#000]/30">
                        <div class="flex justify-between items-center mb-[10px]">
                            <h2 class="text-lg font-semibold capitalize">{{ $category }}</h2>
                            <div class="w-[25px] h-[25px] flex items-center justify-center rounded-full bg-[#000]">
                                <p class="text-xs text-[#fff] m-0 leading-none font-medium">{{ count($players) }}</p>
                            </div>
                        </div>

                        <div class="space-y-[5px] player-list" data-category="{{ $category }}">
                            @foreach ($players as $player)
                                <div class="player-card {{ $bgColors[$category] ?? 'bg-white' }} px-[10px] py-[5px] rounded-[10px] relative"
                                    draggable="{{ auth()->check() && auth()->user()->isAdmin() ? 'true' : 'false' }}"
                                    data-player-id="{{ $player->id }}">
                                    <div class="flex items-center gap-[10px]">
                                        <div class="w-[30px] h-[30px] shrink-0 rounded-full overflow-hidden">
                                            <img src="{{ $player->playerProfile->photo ? asset('storage/' . $player->playerProfile->photo) : asset('images/home/batter-avat.png') }}"
                                                alt="{{ $player->name }}" class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <div class="font-medium text-[13px] xl:text-[14px]">{{ $player->name }}
                                            </div>
                                            <div class="text-xs capitalize">
                                                {{ $player->playerProfile->playing_role ?? 'N/A' }} |
                                                {{ $player->emp_id }}
                                            </div>
                                        </div>
                                    </div>
                                    @if (auth()->check() && auth()->user()->isAdmin())
                                        <div class="absolute top-[5px] right-[5px]">
                                            <a href="{{ route('players.edit', $player->id) }}"
                                                class="text-blue-500 hover:text-blue-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                </svg>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Bulk Update Modal -->
    @if (auth()->check() && auth()->user()->isAdmin())
        <div id="bulkUpdateModal"
            class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
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
                                <label for="bulk_category"
                                    class="block text-sm font-medium text-gray-700">Category</label>
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
                                    <option value="batter">Batter</option>
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
            @if (auth()->check() && auth()->user()->isAdmin())
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
                            if (originalCategory === 'uncategorized' && newCategory ===
                                'uncategorized') {
                                return;
                            }

                            // Update UI immediately
                            if (newCategory !== 'uncategorized') {
                                this.appendChild(draggedPlayer);
                            }

                            // Update counters
                            updateCategoryCounters(originalCategory, newCategory);

                            // Send AJAX request to update category
                            fetch('{{ route('player-categories.update') }}', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                        'X-Requested-With': 'XMLHttpRequest'
                                    },
                                    body: JSON.stringify({
                                        player_id: playerId,
                                        category: newCategory == 'uncategorized' ?
                                            null : newCategory
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
                            playerElement.className =
                                'bg-[#000]/10 px-[10px] py-[5px] border-b-[2px] border-[#fff] cursor-pointer hover:bg-[#000]/20';
                            playerElement.innerHTML = `
                                <div class="flex items-center space-x-[5px]">
                                    <div>
                                        <div class="font-medium text-sm">${player.name}</div>
                                        <div class="text-[9px] font-medium text-gray-600 capitalize">
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
                                    playerCard.classList.remove('bg-[#000]/30');
                                    playerCard.classList.add('searchBG');
                                    setTimeout(() => {
                                        playerCard.classList.remove(
                                            'bg-yellow-100');
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
                const context = this,
                    args = arguments;
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
