<?php

namespace App\Http\Controllers\web;

use App\Data\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $items = Item::all();
        return view( 'web.items.index', [
            'items' => $items
        ] );
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show( $slug )
    {
        $item = Item::where('slug', '=', $slug)->firstOrFail();

        return view( 'web.items.show' , [
            'item' => $item
        ]);
    }
}
