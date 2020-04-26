<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\User;
use DataTables;

class CustomerController extends Controller
{

    /**
    * Handling DataTables ajax requests
    *
    * @return \Yajra\DataTables\DataTables
    */

    public function index(Request $request){

    	if ($request->ajax()) {
            $data = Customer::OrderBy('name','ASC')->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->editColumn('created_at', function ($d) {
					return $d->created_at->format('d/m/Y');
					})
                    ->make(true);
        }
    	return view('customers');
    }
}
