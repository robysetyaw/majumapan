<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\ItemTrans;

class ItemController extends Controller
{
    public function index()
    {
        $id_barang = ItemTrans::getIdBarang();
        $in = ItemTrans::where('status','in')->sum('weight');
        $out = ItemTrans::where('status','out')->sum('weight');
        $total = $in - $out; 
        return view('items',[
        'title' => 'Item',
        'total' => $total,
        'items' => Item::all()
       ]);
    }

}
