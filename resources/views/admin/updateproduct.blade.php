@extends('admin.maindesign')

<base href="/public">
@section('update_product')

    @if (session('product_updated_message'))
    <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" style="background-color: green; color: white;">
        {{ session('product_updated_message') }}
    </div>

    @endif
    <div class="container-fluid" style="display: flex; flex-direction: column; align-items: center; justify-content: center">
        <form method="POST" action="{{ route('admin.postupdateproduct', $product->id) }}" enctype="multipart/form-data">
            @csrf

            <input type="text" name="product_title" value="{{ $product->product_title }}"><br><br>
            <textarea name="product_description" rows="5" cols="20">{{ $product->product_description }}</textarea><br><br>
            <input type="number" name="product_quantity" value="{{ $product->product_quantity }}"><br><br>
            <input type="number" name="product_price" value="{{ $product->product_price }}"><br><br>

            <img style="width: 100px;" src="{{ asset('products/'.$product->product_image) }}" alt=""><label>Old Image</label>

            <input type="file" name="product_image" value="{{ $product->product_image }}"><label>Add new Image here!</label><br><br>

            <input type="text" name="oldcategory" value="{{ $product->product_category }}"><label>Old Category</label><br><br>

            <select name="product_category">
                <option>{{ $product->product_category }}</option>

                @foreach ($categories as $category)

                <option>{{ $category->category }}</option>

                @endforeach
            </select><label>Select a Category</label><br><br>

            <input type="submit" name="submit" value="Update Product">
        </form>
    </div>
@endsection
