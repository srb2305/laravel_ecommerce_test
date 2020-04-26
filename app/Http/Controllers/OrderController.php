<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;
use App\Product;
use App\Customer;
use DataTables;
use DB;

class OrderController extends Controller
{
    /**
    * Handling DataTables ajax requests
    *
    * @return \Yajra\DataTables\DataTables
    */
    
    public function index(Request $request){

    	if ($request->ajax()) {
            $data = Order::leftJoin('customers','orders.customer_id','customers.id')
            ->select(['customers.name','orders.*'])
            ->OrderBy('id','DESC')->get();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->editColumn('created_at', function ($d) {
                    return $d->created_at->format('d/m/Y');
                    })
                    ->addColumn('action', function($row){
   
                        $btn = '<a href="orders/'.$row->id.'" class="view btn btn-primary btn-sm">View</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
    	return view('orders');
    }

    public function show($id){
        $data = OrderItem::where('order_id',$id)
                ->leftJoin('products','order_items.product_id','products.id')
                ->select('products.name','products.price','order_items.quantity')
                ->get();
        $order = Order::find($id);
        $customerId = $order->customer_id;
        $customer = Customer::find($customerId);
        activity()->log('“XY(logged in '.$customer->name.')processed the order: ['.$id.']”');
        return view('show-order',compact('data','customer'));
    }
}
