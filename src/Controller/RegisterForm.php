<?php

namespace Uni9\StudyList\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Uni9\StudyList\Helper\HtmlRender;

class RegisterForm implements RequestHandlerInterface
{
    use HtmlRender;

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new Response(200, [], $this->render('login/register-form.php',['pageName' => 'DevEasy - Registrar-se']));
    }
}
