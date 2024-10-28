<?php
namespace App\Http\Controllers;


class FooterPageController extends Controller
{
    public function help()
    {
        return view('help');  
    }

    public function termeniConditii()
    {
        return view('termeni&conditii'); 
    }
    public function gdpr()
    {
        return view('gdpr');
    }
}
