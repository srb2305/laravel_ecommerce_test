<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DataTables;

class ProductController extends Controller
{
    /**
    * Handling DataTables ajax requests
    *
    * @return \Yajra\DataTables\DataTables
    */
    
    public function index(Request $request){
    	 if ($request->ajax()) {
            $data = Product::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->editColumn('in_stock', function ($d) {
					return ($d->in_stock == 1) ? 'In Stock' : 'Out Of Stock';
					})
                    ->make(true);
        }
    	return view('products');
    }
}
