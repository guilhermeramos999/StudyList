<?php

namespace Uni9\StudyList\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Uni9\StudyList\Entity\StudyItem;
use Uni9\StudyList\Entity\User;
use Uni9\StudyList\Helper\HtmlRender;

class ListItems implements RequestHandlerInterface
{
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = EntityManagerCreator::createEntity();
    }

    use HtmlRender;
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $id = $_SESSION['user_id'];
        $user = $this->entityManager->find(User::class, $id);
        $itemsRepository = $this->entityManager->getRepository(StudyItem::class)->findBy(['user_id' => $id]);

        // var_dump($itemsRepository);
        // exit();

        return new Response(200, [], $this->render('study/list.php', ['items' => $itemsRepository, 'user' => $user, 'pageName' => 'DevEasy - Lista de Items']));
    }
}
