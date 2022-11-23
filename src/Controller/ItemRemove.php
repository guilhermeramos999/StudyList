<?php

namespace Uni9\StudyList\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Uni9\StudyList\Entity\StudyItem;
use Uni9\StudyList\Helper\FlashMessage;

class ItemRemove implements RequestHandlerInterface
{
    use FlashMessage;

    private $entityManager;

    public function __construct()
    {
        $this->entityManager = EntityManagerCreator::createEntity();
    }
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $item = $this->entityManager->find(StudyItem::class, $request->getQueryParams()['id']);

        $this->entityManager->remove($item);
        $this->entityManager->flush();
        $this->defineMessage('Item excluído com sucesso!', 'success');

        return new Response(302, ['Location' => '/list']);
    }
}
