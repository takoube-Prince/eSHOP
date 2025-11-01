@extends('admin.maindesign')

@section('add_product')

    @if (session('product_message'))
    <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" style="background-color: green; color: white;">
        {{ session('product_message') }}
    </div>

    @endif
    <div class="container-fluid" style="display: flex; flex-direction: column; align-items: center; justify-content: center">
        <form method="POST" action="{{ route('admin.postaddproduct') }}" enctype="multipart/form-data">
            @csrf

            <input type="text" name="product_title" placeholder="Enter Product Title"><br><br>
            <textarea name="product_description" rows="5" cols="20"></textarea><br><br>
            <input type="number" name="product_quantity" placeholder="Quantity"><br><br>
            <input type="number" name="product_price" placeholder="Enter the price"><br><br>
            <input type="file" name="product_image"><label>Add Image</label><br><br>

            <select name="product_category">
                @foreach ($categories as $category)

                <option>{{ $category->category }}</option>

                @endforeach
            </select><label>Select a Category</label><br><br>

            <input type="submit" name="submit" value="Add Product">
        </form>
    </div>
@endsection
