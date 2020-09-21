<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class CreateOrderController extends Controller
{
    public function index(){

        $items = Item::all();

        return view('order.order', [
            'items' => $items
            ]);
    }

    public function display(){

    }
}
