<?php

namespace App\Service\Game;

use App\Entity\Game\SixQP\DiscardSixQP;
use App\Entity\Game\SixQP\GameSixQP;
use App\Entity\Game\SixQP\PlayerSixQP;
use App\Entity\Game\SixQP\RowSixQP;
use App\Repository\Game\PlayerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Component\Security\Core\User\UserInterface;

class GameService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * createSixQPGame : create a six q p game with all the players in
     * @param array $players players to add in the game
     * @throws Exception if invalid number of player
     */
    public function createSixQPGame(array $players): GameSixQP
    {
        $numberOfPlayer = count($players);
        if (2 > $numberOfPlayer || $numberOfPlayer > 10) {
            throw new Exception("Invalid number of player");
        }

        $game = new GameSixQP();
        for($i = 0; $i < RowSixQP::$NUMBER_OF_ROWS_BY_GAME; $i++) {
            $row = new RowSixQP();
            $row->setPosition($i);
            $game->addRowSixQP($row);
            $this->entityManager->persist($row);
        }

        $this->entityManager->persist($game);

        for ($i = 0; $i < $numberOfPlayer; $i ++) {
            $this->createPlayer("Player".($i+1), $game); //TODO: set the name of the player
        }

        $this->entityManager->persist($game);
        $this->entityManager->flush();

        //TODO: initialize the round with SixQPService

        return $game;
    }

    public function getPlayerFromUser(?UserInterface $user,
        int $gameId,
        PlayerRepository $playerRepository): ?PlayerSixQP
    {
        if ($user == null) {
            return null;
        }
        $id = $user->getId(); //TODO : add platform user

        return $playerRepository->findOneBy(['id' => $id, 'game' => $gameId]);
    }

    /**
     * createPlayer : create a player and save him in the database
     * @param string $playerName the name of the player to create
     * @param GameSixQP $game the game of the player
     * @return void
     */
    private function createPlayer(string $playerName, GameSixQP $game): void
    {
        $player = new PlayerSixQP($playerName, $game);
        $discard = new DiscardSixQP($player, $game);
        $player->setDiscardSixQP($discard);
        $game->addPlayerSixQP($player);
        $this->entityManager->persist($player);
        $this->entityManager->persist($discard);
        $this->entityManager->flush();
    }

}