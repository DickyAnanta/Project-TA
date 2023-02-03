<?php

namespace App\Controllers;

class Menu extends BaseController
{
    public function index()
    {
        return view('/menu/menu_view');
    }
}
