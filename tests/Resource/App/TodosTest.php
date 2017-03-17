<?php
namespace Polidog\Todo\Resource\App;

use BEAR\Resource\ResourceInterface;
use BEAR\Package\AppInjector;

class TodosTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \BEAR\Resource\ResourceInterface
     */
    private $resource;

    protected function setUp()
    {
        $this->resource = (new AppInjector('Polidog\Todo', 'test-app'))->getInstance(ResourceInterface::class);
    }

    public function testOnPost()
    {
        $page = $this->resource->uri('app://self/todos')(['status' => TODO::COMPLETE]);
        /* @var $page \BEAR\Resource\ResourceObject */
        $this->assertSame(200, $page->code);

        return $page;
    }
}
