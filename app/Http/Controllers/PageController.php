<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function display_page1() {
        $name = "Marcus M. Bruno";
        $section = "4-2";

        return view('page1')->with(compact('name', 'section'));
    }

    public function display_page2() {
        $quote = "Tatagos ka ba sah?";
        $response = "Omsimm";

        return view('page2')->with(compact('quote', 'response'));
    }

}
