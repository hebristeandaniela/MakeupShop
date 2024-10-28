<?php
namespace App\Http\Controllers;


class BlogPageController extends Controller
{
    public function blog1()
    {
        return view('blog1');
    }

    public function blog2()
    {
        return view('blog2');
    }
    public function blog3()
    {
        return view('blog3');
    }
}
