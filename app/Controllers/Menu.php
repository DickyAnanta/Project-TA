<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Menu extends BaseController
{
    // koneksi db
    protected $menu;
    public function __construct() 
    {
        $this->menu = new MenuModel();
    }

    public function index()
    {
        $menu = $this->menu->findAll();
        $data = [
            'menu' => $menu
        ];
        return view('/menu/menu_view', $data);
    }
}
