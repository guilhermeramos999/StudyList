# StudyList

O objetivo do projeto é permitir ao estudante de tecnologia a organização dos tópicos de estudo, artigos e vídeos que possam lhe auxiliar.  

> #### Requisitos:  
> 
> - PHP 8.1
> - Composer
> 
> Observação: No arquivo `php.ini` dentro da pasta do PHP, habilitar o driver **pdo_sqlite**.

## Setup  

Para instalar todas as dependências, utilize apenas o comando `composer install` na pasta raiz do projeto.

> #### Dependências utilizadas:  
>
> - Doctrine/Orm `2.13`
> - Psr/Http-Message `1.0`
> - Nyholm/Psr7 `1.5`
> - Nyholm/Psr7-Server `1.0`
> - Psr/Http-Server-Handler `1.0`
> - Symfony/Cache `6.1`

## Iniciando  

Para utilizar o próprio servidor do PHP, execute o comando `php -S localhost:8080 -t public` (A porta **8080** pode ser alterada se necessário.)

Acesse o link (http://localhost:8080/) e você será direcionado para a tela de login, basta realizar o cadastro na aplicação e após isto, realizar o login.
