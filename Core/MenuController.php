<?php

namespace Core;

class MenuController
{
    public $menuItems;

    public function __construct()
    {
        $this->menuItems = [
            ['url' => '/notes', 'label' => 'Notes', 'onlyLoggedIn' => true],
            ['url' => '/notes/create', 'label' => 'Add Notes', 'onlyLoggedIn' => true],
            ['url' => '/register', 'label' => 'Register', 'onlyLoggedIn' => false],
            ['url' => '/login', 'label' => 'Log In', 'onlyLoggedIn' => false],
        ];
    }

    public function getMenuItems()
    {
        return array_filter($this->menuItems, function ($menuItem) {
            return isset($_SESSION['user']) ? $menuItem['onlyLoggedIn'] : !$menuItem['onlyLoggedIn'];
        });
    }
}
