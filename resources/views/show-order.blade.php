@extends('layouts.custom-app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Show Order') }}</div>

                <div class="card-body">
                    <div>
                        <p><strong>Customer Name :</strong> {{$customer->name}}</p>
                        <p><strong>Customer Email :</strong> {{$customer->email}}</p>
                    </div>
                    <table id="example" class="table table-bordered data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        @if(count($data) > 0)
                        <tbody>
                                @php $i = $subTotal = 0; @endphp
                                @foreach($data as $key => $value)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->price}}</td>
                                    <td>{{$value->quantity}}</td>
                                    <td>{{ $total = $value->price * $value->quantity}}</td>
                                      @php $subTotal = $subTotal + $total  @endphp  
                                </tr>
                                @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4" class="text-right">Subtotal</th>
                                <th>{{$subTotal}}</th>
                            </tr>
                        </tfoot>
                    @else
                        <tr>
                            <td colspan="5" class="text-center">No order avilable.</td>
                            
                        </tr>
                    @endif    
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- external js and css for datatable -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
@endsection