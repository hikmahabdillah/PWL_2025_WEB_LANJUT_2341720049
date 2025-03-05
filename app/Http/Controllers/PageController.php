<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return '2341720049 | Hikmah Aldrin Abdillah';
    }
    public function articles($id)
    {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
