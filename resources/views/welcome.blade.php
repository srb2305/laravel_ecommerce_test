<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .top-right.links{
                background: #e3e3e3;
                padding: 20px;
                border: 1px solid gray;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('customers') }}">Customers</a>
                    <a href="{{ url('products') }}">Products</a>
                    <a href="{{ url('orders') }}">Orders</a>


                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        {{--
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                        --}}
                    @endauth
                </div>
            @endif
        
            <div class="content">
                <div class="title m-b-md">
                    Laravel Test
                </div>
                 <small style="font-size: 30px">[  Saurabh Sahu ] </small>
                <h4>I have covered some points in this test.</h4>
                <ul>
                    <li>Created fresh laravel application : ^7.0</li>
                    <li>Used packages: “yajra/laravel-datatables-oracle”, <br>“silber/bouncer v1.0.0-rc.5”,
                    “spae/laravel-acvitylog”</li>
                    <li>Followed PSR-2 coading style</li>
                    <li>Created Migration</li>
                    <li>Created Seeder</li>
                    <li>Created Dummy Data using factories</li>
                    <li>Created Models</li>
                    <li>Created Diffrent controller</li>
                    <li>Fatch data by laravel DataTables</li>
                    <li>Customer list order by customer-name</li>
                    <li>Order list order by date desc</li>
                    <li>Click on order-view it will show all order details with customer name</li>
                    <li>Call and show data by ajax DataTables</li>
                    <li>Converted date in UK format</li>
                    <li>All data is searching by keyword</li>
                    
                </ul>

            </div>
        </div>
    </body>
</html>
