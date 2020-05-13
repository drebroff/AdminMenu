<?php


namespace Funami\AdminMenu\Model;


use Funami\AdminMenu\Api\FuCollisionInterface;

class FuCollisionClass implements FuCollisionInterface
{
//    public $someText;
//    public function __construct(string $someText)
//    {
//        $this->someText = $someText;
//    }

    public $world = "Collision";
    public function hello () {
        return $this->world;
    }
}
