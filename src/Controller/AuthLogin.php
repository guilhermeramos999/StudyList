<?php

namespace Uni9\StudyList\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Uni9\StudyList\Entity\User;
use Uni9\StudyList\Helper\FlashMessage;

class AuthLogin implements RequestHandlerInterface
{
    use FlashMessage;

    private $entityManager;

    public function __construct()
    {
        $this->entityManager = EntityManagerCreator::createEntity();
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $email = $request->getParsedBody()['email'];
        $pass = $request->getParsedBody()['password'];

        /** @var User $user */
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]);

        if (is_null($user) || !$user->verifyPassword($pass)) {
            $this->defineMessage('E-mail ou senha inválida.', 'danger');
            return new Response(302, ['Location' => '/login']);
        }

        $_SESSION['logged'] = true;
        $_SESSION['user_id'] = $user->id;

        return new Response(302, ['Location' => '/list']);
    }
}
