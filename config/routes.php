<?php

use Uni9\StudyList\Controller\{AuthLogin, AuthRegister, ListItems, LoginForm, ItemManagement, ItemRemove, Logout, RegisterForm, SaveItem, ViewItem};


return [
    '/login' => LoginForm::class,
    '/register' => RegisterForm::class,
    '/authregister' => AuthRegister::class,
    '/authlogin' => AuthLogin::class,
    '/list' => ListItems::class,
    '/item-management' => ItemManagement::class,
    '/saveitem' => SaveItem::class,
    '/item-remove' => ItemRemove::class,
    '/view-item' => ViewItem::class,
    '/logout' => Logout::class
];
