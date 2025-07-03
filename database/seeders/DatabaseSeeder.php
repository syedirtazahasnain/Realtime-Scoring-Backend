<?php

namespace Database\Seeders;

use DB;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Team;
use App\Models\User;
use App\Models\Inning;
use App\Models\Matches;
use App\Models\Tournament;
use App\Models\BattingScore;
use App\Models\BowlingFigure;
use App\Models\PlayerProfile;
use Illuminate\Database\Seeder;
use App\Models\PlayerStatistics;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->truncateTables();

        // Create roles
        $roles = Role::factory()->createMany([
            ['name' => 'admin', 'description' => 'Administrator', 'guard_name' => 'web'],
            ['name' => 'team_owner', 'description' => 'Team Owner', 'guard_name' => 'web'],
            ['name' => 'player', 'description' => 'Cricket Player', 'guard_name' => 'web'],
            ['name' => 'umpire', 'description' => 'Match Umpire', 'guard_name' => 'web'],
            ['name' => 'spectator', 'description' => 'Spectator', 'guard_name' => 'web'],
        ]);

        $users = User::factory(20)->create()->each(function ($user) use ($roles) {
            $user->roles()->attach(
                $roles->random(rand(1, 2))->pluck('id')
            );
            if ($user->hasRole('player')) {
                PlayerProfile::factory()->create(['user_id' => $user->id]);
                PlayerStatistics::factory()->create(['player_id' => $user->id]);
            }
        });

        $teams = Team::factory(10)->create()->each(function ($team) {
            $team->update([
                'logo' => 'teams/' . strtolower(str_replace(' ', '-', $team->name)) . '.png',
                'group_id' => rand(1, 3)
            ]);
        });

        // Assign players to teams (3-7 players per team)
        $players = User::role('player')->get();
        $categories = ['diamond', 'gold', 'silver', 'bronze'];

        $players->each(function ($player) use ($categories) {
            $player->playerProfile()->update([
                'category' => $categories[array_rand($categories)]
            ]);
        });

        $teams->each(function ($team) use ($players) {
            // $selectedPlayers = $players->random(rand(3, 7));
            $selectedPlayers = $players->shuffle()->take(min($players->count(), rand(3, 7)));

            $selectedPlayers->each(function ($player, $index) use ($team) {
                $team->players()->attach($player->id, [
                    'jersey_number' => $index + 1,
                    'is_captain' => $index === 0,
                    'is_vice_captain' => $index === 1
                ]);
            });
        });

        // Create 5 tournaments with realistic dates
        $tournaments = Tournament::factory(5)->create()->each(function ($tournament) {
            $tournament->update([
                'start_date' => now()->addDays(rand(1, 30)),
                'end_date' => now()->addDays(rand(60, 90))
            ]);
        });

        // Create 20 matches with proper relationships
        Matches::factory(20)->create([
            'tournament_id' => fn() => $tournaments->random()->id,
            'team1_id' => fn() => $teams->random()->id,
            'team2_id' => fn() => $teams->random()->id,
            'status' => fn() => ['upcoming', 'ongoing', 'completed'][rand(0, 2)],
        ])->each(function ($match) {
            // Add players to match
            $match->team1->players->each(function ($player) use ($match) {
                $match->players()->create([
                    'team_id' => $match->team1_id,
                    'player_id' => $player->id,
                    'is_playing' => true,
                ]);
            });

            $match->team2->players->each(function ($player) use ($match) {
                $match->players()->create([
                    'team_id' => $match->team2_id,
                    'player_id' => $player->id,
                    'is_playing' => true,
                ]);
            });

            // For completed matches, create full match data
            if ($match->status === 'completed') {
                $this->createCompletedMatchData($match);
            }
        });

        // Re-enable foreign key constraints
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    protected function truncateTables()
    {
        $tables = [
            'batting_scores',
            'bowling_figures',
            'innings',
            'match_players',
            'matches',
            'player_statistics',
            'player_profiles',
            'team_user',
            'teams',
            'tournaments',
            'role_user',
            'roles',
            'users',
        ];

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
    }

    protected function createCompletedMatchData($match)
    {
        // Set match result details
        $match->update([
            'toss_winner_id' => rand(0, 1) ? $match->team1_id : $match->team2_id,
            'toss_decision' => ['bat', 'field'][rand(0, 1)],
            'winner_id' => rand(0, 1) ? $match->team1_id : $match->team2_id,
            'man_of_the_match_id' => $match->players->random()->player_id,
        ]);

        // Create two innings (1 per team)
        $innings = collect([
            ['innings_number' => 1, 'batting_team_id' => $match->team1_id, 'bowling_team_id' => $match->team2_id],
            ['innings_number' => 2, 'batting_team_id' => $match->team2_id, 'bowling_team_id' => $match->team1_id],
        ]);

        $matchScores = [];

        $innings->each(function ($inningData) use ($match, &$matchScores) {
            $inning = Inning::factory()->create(array_merge($inningData, [
                'match_id' => $match->id,
                'total_runs' => $totalRuns = rand(120, 350),
                'wickets' => rand(3, 10),
                'overs' => rand(20, 50),
            ]));

            // Store scores for match update
            $matchScores[$inningData['innings_number']] = [
                'score' => $totalRuns,
                'wickets' => $inning->wickets,
                'overs' => $inning->overs
            ];

            // Create batting scores for each player
            $inning->battingTeam->players->each(function ($player) use ($inning) {
                BattingScore::factory()->create([
                    'inning_id' => $inning->id,
                    'player_id' => $player->id,
                    'bowler_id' => $inning->bowlingTeam->players->random()->id,
                    'runs' => rand(0, 150),
                    'balls_faced' => rand(0, 120),
                ]);
            });

            // Create bowling figures
            $inning->bowlingTeam->players->each(function ($player) use ($inning) {
                BowlingFigure::factory()->create([
                    'inning_id' => $inning->id,
                    'player_id' => $player->id,
                    'wickets' => rand(0, 5),
                    'runs' => rand(20, 60),
                ]);
            });
        });

        // Update match with final scores
        $match->update([
            'team1_score' => $matchScores[1]['score'],
            'team1_wickets' => $matchScores[1]['wickets'],
            'team1_overs' => $matchScores[1]['overs'],
            'team2_score' => $matchScores[2]['score'],
            'team2_wickets' => $matchScores[2]['wickets'],
            'team2_overs' => $matchScores[2]['overs'],
            'result' => $this->generateMatchResult($matchScores),
        ]);
    }

    protected function generateMatchResult($scores)
    {
        $diff = $scores[1]['score'] - $scores[2]['score'];

        if ($diff > 0) {
            return 'Team 1 won by ' . abs($diff) . ' runs';
        } elseif ($diff < 0) {
            return 'Team 2 won by ' . (10 - $scores[2]['wickets']) . ' wickets';
        }

        return 'Match tied';
    }
}
