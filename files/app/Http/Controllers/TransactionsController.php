<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class TransactionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $orders = Order::all();

        return view('transactions.transactions', [
            'orders' => $orders,
            'current' => 'transactions',
            'title' => 'Transaction Log'
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

        error_log( Order::where('oid', $id)->first()->items->toSql());

        return view('transactions.transactionsDetails', [
            'order' => $order
        ]);
    }
}
