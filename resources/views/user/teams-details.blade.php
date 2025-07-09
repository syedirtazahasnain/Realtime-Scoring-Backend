<x-app-layout>
    <x-slot name="title">{{ $team->name }} - Team Details</x-slot>

    <div class="container py-4">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="mb-0">{{ $team->name }}</h2>
                            <a href="{{ route('teams.index') }}" class="btn btn-sm btn-light">
                                <i class="fas fa-arrow-left me-1"></i> Back
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
                                <p class="mt-3">{{ $team->description }}</p>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <p><strong>Team ID:</strong> {{ $team->id }}</p>
                                        <p><strong>Created:</strong> {{ $team->created_at->format('M d, Y') }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Total Members:</strong> {{ $team->players->count() }}</p>
                                        <p><strong>Last Updated:</strong> {{ $team->updated_at->format('M d, Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Team Members Search -->
                        <div class="mb-4">
                            <form action="{{ route('teams.show', $team->id) }}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control"
                                           placeholder="Search team members..." value="{{ request('search') }}">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Team Members List -->
                        <h4 class="border-bottom pb-2 mb-3">TEAM MEMBERS ({{ $team->players->count() }})</h4>

                        @php
                            $players = $team->players()
                                ->when(request('search'), function($query) {
                                    $query->where(function($q) {
                                        $q->where('name', 'like', '%'.request('search').'%')
                                          ->orWhere('email', 'like', '%'.request('search').'%')
                                          ->orWhere('emp_id', 'like', '%'.request('search').'%');
                                    });
                                })
                                ->get();
                        @endphp

                        @if($players->isEmpty())
                            <div class="alert alert-info">No team members found</div>
                        @else
                            <div class="list-group">
                                @foreach($players as $player)
                                <div class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="{{ $player->profile_picture ?? 'https://via.placeholder.com/50?text=User' }}"
                                                 class="rounded-circle me-3" width="50" height="50" alt="{{ $player->name }}">
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="mb-1">{{ $player->name }}</h5>
                                                <span class="badge {{ $player->is_admin ? 'bg-success' : 'bg-secondary' }}">
                                                    {{ $player->is_admin ? 'Admin' : 'Member' }}
                                                </span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="mb-1 text-muted">{{ $player->email }}</p>
                                                <small class="text-muted">EMP ID: {{ $player->emp_id }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
