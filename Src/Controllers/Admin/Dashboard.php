<?php

namespace Src\Controllers\Admin;

use Src\Controllers\Controller;
use Src\Helpers\Session;

class Dashboard extends Controller
{
    public function __construct()
    {
        Session::auth();
    }

    public function home()
    {
        $this->load('admin/dashboard', [
            'title' => 'Dashboard',
        ]);
    }
}