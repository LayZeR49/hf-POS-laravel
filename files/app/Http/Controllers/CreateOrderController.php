<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\CurrentOrder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
        $cart = CurrentOrder::all();
  
        return view('order.order', [
            'items' => $items,
            'current' => 'order',
            'title' => 'Order Creation'
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
        $iid = request('product');

        $input = array('iid' => $iid);
        $rules = array(
            'iid' => 'unique:currentorder,iid'
        );

        $validator = Validator::make($input,$rules);

        if($validator->passes())
        {
            $cartItem = new CurrentOrder();

            $cartItem->iid = $iid;
            $cartItem->iqty = request('quantity');
            $cartItem->created_at = now();
        } 
        else 
        {
            $cartItem = CurrentOrder::where('iid', $iid)->firstOrFail();
            $cartItem->iqty = $cartItem->iqty + request('quantity');
            $cartItem->updated_at = now();
        }

        $cartItem->save();

        return $cartItem;
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

        if(!$cart->isEmpty()) {
            $statement = DB::select("SHOW TABLE STATUS LIKE 'order'");
            $nextId = $statement[0]->Auto_increment;

            $order = new Order();
            $order->ototal = $this->total;
            $order->created_at = now();
            $order->save();

            foreach($cart as $cartItem) {
                $orderdetail = new OrderDetail();

                $orderdetail->oid = $nextId;
                $orderdetail->iid = $cartItem->iid;
                $orderdetail->iqty = $cartItem->iqty;
                $orderdetail->created_at = now();

                $orderdetail->save();

                //$item = Item::where('iid', $cartItem->iid)->firstOrFail();
                //$item->iquantity = $item->iquantity - $cartItem->iqty;
                
                $cartItem->item->iquantity = $cartItem->item->iquantity - $cartItem->iqty;

                $cartItem->item->save();
            }

            CurrentOrder::truncate();
        }
        else {
            return "empty";
        }
        
    }

}
