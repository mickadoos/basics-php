<?php

namespace Core;

class MenuController
{
    public $menuItems;

    public function __construct()
    {
        $this->menuItems = [
            ['url' => '/notes', 'label' => 'Notes'],
            ['url' => '/notes/create', 'label' => 'Add Notes'],
            ['url' => '/register', 'label' => 'Register'],
        ];
    }

    public function getMenuItems()
    {
        return $this->menuItems;
    }
}