<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class TransactionsController extends Controller
{
    public function index(){

        $orders = Order::all();

        return view('transactions.transactions', [
            'orders' => $orders
            ]);
    }

    public function display(){
        $orders = Order::all();

        return view('transactions.transactionsDisplay', [
            'orders' => $orders
            ]);
    }

    public function show($id){

        $order = Order::where('oid', $id)->firstOrFail();

        return view('transactions.transactionsDetails', [
            'order' => $order
            ]);
    }
}
