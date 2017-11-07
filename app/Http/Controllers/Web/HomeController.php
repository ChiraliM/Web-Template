<?php

namespace App\Http\Controllers\Web;

use App\Data\Models\Item;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computers  = Item::where('category', '=', 'computer')->get();
        $phones     = Item::where('category', '=', 'phone')->get();
        $television = Item::where('category', '=', 'television')->get();
        return view( 'web.home', [
            'response' => [
                'Computers'  => $computers,
                'Phones'     => $phones,
                'Television' => $television
            ]
        ]);
    }
}
