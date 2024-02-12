<?php

namespace Helpers;

/**
 * The LeagueTable class.
 *
 * This class is responsible for managing a league table. It keeps track of players' scores and ranks.
 * Each player's score can be updated, and the class can calculate the current rank of each player based on their scores.
 */
class LeagueTable
{
    private array $players;
    
    /**
     * Constructs a new instance of the LeagueTable class.
     *
     * @param array $players An array of strings, where each string is a player's name.
     * Example: ['Mike', 'Chris', 'Arnold']
     */
    public function __construct(array $players)
    {
        foreach($players as $player){
            $this->players[] = [
                'name' => $player,
                'result' => 0,
                'games' => 0
            ];
        }
    }

    /**
     * Records the result of a game between two players.
     *
     * @param string $playerName The name of the player who won the game.
     * @param int $score The number of points scored by the winning player.
     */
    public function recordResult(string $playerName, int $score): void
    {
        foreach($this->players as $key => $player){
            if($player['name'] === $playerName){
                $this->players[$key]['result'] += $score;
                $this->players[$key]['games'] += 1;
            }
        }

        usort($this->players, function($a, $b){
            if($a['result'] === $b['result']){
                return $a['games'] < $b['games'];
            }
            return $b['result'] > $a['result'];
        });

        var_dump($this->players);
    }

    /**
     * Gets the rank of a player in the league.
     *
     * @param int $rank The rank of the player in the league.
     * @return string The name of the player.
     */
    public function playerRank(int $rank): string
    {
        if(!isset($this->players[$rank - 1])){
            return 'Invalid rank';
        }

        return $this->players[$rank - 1]['name'];
    }
}
