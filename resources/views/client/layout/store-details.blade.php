@extends('client.layout.master')
@section('content')
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="{{ route('clientHome') }}" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <a href="{{ route('stores') }}" class="stext-109 cl8 hov-cl1 trans-04">
                stores
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                {{ $store->name }}
            </span>
        </div>
    </div>


    <!-- Content page -->
    <section class="bg0 p-t-52 p-b-20">
        <div class="container">
            <div class="row">
                @csrf
                <input type="hidden" name="id" value="{{ $store->id }}" />
                    <div class="col-md-8 col-lg-9 p-b-80">
                        <div class="p-r-45 p-r-0-lg">
                            <!--  -->
                            <div class="wrap-pic-w how-pos5-parent">
                                <img src="{{ $store->image_path }}" alt="IMG-BLOG">


                            </div>

                            <div class="p-t-32">
                                <h4 class="ltext-109 cl2 p-b-28" >
                                    {{ $store->name }}
                                </h4>

                                <p class="stext-117 cl6 p-b-26">
                                    {{ $store->discreptin }}
                                </p>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
