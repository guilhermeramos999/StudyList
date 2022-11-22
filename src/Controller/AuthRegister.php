<?php

namespace Uni9\StudyList\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Uni9\StudyList\Entity\User;
use Uni9\StudyList\Helper\FlashMessage;

class AuthRegister implements RequestHandlerInterface
{
    use FlashMessage;
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = EntityManagerCreator::createEntity();
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        if (!is_null($this->entityManager->getRepository(User::class)->findOneBy(['email' => $request->getParsedBody()['email']]))) {
            $this->defineMessage('E-mail já cadastrado na aplicação.', 'danger');
            return new Response(302, ['Location' => '/register']);
        }

        $name = $request->getParsedBody()['name'];
        $email = $request->getParsedBody()['email'];
        $pass = password_hash($request->getParsedBody()['password'], PASSWORD_DEFAULT);

        $user = new User($name, $email, $pass);
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $this->defineMessage('Cadastro realizado com sucesso, por gentileza realizar o login.', 'success');

        return new Response(302, ['Location' => '/login']);
    }
}
