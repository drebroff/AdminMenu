<?php


namespace Funami\AdminMenu\ViewModel;


use Magento\Framework\App\Arguments\ArgumentInterpreter;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Custom implements ArgumentInterface
{
    public $world = "Hello";
    public function hello () {
        return $this->world;
    }
}
