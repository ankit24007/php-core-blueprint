<?php
namespace App\Controllers;
use App\Core\App;

class PagesController
{
    public function home()
    {
        $products = App::get('database')->selectAll('products');
        return view('index', compact('products'));
    }

    public function about()
    {
        die('about');
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
