<div>
    <div class="row">
        @foreach ($product as $product)
            <div class="col-md-5 col-xl-4 p-b-10 ">
                <!-- Block1 -->
                <div class="block2 wrap-pic-w">
                    <img src="{{ $product->image_path }}" alt="IMG-BANNER">

                    <a href="{{ route('productDetails', ['id' => $product->id]) }}"
                        class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">

                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">

                            </div>
                        </div>
                    </a>

                </div>
                <div class="block2-txt flex-w flex-t p-t-14">
                    <div class="block2-txt-child1 flex-col-l ">
                        <a href="{{ route('productDetails', ['id' => $product->id]) }}"
                            class="mtext-101 cl2 hov-cl1 trans-04">
                            {{ $product->name }}
                        </a>

                        <span class="stext-105 cl3">
                            السعر:{{ $product->price }}
                        </span>
                        <span class="stext-105 cl3">
                            المادة:{{ $product->category->name }}
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

