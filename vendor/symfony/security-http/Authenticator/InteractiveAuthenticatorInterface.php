<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Http\Authenticator;

/**
 * This is an extension of the authenticator interface that may
 * be used by interactive authenticators.
 *
 * Interactive login requires explicit user action (e.g. a login
<<<<<<< HEAD
 * form or HTTP basic authentication). Implementing this interface
 * will dispatch the InteractiveLoginEvent upon successful login.
=======
 * form). Implementing this interface will dispatch the InteractiveLoginEvent
 * upon successful login.
>>>>>>> 2b5a5be8c33b93a2ea2500b9c6aa226dbc5bc939
 *
 * @author Wouter de Jong <wouter@wouterj.nl>
 */
interface InteractiveAuthenticatorInterface extends AuthenticatorInterface
{
    /**
     * Should return true to make this authenticator perform
     * an interactive login.
     */
    public function isInteractive(): bool;
}
