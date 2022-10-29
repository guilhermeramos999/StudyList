<?php

namespace Uni9\StudyList\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Uni9\StudyList\Entity\User;

class AuthRegister implements RequestHandlerInterface
{
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = EntityManagerCreator::createEntity();
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $name = $request->getParsedBody()['name'];
        $email = $request->getParsedBody()['email'];
        $pass = password_hash($request->getParsedBody()['password'], PASSWORD_DEFAULT);

        $user = new User($name, $email, $pass);
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return new Response(200, ['Location' => '/login']);
    }
}
