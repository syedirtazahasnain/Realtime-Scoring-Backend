<x-app-layout>
    <x-slot name="title">Teams List</x-slot>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Global Team Search
            const teamSearch = document.getElementById('global-team-search');
            if (teamSearch) {
                teamSearch.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase();
                    document.querySelectorAll('.team-container').forEach(team => {
                        const teamName = team.querySelector('.team-name').textContent.toLowerCase();
                        team.style.display = teamName.includes(searchTerm) ? 'block' : 'none';
                    });

                    // Show no teams message if no matches
                    const visibleTeams = document.querySelectorAll('.team-container[style="display: block;"]');
                    const noTeamsMsg = document.getElementById('no-teams-message');
                    noTeamsMsg.style.display = (visibleTeams.length === 0 && searchTerm.length > 0)
                                              ? 'block' : 'none';
                });
            }

            // Individual Team Member Search (keeps your existing functionality)
            document.querySelectorAll('.team-container').forEach(container => {
                const searchInput = container.querySelector('.member-search');
                if (searchInput) {
                    searchInput.addEventListener('input', function() {
                        const searchTerm = this.value.toLowerCase();
                        const memberItems = container.querySelectorAll('.member-item');

                        memberItems.forEach(item => {
                            const name = item.getAttribute('data-name').toLowerCase();
                            const email = item.getAttribute('data-email').toLowerCase();
                            const empId = item.getAttribute('data-emp-id').toLowerCase();

                            item.style.display = (name.includes(searchTerm) ||
                                                email.includes(searchTerm) ||
                                                empId.includes(searchTerm))
                                                ? 'block' : 'none';
                        });

                        const visibleItems = container.querySelectorAll('.member-item[style="display: block;"]');
                        const noResults = container.querySelector('.no-results');
                        noResults.style.display = (visibleItems.length === 0 && searchTerm.length > 0)
                                                ? 'block' : 'none';
                    });
                }
            });
        });
    </script>
    @endpush

    <div class="container py-4">
        <!-- Global Team Search -->
        <div class="row mb-4">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        <h5>Search All Teams</h5>
                    </div>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" id="global-team-search" class="form-control"
                                   placeholder="Search teams by name...">
                            <span class="input-group-text">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="no-teams-message" class="alert alert-warning mt-3" style="display: none;">
                    No matching teams found
                </div>
            </div>
        </div>

        <!-- Teams List -->
        @if($teams->isEmpty())
            <div class="alert alert-info">No teams found</div>
        @else
            @foreach($teams as $team)
            <div class="row mb-5 team-container">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="mb-0 team-name">{{ $team->name }}</h2>
                                <a href="{{ route('teams.show', $team->id) }}" class="btn btn-sm btn-light">
                                    <i class="fas fa-arrow-left me-1"></i> View Details
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <!-- Team Info Section -->
                            <div class="row mb-4">
                                <div class="col-md-4 text-center">
                                    <img src="{{ $team->logo }}" alt="{{ $team->name }} logo"
                                         class="img-fluid rounded-circle mb-3" style="max-width: 150px;">
                                    <h4 class="badge bg-secondary">{{ $team->short_name }}</h4>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="border-bottom pb-2">TEAM PROFILE</h4>
                                    <p class="mt-3">{{ Str::limit($team->description, 150) }}</p>

                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <p><strong>Team ID:</strong> {{ $team->id }}</p>
                                            <p><strong>Created:</strong> {{ $team->created_at->format('M d, Y') }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Total Members:</strong> {{ $team->players_count ?? $team->players->count() }}</p>
                                            <p><strong>Last Updated:</strong> {{ $team->updated_at->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Members Search (only shown when viewing members) -->
                            @if(isset($showMembers) && $showMembers)
                            <div class="mb-4">
                                <div class="input-group">
                                    <input type="text" class="form-control member-search"
                                           placeholder="Search {{ $team->name }} members...">
                                    <span class="input-group-text">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Pagination -->

        @endif
    </div>
</x-app-layout>
