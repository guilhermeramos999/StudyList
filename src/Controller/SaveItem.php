<?php

namespace Uni9\StudyList\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Uni9\StudyList\Entity\StudyItem;

class SaveItem implements RequestHandlerInterface
{
    private $entityManager;
    public function __construct()
    {
        $this->entityManager = EntityManagerCreator::createEntity();
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $user_id = $_SESSION['user_id'];

        if (!isset($request->getQueryParams()['id'])) {
            $item = new StudyItem($user_id, $request->getParsedBody()['name'], $request->getParsedBody()['description'], str_replace('/watch?v=', "/embed/", $request->getParsedBody()['video']));
        } else {
            $item = $this->entityManager->find(StudyItem::class, $request->getQueryParams()['id']);
            $item->name = $request->getParsedBody()['name'];
            $item->description = $request->getParsedBody()['description'];
            $item->video = str_replace('/watch?v=', "/embed/", $request->getParsedBody()['video']);
        }

        $this->entityManager->persist($item);
        $this->entityManager->flush();
        
        return new Response(302, ['Location' => '/list']);
    }
}
