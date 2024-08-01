<?php

class MenuController
{
    public $menuItems;

    public function __construct()
    {
        $this->menuItems = [
            ['url' => '/notes', 'label' => 'Notes'],
            ['url' => '/notes/create', 'label' => 'Add Notes'],
        ];
    }

    public function getMenuItems()
    {
        return $this->menuItems;
    }
}