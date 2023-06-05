@extends('client.layout.master')
@section('content')
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>searsh result</h4>
                    <div class="underline mb-4"></div>
                </div>
                @foreach ($searchProduct as $product)
                    <div class="col-md-4 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <img src="{{ $product->image_path }}" alt="">
                                <div class="product-label">
                                    <span class="sale">-30%</span>
                                    <span class="new">NEW</span>
                                </div>
                            </div>
                            <div class="product-body">
                                <p class="product-category"> المادة:{{ $product->category->name }}</p>
                                <h3 class="product-name"><a
                                        href="{{ route('productDetails', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                </h3>
                                <h4 class="product-price">السعر:{{ $product->price }} <del
                                        class="product-old-price">$990.00</del></h4>
                                <div class="product-btns">
                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add
                                            to
                                            wishlist</span></button>
                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                            view</span></button>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
