
@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Brand Name</th>
                <th scope="col">Product Name</th>
                <th scope="col">Category ID</th>
                <th scope="col">Unit ID</th>
                <th scope="col">Retail Price</th>
                <th scope="col">Whole Sale Price</th>
                <th scope="col">Whole Sale Quantity</th>
                <th scope="col">Quantity Stock</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($merchandises as $merchandise)
                    <tr>
                        <td>{{$merchandise->brand_name }}</td>
                        <td>{{$merchandise->product_name }}</td>
                        <td>{{$merchandise->category_id }}</td>
                        <td>{{$merchandise->unit_id }}</td>
                        <td>{{$merchandise->retail_price }}</td>
                        <td>{{$merchandise->wholesale_price }}</td>
                        <td>{{$merchandise->wholesale_qty }}</td>
                        <td>{{$merchandise->qty_stock }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection


