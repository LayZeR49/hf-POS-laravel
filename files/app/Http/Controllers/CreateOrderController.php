<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\CurrentOrder;
use Illuminate\Support\Facades\DB;

class CreateOrderController extends Controller
{
    private $total = 0;

    public function __construct(){

        $this->middleware('auth');

        $cart = CurrentOrder::all();
        foreach ($cart as $cartItem) {
            $this->total = $this->total + ($cartItem->iqty * $cartItem->item->iprice);
        }   
    }

    public function index(){

        $items = Item::all();
  
        return view('order.order', [
            'items' => $items
        ]);
    }

    public function display(){
        $cart = CurrentOrder::all();

        return view('order.orderDisplay', [
            'cart' => $cart,
            'total' => $this->total,
            'isList' => false
        ]);
    }

    public function list(){
        $cart = CurrentOrder::all();

        return view('order.orderDisplay', [
            'cart' => $cart,
            'total' => $this->total,
            'isList' => true
        ]);
    }

    public function add(){
        $cartItem = new CurrentOrder();

        $cartItem->iid = request('product');
        $cartItem->iqty = request('quantity');

        $cartItem->save();
    }

    public function delete($id){
        $cartItem = CurrentOrder::where('coid', $id)->firstOrFail();

        $cartItem->delete();
    }

    public function clear(){
        CurrentOrder::truncate();
    }

    public function order(){
        $cart = CurrentOrder::all();
        

        $statement = DB::select("SHOW TABLE STATUS LIKE 'order'");
        $nextId = $statement[0]->Auto_increment;

        $order = new Order();
        $order->ototal = $this->total;
        $order->save();

        foreach($cart as $cartItem) {
            $orderdetail = new OrderDetail();

            $orderdetail->oid = $nextId;
            $orderdetail->iid = $cartItem->iid;
            $orderdetail->iqty = $cartItem->iqty;

            $orderdetail->save();
        }

        

        CurrentOrder::truncate();
    }

}
