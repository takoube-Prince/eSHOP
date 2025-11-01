@extends('admin.maindesign')

@section('view_product')

@if (session(''))

    <div style="width: 100%; border-collapse: collapse; font-family: Arial, sans-serif; background-color: red; color: white; padding-bottom: 12px; margin-bottom: 12px;">
        {{ session('') }}
    </div>

@endif

    <div>
        <form action="{{ route('admin.searchproduct')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
            </div>
        </form>
    </div>

    <table style="width:100%; border-collapse: collapse; font-family: Arial, sans-serif;">
        <thead>
            <tr style="background-color: #f2f2f2">
                <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Product Title</th>
                <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Product Description</th>
                <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Product Quantity</th>
                <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Product Price</th>
                <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Product Image</th>
                <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Product Category</th>
                <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $products as $product )

            <tr style="border-bottom: 1px solid #ddd">
                <td style="padding: 12px;">{{ $product->product_title }}</td>
                <td style="padding: 12px;">{{ Str::limit($product->product_description, 20, '...')}}</td>
                <td style="padding: 12px;">{{ $product->product_quantity }}</td>
                <td style="padding: 12px;">{{ $product->product_price }}</td>

                <td style="padding: 12px;">
                    <img style="width: 150px;" src="{{ asset('products/'.$product->product_image) }}">
                </td>

                <td style="padding: 12px;">{{ $product->product_category }}</td>
                <td style="padding: 12px;">
                    <a style="color:green;" href="{{ route('admin.productupdate', $product->id) }}">Update</a>
                    <a href="{{ route('admin.productdelete', $product->id) }}" onclick="return confirm('Do you really want to delete?')">Delete</a>
                </td>
            </tr>

            @endforeach

            {{ $products->links() }}
        </tbody>
    </table>

@endsection
