<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        $codingFrom = 2017;

        $navs = [
            'Home' => [
                'fa' => 'fa-home',
            ],
            'About me' => [
                'fa' => 'fa-info',
            ],
            'Contact me' => [
                'fa' => 'fa-address-book',
            ],
            'My Skill' => [
                'fa' => 'fa-cogs',
            ],
            'Projects (coming soon)' => [
                'fa' => 'fa-folder',
            ],
            'Chat me' => [
                'fa' => 'fa-envelope',
            ],
        ];

        $contacts = [

        ];

        $skills = [
            "Laravel" => 70,
            "PHP" => 70,
            "HTML" => 75,
            "CSS" => 75,
            "Javascript" => 75,
            "JQuery" => 50,
        ];

        return view('welcome')->with([
            'codingFrom' => $codingFrom,
            'navs' => $navs,
            'contacts' => $contacts,
            'skills' => $skills
        ]);
    }
}
