<?php

namespace Uni9\StudyList\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Uni9\StudyList\Entity\User;

class AuthLogin implements RequestHandlerInterface
{
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
            $_SESSION['message'] = "E-mail ou senha inválida.";
            return new Response(302, ['Location' => '/login']);
        }

        $_SESSION['logged'] = true;
        $_SESSION['user_id'] = $user->id;

        return new Response(302, ['Location' => '/list']);
    }
}
