<?php

namespace App\Controller\Game;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @codeCoverageIgnore
 */
class SecurityController extends AbstractController
{
    #[Route(path: '/game/login', name: 'app_game_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('Game/security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route(path: '/game/logout', name: 'app_game_logout')]
    public function logout(): void
    {
        throw new \LogicException(
            'This method can be blank - it will be intercepted by the logout key on your firewall.'
        );
    }
}
