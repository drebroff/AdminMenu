<?php


namespace Funami\AdminMenu\ViewModel;


use Funami\AdminMenu\Api\FuCollisionInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Funami\AdminMenu\Model\FuHelloClass;

class Custom implements ArgumentInterface
{
    protected $collisionStory;
    public $helloClass;
    public function __construct(FuHelloClass $helloClass, FuCollisionInterface $collisionStory)
    {
        $this->collisionStory = $collisionStory;
        $this->helloClass = $helloClass;
    }

    public $world = "Hello";
    public function hello () {
        return $this->world . ' ' . $this->helloClass->hello() . ' ' . $this->collisionStory->hello();
    }
}
