<?php


namespace Funami\AdminMenu\Model;


use Funami\AdminMenu\Api\FuCollisionInterface;

class FuHelloClass
{
    public $someText;
    public function __construct(string $someText)
    {
        $this->someText = $someText;
    }

    public $world = "World";
    public function hello () {
        return $this->world . ' ' . $this->someText;
    }
}
