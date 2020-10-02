<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class ItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $categories = Category::all();

        return view('items.items', [
            'categories' => $categories,
            'current' => 'items'
        ]);
    }

    public function display(){
        $items = Item::all();

        return view('items.itemsDisplay', ['items' => $items]);
    }

    public function show($id){
        $item = Item::where('iid', $id)->firstOrFail();
        $categories = Category::all();

        return view('items.itemsEdit', [
            'item' => $item,
            'categories' => $categories
        ]);
    }

    public function add(){
        $item = new Item();

        $item->iname = request('name');
        $item->iprice = request('price');
        $item->iquantity = request('quantity');
        $item->cid = request('category');
        $item->created_at = now();

        $item->save();
    }

    public function edit(){
        $item = Item::where('iid', request('productID'))->firstOrFail();

        $item->iname = request('name');
        $item->iprice = request('price');
        $item->iquantity = request('quantity');
        $item->cid = request('category');
        $item->updated_at = now();
        
        $item->save();
    }

    public function delete(){
        $item = Item::where('iid', request('productID'))->firstOrFail();
        
        $item->delete();
    }
}
