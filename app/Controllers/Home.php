<?php

namespace App\Controllers;

use App\Models\newmodel;
use CodeIgniter\Model;

class Home extends BaseController
{
    protected $session;
    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function index()
    {
        return view('my_view/index');
    }
    
    public function insert()
    {
        return view('my_view/insert');
    }
}
