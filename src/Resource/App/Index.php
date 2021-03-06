<?php
namespace Polidog\Todo\Resource\App;

use BEAR\Resource\ResourceObject;

class Index extends ResourceObject
{
    public $body = [
        'message' => 'Welcome to the Polidog.Todo API ! Our hope is to be as self-documenting and RESTful as possible.',
        '_links' => [
            'self' => [
                'href' => '/',
            ],
            'curies' => [
                'href' => 'rels/{rel}.html',
                'name' => 'pt',
                'templated' => true
            ],
            'pt:todo' => [
                'href' => '/todo/{id}',
                'title' => 'todo item',
                'templated' => true
            ],
            'pt:todos' => [
                'href' => '/todos',
                'title' => 'todo list'
            ]
        ]
    ];

    public function onGet()
    {
        return $this;
    }
}
