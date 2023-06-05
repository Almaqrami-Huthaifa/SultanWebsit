<div>
    <div class="rew">
        @foreach ($product as $product)
            <div class="col-md-4 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="{{ $product->image_path }}" alt="{{ $product->name }}">
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
                            <button  class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to
                                    wishlist</span></button>

                        </div>
                    </div>
                    <div class="wrap-num-product flex-w m-l-auto m-r-0">
                        <span class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" wire:click="decrement">
                            <i class="fs-16 zmdi zmdi-minus"></i>
                        </span>

                        <input class="mtext-104 cl3 txt-center num-product" wire:model="QuantityC" type="text"  value="{{ $this->QuantityC }}"/>

                        <span class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m" wire:click="increment">
                            <i class="fs-16 zmdi zmdi-plus"></i>
                        </span>
                    </div>

                    <div class="add-to-cart">
                        <button type="button" wier:click="AddToCart({{$product->id}})" class="add-to-cart-btn">
                            <i class="fa fa-shopping-cart"></i> add to cart
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
