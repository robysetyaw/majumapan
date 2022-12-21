<?php

namespace App\Http\Controllers;

use App\Models\ItemTrans;
use App\Http\Requests\StoreItemTransRequest;
use App\Http\Requests\UpdateItemTransRequest;

class ItemTransController extends Controller
{
    public function index()
    {
        return view('itemtrans',[
            'title' => 'Keluar Masuk Barang',
            'itemtrans' => ItemTrans::all()
        ]);
    }
    public function getIdBarang($id_barang)
    {
        return $id_barang = ItemTrans::where('id_barang',$id_barang);
    }
    
}
