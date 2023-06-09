@extends('client.layout.master')
@section('content')
    <section class="section-slide">
        <div class="wrap-slick1 rs1-slick1">
            <div class="slick1">
                @foreach ($product as $product)
                    <div class="item-slick1" style="background-image: url({{ $product->image_path }});">
                        <div class="container h-full">
                            <div class="flex-col-l-m h-full p-t-100 p-b-30">
                                <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                                    <span class="ltext-202 cl2 respon2">
                                        المادة:{{ $product->category->name }}
                                    </span>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                    <h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
                                        {{ $product->name }}
                                    </h2>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                    <a href="{{ route('productDetails', ['id' => $product->id]) }}"
                                        class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Banner -->
    <div class="sec-banner bg0">
        <div class="flex-w flex-c-m">
            <div class="size-202 m-lr-auto respon4">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="{{ asset('client/images/banner-04.jpg') }}" alt="IMG-BANNER">

                    <a href="{{ route('bestSall') }}"
                        class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                الاكثر مبيعاً
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                Spring 2018
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Shop Now
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="size-202 m-lr-auto respon4">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="{{ asset('client/images/banner-05.jpg') }}" alt="IMG-BANNER">

                    <a href="{{ route('offers') }}"
                        class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                العروض والتخقيضات
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                Spring 2018
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Shop Now
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="size-202 m-lr-auto respon4">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="{{ asset('client/images/banner-06.jpg') }}" alt="IMG-BANNER">

                    <a href="{{ route('favoriet') }}"
                        class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                المفضلات
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                New Trend
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Shop Now
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Product -->
    <section class="sec-product bg0 p-t-100 p-b-50">

        <div class="container">
            <div class="p-b-32">
                <h3 class="ltext-105 cl5 txt-center respon1">
                    products Overview
                </h3>
            </div>
            <!-- Tab01 -->
            <div class="tab01">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item p-b-10">
                        <a href="#">All products</a>
                    </li>
                    @foreach ($allcategories as $category)
                        <li class="nav-item p-b-10">
                            <a href="{{ route('Catproducts', ['id' => $category->id]) }}" class="nav-link active"
                                data-toggle="{{ $category->name }}" role="tab">{{ $category->name }} </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
            <!-- Tab panes -->

            <div class="tab-content p-t-50">
                <div class="sec-banner bg0 p-t-80 p-b-50">
                    <div class="container">
                        <div class="row">
                            @foreach ($allmaterials as $material)
                                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                                    <!-- Block1 -->
                                    <div class="block1 wrap-pic-w">
                                        <img src="{{ $material->image_path }}" alt="IMG-BANNER">

                                        <a href="{{ route('categories', ['id' => $material->id]) }}"
                                            class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                            <div class="block1-txt-child1 flex-col-l">
                                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                                    {{ $material->name }}
                                                </span>
                                            </div>

                                            <div class="block1-txt-child2 p-b-4 trans-05">
                                                <div class="block1-link stext-101 cl0 trans-09">

                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

        </div>
        </div>

    </section>



    <!-- Blog -->
    <section class="sec-blog bg0 p-t-60 p-b-90">
        <div class="container">
            <div class="p-b-66">
                <h3 class="ltext-105 cl5 txt-center respon1">
                    Our Stores
                </h3>
            </div>

            <div class="row">
                @foreach ($store as $stors)
                    <div class="col-sm-6 col-md-4 p-b-40">
                        <div class="blog-item">
                            <div class="hov-img0">

                                <img src="{{ $stors->image_path }}" alt="IMG-BLOG">
                                </a>
                            </div>

                            <div class="p-t-15">

                                <h4 class="p-b-12">
                                    <a href="{{ route('storedetails', ['id' => $stors->id]) }}"
                                        class="mtext-101 cl2 hov-cl1 trans-04">
                                        {{ $stors->name }}
                                    </a>
                                </h4>

                                <p class="stext-108 cl6">
                                    {{ $stors->discreptin }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
