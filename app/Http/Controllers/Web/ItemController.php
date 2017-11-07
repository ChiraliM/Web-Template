<?php

namespace App\Http\Controllers\web;

use App\Data\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view( 'web.items', [
            'items' => $items
        ] );
    }

    public function show( $slug )
    {
        $item = Item::where('slug', '=', $slug)->firstOrFail();

        return view( 'web.items.show' , [
            'item' => $item
        ]);
    }
}
