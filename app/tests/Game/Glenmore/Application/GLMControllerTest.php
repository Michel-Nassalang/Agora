<?php

namespace App\Tests\Game\Glenmore\Application;

use App\Repository\Game\GameUserRepository;
use App\Repository\Game\Glenmore\GameGLMRepository;
use App\Repository\Game\Glenmore\PlayerGLMRepository;
use App\Service\Game\Glenmore\CardGLMService;
use App\Service\Game\Glenmore\DataManagementGLMService;
use App\Service\Game\Glenmore\GLMGameManagerService;
use App\Service\Game\Glenmore\GLMService;
use App\Service\Game\Glenmore\TileGLMService;
use App\Service\Game\Glenmore\WarehouseGLMService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;


class GLMControllerTest extends WebTestCase
{

    private KernelBrowser $client;
    private GameUserRepository$gameUserRepository;

    private PlayerGLMRepository $playerGLMRepository;
    private GLMGameManagerService$GLMGameManagerService;

    private EntityManagerInterface $entityManager;
    private GameGLMRepository $gameGLMRepository;
    private GLMService $GLMService;
    private CardGLMService $cardGLMService;
    private DataManagementGLMService $dataManagementGLMService;
    private TileGLMService $tileGLMService;
    private WarehouseGLMService $warehouseGLMService;

    public function testPlayersHaveAccessToGame(): void
    {
        //GIVEN
        $gameId = $this->initializeGameWithFivePlayers();
        $url = "/game/glenmore/" . $gameId;
        //WHEN
        $this->client->request("GET", $url);
        // THEN
        $this->assertResponseStatusCodeSame(Response::HTTP_OK,
            $this->client->getResponse());
    }

    private function initializeGameWithFivePlayers() : int
    {
        $this->client = static::createClient();
        $this->GLMGameManagerService = static::getContainer()->get(GLMGameManagerService::class);
        $this->gameUserRepository = static::getContainer()->get(GameUserRepository::class);
        $this->playerGLMRepository = static::getContainer()->get(PlayerGLMRepository::class);
        $this->gameGLMRepository = static::getContainer()->get(GameGLMRepository::class);
        $this->entityManager = static::getContainer()->get(EntityManagerInterface::class);
        $this->GLMService = static::getContainer()->get(GLMService::class);
        $this->cardGLMService = static::getContainer()->get(CardGLMService::class);
        $this->dataManagementGLMService = static::getContainer()->get(DataManagementGLMService::class);
        $this->tileGLMService = static::getContainer()->get(TileGLMService::class);
        $this->warehouseGLMService = static::getContainer()->get(WarehouseGLMService::class);
        $user1 = $this->gameUserRepository->findOneByUsername("test0");
        $this->client->loginUser($user1);
        $gameId = $this->GLMGameManagerService->createGame();
        $game = $this->gameGLMRepository->findOneById($gameId);
        $this->GLMGameManagerService->createPlayer("test0", $game);
        $this->GLMGameManagerService->createPlayer("test1", $game);
        $this->GLMGameManagerService->createPlayer("test2", $game);
        $this->GLMGameManagerService->createPlayer("test3", $game);
        $this->GLMGameManagerService->createPlayer("test4", $game);

        try {
            $this->GLMGameManagerService->launchGame($game);
        } catch (\Exception $e) {
            $this->hasFailed();
        }
        return $gameId;
    }

}