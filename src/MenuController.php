<?php

class MenuController
{
    public $menuItems;

    public function __construct()
    {
        $this->menuItems = [
            ['url' => '/', 'label' => 'To Do List'],
            ['url' => '/meals', 'label' => 'Meals'],
            ['url' => '/products', 'label' => 'Products'],
            ['url' => '/notes', 'label' => 'Notes'],
            ['url' => '/notes/create', 'label' => 'Add Notes'],
        ];
    }

    public function getMenuItems()
    {
        return $this->menuItems;
    }
}