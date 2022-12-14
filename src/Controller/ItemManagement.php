<?php

namespace Uni9\StudyList\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Uni9\StudyList\Entity\StudyItem;
use Uni9\StudyList\Entity\User;
use Uni9\StudyList\Helper\HtmlRender;

class ItemManagement implements RequestHandlerInterface
{
    use HtmlRender;

    private $entityManager;

    public function __construct()
    {
        $this->entityManager = EntityManagerCreator::createEntity();
    }


    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        if (isset($request->getQueryParams()['id'])) {
            $item = $this->entityManager->find(StudyItem::class, $request->getQueryParams()['id']);
            $pageName = 'Edição de Item';
        } else {
            $item = null;
            $pageName = 'Novo Item';
        }

        $user = $this->entityManager->find(User::class, $_SESSION['user_id']);

        return new Response(200, [], $this->render('study/form.php', ['item' => $item, 'user' => $user,'pageName' => 'DevEasy - ' . $pageName]));
    }
}
