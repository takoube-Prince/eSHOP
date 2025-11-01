@extends('maindesign')

<base href="/public">
@section('product_details')

  <div class="container" style="max-width:1100px; margin:2rem auto; padding:0 1rem;">
    <a href="{{ route('index') }}" style="text-decoration: none; color: blue; font-size: 20px; margin-left: 2rem; margin-bottom: 20px;">Back to Products</a>
    <section class="product" style="display:grid; grid-template-columns:1fr 1fr; gap:2rem; background:white; border-radius:12px; overflow:hidden; box-shadow:0 4px 20px rgba(0,0,0,.08);">

                  <!-- Single Image -->
      <div class="img-box">
        <img style="width:100%; height:100%; object-fit:cover;" src="{{ asset('products/'.$product->product_image) }}">
      </div>

      <!-- Product Details -->
      <div class="details" style="padding:2rem;">
        <h1 style="font-size:1.8rem; margin-bottom:.5rem;">{{ $product->product_title }}</h1>
        <div class="rating" style="color:#f59e0b; margin-bottom:.75rem;">★★★★☆ <small>(4.5 • 128 reviews)</small></div>
        <div class="price" style="font-size:2rem; font-weight:bold; color:#2563eb;">${{ $product->product_price }}</div>

        <p class="desc" style="margin:1.5rem 0; color:#4b5563;">{{ $product->product_description }}</p>

        <div class="actions" style="display:flex; gap:1rem; margin-top:2rem;">
          <a href="" style="text-decoration: none"><button class="btn btn-primary" style="padding:.75rem 1.5rem; border:none; border-radius:8px; font-weight:600; cursor:pointer; flex:1; background:#2563eb; color:white;">Add to Cart</button></a>
        </div>
      </div>

    </section>
  </div>
@endsection
