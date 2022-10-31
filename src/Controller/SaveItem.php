<?php

namespace Uni9\StudyList\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Uni9\StudyList\Entity\StudyItem;
use Uni9\StudyList\Helper\FlashMessage;

class SaveItem implements RequestHandlerInterface
{
    use FlashMessage;

    private $entityManager;
    public function __construct()
    {
        $this->entityManager = EntityManagerCreator::createEntity();
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $user_id = $_SESSION['user_id'];

        if (!isset($request->getQueryParams()['id'])) {
            $item = new StudyItem(
                $user_id,
                htmlspecialchars($request->getParsedBody()['name'], ENT_QUOTES),
                htmlspecialchars($request->getParsedBody()['description'], ENT_QUOTES),
                str_replace('/watch?v=', "/embed/", $request->getParsedBody()['video'])
            );

            $this->defineMessage('Item cadastrado com sucesso!', 'success');
        } else {
            $item = $this->entityManager->find(StudyItem::class, $request->getQueryParams()['id']);
            
            $item->name = htmlspecialchars($request->getParsedBody()['name'], ENT_QUOTES);
            $item->description = htmlspecialchars($request->getParsedBody()['description'], ENT_QUOTES);
            $item->video = str_replace('/watch?v=', "/embed/", $request->getParsedBody()['video']);

            $this->defineMessage('Item alterado com sucesso!', 'success');
        }

        $this->entityManager->persist($item);
        $this->entityManager->flush();

        return new Response(302, ['Location' => '/list']);
    }
}
