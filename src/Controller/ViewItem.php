<?php

namespace Uni9\StudyList\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Uni9\StudyList\Entity\StudyItem;
use Uni9\StudyList\Helper\HtmlRender;

class ViewItem implements RequestHandlerInterface
{
    use HtmlRender;

    private $entityManager;

    public function __construct()
    {
        $this->entityManager = EntityManagerCreator::createEntity();
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $item = $this->entityManager->find(StudyItem::class, $request->getQueryParams()['id']);

        return new Response(200, [], $this->render('study/view.php', ['item' => $item]));
    }
}
