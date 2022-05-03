<?php
namespace Controller;

use Src\View;

class Site
{
    public function index(): string
    {
        $view = new View();
        return $view->render('site.hello', ['massage' => 'index is dead']);
    }

    public function hello(): string
    {
        return new View('site.hello', ['massage' => 'hello is dead']);
    }
}
