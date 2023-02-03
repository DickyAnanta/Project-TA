<?php

namespace App\Controllers;

class Keuangan extends BaseController
{
    public function index()
    {
        return view('/keuangan/keuangan_view');
    }
}
